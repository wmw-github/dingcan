<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>购餐车_<?php echo ($name); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="__ROOT__/templates/ui/images/favicon.ico" rel="shortcut icon" />
<!--引入bootstrap核心css-->
<link href="__ROOT__/templates/ui/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--自定义css-->
<link href="__ROOT__/templates/ui/css/head.css" rel="stylesheet">
<link href="__ROOT__/templates/ui/css/index.css" rel="stylesheet">
<link href="__ROOT__/templates/ui/css/foot.css" rel="stylesheet">
<link href="__ROOT__/Public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
	
</head>
<!-- BEGIN BODY -->
<body>

<!--top开始-->
<div class="top-container hidden-xs">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <a href="/" title="首页"><span>发现身边的美食！</span></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href=# onclick="javascript:addFavorite2()"><span class="like">加入收藏</span></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="glyphicon glyphicon-phone"></span> <a href="#"><span class="mobile">手机版</span></a>
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <span class="glyphicon glyphicon-user"></span> <span><a href="<?php echo U('Member/index/');?>">我的订单</a></span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span>
          <a href="#" >联系客服</a>
        </span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span>
          <a href="#" >我是商家</a>
          
        </span>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <span>
          <a href="#" >在线帮助</a>
        </span>
      </div>
    </div>
  </div>
</div>
<!--top结束-->



<script type="text/javascript">
	function addFavorite2() {
    var url = window.location;
    var title = document.title;
    var ua = navigator.userAgent.toLowerCase();
    if (ua.indexOf("360se") > -1) {
	        alert("由于360浏览器功能限制，请按 Ctrl+D 手动收藏！");
	    }
	    else if (ua.indexOf("msie 8") > -1) {
	        window.external.AddToFavoritesBar(url, title); //IE8
	    }
	    else if (document.all) {
	  try{
	   window.external.addFavorite(url, title);
	  }catch(e){
	   alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
	  }
	    }
	    else if (window.sidebar) {
	        window.sidebar.addPanel(title, url, "");
	    }
	    else {
	  alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
	    }
	}
</script>



     

    
         
<!-- begin container -->

<div class="container" style="margin-top:5px">

<div class="row">
	  <div class="col-lg-12 col-md-12 col-xs-12">
	  <!-- shopstart-->
	 
          <div class="panel panel-default">
		     
             <div class="panel-body"style="min-height:400px;padding:2px;">
			 <div class="progress hidden-xs">
  <div class="progress-bar  progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33.3%">
    <span class="sr-only">80% Complete</span><p>1.浏览菜单 <i class="fa fa-check-circle-o"></i></p>
  </div>
   <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33.3%">
    <span class="sr-only">80% Complete</span><p>2.提交订单信息 <i class="fa fa-check-circle-o"></i></p>
  </div>
 
   <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33.3%">
    <span class="sr-only">80% Complete</span><p>2.订单提交成功 <i class="fa fa-check-circle-o"></i></p>
  </div>
</div>
			<p align="center" style="font-size:30px;"> <i class="fa fa-check-circle-o" style="color:#1D943B;font-size:30px;margin-top:50px;"></i>　您的订单已提交成功！</p>
			 <p align="center"><a class="btn btn-primary" href="<?php echo U('Member/myorders/','pid='.$pid);?>" role="button">查看我的订单</a></p>
			 
			
			 
			 </div>
	         </div>
	
	 </div><!-- col end -->
    

</div><!-- end row -->


  

</div>
    
</div><!-- end container -->




<!--网站底部-->
<hr>
<div class="container hidden-xs">
	<div class="row">
		<div class="col-lg-3 foot">
			<p><a title="支付方式" href="<?php echo U('page/i/','id=pays');?>">支付方式</a></p>
			<p><a title="服务费用" href="<?php echo U('page/i/','id=sess');?>">服务费用</a></p>
		</div>
		<div class="col-lg-3 foot">
			<p><a title="网站介绍" href="<?php echo U('page/i/','id=about');?>">网站介绍</a></p>
			<p><a title="招贤纳士" href="<?php echo U('page/i/','id=add');?>">招贤纳士</a></p>
		</div>
		<div class="col-lg-3 foot">
			<p><a title="订单查询" href="<?php echo U('Member/index/');?>">订单查询</a></p>
			<p><a title="订单查询" href="<?php echo U('Article/l/','id=15');?>">常见问题</a></p>
		</div>
		<div class="col-lg-3 foot">
		<?php if(is_array($llist)): $i = 0; $__LIST__ = $llist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><a  href="<?php echo ($vo["link"]); ?>"> <?php echo ($vo["linkname"]); ?> </a></p><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
</div>

<!--版权-->
<div class="copy">
<p align="center">© 2014 <?php echo ($name); ?> - <?php echo ($icp); ?></p>
<p align="center" class="ps">程序由<a title="民伟网络" href="http://www.wangminwei.com/">民伟网络</a>驱动</p>
</div>

<!--手机版底部导航-->
<div class="container navbar-fixed-bottom visible-xs mobile-nav">
  <div class="row ">
  
		<div class="col-md-4 col-xs-4">
		<a class="icon-btn" href="<?php echo U('Index/index/');?>">
		<span class="glyphicon glyphicon-home"></span>首页
		</a>
		</div>
	 	<!-- <div class=" col-xs-3">
		 <div class="btn-group dropup">
		 	<a class="icon-btn dropdown-toggle" data-toggle="dropdown" >
			<span class="glyphicon glyphicon-th"></span>地区
			</a>
			<ul class="dropdown-menu" style="min-width:245px;" role="menu">
				<?php if(is_array($foodarealist)): $i = 0; $__LIST__ = $foodarealist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li> 
					<a class="btn" href="<?php echo U('index/farealist/','id='.$sub['a_id']);?>" ><?php echo ($sub["foodareaname"]); ?></a>
					</li>
					<li class="divider"></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
		 </div>
		</div> -->
		<div class="col-md-4 col-xs-4">
		 	<div class="btn-group dropup">
		 	<a class="icon-btn" href="<?php echo U('Member/index/');?>">
			<span class="glyphicon glyphicon-user"></span>我的订单
			</a>
			</div>
		</div>

		 <div class="col-md-4 col-xs-4">
		 	<a class="icon-btn" href="<?php echo U('Cart/index/');?>">
				
				<div id="ajax_target"><span class="glyphicon glyphicon-shopping-cart"></span>购物车<span class="badge" ><?php echo ($total_items); ?></span></div>
			</a>
		 </div>
  </div>

</div>
<!--全局js-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="__ROOT__/templates/ui/bootstrap/js/bootstrap.min.js"></script> 
	

	    <script src="__ROOT__/Public/js/jquery.js"></script>
    <script src="__ROOT__/Public/js/bootstrap.min.js"></script> 
	 <script src="__ROOT__/Public/js/sco.ajax.js"></script> 

</body>
<!-- END BODY -->
</html>