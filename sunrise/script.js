const { PI, random, min } = Math;
const canvas = document.querySelector("canvas.sunrise");
const ctx = canvas.getContext("2d");
const ctxBackdrop = document.querySelector("canvas.backdrop").getContext("2d");
const { width, height } = canvas.getBoundingClientRect();
const center = { x: width / 2, y: height / 2 };
let currentFrame = 0;
let glow_enabled = true;
let filter_enabled = true;

const inputs = document
  .querySelectorAll("input[type='checkbox']")
  .forEach((input) => {
    input.addEventListener("change", (e) => {
      switch (e.target.id) {
        case "glow_enabled":
          glow_enabled = e.target.checked;
          draw(currentFrame);
          break;
        case "filter_enabled":
          filter_enabled = e.target.checked;
          draw(currentFrame);
          break;
      }
    });
  });

document.querySelector("input[type='range']").addEventListener("input", (e) => {
  requestAnimationFrame(() => {
    currentFrame = e.target.value;
    draw(currentFrame);
  });
});

function createRandom() {
  var numbers = [];
  return function r(i) {
    if (numbers.length >= i) {
      return numbers[i];
    } else {
      let n = random();
      numbers.push(n);
      return n;
    }
  };
}

const random2 = createRandom();

function drawStars(ctx) {
  ctx.fillStyle = "white";
  for (let i = 0; i < 1000; i++) {
    ctx.globalAlpha = random2(i) * 0.5;
    ctx.fillRect(
      random2(i + 1) * width,
      random2(i + 2) * height,
      random2(i + 3) * 2,
      random2(i + 4) * 2
    );
  }

  return ctx;
}

function drawSky(color) {
  return (ctx) => {
    ctx.fillStyle = color;
    ctx.fillRect(0, 0, width, height);

    return ctx;
  };
}

function drawForeground(color) {
  return (ctx) => {
    ctx.fillStyle = color;
    ctx.fillRect(0, center.y + 100, width, height);

    return ctx;
  };
}

function drawCircle(x, y, radius, ctx) {
  return (ctx) => {
    ctx.fillStyle = "white";

    ctx.beginPath();
    ctx.arc(x, y, radius, 0, 2 * PI);

    ctx.fill();

    return ctx;
  };
}

const ad = {
  colors: {
    night: {
      sky: "#000700",
      foreground: "#000A00"
    },
    day: {
      sky: "skyblue"
    },
    glow: "orange"
  },
  duration: 10000,
  keyframes: {
    brightness: {
      start: 0,
      end: 1
    },
    sun: {
      position: {
        start: { x: center.x, y: center.y + 100 },
        end: { x: center.x, y: center.y - 150 }
      },
      radius: {
        start: 100,
        end: 75
      }
    }
  }
};

function linear(totalTime, currentTime) {
  return (start, end) => (currentTime / totalTime) * (end - start) + start;
}

const ei = (t) => t * t;

function easeIn(totalTime, currentTime) {
  return (start, end) => ei(currentTime / totalTime) * (end - start) + start;
}

function save(ctx) {
  ctx.save();
  return ctx;
}

function restore(ctx) {
  ctx.restore();
  return ctx;
}

function reset(ctx) {
  ctx.restore();
  ctx.save();
  return ctx;
}

function pipe(...fns) {
  return (val) => fns.reduce((val, fn) => fn(val), val);
}

function opacity(value) {
  return (ctx) => {
    ctx.globalAlpha = value;
    return ctx;
  };
}

function glow(amount, color) {
  return (ctx) => {
    if (!glow_enabled) return ctx;
    ctx.shadowBlur = amount;
    ctx.shadowColor = color;
    return ctx;
  };
}

function overlay(color, opacity) {
  return (ctx) => {
    ctx.globalAlpha = opacity;
    ctx.fillStyle = color;
    ctx.fillRect(0, 0, width, height);
    return ctx;
  };
}

function filter(value) {
  return (ctx) => {
    if (!filter_enabled) return ctx;
    ctx.filter = value;
    return ctx;
  };
}

function drawScene(t, ctx) {
  const l = linear(ad.duration, t % ad.duration);
  const ei = easeIn(ad.duration, t % ad.duration);

  pipe(
    reset,
    // Backdrop
    drawSky(ad.colors.night.sky),
    reset,
    // Stars
    drawStars,
    // Sky
    overlay(
      "lightblue",
      ei(ad.keyframes.brightness.start, ad.keyframes.brightness.end)
    ),
    reset,
    // Sun
    glow(ei(100, 100), ad.colors.glow),
    filter(`blur(${l(100, 200)}px)`),
    drawCircle(
      ei(ad.keyframes.sun.position.start.x, ad.keyframes.sun.position.end.x),
      ei(ad.keyframes.sun.position.start.y, ad.keyframes.sun.position.end.y),
      ei(ad.keyframes.sun.radius.start, ad.keyframes.sun.radius.end),
      0
    ),
    reset,
    filter(`blur(${l(100, 0)}px)`),
    drawCircle(
      ei(ad.keyframes.sun.position.start.x, ad.keyframes.sun.position.end.x),
      ei(ad.keyframes.sun.position.start.y, ad.keyframes.sun.position.end.y),
      ei(ad.keyframes.sun.radius.start, ad.keyframes.sun.radius.end),
      0
    ),
    reset,
    filter(`blur(${l(10, 5)}px)`),
    glow(l(100, 100), ad.colors.glow),
    drawCircle(
      ei(ad.keyframes.sun.position.start.x, ad.keyframes.sun.position.end.x),
      ei(ad.keyframes.sun.position.start.y, ad.keyframes.sun.position.end.y),
      ei(ad.keyframes.sun.radius.start, ad.keyframes.sun.radius.end),
      0
    ),
    reset,
    // Foreground
    glow(ei(10000, 100), ad.colors.glow),
    drawForeground(ad.colors.night.foreground),
    reset,
    opacity(ei(0, 1)),
    drawForeground(ad.colors.day.sky),
    reset,
    overlay("yellow", l(0, 0.1))
  )(ctx);
}

function draw(t) {
  drawScene(t, ctx);
  reset(ctx);

  // Reflection
  ctx.clearRect(0, 400, 800, 200);
  ctx.translate(800, 680);
  ctx.rotate((180 * Math.PI) / 180);

  ctx.fillStyle = "black";
  filter(`blur(2px)`)(ctx);
  ctx.drawImage(canvas, 0, 200, 800, 500, 0, 0, 800, 700);

  ctxBackdrop.drawImage(canvas, 0, 0, 800, 600);

  // requestAnimationFrame(draw);
}

draw(0);
draw(1);