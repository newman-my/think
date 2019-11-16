<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\www\think\public/../application/index\view\product_controller\index.html";i:1566807042;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<title>OUYIHAM ERP二次系统</title>
<meta charset="utf-8">
<link href="app\index\static\bootstrap-3.3.7-dist\css\bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1>ouyihan erp二次系统</h1>
<table>
<tr>
<td>商品名称</td>
<td>商品编码</td>
<td>供应商名称</td>
<td>规格</td>
<td>中包规格</td>
<td>商品路径</td>
</tr>
<?php if(is_array($products) || $products instanceof \think\Collection || $products instanceof \think\Paginator): $key = 0; $__LIST__ = $products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$product): $mod = ($key % 2 );++$key;?>
<tr>
<td><?php echo $product->getData('name'); ?></td>
<td><?php echo $product->getData('code'); ?></td>
<td><?php echo $product->getData('main_supplier_name'); ?></td>
<td><?php echo $product->getData('model'); ?></td>
<td><?php echo $product->getData('spec'); ?></td>
<td><?php echo $product->getData('paths'); ?></td>
</tr>
<?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<?php echo $products->render(); ?>
</body>
</html>