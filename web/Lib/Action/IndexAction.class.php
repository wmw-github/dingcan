<?php

class IndexAction extends CommonAction {



    public function index(){
	     // $Shop=D('Shop');
      //  $shoplist=$Shop->limit(8)->order('sid desc')->select();//8个最新商家
      //  $shoplisttop=$Shop->limit(8)->where('ssort=99')->order('sid desc')->select();//8个推荐
      //  $this->assign('shoplist',$shoplist);
      //  $this->assign('shoplisttop',$shoplisttop);
	     // $Link=M('Link');
	     // $llist=$Link->where('type=0')->limit(10)->order('lid desc')->select();//最多显示10个友链
	     // $this->assign('llist',$llist);
	     $Area=D("area");
       $arealist=$Area->select();
       $this->assign('arealist',$arealist);
	     $this->display();
    }

	 public function flist(){
	   $data['fcid']=I('id');//食品分类
	   $fcid=I('id');
     $Food=D('Foodcat');
	   $foodcatlist=$Food->select();
	 //根据id获取分类名
	   $foodcatname=$Food->where("fcid='$fcid'")->getField('fcname');
	   $this->assign('foodcatname',$foodcatname);
	   $this->assign('foodcatlist',$foodcatlist);
     $Food=M('Food');
	   $foodlist=$Food->where($data)->select();
	   $this->assign('foodlist',$foodlist);
	   // dump($foodlist);
	   $this->display();
   }
   public function farealist(){
	$data['farea']=I('id');//地区分类
	$farea=I('id');
    $Area=D('Area');
	$foodarealist=$Area->select();
	$foodareaname=$Area->where("a_id='$farea'")->getField('a_name');
	$this->assign('foodareaname',$foodareaname);
	$this->assign('foodarealist',$foodarealist);
      $Food=M('Food');
	  $foodlist=$Food->where($data)->select();
	  $this->assign('foodlist',$foodlist);
	  $Link=M('Link');
	  $llist=$Link->where('type=0')->limit(10)->order('lid desc')->select();//最多显示10个友链
	  $this->assign('llist',$llist);
	 // dump($foodlist);
	 $this->display();
   }
   	//发送邮件测试
    public function smail(){
    	date_default_timezone_set('PRC');
  	 	$now  = date("Y-m-d H:i:s");//下单时间
    	$Foodorder=D('Foodorder');
    	$maxoid=$Foodorder->max('oid');
    	//echo $maxoid;
    	$query=$Foodorder->where("oid='$maxoid'")->select();
    	//var_dump($query);
    	//echo $query[0]['oid'];
    	$shopid=$query[0]['shopname'];//获取商家id
    	$Foodorderext=D('Foodorderext');
    	$query1=$Foodorderext->where("oid='$maxoid'")->select();
    	//var_dump($query1);
    	$Shop=D('Shop');
    	$email=$Shop->where("sid='$shopid'")->getFieldByName('sid','semail');
    	//echo $email;
    	$mailbody = "
<table width='400' border='1' bordercolordark='#FFFFFF' bordercolorlight='#CCCCCC' cellpadding='5' cellspacing='0'>
  <tr>
    <td width='150' bgcolor='#F7F7F7' align='center'>下单人：</td>
    <td width='250'>".$query[0]['oman']."</td>
  </tr>
  <tr>
    <td width='150' bgcolor='#F7F7F7' align='center'>总计：</td>
    <td width='250'>".$query[0]['orderprice']."</td>
  </tr>
  <tr>
    <td width='150' bgcolor='#F7F7F7' align='center'>联系电话：</td>
    <td width='250'>".$query[0]['otel']."</td>
  </tr>
  <tr>
    <td width='150' bgcolor='#F7F7F7' align='center'>送餐地址：</td>
    <td width='250'>".$query[0]['oaddress']."</td>
  </tr>
  <tr>
    <td bgcolor='#F7F7F7' align='center'>订单备注：</td>
    <td>".$query[0]['morecontent']."</td>
  </tr>
  <tr>
    <td bgcolor='#F7F7F7' align='center'>菜品：</td>
    <td>
    ".$query1[0]['fname']." ".$query1[0]['fcount']."<br>
    ".$query1[1]['fname']." ".$query1[1]['fcount']."<br>
    ".$query1[2]['fname']." ".$query1[2]['fcount']."<br>
    ".$query1[3]['fname']." ".$query1[3]['fcount']."<br>
    ".$query1[4]['fname']." ".$query1[4]['fcount']."
    </td>
  </tr>
  <tr>
    <td bgcolor='#F7F7F7' align='center'>下单时间：</td>
    <td>".$now."</td>
  </tr>
</table>";
    send_mail($email,"新订单-来自在线订餐",$mailbody);
    //$this->assign('title','测试标题');
    $this->display();
	}

}