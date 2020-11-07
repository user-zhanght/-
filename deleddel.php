<?php session_start();?>
<script>
    var res = window.confirm("确定要彻底删除吗?","确定","取消");
    alert(res);
    if(res){
        <?php $_SESSION['deled'] = $_GET['deled'];?>
        window.location.href='deleddel1.php';
    }else{
        window.location.href='deled.php';
    }
</script>