<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:63:"D:\www\think\public/../application/oyh\view\stock\outgoods.html";i:1574395997;s:45:"D:\www\think\application\oyh\view\layout.html";i:1570609351;s:52:"D:\www\think\application\oyh\view\public\header.html";i:1570608788;s:52:"D:\www\think\application\oyh\view\public\footer.html";i:1573884428;}*/ ?>
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


<div class="row main-wrap">
  <div class="col-md-2">
     <div class="panel panel-default">
	    <div class="panel-heading">
		  <label>选择物流单位</label>
		</div>
		<div class="panel-body">
		  <select onchange="selchang()">
		   <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$vo): ?>
		    <option value="<?php echo $vo; ?>"><?php echo $vo; ?></option>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		  </select>
		</div>
		<div class="panel-body">
		  <button class="btn btn-primary">出库单据查询</button>
		</div>
		<div class="panel-body">
		  <button class="btn btn-primary">生成发货单据</button>
		</div>
		<div class="panel-body">
		  <button class="btn btn-primary">发货单据查询</button>
		</div>
	 </div>
  </div>
  <div class="col-md-10">
    <table class="table">
	  <thead>
	    <tr>
		  <th>单号</th>
		  <th>门店编码</th>
		  <th>门店名称</th>
		  <th>收货人</th>
		  <th>电话</th>
		  <th>货运部名称</th>
		  <th>货运部编码</th>
		  <th>件数</th>
		  <th>体积</th>
		  <th>单价</th>
		  <th>运费</th>
		</tr>
	  </thead>
	  <tbody>
	   <?php if(is_array($mydata) || $mydata instanceof \think\Collection || $mydata instanceof \think\Paginator): $key = 0; $__LIST__ = $mydata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mydata): $mod = ($key % 2 );++$key;?>
	    <tr>
	    	<td width="120px"><?php echo $mydata['单号']; ?></td>
	    	<td><?php echo $mydata['仓库编码']; ?></td>
	    	<td><?php echo $mydata['仓库名称']; ?></td>
	    	<td><?php echo $mydata['收货人']; ?></td>
	    	<td><?php echo $mydata['电话']; ?></td>
	    	<td><?php echo $mydata['货运部名称']; ?></td>
	    	<td><?php echo $mydata['货运部编码']; ?></td>
	    	<td><?php echo $mydata['件数']; ?></td>
	    	<td><?php echo $mydata['体积']; ?></td>
	    	<td><?php echo $mydata['发货单价']; ?></td>
	    	<td><?php echo $mydata['运费']; ?></td>
	    </tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	  </tbody>
	
	</table>
  </div>
  <script>
    function selchang(){
	 var value=$('select').val();
	 alert(value);
	}
  </script>
</div>
<footer class="navbar-fixed-bottom">
 <div class="text-center">
   <p>浙ICP备17018962号</p>
   <p>©CopyRight 2019-2019 OUYIHAN.COM Inc All Rights Reserved. 义乌兴霆商贸有限公司 版权所有</p>
 </div>
</footer>

</body>
</html>