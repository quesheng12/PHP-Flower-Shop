var option = {
    type: 'noready',
    content: '#address-form',
    title: 'Address',
    width: (document.documentElement.clientWidth / 2) + 'px',
    height: '300px',
    min: true,
    shade: true,
    shadeClose: true,
    app: false,
}

if (document.documentElement.clientWidth <= 580) {
    option.app = true;
    option.height = '400px';
}

//屏幕尺寸变化时设置弹窗app切换
$(window).resize(function () {
    var w = document.documentElement.clientWidth;
    if (w <= 580) {
        option.app = true;
        option.height = '400px';
        option.width = (document.documentElement.clientWidth / 2) + 'px'
    } else {
        option.app = false;
        option.height = '300px';
        option.width = (document.documentElement.clientWidth / 2) + 'px'
    }
})

function open_form() {
    xtip.open(option);

    //信息修改表单点按改变边框
    $(".single-form").find("input").on("click", function () {
        $(this).css("border", "1px solid #f34f3f");
    })

    $(".single-form").find("input").blur(function () {
        $(this).css("border", "1px solid #e5e5e5");
    });
}

function address_form_open_add() {
    open_form();
    $('#address-form-type').val('add');
}

function getUserInfo() {
    $.get(
        "user-information.php",
        function (data, status) {
            data = JSON.parse(data)
            // console.log(data["first_name"])
            if (data['header'] !== "") {
                $(".header__left").find("img").attr("src", data['header']);
            }
            $(".header__left").find("img").attr("alt", data['first_name'] + ' ' + data['last_name']);
            $(".header__base-info").find("h4").html(data['first_name'] + ' ' + data['last_name']);
            $("#email").html(data['email']);
            $("#phone").html(data['phone']);

            //设置address栏信息
            var address_str = "";
            var address_num = 0;
            for (var key in data['address']) {
                address_num++;
                var add_temp = data['address'][key];
                address_str += '            <div class="col-md-4" data-address-id="' + add_temp['id'] + '">\n' +
                    '                <div class="account-address mt-30">\n' +
                    '                    <h6 class="name">' + add_temp['name'] + '<i class="fa fa-times del" onclick="delmsg(' + add_temp['id'] + ')"></i></h6>\n' +
                    '                    <p>' + add_temp['province'] + " " + add_temp['city'] + " " + add_temp['area'] + " " + add_temp['detail'] + '</p>\n' +
                    '                    <p>Mobile: ' + add_temp['phone'] + '</p>\n' +
                    '                    <a class="btn btn-primary" data-phone="' + add_temp['phone'] + '" data-detail="' + add_temp['detail'] + '" data-area="' + add_temp['area'] + '" data-city="' + add_temp['city']
                    + '" data-province="' + add_temp['province'] + '" data-name="' + add_temp['name'] + '" href="#"><i class="fa fa-edit"></i> Edit Address</a>\n' +
                    '                </div>\n' +
                    '            </div>';
            }

            if (address_num < 3) {
                address_str += '<div class="col-md-3">\n' +
                    '                                        <div class="account-address mt-30">\n' +
                    '                                            <a id="add-address" class="btn btn-primary col-md-12" href="#"\n' +
                    '                                               onclick="address_form_open_add()"><i\n' +
                    '                                                    class="fa fa-edit"></i>Add\n' +
                    '                                                address</a>\n' +
                    '                                        </div>\n' +
                    '                                    </div>';
            }

// $(".my-account-address").find(".row").first().html("");
            console.log($(".my-account-address").find(".row").first());
            $(".my-account-address").find(".row").first().html(address_str);

//设置address下方的edit按钮
            $(".my-account-address").find(".row").first().find(".btn-primary").not(":last").on('click', function () {
                open_form();
                $('#address-form-type').val('edit');
                $('#form-name').val($(this).attr('data-name'));
                $('#form-province').val($(this).attr('data-province'));
                $('#form-city').val($(this).attr('data-city'));
                $('#form-area').val($(this).attr('data-area'));
                $('#form-detail').val($(this).attr('data-detail'));
                $('#form-phone').val($(this).attr('data-phone'));
                $('#address-form-id').val($(this).parent().parent().attr('data-address-id'));
            })
        }
    );
}

function delmsg(id) {
    xtip.confirm('Are you sure you want to delete this address? ',
        function () {
            $.post(
                "address-delete.php",
                {"id": id},
                function (data, status) {
                    alert(data);
                    getUserInfo();
                }
            )
        },
        {
            icon: ["a", "#f34f3f"],
            title: "Warning",
            btn: ["Confirm", "Cancel"]
        });
}

$(document).ready(function () {
    getUserInfo();

//信息修改表单点按改变边框
    $(".single-form").find("input").on("click", function () {
        $(this).css("border", "1px solid #f34f3f");
    })

    $(".single-form").find("input").blur(function () {
        $(this).css("border", "1px solid #e5e5e5");
    });

//提交表单代码
    $('#edit-personal-profiles').find(".btn").click(function () {
        $('#edit-personal-profiles').ajaxForm({
            url: 'user-information-edit.php',
            success: function (data, status) {
                if (data === "100" || data === "200") {
                    alert("Password Reset Successfully!")
                } else {
                    alert("Password Reset Failed")
                }
                if (data === "100" || data === "300") {
                    alert("Personal Profiles Set Successfully!")
                } else {
                    alert("Personal Profiles Set Failed")
                }
            }
        });
    });
})