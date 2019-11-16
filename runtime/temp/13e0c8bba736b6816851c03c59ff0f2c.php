<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:60:"D:\www\think\public/../application/oyh\view\stock\index.html";i:1573886288;s:45:"D:\www\think\application\oyh\view\layout.html";i:1570609351;s:52:"D:\www\think\application\oyh\view\public\header.html";i:1570608788;s:52:"D:\www\think\application\oyh\view\public\footer.html";i:1573884428;}*/ ?>
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
	    <input type="text" id="start" class="form-control">
	    <span class="input-group-addon">
		<span class="glyphicon glyphicon-calendar"></span>
		</span>
	   </div>
	  </div>
	  <div class="panel-footer">
	    <button type="button" id="fh_query" class="btn btn-primary">系统装箱查询</button>
	  </div>
	</div>
	<div class="panel panel-default">
	   <div class="panel-heading">
    	  <label class="panel-title">发货处理</label>
		</div>
	  <div class="panel-body">
	   <a id="sting" class="btn btn-primary" href="<?php echo url('outGoods'); ?>"> 选 择 发 货 </a>
	  </div>
	</div>
	<div class="panel panel-default">
	   <div class="panel-heading">
    	  <label class="panel-title">系统设置</label>
		</div>
	  <div class="panel-body">
	   <a id="sting" class="btn btn-primary" href="<?php echo url('sting'); ?>">发货信息设置</a>
	 </div>
	</div>
   </form>
  </div>
  <script>
$(function(){
   var d=new Date();
   d.setTime(d.getTime()-24*60*60*1000);
 $("#datetimepicker1").datetimepicker({
    format:"YYYY-MM-DD",
	locale:moment.locale("zh-cn"),
	defaultDate:d
  });
 
 $("#datetimepicker2").datetimepicker({
    format:"YYYY-MM-DD",
	locale:moment.locale("zh-cn"),
	defaultDate:new Date()
 });
});
$(function(){
	  $("#fh_query").click(function(){
		var starDate=$("#datetimepicker1").find("input").val();
	   	var endDate=$("#datetimepicker2").find("input").val();
		 $.post("<?php echo url('fh_query'); ?>",
           {
            start : starDate,
            endstart : endDate,
            },
          function(data,status){
		    var str="";
			var sumsbox=0;
			var sumvolume=0.00;
			var sumamt=0;
		    for (var i=0;i<data.length;i++){
			    str +="<tr><td>"+(data[i]['code'])+"</td>";
				str +="<td>"+(data[i]['fh_date'])+"</td>";
				str +="<td>"+(data[i]['scode'])+"</td>";
				str +="<td>"+(data[i]['name'])+"</td>";
				str +="<td>"+(data[i]['sbox'])+"</td>";
				str +="<td>"+(data[i]['volume'])+"</td>";
				if(data[i]['amt']){
				str +="<td>"+(data[i]['amt'])+"</td></tr>";
				}else{
				str +="<td>"+"</td></tr>";
				}
				sumsbox+=parseInt(data[i]['sbox']);
				sumvolume+=parseFloat(data[i]['volume'],4);
				if(data[i]['amt']){
				sumamt+=parseFloat(data[i]['amt']);
				}
			  } 
			   $("#sdata").html(str);
			   $("#sumbox").text(sumsbox);
			   $("#sumvol").text(sumvolume);
			   $("#sumamt").text(sumamt);
			 });
		  });
   });
</script>
<div class="col-md-10">
  <table class="table">
    <caption class="text-center">系装箱验货汇总表</caption>
	<thead>
	  <tr>
	    <th>单据编号</th>
	    <th>扫货日期</th>
		<th>仓库编码</th>
	    <th>入库仓库</th>
	    <th>装箱数量</th>
	    <th>装箱体积</th>
	    <th>装箱金额</th>
	  </tr>
	</thead>
	<tbody id="sdata">
	 <?php if(is_array($deliver) || $deliver instanceof \think\Collection || $deliver instanceof \think\Paginator): $key = 0; $__LIST__ = $deliver;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$deliver): $mod = ($key % 2 );++$key;?>
	  <tr>
	    <td><?php echo $deliver['code']; ?></td>
		<td><?php echo $deliver['fh_date']; ?></td>
		<td><?php echo $deliver['scode']; ?></td>
		<td><?php echo $deliver['name']; ?></td>
		<td><?php echo $deliver['sbox']; ?></td>
		<td><?php echo $deliver['volume']; ?></td>
		<td><?php echo $deliver['amt']; ?></td>
	  </tr>
	 <?php endforeach; endif; else: echo "" ;endif; ?>
	</tbody>
	<tfooter>
	  <td><button type="button" class="btn btn-primary" id="saveErp">保存</button></td>
	  <td colspan="3">合计</td>
	  <td id="sumbox"><?php echo $sumrelt['box']; ?></td>
	  <td id="sumvol"><?php echo $sumrelt['volume']; ?></td>
	  <td id="sumamt"><?php echo $sumrelt['amt']; ?></td>
	</tfooter>
  </table>
  <script>
    $(function(){
	$("#saveErp").click(function(){
	  var data=[];
	  var bj=true;
	  var obj=$("#sdata").children();
	       $.each(obj,function(index,item){
		    var b=$(item).children();
			if(b[5].innerHTML/b[4].innerHTML>0.1){
			  if(confirm(b[0].innerHTML+" 体积异常,点击（确定）请重新检查，点（取消）将忽略!")){
			    $(b[5]).attr("contenteditable",true);
			    $(b[5]).focus();
				bj=false;
                return false;
			   }
		  }
		  if(b[6].innerHTML==''){
		   data[index]={
		    'dh':b[0].innerHTML,
			'sh_date':b[1].innerHTML,
			'ck_bm':b[2].innerHTML,
			'ck_name':b[3].innerHTML,
			'box_num':b[4].innerHTML,
			'tj':b[5].innerHTML,
			'je':0
		   }
		   }else{
		   data[index]={
		    'dh':b[0].innerHTML,
			'sh_date':b[1].innerHTML,
			'ck_bm':b[2].innerHTML,
			'ck_name':b[3].innerHTML,
			'box_num':b[4].innerHTML,
			'tj':b[5].innerHTML,
			'je':b[6].innerHTML
		   }
		   }
		 });
		 if(bj){
		 $.post('addWldj',{'data':data},function(data,status){
		    if(status=='success'){
			 alert('保存成功！');
			 window.location.reload();
			}else{
			 alert('保存失败！');
			}
		
		 });
		}
	});
 });
  </script>
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