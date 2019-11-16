<?php
namespace app\index\controller;
use think\Controller;

class Test extends Controller{
    
    public function index(){
       $htmls=$this->fetch();
       return $htmls;
    }
}
?>