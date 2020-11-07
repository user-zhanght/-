<?php
    session_start();
    $id = $_SESSION['id'];
    $hyname = $_POST['nhyname'];
    $sex = $_POST['nsex'];
    $phonenum = $_POST['nphonenum'];
    $sfzh = $_POST['nsfzh'];
    if(!isset($hyname) || !isset($sex) || !isset($phonenum) || !isset($sfzh)){
        echo "<script>alert('数据不能为空！');</script>";
        echo "<script>window.location.href='memberupdata1.php'</script>";
        exit();
    }else if(!($sex == "男" || $sex == "女")){
        echo "<script>alert('请输入男或女！');</script>";
        echo "<script>window.location.href='memberupdata1.php'</script>";
        exit();
    }else if(is_int($phonenum) || is_int($sfzh)){
        echo "<script>alert('请输入正确的电话号码或身份证号！');</script>";
        echo "<script>window.location.href='memberupdata1.php'</script>";
        exit();
    }
    $mysqli = new mysqli('127.0.0.1','root','root','test');
    if (!$mysqli) {
        echo "<script>alert('数据库连接错误，请检查！');</script>";
        exit();
    }
    $result = $mysqli->query("update hylist set hyname='".$hyname."',sex = '".$sex."',
    phonenum = '".$phonenum."',sfzh = '".$sfzh."' where id='".$id."'");
    if($result)
    {
        echo "<script>alert('修改成功！');</script>";   
        unset($_SESSION['id']);
        echo "<script>window.location.href='member-list.php'</script>";
    }else{
        echo "<script>alert('修改失败！');</script>";
        echo "<script>window.location.href='member-list.php'</script>";
    }
    $mysqli->close();
?>