<?php

/**
 * 地区分类，增加，删除
 */


class FoodareaAction extends CommonAction {


    public function index() {
	    $Foodarea=M('Area');
		$foodarealist=$Foodarea->select();

		$this->assign('foodarealist',$foodarealist);

        $this->display();

    }


  /**
 * 分类增加，
 */
   public function add() {

	 $this->display();

}

 public function addsave() {
	    $Foodarea=M('Area');
		$map['a_name']=$_POST['farea'];
		//$map['fcsort']=$_POST['fcsort'];
		//$map['ctime']=time();
		if($map['a_name']){
		 $result=$Foodarea->add($map);
           if ($result){
                   //成功后返回客户端新增的用户ID，并返回提示信息和操作状态
                    //  $this->success('新增成功','__APP__?m=Food&a=index');
                    $this->redirect('Foodarea/index');
                       }else{
                   //错误后返回错误的操作状态和提示信息
                   $this->error('新增失败');
				   }
		   }
		else {
		$this->error('地区名不可以为空');
		}

}

   /**
 * 分类修改，
 */  
     public function edit() {
	   $Foodcat=M('Foodcat');
		$map['fcid']=$_GET['id'];
		$foodcatitem=$Foodcat->where($map)->find();
		$this->assign('item',$foodcatitem);
        $this->display();
    }
	//编辑后数据保存
	     public function editsave() {
		 $Foodcat=M('Foodcat');
		$map['fcid']=$_POST['fcid'];
        $data['fcname']=$_POST['fcname'];
		$data['fcsort']=$_POST['fcsort'];
		$foodedititem=$Foodcat->where($map)->save($data);
		  if ($foodedititem){
                   //成功后返回客户端新增的用户ID，并返回提示信息和操作状态
                   //  $this->success('修改成功','__APP__?m=Food&a=index');
				   $this->redirect(U('Foodcat/index'));

                       }else{
                   //错误后返回错误的操作状态和提示信息
                   $this->error('新增失败');
				   }
    }

  /**
 分类删除，
 */
       public function del() {
		$Foodarea=M('Area');
		$map['a_id']=$_GET['id'];
		$Foodarea->where($map)->delete(); 
		$this->redirect(U('Foodarea/index'));
    }

}

?>