<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\www\think\public/../application/index\view\test\index.html";i:1567762222;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<title>bootstrap测试</title>
<link rel="stylesheet" href="/think/public/static/bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<style>
 /*web background*/
.container{
   display:table;
   height:100%; 
}

.row{
   display: table-cell;
   vertical-align: middle;
   height:500px;
}
</style>
<body>
<div class="container">
<div class="row text-center">
<form class="form-inline col-md-4 col-md-offset-4">
  <div class="form-group ">
    <label>姓名：</label>
    <input type="text" name="name" class="form-control"/>
  </div>
  <div class="form-group">
    <label>密码：</label>
    <input type="password" name="password" class="form-control"/>
  </div>
  <div class="form-group">
    <button type="submit" class="form-control btn btn-primary">登 录</button>
  </div>
</form>

</div>
</div>
</body>
</html>