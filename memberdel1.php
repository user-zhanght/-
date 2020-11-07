<?php
    session_start();
    $id = $_SESSION['delid'];
    $mysqli = new mysqli('127.0.0.1','root','root','test');
    if (!$mysqli) {
        echo "<script>alert('数据库连接错误，请检查！');</script>";
        exit();
    }
    $re = $mysqli->query("select * from hylist where id=$id");
    $ru = mysqli_fetch_object($re);
    $hyname = $ru->hyname;
    $sex = $ru->sex;
    $phonenum = $ru->phonenum;
    $sfzh = $ru->sfzh;
    $result = $mysqli->query("delete from hylist where id=$id");
    $result1 = $mysqli->query("insert into dellist (id,hyname,sex,phonenum,sfzh) values ('$id','$hyname','$sex','$phonenum','$sfzh')");
    if($result && $result1)
    {
        echo "<script>alert('删除成功！');</script>";
        echo "<script>window.location.href='member-list.php'</script>";
    }else{
        echo "<script>alert('删除失败！');</script>";
        echo "<script>window.location.href='member-list.php'</script>";
    }
    $mysqli->close();
?>