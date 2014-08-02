<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>附近美食-<?php echo ($title); ?>-<?php echo ($name); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="<?php echo ($web["key"]); ?>" name="description" />
	<meta content="<?php echo ($web["des"]); ?>" name="author" />
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="__ROOT__/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="__ROOT__/Public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="__ROOT__/templates/kfc/css/kfc.css" rel="stylesheet" type="text/css"/>

    <!--[if lt IE 9]>
        <script src="__ROOT__/Public/js/html5shiv.min.js"></script>
        <script src="__ROOT__/Public/js/respond.min.js"></script>
    <![endif]-->

	<script src="__ROOT__/Public/js/jquery.js"></script>
    <script src="__ROOT__/Public/js/bootstrap.min.js"></script> 

 	<script src="__ROOT__/Public/js/sco.ajax.js"></script> 

<body>

<div style="background-color:#FFF" class="hidden-xs">

<div class="top">
<div class="container">

    <a  href="#" class="pull-left"><img src='<?php echo ($url); echo ($logo); ?>'/></a>
    <ul class="nav navbar-right">
	
      <li class="top-r-top">
	   <div class="pull-right">
  订餐电话：<span><?php echo ($tel); ?></span>
</div>
	   <div class="clearfix"></div>
	  </li>
	
      <li>

<ul class="list-inline  top-nav">
  <li class="line-l"><a href="/">首页</a></li>
  <li><a href="<?php echo U('Shop/index/');?>">商家</a></li>
 <li><a href="<?php echo U('Article/l/','id=15');?>">促销活动</a></li>
   <li><a href="<?php echo U('Member/index/');?>">我的订单</a></li>
    <li><a href="<?php echo U('Article/l/','id=13');?>">帮助中心</a></li>
</ul>

</li>
</ul>
<div class="clearfix"></div>
	  </div>

     </div>

</div>
</div>




<nav class="navbar navbar-default  visible-xs" role="navigation">

   
    <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-cloud"></span>  在线订餐</a>

  <a class="navbar-brand pull-right" href="/"><span class=" glyphicon glyphicon-home"></span>  　</a>

</nav>




     
<!-- begin container -->

<div class="container" style="margin-top:5px;">



<div class="panel panel-default">
  <div class="panel-body">



     <div class="row">
	  <div class="col-lg-3 col-md-3 col-xs-12">
	  <div class="panel panel-inkfc hidden-xs">
               <div class="panel-heading"><span class="glyphicon glyphicon-shopping-cart"></span>我的菜单</div>
                <div class="panel-body">
                 <div id="ajax_target"><div id="test"></div></div>
                 </div>
         </div>
			<div class="panel panel-inkfc hidden-xs">
			<div class="panel-heading"><span class="glyphicon glyphicon-map-marker"></span>  <b>附近美食</b></div>
                <div class="panel-body">

					<ul class="list-unstyled inleft">
					  <?php if(is_array($foodarealist)): $i = 0; $__LIST__ = $foodarealist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li> <a href="<?php echo U('index/farealist/','id='.$sub['a_id']);?>" class="list-group-item"><span style="margin-left:60px;"><?php echo ($sub["a_name"]); ?></span><span class="fa fa-caret-right pull-right"></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
         </div>


	</div><!-- colend-->
		  	  <div class="col-lg-9 col-md-9 col-xs-12">
		  	  <ul id="breadcrumb">
				  <li><a href="/"><span class="glyphicon glyphicon-home"> </span></a></li>
				  <li><a href="#"><span class="icon icon-beaker"> </span> 附近美食</a></li>
				  <li><a href="#"><span class="icon icon-double-angle-right"></span> <?php echo ($foodareaname); ?></a></li>
			</ul>
  <ul class="list-inline inmidd">
  <?php if(is_array($foodlist)): $i = 0; $__LIST__ = $foodlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
     <div class="well col-xs-12" style="padding:3px;margin-bottom:20px;">
	  <img width="160px" class=" hidden-xs" height="140px;" src="<?php echo ($url); echo ($vo["fpic"]); ?>">
	  <img width="100px" class=" visible-xs" src="<?php echo ($url); echo ($vo["fpic"]); ?>">
        <h3  class=" hidden-xs" style="width:150px"><?php echo ($vo["fname"]); ?> </h3>
		<div class="pull-right">
		<h3  class=" visible-xs pull-right" style="width:300px"><?php echo ($vo["fname"]); ?> </h3>
		</div>
		<p ><span class="pull-left" style="color:#FF7700;font-weight:600;font-size:14px"> ￥<?php echo ($vo["fprice"]); ?> </span><span class="pull-right"><a href="<?php echo U('Cart/cartadd/','id='.$vo['fid']);?>" data-target="#ajax_target" data-trigger="ajax" class="btn btn-danger btn-xs "><i class="fa fa-shopping-cart"></i> 加入购物车</a> </span></p>
      <div class="clearfix"></div> </div>
  </li><?php endforeach; endif; else: echo "" ;endif; ?>
   </ul>
   <div class="clearfix"></div>

	      </div><!-- colend-->
	 </div><!-- colend-->
  </div>
</div>

</div> <!-- container --> 



<!--在线客服-->
<link href="__ROOT__/templates/kfc/css/kf.css" rel="stylesheet" type="text/css"/>

<div id="service" class="hidden-xs">
	<a href="#" class="srvLog" target="_blank">在线帮助</a>
	<a class="srvCns" href="tencent://message/?uin=1207491516&Site=企业网站&Menu=yes">在线咨询</a>
	<a href="#" class="srvDj" target="_blank">申请合作</a>
	<a class="mscBtn" id="audioBtn" title="开关音效">开关音效</a>
	<a class="goTop" id="goTop" title="返回顶部" style="display:none">返回顶部</a>
