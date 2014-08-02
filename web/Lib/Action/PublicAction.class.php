<?php
// 登录文件
class PublicAction extends CommonAction {
    public function header(){
      
    $this->display();
   }
       public function head(){
      
    $this->display();
   }
       public function foot(){
	
	
    $this->display();
   }
   
   
          public function _mpty($name){
            //把所有城市的操作解析到city方法
            $this->display('Public:404');
        }
   
 	
Public function verify(){
   import('ORG.Util.Image');//本地用
   //import("@.ORG.Image");//去服务器用
    //Image::buildImageVerify();
	
	Image::buildImageVerify(5,1,png,50,26);
	
}

Public function checkverify(){
  if($_SESSION['verify'] != md5($_POST['param'])) {
   	echo '{
			"info":"请输入正确的验证码",
			"status":"n"
		 }'; 
}

else{	echo '{
			"info":"",
			"status":"y"
		 }'; }
}

 /**
 * 用户注册
 */  
     	public function register() {
	    
          if ($_SESSION['user_id']){
      $this->redirect(U('Member/index'));}

	   
		$this->display();
		}
		
		//注册验证

       public function doregister() {
	   C('TOKEN_ON',false);
	   
         			  session('username',null);
				      cookie('nickname',null);
					  cookie('userpic',null);
					  session('user_id',null);
	     $Member=D('Members');
		 $map['username']=$_POST['username'];
		 $map['userpass']=md5($_POST['userpass']);
		 $map['useremail']=$_POST['useremail'];
		 $map['create_time']=time();
		 $map['usergroup']=1;
		 $result = $Member->create($map);

	     if (!$result){
    // 如果创建失败 表示验证没有通过 输出错误提示信息
exit($Member->getError());
}else{
    // 验证通过 可以进行其他数据操作
	$Member->add($map);
			$con['username']=$map['username'];
		$useruid = $Member->where($con)->field('uid,userpass,nickname,username')->find();
		 //用户登录成功
				      session('username',$useruid["username"]);
				      cookie('nickname',$useruid["nickname"]);
					  session('user_id',$useruid["uid"]);
					  					   
				         $data = array(
    						'last_login_time' => time(),
    						'last_login_ip' => get_client_ip(),
    				);
    				M('Members')->where("uid=".$useruid["uid"])->save($data);
	$this->redirect(U('Member/myorder'));
}

	  

	   
		
		}		     


 /**
 * 用户名,邮箱重复验证
 */  

Public function checkuser(){
    $Member=M('Members');
	$data['username']=$_POST["param"];
	$reusername=$Member->where($data)->select();
	
  if(empty($reusername)) {
   
		 echo '{
			"info":"",
			"status":"y"
		 }'; 
}

else{		echo '{
			"info":"用户名已存在，请更换个试试",
			"status":"n"
		 }'; 
}

}
//邮箱重复验证
Public function checkemail(){


     $Member=M('Members');
	$data['useremail']=$_POST["param"];
	$reuseremail=$Member->where($data)->select();
	
  if(empty($reuseremail)) {
   
		 echo '{
			"info":"",
			"status":"y"
		 }'; 
}

else{		echo '{
			"info":"该邮箱已注册，请更换其他邮箱！",
			"status":"n"
		 }'; 
}
}





	  
	  
/**
 * 用户登录
 */  
     	public function login() {
		
	    if ($_SESSION['user_id']){
      $this->redirect(U('Member/index'));}
         $reurl =urlencode($_GET['reurl']);	
		 
		$this->assign('reurl',$reurl);
	   
		$this->display();
		}
		
		//验证用户名通过后跳转到源URL

       public function dologin() {
	              			  session('username',null);
				      cookie('nickname',null);
					  cookie('userpic',null);
					  session('user_id',null);
		 $Member=D('Members');     
		
		$username =	$_POST['username'];	
		$password =	$_POST['password'];	
        $reurl =	$_GET['reurl'];			
		
		if(!$username){$this->error('用户名不可以为空');} //判定用户名否为空
		if(!$password){$this->error('密码不可以为空');}//判定密码是否为空
		$con['username']=$username;
		$useruid = $Member->where($con)->field('uid,userpass,nickname,username')->find();

		if(!$useruid){$this->error('用户不存在');}
		else {
		        if ($useruid["userpass"]!=md5($password)){$this->error('密码错误');}
				  else{

				       //用户登录成功
				      session('username',$useruid["username"]);
				      cookie('nickname',$useruid["nickname"]);
					  session('user_id',$useruid["uid"]);
					  					   
				         $data = array(
    						'last_login_time' => time(),
    						'last_login_ip' => get_client_ip(),
    				);
    				M('Members')->where("uid=".$useruid["uid"])->save($data);
    				//$this->success("登录验证成功！",$reurl);
					//header("location:U("M/index")");
					 header("location:".$reurl);
					   }
		      
		
		}
		

		}		

