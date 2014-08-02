<?php
// 产品分类显示，增加，修改，删除

   
class AdminAction extends CommonAction {

   
   
   //管理员*************************************************************************************************管理员******
	
	
	 public function adminindex(){
    //获取分类结构
      $Member=M('Members');
      $adminlist=$Member->where('userlevel=99')->select();
     
      $this->assign('adminlist',$adminlist);
	
      $this->display();
   } 
	
	
	
	
	  public function admindelete(){
	 $Member=M('Members');
	    $id=trim($_GET['id']);
	$result=$Member->delete($id); 
		if($result){
    //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
   // $this->success('删除成功');
	$this->redirect(U('Admin/adminindex'));
} else {
    //错误页面的默认跳转页面是返回前一页，通常不需要设置
    $this->error('删除失败');
}

	
	}
   
   
   
   public function adminadd(){
   
   
   $this->display();
   }
   
   
   
   
   
   
   public function adminaddsave(){
	    
	
	$map["username"] =trim($_POST['username']); 
	if (!$map["username"]){ $this->error('用户名不可以为空');}
	$map["userpass"]=md5(trim($_POST['password']));
	$repassword=md5(trim($_POST['repassword']));
	if (!$map["userpass"]){ $this->error('密码不可为空');}
	if($map["userpass"]!=$repassword){$this->error('二次输入的密码不一样');}
	$map["create_time"]=time();
	$map["userlevel"]=99;
	
	$Member=M('Members');
	$result= $Member->add($map);  
    		if($result){
    //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
   // $this->success('删除成功');
	$this->redirect(U('Admin/adminindex'));
} else {
    //错误页面的默认跳转页面是返回前一页，通常不需要设置
    $this->error('修改失败');
}

   }    
   
   
   
   
   
   
   
   
   
   
   
 public function adminedit(){ 
   $id=trim($_GET['id']);
	$Member=M('Members');
	$item= $Member->find($id); 
	//dump($item);
	$this->assign('item',$item);
	
    $this->display();
	}
   
   
   public function admineditsave(){
	    
	$data["uid"] =trim($_POST['uid']); 
	$map["username"] =trim($_POST['username']); 
	if (!$map["username"]){ $this->error('用户名不可以为空');}
	$map["userpass"]=md5(trim($_POST['password']));
	$repassword=md5(trim($_POST['repassword']));
	if (!$map["userpass"]){ $this->error('密码不可为空');}
	if($map["userpass"]!=$repassword){$this->error('二次输入的密码不一样');}
	$map["create_time"]=time();
	$map["userlevel"]=99;
	$Member=M('Members');
	$result= $Member->where($data)->save($map);  
    		if($result){
    //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
   // $this->success('删除成功');
	$this->redirect(U('Admin/adminindex'));
} else {
    //错误页面的默认跳转页面是返回前一页，通常不需要设置
    $this->error('修改失败');
}

   }   
    
   
   
   
   
   
}