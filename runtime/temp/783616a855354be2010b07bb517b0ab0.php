<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:60:"D:\www\think\public/../application/oyh\view\stock\sting.html";i:1573885843;s:45:"D:\www\think\application\oyh\view\layout.html";i:1570609351;s:52:"D:\www\think\application\oyh\view\public\header.html";i:1570608788;s:52:"D:\www\think\application\oyh\view\public\footer.html";i:1573884428;}*/ ?>
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
<div class="col-md-10 col-md-offset-1">
<table class="table">
    <caption class="text-center">仓库发货信息表</caption>
	<thead>
	  <tr>
	    <th>仓库编码</th>
	    <th>仓库名称</th>
	    <th>货运部名称</th>
	    <th>结算单价</th>
		<th>发货单价</th>
	  </tr>
	</thead>
	<tbody id="sdata">
	 <?php if(is_array($shop) || $shop instanceof \think\Collection || $shop instanceof \think\Paginator): $key = 0; $__LIST__ = $shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shop): $mod = ($key % 2 );++$key;?>
	  <tr>
	   	<td><?php echo $shop['code']; ?></td>
		<td><?php echo $shop['name']; ?></td>
	  <td>
		<select>
		<?php foreach($unit as $k=>$v): ?>
		 <option value="<?php echo $v['wl_code']; ?>"><?php echo $v['name']; ?></option>
		<?php endforeach; ?>
		</select>
		</td>
		<td><input type="text" class="checkNum" /></td>
		<td><input type="text" class="checkNum" /></td>
		<td><a class="save btn btn-primary" href="#">保存</a></td>
	  </tr>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	<script>
	 $(function(){
	   $(".save").click(function(){
	    var obj=$(this).parent().prevAll();
		var jsPrice=Number($(obj[1]).children().first().val());
		var fhPrice=Number($(obj[0]).children().first().val());
		if (jsPrice<fhPrice||jsPrice==''||fhPrice==''){
		  alert("结算单价不能小于发货单价！");
		 }else{
		  var code=$(obj[4]).text();
		  var wlCode=$(obj[2]).children().find("option:selected").val();
		  var name=$(obj[3]).text();
		  var mydata={code:code,name:name,wlCode:wlCode,jsPrice:jsPrice,fhPrice:fhPrice,}
		   $.post("add",mydata,function(data,status){
		    alert("Data: " + data);
		   });
		 }
	    });
	 $(".checkNum").keypress(function(event) { 
	     var keyCode = event.which;
		 if (keyCode == 46 || (keyCode >= 48 && keyCode <=57)) return true;
         else return false; 
		 }).focus(function() { 
            this.style.imeMode='disabled';  
            this.style.background="#ff0000";		
        });
	 });
	</script>
	</tbody>
	<tfooter>
	<a href="<?php echo url('index'); ?>" class="btn btn-primary">返回</a>
	</tfooter>
  </table>
</div>
</div>

<footer class="navbar-fixed-bottom">
 <div class="text-center">
   <p>浙ICP备17018962号</p>
   <p>©CopyRight 2019-2019 OUYIHAN.COM Inc All Rights Reserved. 义乌兴霆商贸有限公司 版权所有</p>
 </div>
</footer>

</body>
</html>