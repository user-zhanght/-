<?php session_start();?>
<!DOCTYPE html>
<html class="x-admin-sm">
    
    <head>
        <meta charset="UTF-8">
        <title>欢迎页面-X-admin2.2</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <link rel="stylesheet" href="./css/font.css">
        <link rel="stylesheet" href="./css/xadmin.css">
        <script type="text/javascript" src="./lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="./js/xadmin.js"></script>
        <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
        <!--[if lt IE 9]>
            <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
            <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="layui-fluid">
            <div class="layui-row">
                <form class="layui-form" action="memberupdata.php" method="POST">
                    <div class="layui-form-item">
                        <label for="L_email" class="layui-form-label">
                            <span class="x-red">*</span>会员名</label>
                        <div class="layui-input-inline">
                            <input type="text" id="L_email" name="nhyname" required="" lay-verify="email" autocomplete="off" class="layui-input"></div>
                        <div class="layui-form-mid layui-word-aux">
                            <span class="x-red">*</span>请输入新的会员名</div></div>
                    <div class="layui-form-item">
                        <label for="L_username" class="layui-form-label">
                            <span class="x-red">*</span>性别</label>
                        <div class="layui-input-inline">
                            <input type="text" id="L_username" name="nsex" required="" lay-verify="nikename" autocomplete="off" class="layui-input"></div>
                            <div class="layui-form-mid layui-word-aux">
                                <span class="x-red">*</span>请输入会员性别</div></div>
                    </div>
                    <div class="layui-form-item">
                        <label for="L_pass" class="layui-form-label">
                            <span class="x-red">*</span>联系电话</label>
                        <div class="layui-input-inline">
                            <input type="text" id="L_pass" name="nphonenum" required="" lay-verify="pass" autocomplete="off" class="layui-input"></div>
                        <div class="layui-form-mid layui-word-aux"><span class="x-red">*</span>请输入会员新的联系方式</div></div>
                    <div class="layui-form-item">
                        <label for="L_repass" class="layui-form-label">
                            <span class="x-red">*</span>身份证号</label>
                        <div class="layui-input-inline">
                            <input type="text" id="L_repass" name="nsfzh" required="" lay-verify="repass" autocomplete="off" class="layui-input"></div>
                            <div class="layui-form-mid layui-word-aux">
                                <span class="x-red">*</span>请输入会员新的身份证号码</div></div>
                    </div>
                    <?php $_SESSION['id'] = $_GET['id'];?>
                    <div class="layui-form-item">
                        <label for="L_repass" class="layui-form-label"></label>
                        <button class="layui-btn" lay-filter="add" lay-submit="" type="submit">确认修改</button></div>
                </form>
            </div>
        </div>
    </body>
</html>