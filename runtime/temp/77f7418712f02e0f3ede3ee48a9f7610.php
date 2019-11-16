<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\www\think\public/../application/oyh\view\oyh_controller\index.html";i:1568506463;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
   <meta charset="utf8">
   <title>主页</title>
   <link rel="stylesheet" href="/think/public/static/bootstrap-3.3.7-dist/css/bootstrap.min.css">
   <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
   <script src="/think/public/static/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<style type="text/css">
  #accordion{
    margin-top:60px;
   }
 .panel{
   background-color:rgb(34,34,34);
   }
 .panel-body a{
    display:block;
  }
  .panel-title{
   color:white;
   background-color:rgb(34,34,34);
  }
</style>
<script>
 
</script>
</head>
<body>
 <nav class="nav navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</button>
	    <a class="navbar-brand" href="#" >OUYIHAN二次系统</a>
	   </div>
	   <div id="navbar" class="navbar-collapse collapse">
	     <ul class="nav navbar-nav navbar-right">
		   <li><a href="#">销售</a></li>
		   <li><a href="#">采购</a></li>
		   <li><a href="#">配送</a></li>
		   <li><a href="#">库存</a></li>
		   <li><a href="#">财务</a></li>
		   <li><a href="#" class="glyphicon glyphicon-user"></a></li>
		 </ul>
	   
	   </div>
	  </div>
	</div>
 </nav>
 <div class="container-fluid">
 <div class="row">
  <div class="col-sm-3 col-md-2 sidebar">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
	   <div class="panel-heading">
	     <h4 class="panel-title">
		    <a data-toggle="collapse" data-parent="accordion" href="#collapseXs">销售</a>
		</h4>
	   </div>
	   <div id="collapseXs" class="panel-collapse collapse">
	     <div class="panel-body">
		    <a href="#">门店收银日报表</a>
		    <a href="#">门店销售日报表</a>
			<a href="#">商品销售类别汇总表</a>
		    <a href="#">商品销售明细表</a>
		 </div>
	    </div>
	</div>
    <div class="panel panel-default">
	  <div class="panel-heading">
	    <h4 class="panel-title">
		  <a data-toggle="collapse" data-parent="#accordion" href="#collapseCg">采购</a>
		</h4>
	   </div>
	   <div id="collapseCg" class="panel-colapse collapse">
	    <div class="panel-body">
		  <a href="#">采购计划单</a>
		  <a href="#">采购订单</a>
		  <a href="#">采购入库单</a>
		  <a href="#">商品采购入库明细表</a>
		  <a href="#">供应商采购入库明细表</a>
		</div> 
	   </div>
	</div>
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h4 class="panel-title">
		  <a href="#collapsePs" data-toggle="collapse" data-parent="#accordion">配送</a>
		</h4>
	  </div>
	  <div id="collapsePs" class="panel-collapse collapse">
	     <div class="panel-body">
		  <a href="#">调拔配送单</a>
		  <a href="#">销售出库单</a>
		  <a href="#">销售退货单</a>
		  <a href="#">门店调拔明细表</a>
		  <a href="#">商品销售明细表</a>
		  <a href="#">耗材明细表</a>
		 </div>
	  </div>  
	</div>
 
 </div>
</div>
</div>
</div>
</body>
</html>