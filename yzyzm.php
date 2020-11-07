<?php
    header('Content-Type:text/html;Charset=utf-8');
    session_start();
    function checkcode($a,$b)
    {
        if($a!=$b){
    		echo "<script>alert('验证码错误！');</script>";
    		echo "<script>window.location.href='login.html'</script>";
        }
    }
    $a = $_SESSION['code'];
    $b = $_POST['code'];
    checkcode($a,$b);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['username'] = $_POST['username'];
    $mysqli = new mysqli('127.0.0.1','root','root','test');
    if (!$mysqli) {
        echo "<script>alert('数据库连接错误，请检查！');</script>";
        echo "<script>window.location.href='login.html'</script>";
    }
    $result = $mysqli->query("select * from userinfo where uname='$username' and upass='$password'");
    $re = mysqli_fetch_row($result);
    if($re){
        header("Location:htsy.php");
    }else{
        echo "<script>alert('用户名或密码错误！');</script>";
        echo "<script>window.location.href='login.html'</script>";
    }
    $mysqli->close();
?>