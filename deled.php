<!DOCTYPE html>
<html class="x-admin-sm">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <link rel="stylesheet" href="./css/font.css">
        <link rel="stylesheet" href="./css/xadmin.css">
        <script src="./lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="http://www.coding123.net/rardownload/20110420/20110420113851756.js"></script>
        <script type="text/javascript" src="./js/xadmin.js"></script>
        <script type="text/javascript" src="http://www.coding123.net/js/jquery.js"></script>
        <!--[if lt IE 9]>
          <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
          <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php
            function news($pageNum = 1, $pageSize = 6)
            {
                $array = array();
                $mysqli = new mysqli('127.0.0.1','root','root','test');
                if (!$mysqli) {
                    echo "<script>alert('数据库连接错误，请检查！');</script>";
                    echo "<script>window.location.href='login.html'</script>";
                }
                // limit为约束显示多少条信息，后面有两个参数，第一个为从第几个开始，第二个为长度
                $rs = "select * from dellist limit " . (($pageNum - 1) * $pageSize) . "," . $pageSize;
                $r = mysqli_query($mysqli, $rs);
                while ($obj = mysqli_fetch_object($r)) {
                    $array[] = $obj;
                }
                mysqli_close($mysqli,"test");
                return $array;
            }
            function allNews()
            {
                $mysqli = new mysqli('127.0.0.1','root','root','test');
                mysqli_set_charset($mysqli,"utf8");
                $r = $mysqli->query("select count(*) num from dellist"); //可以显示出总页数
                $obj = mysqli_fetch_object($r);
                $mysqli->close();
                return $obj->num;
            }
            @$allNum = allNews();
            @$pageSize = 7; //约定没页显示几条信息
            @$pageNum = empty($_GET["pageNum"])?1:$_GET["pageNum"];
            @$endPage = ceil($allNum/$pageSize); //总页数
            @$array = news($pageNum,$pageSize);
        ?>
    </head>
    <body>
        <div class="layui-fluid">
            <div class="layui-row layui-col-space15">
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-body ">
                            <form class="layui-form layui-col-space5" method="post" action="sedel.php">
                                <div class="layui-inline layui-show-xs-block" >
                                    <input type="text" name="username"  placeholder="请输入用户名" autocomplete="off" class="layui-input">
                                </div>
                                <div class="layui-inline layui-show-xs-block" >
                                    <button class="layui-btn"  lay-submit="" lay-filter="sreach" type="submit"><i class="layui-icon">&#xe615;</i></button>
                                </div>
                            </form>
                        </div>
                        <div class="layui-card-header">
                            <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>
                        </div>
                        <div class="layui-card-body layui-table-body layui-table-main">
                            <table class="layui-table layui-form">
                                <thead>
                                  <tr>
                                    <th>
                                      <input type="checkbox" lay-filter="checkall" name="" lay-skin="primary">
                                    </th>
                                    <th>ID</th>
                                    <th>用户名</th>
                                    <th>性别</th>
                                    <th>手机</th>
                                    <th>身份证号</th>
                                    <th>状态</th>
                                    <th>操作</th></tr>
                                </thead>
                                <tbody>
                                    <?php foreach($array as $key=>$values){?>
                                        <tr>
                                            <td><input type="checkbox" name="id" value="<?php echo "{$values->id}";?>"   lay-skin="primary"></td>
                                            <td><?php echo "{$values->id}";?></td>
                                            <td><?php echo "{$values->hyname}"?></td>
                                            <td><?php echo "{$values->sex}"?></td>
                                            <td><?php echo "{$values->phonenum}"?></td>
                                            <td><?php echo "{$values->sfzh}"?></td>
                                            <td class="td-status">
                                               <span class="layui-btn layui-btn-normal layui-btn-mini">已删除</span>
                                            </td>
                                            <td class="td-manage">
                                              <a title="恢复会员" href="hf.php?hfid=<?php echo $values->id?>">
                                                <i class="layui-icon" title="恢复会员">&#xe601;</i>
                                              </a>
                                                <i class="layui-icon" title="不可操作">&#xe631;</i>
                                              <a title="彻底删除"  href="deleddel.php?deled=<?php echo $values->id?>">
                                                <i class="layui-icon">&#xe640;</i>
                                              </a>
                                            </td>
                                        </tr>
                                      <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <div class="layui-card-body ">
                            <div class="page">
                                <div>
                                    <a href="?pageNum=1">首页</a>
                                    <a href="?pageNum=<?php $pageNum==1?1:($pageNum-1)?>">上一页</a>
                                    <a href="?pageNum=<?php echo $pageNum==$endPage?$endPage:($pageNum+1)?>">下一页</a>
                                    <a href="?pageNum=<?php echo $endPage?>">尾页</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </body>
    <script>
      layui.use(['laydate','form'], function(){
        var laydate = layui.laydate;
        var  form = layui.form;


        // 监听全选
        form.on('checkbox(checkall)', function(data){

          if(data.elem.checked){
            $('tbody input').prop('checked',true);
          }else{
            $('tbody input').prop('checked',false);
          }
          form.render('checkbox');
        }); 
        
        //执行一个laydate实例
        laydate.render({
          elem: '#start' //指定元素
        });

        //执行一个laydate实例
        laydate.render({
          elem: '#end' //指定元素
        });


      });

       /*用户-停用*/
      function member_stop(obj,id){
          layer.confirm('确认要停用吗？',function(index){

              if($(obj).attr('title')=='启用'){

                //发异步把用户状态进行更改
                $(obj).attr('title','停用')
                $(obj).find('i').html('&#xe62f;');

                $(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-disabled').html('已停用');
                layer.msg('已停用!',{icon: 5,time:1000});

              }else{
                $(obj).attr('title','启用')
                $(obj).find('i').html('&#xe601;');

                $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-btn-disabled').html('已启用');
                layer.msg('已启用!',{icon: 5,time:1000});
              }
              
          });
      }

      /*用户-删除*/
      function member_del(obj,id){
          layer.confirm('确认要删除吗？',function(index){
              window.location.href='memberdel.php?delid=<?php echo $values->id?>';
          });
      }

      function delAll (argument) {
        
        var ids = [];
        /*
        $('input[id="checkboxwa"]:checked').each(function(){  
	        ids.push($(this).val());//向数组中添加元素  
        });
        */
        $('tbody input').each(function(index, el) {
            if($(this).prop('checked')){
               ids.push($(this).val())
            }
        });
        
        $.ajax({
        url:'./dels.php'//改为你的动态页
        ,type:'POST'
        ,data:{ids:ids.toJSONString()}//调用json.js类库将json对象转换为对应的JSON结构字符串
        ,success:function(rst){alert('PHP接收JSON数据成功！');}
        ,error:function(xhr){alert('PHP页面有错误！'+xhr.responseText);}
        });
        /*
        alert(ids.join(','));
        layer.confirm('确认要删除吗？'+ids.toString(),function(index){
            //捉到所有被选中的，发异步进行删除
            layer.msg('删除成功', {icon: 1});
            $(".layui-form-checked").not('.header').parents('tr').remove();
        });
        */
      }
    </script>
</html>