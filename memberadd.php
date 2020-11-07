<?php
    $hyname = $_POST['hyname'];
    $sex = $_POST['sex'];
    $phonenum = $_POST['phonenum'];
    $sfzh = $_POST['sfzh'];
    if(!isset($hyname) || !isset($sex) || !isset($phonenum) || !isset($sfzh)){
        echo "<script>alert('数据不能为空！');</script>";
        echo "<script>window.location.href='memberadd.html'</script>";
    }else if($sex !== "男" && $sex !== "女"){
        echo "<script>alert('请输入男或女！此为二选一项');</script>";
        echo "<script>window.location.href='memberadd.html'</script>";
    }else if(is_int($phonenum) || is_int($sfzh)){
        echo "<script>alert('请输入正确的电话号码或身份证号！');</script>";
        echo "<script>window.location.href='memberadd.html'</script>";
    }
    $mysqli = new mysqli('127.0.0.1','root','root','test');
    if (!$mysqli) {
        echo "<script>alert('数据库连接错误，请检查！');</script>";
        exit();
    }
    $result = $mysqli->query("insert into hylist (hyname,sex,phonenum,sfzh) values ('$hyname','$sex','$phonenum','$sfzh')");
    if($result)
    {
        echo "<script>alert('添加成功！');</script>";
        exit();
    }else{
        echo "<script>alert('添加失败！');</script>";
        exit();
    }
    $mysqli->close();
?>