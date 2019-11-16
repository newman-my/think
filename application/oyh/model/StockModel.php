<?php
namespace app\oyh\model;
use think\Db;
use think\Model;


class StockModel extends Model{
	
	public function get_deliver_stock($startDate,$endDate){
		$dtstdate=strtotime($startDate)-432000;
		$sdt=date("Y-m-d",$dtstdate);
		$str="select b.code as code,fhdate as fh_date,b.scode as scode,name,sbox,volume,amt from 
 (select a.code as code,concat(ifnull(in_wh_code,''),ifnull(cust_code,''))as 
 scode,bill_date, max(box)as sbox,max(box_volume) as volume,
 sum(product_bill.qty)as sqty,ifnull(sum(net_amount),'') as amt,max(fh_date) as fhdate from
(select id,code,in_wh_code,cust_code,bill_date from bill_index
 where bill_date between '".$sdt."' and '".$endDate."' 
 and bill_type in ('MOVE_NOTE','SO2','ZENG_SONG'))a inner join
 product_bill on a.id=product_bill.bill_index_id inner join 
 product_bill_box on product_bill.id=product_bill_box.product_bill_id
 group by a.code having fhdate between '".$startDate."' and '".$endDate."' order by fhdate desc)b
 inner join (select warehouse_code,warehouse_name as name from stock group by warehouse_code)c on
 b.scode=c.warehouse_code where (select count(1) from fh_wait where b.code=fh_wait.code)=0";
		$stock=Db::query($str);
		return $stock;
	}
	static public function get_stock_info(){
		$str="select code,name from v_shop where (select count(1) from wl_info where v_shop.code=wl_info.code)=0";
		
		 $shop_sting=Db::query($str);
         return $shop_sting;		 
		
	}
	static public function get_wl_unit(){
		$str="select wl_code,name from v_wl_unit where name<>'Otest'";
		return Db::query($str);
	}
	static public function resExists($table,$filed,$value){
		$resExists=Db::name($table)->where('code',$value)->select();
		if($resExists->isEmpty()){
			return false;
		}else{
			return true;
		}
	}
	static public function addData($table,$data){
		$wlInfo=Db::name($table)->insert($data);
		return $wlInfo;
	}
	static public function addAll($table,$data){
		$addInfo=Db::table($table)->insertAll($data);
		return $addInfo;
	}
	static public function getOutgoods(){
		$str="select id,单号,仓库编码,仓库名称,收货人,电话,货运部名称,货运部编码,件数,体积,发货单价,
		体积*发货单价 as 运费 from (select id,stock_code,code as 单号,box as 件数,volume as 体积
		from fh_wait where status=0) a inner join (select v_shop.code as 仓库编码,v_shop.name as 仓库名称,
		v_shop.contact_person as 收货人,v_shop.contact_mobile as 电话,wl_info.fh_price as 发货单价,
		v_wl_unit.name as 货运部名称,v_wl_unit.wl_code as 货运部编码 from v_shop inner join wl_info
		on v_shop.code=wl_info.code inner join v_wl_unit on wl_info.wl_code=v_wl_unit.wl_code)b 
		on a.stock_code=b.仓库编码 order by 货运部名称 desc";
	}
	
}
?>