<?php
    session_start();
    $id = $_SESSION['deled'];
    $mysqli = new mysqli('127.0.0.1','root','root','test');
    if (!$mysqli) {
        echo "<script>alert('数据库连接错误，请检查！');</script>";
        exit();
    }
    $result = $mysqli->query("delete from dellist where id=$id");
    if($result)
    {
        echo "<script>alert('删除成功！');</script>";
        echo "<script>window.location.href='deled.php'</script>";
    }else{
        echo "<script>alert('删除失败！');</script>";
        echo "<script>window.location.href='deled.php'</script>";
    }
    $mysqli->close();
?>