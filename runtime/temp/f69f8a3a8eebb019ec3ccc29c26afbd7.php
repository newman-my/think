<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\www\think\public/../application/oyh\view\login_controller\index.html";i:1568506349;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    OUYIHAN二次数据运营中心
  </title>
 

  <link rel="stylesheet" href="/think/public/static/bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery.js"></script>
  <script src="/think/public/static/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
   <style>
            /*web background*/
			body{height:100%;
			background-image:url("/think/public/static/imgs/bg.png");
			background-repeat:no-repeat;
			background-attachment: fixed;
			background-size:cover;
		  -webkit-background-size: cover;  
          -o-background-size: cover;  
          -moz-background-size: cover;  
          -ms-background-size: cover;
			
			}
			.wrap{
			display:flex;
			height:690px;
			margin:auto;
			justify-content:center;
			align-items:center;
			}
            .son{
			color:white;
			padding-top:0;
			padding-bottom:5px;
			border:2px solid white;
			background-color:rgba(0,26,85,0.4);
			}
			.form-group{
			margin-top:5px;
			display:block;
			}
			legend{
			color:white;
			}
			.form-title{
			 margin:0;
			 padding:0;
			
			}
    </style>

    </style>
</head>
 <body>
	<div class="row wrap">
	  <div class="son">
	    <form action="<?php echo url('login'); ?>"role="form" method="post" class="form-inline">
			<h1 class="form-title">ouyihan</h1>
		  <fieldset>
		    <legend class="text-center">用户登录</legend>
		    <div class="form-group col-md-12 text-center">
			<span class="glyphicon glyphicon-user"></span>
			<input type="text" class="form-control" name="username" placeholder="username..."/>
			</div>
			<div class="form-group col-md-12 text-center">
			<span class="glyphicon glyphicon-lock"></span>
			<input type="password" class="form-control" name="password" />
			</div>
			<div class="row form-group col-md-12 text-center">
			<button class="btn btn-default" type="submit">登 录</button>
			</div>
		  </fieldset>
		</form>
	  </div>
	
	</div>
</body>
</html>