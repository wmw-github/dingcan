<?php
// 全局文件
//基础调用文件
class CommonAction extends Action {
   function _initialize() {

    $Food=D('Foodcat');
	$foodcatlist=$Food->select();
	$this->assign('foodcatlist',$foodcatlist);
	$Area=D('Area');
	$foodarealist=$Area->select();
	$this->assign('foodarealist',$foodarealist);

   		import('ORG.Net.Cart');
		$this->cart = new Cart ();
	  $cartdata = $this->cart->contents ();
	//dump($cartdata);
	$total = $this->cart->total ();
	$total_items = $this->cart->total_items ();
	$this->assign ( 'cartdata', $cartdata );//购物车数据
	$this->assign ( 'total', $total );//购物车总额
	$this->assign ( 'total_items', $total_items );//购物车总额

 	$Config=M('Config');
	 //处理基本信息

	$configitem=$Config->field('name,value,cate,type')->select();
	 foreach ($configitem as $value) {
	   if (($value['cate']==1&&$value['type']==3)||($value['cate']==2&&$value['type']==3) ){
	    $config[$value['name']]=json_decode($value['value'],true);	
		$config[$value['name']]=$config[$value['name']][$value['name']];
		
	   }else{
	   $config[$value['name']]=$value['value']; 
	   }
	 }
	$config["THINK_SDK_QQ"]['CALLBACK']=$config["url"].'/index.php?m=Public&a=callback&type=qq';
	$config["THINK_SDK_SINA"]['CALLBACK']=$config["url"].'/index.php?m=Public&a=callback&type=sina';
	$config["THINK_SDK_TENCENT"]['CALLBACK']=$config["url"].'/index.php?m=Public&a=callback&type=tencent';
	$config["THINK_SDK_TAOBAO"]['CALLBACK']=$config["url"]. '/index.php?m=Public&a=callback&type=taobao';
	$config["THINK_SDK_BAIDU"]['CALLBACK']=$config["url"]. '/index.php?m=Public&a=callback&type=baidu';
		$times=explode(",",$config['opentime']);
		
    $config["openstime"]=$times['0'];
	$config["openetime"]=$times['1'];
	

   

	   C($config,$config);	
	 //配置信息结束以C函数调用即可

	$this->assign('name',C('name'));
	$this->assign('title',C('title'));
	$this->assign('url',C('url'));
	$this->assign('logo',C('logo'));
	$this->assign('tel',C('tel'));
	$this->assign('icp',C('icp'));
	$this->assign('address',C('address'));
	$this->assign('pspay',C('pspay'));
	$this->assign('notice',C('notice'));
	$this->assign('psarea',C('psarea'));
	$this->assign('startpay',C('startpay'));
	$this->assign('openstime',C('openstime'));
	$this->assign('openetime',C('openetime'));
	//营业时间处理

 	//取用户登录信息 
    $uid=session('user_id');
	$username=session('username');
	$nickname=cookie('nickname');
	$userpic=cookie('userpic');
	$this->assign('uid',$uid);
	$this->assign('username',$username);
	$this->assign('nickname',$nickname);
	$this->assign('userpic',$userpic);
	 //手机模板 
		


    $Pages=M('Pages');
	$pagelist=$Pages->limit(4)->select();
	$this->assign('pagelist',$pagelist);
	
	$Articlecat=M('Article_cat');
	$articlelist=$Articlecat->select();
	$this->assign('articlelist',$articlelist);
	
		$Article=M('Article');
	$toplist=$Article->where('acid=15')->limit(3)->order('aid desc')->select();
	$this->assign('toplist',$toplist);
	
}

}