</div>

<script>
(function() {
    // 返回顶部按钮自动隐藏
    $(window).scroll(function(){
        if ($(window).scrollTop()>200){
            $('#goTop').fadeIn();
        }else if($(window).scrollTop()<200){
            $('#goTop').fadeOut();
        }
    });

    // 返回顶部按钮
    $('#goTop').click(function() {
        $("html, body").animate({scrollTop:0}, 200);
    });

    // 语音开关
    var music = document.getElementById("bgMusic");

    $("#audioBtn").click(function(){

        if(music.paused){
            music.play();
            $("#audioBtn").removeClass("pause").addClass("play");
        }else{
            music.pause();
            $("#audioBtn").removeClass("play").addClass("pause");
        }
    });
})();
</script>

<!--在线客服-->

<div class="foot hidden-xs">
<div class="container">
<div class="row">
    <div class="col-md-3"> 
	<h4><i class="fa fa-truck"></i> 配送支付</h4>
	<ul >
                  	  <li><a title="支付方式" href="<?php echo U('page/i/','id=pays');?>">支付方式</a></li>

                      <li><a title="服务费用" href="<?php echo U('page/i/','id=sess');?>">服务费用</a></li>
                  </ul>
	</div>
	<div class="col-md-3">
	<h4><i class="fa fa-th-list"></i> 关于我们</h4>
	<ul >
                  	 <li><a title="网站介绍" href="<?php echo U('page/i/','id=about');?>">网站介绍</a></li>
                      <li><a title="招贤纳士" href="<?php echo U('page/i/','id=add');?>">招贤纳士</a></li>
                       <li><a title="订单查询" href="<?php echo U('Article/l/','id=15');?>">促销活动</a></li>

                  </ul>
	</div>
	<div class="col-md-3">
	<h4><span class="glyphicon glyphicon-question-sign"></span> 帮助中心</h4>
	<ul>
                  	  <li><a title="订单查询" href="<?php echo U('Member/index/');?>">订单查询</a></li>
                      <li><a title="订单查询" href="<?php echo U('Article/l/','id=15');?>">常见问题</a></li>
                  </ul>
	
	</div>
	<div class="col-md-3">
	<ul>
                  	<li>
                     <h4><span class="glyphicon glyphicon-earphone"></span> 服务热线:<?php echo ($tel); ?></h4>
					 
					 </li>
                      <li>
                      	<h4><span class="glyphicon glyphicon-phone-alt"></span> 配送时间:<?php echo ($openstime); ?>-<?php echo ($openetime); ?></h4>
                          
                      </li>
                      <li>
                      	<h4>
						<a target="_blank" href=""><i class="fa fa-weibo"></i> 关注微博</a>
                      	</h4>
                      </li>
					   <!--  <li >
                    	<h4>
						<a target="_blank" href=""><span class="glyphicon glyphicon-phone"></span> 手机浏览</a>
                      	</h4>
                      </li>-->
					  
                  </ul>
	
	</div>
</div>
<br>
<p align="center">© 2014 <?php echo ($name); ?> 　<?php echo ($icp); ?> 　　</p>
<p align="center" class="ps">程序由<a title="民伟网络" href="http://www.wangminwei.com/">民伟网络</a>驱动</p>
</div>
 
</div>

<div class="container navbar-fixed-bottom visible-xs" style="background-color:#FFF;">
  <div class="row ">
  
       <div class="col-md-3 col-xs-3"><a class="icon-btn" href="<?php echo U('Index/index/');?>">
								<i class="fa fa-home"></i>
								<div>首页</div>
							</a></div>
	 <div class=" col-xs-3">
	 <div class="btn-group dropup">
	 <a class="icon-btn dropdown-toggle" data-toggle="dropdown" >
								<i class="fa fa-th-large"></i>
								<div>分类</div>
							</a>
							<ul class="dropdown-menu" style="min-width:245px;" role="menu">
							<?php if(is_array($foodcatlist)): $i = 0; $__LIST__ = $foodcatlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li> <a class="btn" href="<?php echo U('index/flist/','id='.$sub['fcid']);?>" ><?php echo ($sub["fcname"]); ?></a></li>
							   <li class="divider"></li><?php endforeach; endif; else: echo "" ;endif; ?>
                             </ul>
							</div>
							</div>
	<div class="col-md-3 col-xs-3">
	 <div class="btn-group dropup">
	 <a class="icon-btn" href="<?php echo U('Member/index/');?>">
								<i class="fa fa-user"></i>
								<div>我的订单</div>
							</a>
							</div>
							</div>

	 <div class="col-md-3 col-xs-3">
	 <a class="icon-btn" href="<?php echo U('Cart/index/');?>">
								<i class="fa fa-shopping-cart"></i>
								<div>购物车</div>
								<div id="ajax_target"><span class="badge" ><?php echo ($total_items); ?></span></div>
							</a>
	 </div>
  </div>

</div>

<div class="container">
	<?php if(empty($llist)): else: ?> 友情链接：<?php if(is_array($llist)): $i = 0; $__LIST__ = $llist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a  href="<?php echo ($vo["link"]); ?>"> <?php echo ($vo["linkname"]); ?> </a> 　　<?php endforeach; endif; else: echo "" ;endif; endif; ?>

</div>



<script type="text/javascript">
$(document).ready(function(){
	$('#test').load('/index.php?m=Cart&a=cart');

	});
</script>



	<!-- END CORE PLUGINS -->
</body>
<!-- END BODY -->
</html>