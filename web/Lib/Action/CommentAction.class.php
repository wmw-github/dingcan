<?php

/**
 * 评论，增加，删除
 */


class CommentAction extends CommonAction {
//测试评论列表
  public function index() {
      $Comment=D('Comment');
      import('ORG.Util.Page');// 导入分页类
      $count      = $Comment->count();// 查询满足要求的总记录数
      //echo $count;
      $Page       = new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
      $show       = $Page->show();// 分页显示输出
          // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
      $commentlist = $Comment->limit($Page->firstRow.','.$Page->listRows)->order('comment_id desc')->select();
      //var_dump($commentlist);
      $this->assign('page',$show);// 赋值分页输出

      $this->assign('commentlist',$commentlist);
      
      $this->display();
    }

  public function addsave() {
    date_default_timezone_set('PRC');
    $now  = date("Y-m-d H:i:s");
    $Comment=D("Comment");
    $map['tel']=$_POST['tel'];//电话
    $ptel=$_POST['tel'];//临时变量，用于查询订单数据库手机号
    $map['shop_id']=session('shopid');//商家id
    $map['comment']=$_POST['comment'];//评论内容
    $map['star']=$_POST['star'];//评分
    $map['ctime']=$now;//时间
    //echo $map['tel'];
    //echo $map['shop_id'];
    //echo $map['comment'];
    //echo $map['star'];
    //echo $map['ctime'];
    // $Comment->create($map);
    // $result=$Comment->add($map);
    // echo "hi";
    $Foodorder=D("Foodorder");
    //var_dump($Foodorder);
    $shopid=session('shopid');
    $tel=$Foodorder->where("otel='$ptel'")->where("shopname='$shopid'")->select();//与订单中的手机号对比
    if(strlen($map['comment'])<=5){$this->message('<span class="glyphicon glyphicon-remove"></span>评论过短，请认真评论');};
    if(!$tel){$this->message('<span class="glyphicon glyphicon-remove"></span>你的手机号没有在本店下过订单，不能评论');};
    if(!$map['tel']){$this->message('<span class="glyphicon glyphicon-remove"></span>电话不可以为空');};
    if(!$map['comment']){$this->message('<span class="glyphicon glyphicon-remove"></span>评论不可以为空');};
    if ($Comment->create($map)){
        // 如果创建失败 表示验证没有通过 输出错误提示信息
    // $this->error($Comment->getError());
    // echo "失败了";
      $this->message('<span class="glyphicon glyphicon-remove"></span>发表评论失败');
    }else{
        // 验证通过 可以进行其他数据操作
        $result=$Comment->add($map);
       // $this->success('操作成功');
       // echo "成功了";
      $this->message('<span class="glyphicon glyphicon-ok"></span>发表评论成功');
    };
    $this->display ();

   }
   public function message($msg = '') {
    $this->assign ( 'msg', $msg );
    $this->display ( 'message' );
    exit ();
  }


}