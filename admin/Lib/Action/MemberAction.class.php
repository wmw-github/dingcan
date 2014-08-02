<?php

//
class MemberAction extends CommonAction {


   
   //订单查询页

   
   
     public function _empty($name){
            $this->display('Public:404');
        }
		

		public function orderdetail(){
				$id=I('id');
				$data['oid']=$id;
		        
         $Orders=D('Foodorder');// 实例化User对象
       
        $orderdetail = $Orders->relation(true)->where($data)->find();
		
        $this->assign('orderdetail',$orderdetail);// 赋值数据集
        
        $this->display(); // 输出模板
		
        
     
        }
		
		
		//店铺订单列表查看
	   public function shoporder(){
         $Orders=M('Foodorder');// 实例化User对象
        import('ORG.Util.Page');// 导入分页类
		
		
        $count      = $Orders->count();// 查询满足要求的总记录数
         $Page       = new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
          // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $shoporderlist = $Orders->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('shoporderlist',$shoporderlist);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
		
        
     
        }


	
  //出单操作将订单状态变成完成
     public function orderend(){
	      $id=I('id');
         $Orders=M('Foodorder');
         $map['oid']=$id;
		$data['orderstatus']=4;
		$data['order_endtime']=time();
$result = $Orders->where($map)->save($data);
if($result){ 
	$this->redirect(U('Member/shoporder'));
} else {
    
    $this->error('操作失败');
}
		
   }   
   
	
}