/**
 * 用户退出
 */  
	 public function logout(){
    	session_destroy();
		         
				      cookie('nickname',null);
					  cookie('userpic',null);
					  
    	$this->redirect("/index");
    

/**
 * 第三方数据登录
 */
		public function getlogin($type = null){
		empty($type) && $this->error('参数错误');
		session('reurl',null);
		$reurl=$_GET['reurl'];
        session('reurl',$reurl);		
       //  dump(session('reurl'));
		//加载ThinkOauth类并实例化一个对象
	import("ORG.ThinkSDK.ThinkOauth");
		$sns  = ThinkOauth::getInstance(qq);
       // dump($type);
		//跳转到授权页面
		redirect($sns->getRequestCodeURL());
	}
		//数据返回数据

       	//授权回调地址
	public function callback($type = null, $code = null){
		(empty($type) || empty($code)) && $this->error('参数错误');

		//加载ThinkOauth类并实例化一个对象
		import("ORG.ThinkSDK.ThinkOauth");
		$sns  = ThinkOauth::getInstance($type);

		//腾讯微博需传递的额外参数
		$extend = null;
		if($type == 'tencent'){
			$extend = array('openid' => $this->_get('openid'), 'openkey' => $this->_get('openkey'));
		}

		//请妥善保管这里获取到的Token信息，方便以后API调用
		//调用方法，实例化SDK对象的时候直接作为构造函数的第二个参数传入
		//如： $qq = ThinkOauth::getInstance('qq', $token);
		$token = $sns->getAccessToken($code , $extend);
		         	session('username',null);
				      cookie('nickname',null);
					  cookie('userpic',null);
					  session('user_id',null);

		//获取当前登录用户信息
		if(is_array($token)){
		$user_info = A('Type', 'Event')->$type($token);
		 $Members=D('Members');
		$Oauthmember=M('Oauthmember');
		$con['openid']=$token["openid"];

		$ropenid=$Oauthmember->where($con)->find();

		if ($ropenid['openid']){//判定用户是否已存在，存在直接写入
		    $data= array();
			$data['uid']=$ropenid['uid'];
            $data['last_login_ip']=get_client_ip();
			$data['last_login_time']=time();
			$data['nickname']=$user_info["nick"];
			$data['Oauthmember']=array(
             'type'    =>$user_info["type"],
              'name'    =>$user_info["nick"],
			  'head_img'    =>$user_info["head"],
              'create_time'    =>time(),				  
			  'access_token'    =>$token["access_token"],
			  'expires_date'    =>$token["expires_in"],
			  'openid'    =>$token["openid"],
              		  
              );
			 dump($data);
			 $cons['uid']=$ropenid['uid'];
			 $Oauthmember->where($cons)->save($data['Oauthmember']);
			$result=$Members->relation(true)->save($data);//保存主表信息
			$useruid = $Members->relation(true)->where($cons)->find();//调出用户登录信息
		
		

		}else {//若不存存，新增数据
		
		
			 $Members=D('Members');
			
			$map= array();

			$map['last_login_ip']=get_client_ip();
			$map['usergroup']="1";
			$map['last_login_time']=time();
			$map['nickname']=$user_info["nick"];
			$map['oauthmember']=array(
             array( 'type'    =>$user_info["type"],
              'name'    =>$user_info["nick"],
			  'head_img'    =>$user_info["head"],
			  'create_time'    =>time(),
			  'access_token'    =>$token["access_token"],
			  'expires_date'    =>$token["expires_in"],
			  'openid'    =>$token["openid"],), 
			  
              );
             $result=$Members->relation(true)->add($map);
			 $maps['openid']=$token["openid"];
			 $useruid = $Members->relation(true)->where($maps)->select();
			
		
		}
	
		
					  session('username',$useruid["oauthmember"][0]["name"]);
				      cookie('nickname',$useruid["oauthmember"][0]["name"]);
					  cookie('userpic',$useruid["oauthmember"][0]["head_img"]);
					  session('user_id',$useruid["uid"]);
		      
		     		$reurl=session('reurl');
					if ($reurl){
					 //$this->redirect("Index/index");
					 header("location:".$reurl);
					} else {
					//dump($reurl);
					$this->redirect("Index/");
					
					}
        
	           
		
           
			echo("<h1>恭喜！使用 {$type} 用户登录成功</h1><br>");
			echo("授权信息为：<br>");
			dump($token);
			echo("当前登录用户信息为：<br>");
			dump($user_info);
		}
	}    



















 
}