<?php

/**
 * 商家分类，增加，删除
 */


class ShopAction extends CommonAction {

 

    public function index() {
	      $Shop=D('Shop');
		    import('ORG.Util.Page');// 导入分页类
        $count      = $Shop->count();// 查询满足要求的总记录数
        $Page       = new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
          // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $shoplist = $Shop->limit($Page->firstRow.','.$Page->listRows)->order('sid desc')->select();
        $this->assign('page',$show);// 赋值分页输出

		    $this->assign('shoplist',$shoplist);
        $this->display();
    }
    //商家评论
    public function comment() {
        $Comment=D('Comment');
        import('ORG.Util.Page');// 导入分页类
        $count      = $Comment->count();// 查询满足要求的总记录数
        $Page       = new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
          // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $commentlist = $Comment->limit($Page->firstRow.','.$Page->listRows)->order('comment_id desc')->select();
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('commentlist',$commentlist);
        $this->display();
    }

 

 //分类显示
     public function alist(){
        $map['fcid']=$this->_get('id');
    	  $Food=D('FoodView');
    	  import('ORG.Util.Page');// 导入分页类
        $count      = $Food->where($map)->count();// 查询满足要求的总记录数
        $Page       = new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
          // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $shoplist= $Food->where($map)->limit($Page->firstRow.','.$Page->listRows)->order('fid desc')->select();
        $this->assign('page',$show);// 赋值分页输出		
		    $this->assign('shoplist',$shoplist);
        $this->display();

   } 

   /**
 * 商家增加，
 */  
 
     public function add() {
    	$Foodcat=M('Foodcat');
    	$foodcatlist=$Foodcat->select();
    	$this->assign('foodcatlist',$foodcatlist);
        $Area=D('Area');
        $foodarealist=$Area->select();
        $this->assign('foodarealist',$foodarealist);
    	  $this->display();
	 }

     public function addsave() {

	 if (!$_FILES["spic"]["name"]){ //图片为空不做图片处理	

		$Shop=D("Shop");

		$map['sname']=$_POST['sname'];//名称
		$map['scid']=$_POST['fcid'];//口味
   		$map['sarea']=$_POST['farea'];//地区
		//$map['ftitle']=$_POST['ftitle'];//特点
		$map['scontent']=$_POST['scontent'];//简介
		$map['ssort']=$_POST['ssort'];//排序
		$map['sprice']=$_POST['sprice'];//人均
		$map['semail']=$_POST['semail'];//email
		$map['sphone']=$_POST['sphone'];//phone
    $map['opentime']=$_POST['opentime'];//开门时间
    $map['closetime']=$_POST['closetime'];//关门时间
    $map['sdizhi']=$_POST['sdizhi'];//地址
		$map['stime']=time();//时间

if (!$Shop->create($map)){
    // 如果创建失败 表示验证没有通过 输出错误提示信息

$this->error($Shop->getError());
}else{
    // 验证通过 可以进行其他数据操作
	 $result=$Shop->add($map);
	 $this->success('操作成功');
}

	 }//为空处理完成
     else {
	  import('ORG.Net.UploadFile');	  
       $upload = new UploadFile();// 实例化上传类
       $upload->maxSize  = 2145728 ;// 设置附件上传大小
       $upload->allowExts  = array('jpg','jpeg','png','gif');// 设置附件上传类型
       $upload->savePath =  './uploads/logo/';// 设置附件上传目录
       $upload->thumb = true;
       $upload->thumbMaxWidth = '100,220';
       $upload->thumbMaxHeight ='100,220';
       $upload->thumbPrefix='';
       $upload->thumbSuffix= 's,m';
       $upload->thumbType=0;
       $upload->autoSub=true;
       $upload->subType='date';
       if(!$upload->upload()) {// 上传错误提示错误信息
      $this->error($upload->getErrorMsg());
       }else {// 上传成功 获取上传文件信息
       $info =  $upload->getUploadFileInfo();
       }

	 	$Shop=D("Shop");

		$map['sname']=$_POST['sname'];//名称
		$map['scid']=$_POST['fcid'];//口味
   		$map['sarea']=$_POST['farea'];//地区
		//$map['ftitle']=$_POST['ftitle'];//特点
		$map['scontent']=$_POST['scontent'];//简介
		$map['ssort']=$_POST['ssort'];//排序
		$map['sprice']=$_POST['sprice'];//人均
		$map['semail']=$_POST['semail'];//email
		$map['sphone']=$_POST['sphone'];//phone
    $map['opentime']=$_POST['opentime'];//开门时间
    $map['closetime']=$_POST['closetime'];//关门时间
    $map['sdizhi']=$_POST['sdizhi'];//地址
		$map['spic']='/uploads/logo/'.$info[0]['savename'];//logo
		$map['stime']=time();//时间

if (!$Shop->create($map)){
    // 如果创建失败 表示验证没有通过 输出错误提示信息

$this->error($Shop->getError());
}else{
    // 验证通过 可以进行其他数据操作
	 $result=$Shop->add($map);
	 $this->success('操作成功');
}
	 }
    }
 

