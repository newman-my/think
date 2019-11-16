<?php
namespace app\index\controller;
use app\index\model\Product;
class Index
{
    public function index()
    {
        $Product=new Product;
        $product=$Product->find();
        var_dump($product);
    }
}
