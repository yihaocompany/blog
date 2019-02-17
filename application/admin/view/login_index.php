<!DOCTYPE html>
<html>
    <head>
        <title>{$configs.webname}后台管理系统</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="/src/admin/layui/css/layui.css"  media="all">
        <link rel="stylesheet" href="/src/admin/css/login.css">
        <script src="https://apps.bdimg.com/libs/jquery/1.8.0/jquery.min.js"></script>
        <script type="text/javascript" src="/src/admin/layui/lay/dest/layui.all.js"></script>
    <body id="login">
        <div class="login">
            <h2>{$configs.webname}后台管理</h2>
            <div class="layui-form-item">
                <input type="text" placeholder="账号(4~8位)" required="" lay-verify="required" autocomplete="off" class="layui-input" id="username">
            </div>
            <div class="layui-form-item">
                <input type="password" placeholder="密码" required="" lay-verify="required" autocomplete="off" class="layui-input" id="password">
            </div>
            <div class="layui-form-item">
                <table>
                    <tr>
                        <td><input required pattern="^\S{3,}$" name="verify" id="verify" value="" type="text" autocomplete="off"
                                   title="请输入3位及以上的字符" placeholder="请输入验证码"  class="layui-input">
                        </td>
                        <td><img src="{:url('login/verify')}" title="点击刷新" height="38"  id="verify_img" onclick="refreshVerify()"></td>
                    </tr>
                </table>
            </div>
            <div class="layui-form-item">
                <button style="padding: 0 102px;" class="layui-btn" lay-submit=""  id="login_sub">立即登录</button>
            </div>
        </div>
        <script>
            $(function () {
                $('#login_sub').click(function () {
                    var username = $('#username').val();
                    var password = $('#password').val();
                    var verify = $('#verify').val();
                    if (!username) {
                        $('#username').focus();
                        return;
                    }
                  if (!password) {
                        $('#password').focus();
                        return;
                    }

                    if (!verify) {
                        $('#verify').focus();
                        return;
                    }


                    $.ajax({
                        url: '{:url("login/login")}',
                        type: "post",
                        dataType: "json",
                        cache: false,
                        data: {
                            username: username,
                            password: password,
                            verify:   verify
                        },
                        success: function (msg) {
                            console.log(msg);
                            if (msg.code != '1') {
                                layer.msg(msg.msg);
                                refreshVerify();
                                return;
                            } else {
                                window.location.href = '{:url("index/index")}';
                            }
                        }
                    });
                });
            });

            function refreshVerify() {
                var ts = Date.parse(new Date())/1000;
                var img = document.getElementById('verify_img');
                img.src = "{:url('login/verify')}?id="+ts;
            }
        </script>
    </body>
</html>