<?php


class PublicAction extends Action {


    public function header() {
        $this->display();
    }

	
	    public function footer() {

        $this->display();
    }
	
	  public function leftsider() {
        $this->display();
    }
	
	
		  public function login() {
		  $this->assign('webtitle',C('web_title')); 
        $this->display();
    }
	
Public function verify(){
    import('ORG.Util.Image');//本地用
   //import("@.ORG.Image");//去服务器用
    Image::buildImageVerify();
	
	//Image::buildImageVerify(5,1,png,50,26);
	
}
	
	public function dologin() {
	   $this->assign('webtitle',C('web_title')); 
	     
		 $Member=M('Members'); 



        $username =	trim($_POST['username']);	
		$password =	trim($_POST['password']);
		$verify =	trim($_POST['verify']);
	

		if(!$username){$emg="用户不可以为空";$this->assign('emg',$emg);$this->display();} //判定用户名否为空
		if(!$password){$emg="密码不可以为空";$this->assign('emg',$emg);$this->display();}//判定密码是否为空
		$maps['username']=$username;
		$maps['userlevel']=99;
		$uid = $Member->where($maps)->field('uid,userpass,username,create_time,usergroup')->find();

		if(!$uid){$emg="用户不存在";$this->assign('emg',$emg); $this->display();}
		else {
		        if ($uid["userpass"]!=md5($password)){$emg="密码错误";$this->assign('emg',$emg);$this->display();}
				  else{

				       //用户登录成功
				      session('username',$uid["username"]);
				      cookie('nickname',$uid["nickname"]);
					  //session('user_id',$useruid["uid"]);
					  session('admin_key',$uid["uid"]);
					  			   
				         $data = array(
    						'create_time' => time(),
							'last_login_time' =>$uid["create_time"],
    						'last_login_ip' => get_client_ip(),
    				);
    				M('Members')->where("uid=".$uuid["uid"])->save($data);
					$emg="验证成功";$this->assign('emg',$emg);
					$this->redirect(U('Config/index'));
    				
					   }
		      
		
		}
		

		}		

/**
 * 用户退出
 */  
	 public function logout(){
	    session('admin_key',null); 
    	session_destroy();
    	$this->redirect(U('Public/login'));
    }	
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

}

?>