<?php

class ShopAction extends CommonAction {



    public function index(){
      $Shop=M('Shop');//实例化数据模型
	  $shoplist=$Shop->limit(9)->order('sid desc')->select();//首页显示9个图片

	  $this->assign('shoplist',$shoplist);

	  $Link=M('Link');
	  $llist=$Link->where('type=0')->limit(10)->order('lid desc')->select();//最多显示10个友链
	  $this->assign('llist',$llist);
	  $this->display();
   }

	 public function flist(){
	 $data['scid']=I('id');//食品分类
	 $scid=I('id');
     $Food=D('Foodcat');
	 $foodcatlist=$Food->select();
	 //根据id获取分类名
	 $foodcatname=$Food->where("fcid='$scid'")->getField('fcname');
	 $this->assign('foodcatname',$foodcatname);
	 $this->assign('foodcatlist',$foodcatlist);
      $Shop=M('Shop');
	  $shoplist=$Shop->where($data)->select();
	 
	  $this->assign('shoplist',$shoplist);

	 // dump($foodlist);
	 $this->display();
   }
//测试ajax
public function test(){
	 $data['scid']=I('id');//食品分类
	 $scid=I('id');
	 $aid = session('area');
	 //$aid=session('sarea');
	 //echo $aid;
	 //$data['sarea']=1;//地区分类
	 //$sarea= $_GET["_URL_"][3];
	 //echo $sarea;
     //$Food=D('Foodcat');
	 //$foodcatlist=$Food->select();
	 //根据id获取分类名
	 //$foodcatname=$Food->where("fcid='$scid'")->getField('fcname');
	 //$this->assign('foodcatname',$foodcatname);
	 //$this->assign('foodcatlist',$foodcatlist);
      $Shop=M('Shop');
	  $shoplist=$Shop->where($data)->where("sarea='$aid'")->select();
	 
	  $this->assign('shoplist',$shoplist);

	 // dump($foodlist);
	 $this->display();
   }


   public function farealist(){
   	date_default_timezone_set('PRC');
  	$now  = date("H");//当前时间小时

	$data['sarea']=I('id');//地区分类
	$sarea=I('id');
	Session('area',$sarea);
	//echo session('area');
    $Area=D('Area');
	$foodarealist=$Area->select();
	$foodareaname=$Area->where("a_id='$sarea'")->getField('a_name');
	$this->assign('foodareaname',$foodareaname);
	$this->assign('foodarealist',$foodarealist);
    $Shop=M('Shop');
    $fcid=$Shop->where($data)->getField('fcid');
    $Food=D('Foodcat');
	 $foodcatlist=$Food->select();
	 //全部商家
	//$shoplist=$Shop->where($data)->order('sid desc')->select();
	 //正在营业
	$shoplist=$Shop->where($data)->where("opentime<='$now' AND closetime>='$now'")->order('sid desc')->select();
	//咱不营业
	$shoplist1=$Shop->where($data)->where("opentime>'$now' OR closetime<'$now'")->order('sid desc')->select();
	//dump($shoplist);
	// $opentime=$shoplist[1]['opentime'];
	// dump($opentime);
	// echo count($shoplist);
	//置顶推荐
	$shoplisttop=$Shop->limit(4)->where($data)->where('ssort=99')->order('sid desc')->select();//4个推荐
	$this->assign('shoplisttop',$shoplisttop);
	$this->assign('shoplist',$shoplist);
	$this->assign('shoplist1',$shoplist1);
	$Link=M('Link');
	  $llist=$Link->where('type=0')->limit(10)->order('lid desc')->select();//最多显示10个友链
	  $this->assign('llist',$llist);
	// dump($foodlist);
	 //判断是否营业
	//date_default_timezone_set('PRC');
  	//$now  = date("H");//当前时间小时
  	//echo $now;
  	//老方法判断是否营业，弃用，新方法在数据库中where条件判断
  	// for($i = 0; $i <count($shoplist); $i++) {
   //  		if($shoplist[$i]['opentime']<$now and $now<$shoplist[$i]['closetime']){
   //  			//$stauts="营业";
   //  			//echo $stauts;
   //  			$Shop=D("Shop");
   //  			$data['sid']=$shoplist[$i]['sid'];
   //  			$map['yingye']="营业";
   //  			$res=$Shop->where($data)->save($map);
   //  			//dump($res);

   //  		}
   //  		else{
   //  			//$stauts="关门";
   //  			//echo $stauts;
   //  			$Shop=D("Shop");
   //  			$data['sid']=$shoplist[$i]['sid'];
   //  			$map['yingye']="关门";
   //  			$res=$Shop->where($data)->save($map);
   //  			//dump($res);

   //  		}
	 	// }
	 
	$this->display();
   }

   public function uc(){//用户中心
   	  $data['fshop']=I('id');//商家
   	  $id=I('id');
   	  Session('shopid',$id);
   	  //echo session('shopid');
   	  $Shop=M('Shop');
   	  $shopinfo=$Shop->where("sid='$id'")->select();
   	  $shopname=$Shop->where("sid='$id'")->getField('sname');
   	  $sarea=$Shop->where("sid='$id'")->getField('sarea');//获取商家所属地区
   	  $Area=D('Area');
	  $foodarealist=$Area->select();
	  $foodareaname=$Area->where("a_id='$sarea'")->getField('a_name');
	  $this->assign('foodareaname',$foodareaname);
      $Food=M('Food');//实例化数据模型
	  $foodlist=$Food->where("fshop='$id'")->select();//首页显示9个图片
	  $this->assign('shopinfo',$shopinfo);
	  $this->assign('foodlist',$foodlist);
	  $this->assign('shopname',$shopname);
	  $Link=M('Link');
	  $llist=$Link->where('type=0')->limit(10)->order('lid desc')->select();//最多显示10个友链
	  $this->assign('llist',$llist);
	  //$this->assign('sarea',$sarea);
	  //评论列表
	  $Comment=D('Comment');
      import('ORG.Util.Page');// 导入分页类
      $count      = $Comment->count();// 查询满足要求的总记录数
      //echo $count;
      $Page       = new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
      $show       = $Page->show();// 分页显示输出
          // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
      $commentlist = $Comment->where("shop_id='$id'")->limit($Page->firstRow.','.$Page->listRows)->order('comment_id desc')->select();
      //var_dump($commentlist);
      $star=$Comment->where("shop_id='$id'")->avg('star');//获取评论得分的平均值
      $this->assign('page',$show);// 赋值分页输出

      $this->assign('commentlist',$commentlist);
      $this->assign('star',$star);
      
	  $this->display();
   }
}