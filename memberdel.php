<?php session_start();?>
<script>
    var res = window.confirm("确定要删除吗?","确定","取消");
    alert(res);
    if(res){
        <?php $_SESSION['delid'] = $_GET['delid'];?>
        window.location.href='memberdel1.php';
    }else{
        window.location.href='member-list.php';
    }
</script>

