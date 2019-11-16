<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:59:"D:\www\think\public/../application/oyh\view\home\index.html";i:1570602398;s:45:"D:\www\think\application\oyh\view\layout.html";i:1570609351;s:52:"D:\www\think\application\oyh\view\public\header.html";i:1570608788;s:52:"D:\www\think\application\oyh\view\public\footer.html";i:1570860720;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/think/public/static/bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/think/public/static/main.css">
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="/think/public/static/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="//cdn.bootcss.com/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
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
			<li class="dropdown"><a href="#" data-toggle="dropdown">库存管理</a>
			   <ul class="dropdown-menu">
			     <li class="text-center"><a href="<?php echo url('stock/index'); ?>">出仓发货</a></li>
			   </ul>
			</li>
			<li><a href="#">采购查询</a></li>
			<li><a href="#">货品配送</a></li>
			<li><a href="#">财务管理</a></li>
			<li><a href="#">决策分析</a></li>
			<li><a href="#" class="glyphicon glyphicon-user"></a></li>
		  </ul>
		</div>
 </nav>


<footer class="navbar-bottom">
 <div class="text-center">
   <p>浙ICP备17018962号</p>
   <p>©CopyRight 2019-2019 OUYIHAN.COM Inc All Rights Reserved. 义乌兴霆商贸有限公司 版权所有</p>
 </div>
</footer>

</body>
</html>