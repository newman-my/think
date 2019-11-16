<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Product;
class ProductController extends Controller
{
    public function index()
    {
        try{
            $pageSize=500;
            $Product=new Product();
            $products=$Product->paginate($pageSize);
            $this->assign('products',$products);
            $htmls=$this->fetch();
            return $htmls;
        }catch(\think\Exception\HttpResponseException $e){
            throw $e;
        }catch(\Exception $e){
            return $e->getMessage();
        }
        
    }
}
?>