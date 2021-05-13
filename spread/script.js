let option = {
    type: 'noready',
    content: '#register-form',
    title: 'Register',
    width: parseInt(parseFloat(document.documentElement.clientWidth) / 3) + 'px',
    height: '300px',
    min: true,
    shade: true,
    shadeClose: true,
    app: false,
}

var xtipId;
var username;

if (document.documentElement.clientWidth <= 580) {
    option.app = true;
    option.height = '400px';
}

//屏幕尺寸变化时设置弹窗app切换
$(window).resize(function () {
    // var w = document.documentElement.clientWidth;
    var w = window.screen.availWidth;
    console.log(w)
    if (w <= 580) {
        console.log(11111)
        option.app = true;
        option.height = '400px';
        option.width = parseInt(document.documentElement.clientWidth / 3) + 'px'
    } else {
        option.app = false;
        option.height = '300px';
        option.width = parseInt(document.documentElement.clientWidth / 3) + 'px'
    }
    console.log(option.width)
})

function open_form(content, title) {
    option.content = content;
    option.title = title;
    xtipId = xtip.open(option);

    $('.switch').click(switch_form);

    $(".single-form").find("input").on("click", function () {
        $(this).css("border", "1px solid #f34f3f");
    })

    $(".single-form").find("input").blur(function () {
        $(this).css("border", "1px solid #e5e5e5");
    });

    $('.btn').click(submit_form);
}

function submit_form() {
    username = $('#username').val();
    if (option.title === 'Login') {
        $('.form').ajaxForm({
            url: 'login.php',
            success: function (data, status) {
                if (data == 100) {
                    // alert("登录成功")
                    xtip.msg('Login Successfully!')
                    setTimeout(function () {
                        //内容2秒后执行
                        success_help('login')
                    }, 1000);
                } else if (data == 200) {
                    // alert("用户名或密码错误")
                    xtip.msg('Wrong Username or Password');
                }
                // alert(status);
            },
            error: function () {
            }
        });
    } else {
        if ($("#password").val() === $("#re-password").val()) {
            $('.form').ajaxForm({
                url: 'signup.php',
                success: function (data, status) {
                    if (data == 100) {
                        // alert("注册成功")
                        xtip.msg('Sign Up Successfully!');
                        setTimeout(function () {
                            //内容3秒后执行
                            success_help('register')
                        }, 1000);
                    } else if (data == 200) {
                        // alert("用户名重复")
                        xtip.alert('Username Already Exist', 'e');
                    } else if (data == 300) {
                        // alert("注册失败")
                        xtip.alert('Sign Up Failed', 'e');
                    }
                }
            });
        } else {
            xtip.msg("The two passwords you entered did not match");
            return false;
        }
    }
}

function success_help(type) {
    xtip.close(xtipId);
    // console.log('pre '+done)
    if (type === 'login') {
        done += 20;
        // console.log(done)
    } else {
        done += 40;
    }

    if (done > 100) {
        done = 100;
    }

    $.post('success_help.php',
        {
            'username': username,
            'input': getQueryVariable('input'),
            'done': done
        },
        function (data, status) {
            console.log(data);
            $('#discount').css('color', '#f34f3f');
            $('#user-name').css('color', '#f34f3f');
            $('#overlay').css('transform', 'scale3d(0, 0, 1)');
            $('#button').css('background', 'url(/image/笑脸.png) 50% no-repeat')
            $('#button').css('background-size', '115%')
            $('#button').html('');
            setTimeout(function () {
                vue.doneLoading();
            }, 1000)
        })
    // console.log('after '+done)
}

function switch_form() {
    xtip.close(xtipId);
    if (option.title === 'Login') {
        option.height = '300px';
        open_form('#register-form-wrapper', 'Register');
    } else {
        option.height = '250px';
        open_form('#login-form-wrapper', 'Login');
    }
}

function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split("=");
        if (pair[0] == variable) {
            return pair[1];
        }
    }
    return (false);
}


var done = 0;
//获取已完成进度
$.post(
    'get_done.php',
    {'input': getQueryVariable('input')},
    function (data, status) {
        data = JSON.parse(data);
        done = parseInt(data['done']);
        $('#user-name').html(data['name']);
    });

const vue = new Vue({
    el: '.preloader',
    data: {
        loaded: 0,
        loading: null,
        loadStyle: {
            width: '0%'
        },

        statusElem: $('[status]'),
        loader: $('[loader]'),
        body: $('body')
    },

    ready() {
        this.preloader = $(this.$el);
        this.removeScrolling();
        this.startLoading();
        $('#button').on('click', function () {
            option.height = '300px';
            open_form('#register-form-wrapper', 'Register')
        })
    },
    watch: {
        loaded() {
            this.loadStyle.width = `${this.loaded}%`;
        }
    },

    methods: {
        removeScrolling() {
            this.body.css('overflow', 'hidden');
        },
        startLoading() {
            this.loading = setInterval(this.load, 20);
        },
        load() {
            if (this.loaded < done) {
                this.loaded++;
            } else {
                // this.doneLoading();
            }
        },
        doneLoading() {
            clearInterval(this.loading);
            this.updateStatus();
        },
        updateStatus() {
            if (done === 100) {
                this.statusElem.text('Lets get crazay !');
            }
            this.loader.fadeOut();
            this.animatePreloader();
            // this.showOverlay()
        },
        animatePreloader() {
            let app = this,
                height = this.preloader.height(),
                properties = {
                    'margin-top': `-${height}`
                },

                options = {
                    duration: 1000,
                    easing: 'swing',
                    complete() {
                        app.removePreloader();
                    }
                };
            this.preloader.delay(500).animate(properties, options);
            setTimeout(function () {
                //内容2秒后执行
                $('.success-title').css('transform', 'scale3d(1.5,1.5,1)')
            }, 1000);
        },
        removePreloader() {
            this.preloader.remove();
            this.body.removeAttr('style');
            this.animateWebsite();
        },
        animateWebsite() {
            console.log('lets get pretty');
        },
        hideOverlay() {
            // $('#overlay').css('visibility','hidden')
            $('#overlay').css('transform', 'scale3d(0, 0, 1)')
        }
    }
});