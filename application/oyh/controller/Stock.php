<?php
namespace app\oyh\controller;
use think\Controller;
use app\oyh\model\StockModel;
use think\Request;

class Stock extends Controller{
	
	public function index(){
		$Stock= new StockModel();
		$startDate=date("Y-m-d",time()-86400);
		$endDate=date("Y-m-d",time()+86400);
		$reslut=$Stock->get_deliver_stock($startDate,$endDate);
		$this->assign("deliver",$reslut);
		$sumrelt=array('box'=>0,'volume'=>0,'amt'=>0);
		foreach($reslut as $key){
			$sumrelt['box'] += $key['sbox'];
			$sumrelt['volume'] +=$key['volume'];
			$sumrelt['amt'] +=floatval($key['amt']);
		}
		$this->assign("sumrelt",$sumrelt);
		return $this->fetch();
	}
	public function fh_query(){
	   $startDate=Request::instance()->param('start');
 	   $endDate=Request::instance()->param('endstart');
	   $Stock=new StockModel();
	   $reslut=$Stock->get_deliver_stock($startDate,$endDate);
	   return $reslut;
   
	}
	public function sting(){
		$shop_sting=StockModel::get_stock_info();
		$wl_unit=StockModel::get_wl_unit();
		$this->assign('shop',$shop_sting);
	    $this->assign('unit',$wl_unit);
		return $this->fetch();
		
	
	}
	public function add(){
		$data['code']=Request::instance()->param('code');
		$data['name']=Request::instance()->param('name');
		$data['wl_code']=Request::instance()->param('wlCode');
		$data['js_price']=Request::instance()->param('jsPrice');
		$data['fh_price']=Request::instance()->param('fhPrice');
		$resExists=StockModel::resExists('wl_info','code',$data['code']);
		if ($resExists) {
			echo "记录已存在！";
		}else{
		$addId=StockModel::addData('wl_info',$data);
		 if($addId<>0){
			echo "保存成功！";
		 }
		}
	}
	public function addWldj(){
		$data=Request::instance()->post('data/a');
		$fh_data=[];
		foreach($data as $value){
		$fh_data[]=[
		 'code'=>$value['dh'],
		 'sh_date'=>$value['sh_date'],
		 'stock_code'=>$value['ck_bm'],
		 'box'=>$value['box_num'],
		 'volume'=>$value['tj'],
		 'amt'=>$value['je'],
		 'status'=>0
		];
	   }
	  $addInfo=StockModel::addAll('fh_wait',$fh_data);
      if($addInfo!=0){
		 $this->success('保存成功！','index');
	  }else{
		 $this->error("保存失败！");  
	  }
	
	   
	}
	public function outgoods(){
	  $mydata=StockModel::getOutgoods();
	  $data=[];
	  
	  foreach($mydata as $v){
		  if(!in_array($v['货运部名称'],$data)){
			array_push($data,$v['货运部名称']);
		  }
		  
	  }
	  $v="okok";
	  $this->assign('v',$v);
	  $this->assign('data',$data);
	  $this->assign('mydata',$mydata);
	  return $this->fetch();
	}
}
?>