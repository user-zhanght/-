<?php
    session_start();
    $id = $_SESSION['hfid'];
    $mysqli = new mysqli('127.0.0.1','root','root','test');
    if (!$mysqli) {
        echo "<script>alert('数据库连接错误，请检查！');</script>";
        exit();
    }
    $re = $mysqli->query("select * from dellist where id=$id");
    $ru = mysqli_fetch_object($re);
    $hyname = $ru->hyname;
    $sex = $ru->sex;
    $phonenum = $ru->phonenum;
    $sfzh = $ru->sfzh;
    $result = $mysqli->query("delete from dellist where id=$id");
    $result1 = $mysqli->query("insert into hylist (id,hyname,sex,phonenum,sfzh) values ('$id','$hyname','$sex','$phonenum','$sfzh')");
    if($result && $result1)
    {
        echo "<script>alert('恢复成功！');</script>";
        echo "<script>window.location.href='deled.php'</script>";
    }else{
        echo "<script>alert('恢复失败！');</script>";
        echo "<script>window.location.href='deled.php'</script>";
    }
    $mysqli->close();
?>