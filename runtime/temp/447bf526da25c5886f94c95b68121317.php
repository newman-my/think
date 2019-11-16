<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:59:"D:\www\think\public/../application/oyh\view\test\index.html";i:1569489176;s:52:"D:\www\think\application\oyh\view\public\header.html";i:1569489169;s:53:"D:\www\think\application\oyh\view\public\sidebar.html";i:1569489171;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link rel="stylesheet" href="/think/public/static/bootstrap-3.3.7-dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
 
 <script src="//cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
 <script src="/think/public/static/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
 <script src="//cdn.bootcss.com/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<title>test</title> 
<style>

</style> 
</head> 
<body> 
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>header</title>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-header">
	    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myCollapse">
		  <span class="sr-only">切换铵钮</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">OUYIHAN</a>
	  </div>
		<div class="collapse navbar-collapse navbar-right" id="myCollapse">
		  <ul class="nav navbar-nav">
		    <li class="active"><a href="#">销售查询</a></li>
			<li><a href="#">库存查询</a></li>
			<li><a href="#">采购查询</a></li>
			<li><a href="#">货品配送</a></li>
			<li><a href="#">财务管理</a></li>
			<li><a href="#">决策分析</a></li>
		  </ul>
		</div>
	</nav>
</body>
</html>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
 <meta charset="utf-8">
 </head>
<div class="row" style="margin-top:60px;">
  <div class="col-sm-2">
   <form role="form">
     <div class="panel panel-default">
	    <div class="panel-heading">
    	  <label class="panel-title">选择开始日期</label>
		</div>
	  <div class="panel-body">
	  <div class="input-group date" id="datetimepicker1">
	    <input type="text" class="form-control">
	    <span class="input-group-addon">
		<span class="glyphicon glyphicon-calendar"></span>
		</span>
	  </div>
	  </div>
	 </div>
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <label class="panel-title">选择结束日期</label>
	  </div>
	  <div class="panel-body">
       <div class="input-group date" id="datetimepicker2">
	    <input type="text" class="form-control">
	    <span class="input-group-addon">
		<span class="glyphicon glyphicon-calendar"></span>
		</span>
	   </div>
	  </div>
	  <div class="panel-footer">
	    <h4>面板底部</h4>
	  </div>
	</div>
   </form>
  </div>
</div>

<script>
$(function(){
 $("#datetimepicker1").datetimepicker({
    format:"YYYY-MM-DD",
	locale:moment.locale("zh-cn")
 });
 $("#datetimepicker2").datetimepicker({
    format:"YYYY-MM-DD",
	locale:moment.locale("zh-cn")
 });
});
</script>
</html>

</body> 
</html> 