   /**
 * 修改，
 */   
  
    public function edit() {
        $Shop=M('Shop');
		$map['sid']=$_GET['id'];
		$shopitem=$Shop->where($map)->find();
		$Foodcat=M('Foodcat');
		$foodcatlist=$Foodcat->select();

		$this->assign('foodcatlist',$foodcatlist);
	    $Area=D('Area');
	    $foodarealist=$Area->select();
	    $this->assign('foodarealist',$foodarealist);
		$this->assign('item',$shopitem);

        $this->display(); 
    }

	//编辑后保存
      public function editsave() {
       $id=$this->_post('sid');
	   if(!$id){$this->error('商家id不可以为空');}//判定ＩＤ是否为空
	   $data["sid"] =$id;
	    $maps['sid']  = array('neq',$id);
         if (!$_FILES["pic"]["name"]){ //图片为空不做图片处理	

		$Shop=D("Shop");

		$map['sname']=$_POST['sname'];//名称
		$map['scid']=$_POST['fcid'];//口味
   		$map['sarea']=$_POST['farea'];//地区
		//$map['ftitle']=$_POST['ftitle'];//特点
		$map['scontent']=$_POST['scontent'];//简介
		$map['ssort']=$_POST['ssort'];//排序
		$map['sprice']=$_POST['sprice'];//人均
		$map['semail']=$_POST['semail'];//email
		$map['sphone']=$_POST['sphone'];//phone
    $map['opentime']=$_POST['opentime'];//开门时间
    $map['closetime']=$_POST['closetime'];//关门时间
    $map['sdizhi']=$_POST['sdizhi'];//地址
		$map['stime']=time();//时间

if (!$Shop->where($maps)->create($map)){
    // 如果创建失败 表示验证没有通过 输出错误提示信息

$this->error($Shop->getError());
}else{
    // 验证通过 可以进行其他数据操作
	 $result=$Shop->where($data)->save($map);  
	  $this->success('操作成功',U('Shop/index'));
}
	 }//为空处理完成
     else {
	  import('ORG.Net.UploadFile');	  
       $upload = new UploadFile();// 实例化上传类
       $upload->maxSize  = 2145728 ;// 设置附件上传大小
       $upload->allowExts  = array('jpg');// 设置附件上传类型
       $upload->savePath =  './uploads/logo/';// 设置附件上传目录
       $upload->thumb = true;
       $upload->thumbMaxWidth = '100,220';
       $upload->thumbMaxHeight ='100,220';
       $upload->thumbPrefix='';
       $upload->thumbSuffix= 's,m';
       $upload->thumbType=0;
       $upload->autoSub=true;
       $upload->subType='date';
       if(!$upload->upload()) {// 上传错误提示错误信息
      $this->error($upload->getErrorMsg());
       }else {// 上传成功 获取上传文件信息
       $info =  $upload->getUploadFileInfo();
       }

	 	$Shop=D("Shop");

		$map['sname']=$_POST['sname'];//名称
		$map['scid']=$_POST['fcid'];//口味
   		$map['sarea']=$_POST['farea'];//地区
		//$map['ftitle']=$_POST['ftitle'];//特点
		$map['scontent']=$_POST['scontent'];//简介
		$map['ssort']=$_POST['ssort'];//排序
		$map['sprice']=$_POST['sprice'];//人均
		$map['semail']=$_POST['semail'];//email
		$map['sphone']=$_POST['sphone'];//phone
    $map['opentime']=$_POST['opentime'];//开门时间
    $map['closetime']=$_POST['closetime'];//关门时间
    $map['sdizhi']=$_POST['sdizhi'];//地址
		$map['spic']='/uploads/logo/'.$info[0]['savename'];//logo
		$map['stime']=time();//时间

if (!$Shop->where($maps)->create($map)){
    // 如果创建失败 表示验证没有通过 输出错误提示信息

$this->error($Shop->getError());
}else{
    // 验证通过 可以进行其他数据操作
	 $result=$Shop->where($data)->save($map);  
	  $this->success('操作成功',U('Shop/index'));
}
	 }

    }

      /**
 * 删除商家，
 */ 
     public function del() {
		$Shop=M('Shop');
		$map['sid']=$_GET['id'];
		$Shop->where($map)->delete();
		$this->redirect(U('Shop/index'));

    }
    //删除评论
    public function commentdel() {
    $Comment=M('Comment');
    $map['comment_id']=$_GET['id'];
    $Comment->where($map)->delete();
    $this->redirect(U('Shop/comment'));

    }

}

?>