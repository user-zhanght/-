<?php session_start();?>
<script>
    var res = window.confirm("确定要恢复吗?","恢复","取消");
    alert(res);
    if(res){
        <?php $_SESSION['hfid'] = $_GET['hfid'];?>
        window.location.href='hf1.php';
    }else{
        window.location.href='deled.php';
    }
</script>