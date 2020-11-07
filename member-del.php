<!DOCTYPE html>
<html class="x-admin-sm">
  
  <head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.2</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="stylesheet" href="./css/font.css">
    <link rel="stylesheet" href="./css/xadmin.css">
    <script type="text/javascript" src="./lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
    <div class="x-nav">
      <span class="layui-breadcrumb">
        <a href="">首页</a>
        <a href="">演示</a>
        <a>
          <cite>导航元素</cite></a>
      </span>
      <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" onclick="location.reload()" title="刷新">
        <i class="layui-icon layui-icon-refresh" style="line-height:30px"></i></a>
    </div>
    <div class="layui-fluid">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md12">
                <div class="layui-card">
                    <div class="layui-card-body ">
                        <form class="layui-form layui-col-space5">
                            <div class="layui-inline layui-show-xs-block">
                                <input class="layui-input"  autocomplete="off" placeholder="开始日" name="start" id="start">
                            </div>
                            <div class="layui-inline layui-show-xs-block">
                                <input class="layui-input"  autocomplete="off" placeholder="截止日" name="end" id="end">
                            </div>
                            <div class="layui-inline layui-show-xs-block">
                                <input type="text" name="username"  placeholder="请输入用户名" autocomplete="off" class="layui-input">
                            </div>
                            <div class="layui-inline layui-show-xs-block">
                                <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                            </div>
                        </form>
                    </div>
                    <div class="layui-card-header">
                        <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量恢复</button>
                    </div>
                    <div class="layui-card-body ">
                        <table class="layui-table layui-form">
                          <thead>
                            <tr>
                              <th>
                                <input type="checkbox" name=""  lay-skin="primary">
                              </th>
                              <th>ID</th>
                              <th>用户名</th>
                              <th>性别</th>
                              <th>手机</th>
                              <th>邮箱</th>
                              <th>地址</th>
                              <th>加入时间</th>
                              <th>状态</th>
                              <th>操作</th></tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <input type="checkbox" name=""  lay-skin="primary"> 
                              </td>
                              <td>1</td>
                              <td>小明</td>
                              <td>男</td>
                              <td>13000000000</td>
                              <td>admin@mail.com</td>
                              <td>北京市 海淀区</td>
                              <td>2017-01-01 11:11:42</td>
                              <td class="td-status">
                                <span class="layui-btn layui-btn-danger layui-btn-mini">
                                                  已删除
                                              </span>
                              <td class="td-manage">
                                <a title="恢复" onclick="member_del(this,'要删除的id')" href="javascript:;">
                                  <i class="layui-icon">&#xe669;</i>
                                </a>
                                <a title="删除" onclick="member_del(this,'要删除的id')" href="javascript:;">
                                  <i class="layui-icon">&#xe640;</i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="checkbox" name=""  lay-skin="primary"> 
                              </td>
                              <td>1</td>
                              <td>小明</td>
                              <td>男</td>
                              <td>13000000000</td>
                              <td>admin@mail.com</td>
                              <td>北京市 海淀区</td>
                              <td>2017-01-01 11:11:42</td>
                              <td class="td-status">
                                <span class="layui-btn layui-btn-danger layui-btn-mini">已删除</span>
                              <td class="td-manage">
                                <a title="恢复" onclick="member_del(this,'要删除的id')" href="javascript:;">
                                  <i class="layui-icon">&#xe669;</i>
                                </a>
                                <a title="删除" oncl<!DOCTYPE html>
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
                                          <script type="text/javascript" src="./js/xadmin.js"></script>
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
                                                  $hyname = $_POST['username'];
                                                  $mysqli = new mysqli('127.0.0.1','root','root','test');
                                                  $mysqli->query("insert into ls(id,hyname,sex,phonenum,sfzh) 
                                                  select * from hylist where hyname like '%$hyname%'");
                                                  // limit为约束显示多少条信息，后面有两个参数，第一个为从第几个开始，第二个为长度
                                                  mysqli_set_charset($mysqli, "utf8");
                                                  $rs = "select * from ls where hyname like '%$hyname%' limit " . (($pageNum - 1) * $pageSize) . "," . $pageSize;
                                                  $r = mysqli_query($mysqli, $rs);
                                                  while ($obj = mysqli_fetch_object($r)) {
                                                      $array[] = $obj;
                                                  }
                                                  $mysqli->close();
                                                  return $array;
                                              }
                                              function allNews()
                                              {
                                                  $hyname = $_POST['username'];
                                                  $mysqli = new mysqli('127.0.0.1','root','root','test');
                                                  $mysqli->query("insert into ls(id,hyname,sex,phonenum,sfzh) 
                                                  select * from hylist where hyname like '%$hyname%'");
                                                  mysqli_set_charset($mysqli, "utf8");
                                                  $rs = "select count(*) num from ls"; //可以显示出总页数
                                                  $r = mysqli_query($mysqli, $rs);
                                                  $obj = mysqli_fetch_object($r);
                                                  $mysqli->close();
                                                  return $obj->num;
                                              }
                                              @$allNum = allNews();
                                              @$pageSize = $allNum; //约定没页显示几条信息
                                              @$pageNum = empty($_GET["pageNum"])?1:$_GET["pageNum"];
                                              @$endPage = ceil($allNum/$pageSize); //总页数
                                              @$array = news($pageNum,$pageSize);
                                              $mysqli = new mysqli('127.0.0.1','root','root','test');
                                              $mysqli->query("truncate table ls");
                                              $mysqli->close();
                                          ?>
                                      </head>
                                      <body>
                                          <div class="layui-fluid">
                                              <div class="layui-row layui-col-space15">
                                                  <div class="layui-col-md12">
                                                      <div class="layui-card">
                                                          <div class="layui-card-body ">
                                                              <form class="layui-form layui-col-space5" method="post" action="select.php">
                                                                  <div class="layui-inline layui-show-xs-block" >
                                                                      <button class="layui-btn"  lay-submit="" lay-filter="sreach" type="submit"><i class="layui-icon">&#xe615;</i></button>
                                                                  </div>
                                                                  <div class="layui-inline layui-show-xs-block" >
                                                                      <input type="text" name="username"  placeholder="请输入用户名" autocomplete="off" class="layui-input">
                                                                  </div>
                                                              </form>
                                                          </div>
                                                          <div class="layui-card-header">
                                                              <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>
                                                              <button class="layui-btn" onclick="xadmin.open('添加用户','./memberadd.html',600,400)"><i class="layui-icon"></i>添加会员</button>
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
                                                                              <td><input type="checkbox" name="id" value="id"   lay-skin="primary"></td>
                                                                              <td><?php echo "{$values->id}";?></td>
                                                                              <td><?php echo "{$values->hyname}"?></td>
                                                                              <td><?php echo "{$values->sex}"?></td>
                                                                              <td><?php echo "{$values->phonenum}"?></td>
                                                                              <td><?php echo "{$values->sfzh}"?></td>
                                                                              <td class="td-status">
                                                                                 <span class="layui-btn layui-btn-normal layui-btn-mini">已启用</span>
                                                                              </td>
                                                                              <td class="td-manage">
                                                                                <a onclick="member_stop(this,'10001')" href="javascript:;"  title="启用">
                                                                                  <i class="layui-icon">&#xe601;</i>
                                                                                </a>
                                                                                <a title="修改信息" href="memberupdata1.php?id=<?php echo $values->id?>">
                                                                                  <i class="layui-icon">&#xe631;</i>
                                                                                </a>
                                                                                <a title="删除"  href="memberdel.php?delid=<?php echo $values->id?>">
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
                                  
                                          // 获取选中的id 
                                          $('tbody input').each(function(index, el) {
                                              if($(this).prop('checked')){
                                                 ids.push($(this).val())
                                              }
                                          });
                                    
                                          layer.confirm('确认要删除吗？'+ids.toString(),function(index){
                                              //捉到所有被选中的，发异步进行删除
                                              layer.msg('删除成功', {icon: 1});
                                              $(".layui-form-checked").not('.header').parents('tr').remove();
                                          });
                                        }
                                      </script>
                                  </html>ick="member_del(this,'要删除的id')" href="javascript:;">
                                  <i class="layui-icon">&#xe640;</i>
                                </a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                    <div class="layui-card-body ">
                        <div class="page">
                            <div>
                              <a class="prev" href="">&lt;&lt;</a>
                              <a class="num" href="">1</a>
                              <span class="current">2</span>
                              <a class="num" href="">3</a>
                              <a class="num" href="">489</a>
                              <a class="next" href="">&gt;&gt;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <script>
      layui.use(['laydate','form'], function(){
        var laydate = layui.laydate;
        
        //执行一个laydate实例
        laydate.render({
          elem: '#start' //指定元素
        });

        //执行一个laydate实例
        laydate.render({
          elem: '#end' //指定元素
        });
      });


      /*用户-删除*/
      function member_del(obj,id){
          layer.confirm('确认要删除吗？',function(index){
              //发异步删除数据
              $(obj).parents("tr").remove();
              layer.msg('已删除!',{icon:1,time:1000});
          });
      }



      function delAll (argument) {

        var data = tableCheck.getData();
  
        layer.confirm('确认要恢复吗？'+data,function(index){
            //捉到所有被选中的，发异步进行删除
            layer.msg('恢复成功', {icon: 1});
            $(".layui-form-checked").not('.header').parents('tr').remove();
        });
      }
    </script>
    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
  </body>

</html>