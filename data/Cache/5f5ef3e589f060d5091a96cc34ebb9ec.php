<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title><?php echo ($foodareaname); ?>附近的餐厅-<?php echo ($title); ?>-<?php echo ($name); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta content="<?php echo ($web["key"]); ?>" name="description" />
	<meta content="<?php echo ($web["des"]); ?>" name="author" />
<link href="__ROOT__/templates/ui/images/favicon.ico" rel="shortcut icon" />
<!--引入bootstrap核心css-->
<link href="__ROOT__/templates/ui/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--自定义css-->
<link href="__ROOT__/templates/ui/css/head.css" rel="stylesheet">
<link href="__ROOT__/templates/ui/css/index.css" rel="stylesheet">
<link href="__ROOT__/templates/ui/css/foot.css" rel="stylesheet">
<link href="__ROOT__/templates/ui/css/shop.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<body>

<!--top开始-->
<div class="top-container hidden-xs">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <a href="/" title="首页"><span>发现身边的美食！</span></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href=# onclick="javascript:addFavorite2()"><span class="like">加入收藏</span></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="glyphicon glyphicon-phone"></span> <a href="<?php echo U('page/i/','id=mobile');?>"><span class="mobile">手机版</span></a>
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <span class="glyphicon glyphicon-user"></span> <span><a href="<?php echo U('Member/index/');?>">我的订单</a></span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span>
          <a href="<?php echo U('page/i/','id=liucheng');?>" >购餐流程</a>
        </span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span>
          <a href="<?php echo U('page/i/','id=hezuo');?>" >我是商家</a>
          
        </span>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <span>
          <a href="<?php echo U('page/i/','id=about');?>" >在线帮助</a>
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

<div class="container shop-area" style="margin-top:5px;">
<div class="row">
<ol class="breadcrumb">
  <li><a href="/"><span class="glyphicon glyphicon-home">首页</span></a></li>
  <li>餐厅</li>
  <li class="active"><?php echo ($foodareaname); ?></li>
  <a href="/" target="_blank"><span class="area">[切换地区]</span></a>
</ol>
</div>
<hr>
<!--ad start -->
<div class="ad" style="margin-bottom:30px;margin-top:-30px;">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="__ROOT__/templates/ui/images/ad/pic1.jpg" alt="广告1" class="img-responsive">
    </div>
    <div class="item">
      <img src="__ROOT__/templates/ui/images/ad/pic2.jpg" alt="广告2" class="img-responsive">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!--ad end-->


	<div class="row topshop">
	<span class="title"><strong><span class="glyphicon glyphicon-fire"></span> 推荐商家</strong></span>
<hr>
	<?php if(is_array($shoplisttop)): $i = 0; $__LIST__ = $shoplisttop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-lg-3 shop hidden-xs">
		<a href="<?php echo U('shop/uc/','id='.$vo['sid']);?>">
			<div class="shopinfo">
			<div class="pull-left img">
			<img src="<?php echo ($url); echo ($vo["spic"]); ?>" width="77" height="77">
			</div>
			<div class="pull-left info">
			<h2><?php echo ($vo["sname"]); ?></h2>
			<span class="label label-default">人均：￥<?php echo ($vo["sprice"]); ?></span><br>
			<p>满7元起 免费配送</p>
			</div>
			</div>
		</a>
		</div>
		<div class="col-lg-3 mshop visible-xs">
		<a href="<?php echo U('shop/uc/','id='.$vo['sid']);?>">
			<div class="shopinfo">
			<div class="pull-left img">
			<img src="<?php echo ($url); echo ($vo["spic"]); ?>" width="77" height="77">
			</div>
			<div class="pull-left info">
			<h2><?php echo ($vo["sname"]); ?></h2>
			<span class="label label-default">人均：￥<?php echo ($vo["sprice"]); ?></span><br>
			<p>满7元起 免费配送</p>
			</div>
			</div>
		</a>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		
	</div><!--row-->
		  	  	<div class="row shoplist">
		  	  	<span class="title"><strong><span class="glyphicon glyphicon-flag"></span> 正在营业</strong></span>
<hr>

<ul class="nav nav-pills" role="tablist">
<li><a href="#" onclick="javascript:window.top.location.reload()">全部</a></li>

<?php if(is_array($foodcatlist)): $i = 0; $__LIST__ = $foodcatlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li> <a href="<?php echo U('Shop/test/','id='.$sub['fcid']);?>" data-target="#ajax_target" data-trigger="ajax" onclick="aaa()"><?php echo ($sub["fcname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>

<hr>
<div id="ajax_target"><div id="test"></div></div>
				<div id="did"><!--点击口味隐藏此div-->
		  	  	<?php if(is_array($shoplist)): $i = 0; $__LIST__ = $shoplist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-lg-3 col-xs-12 shop hidden-xs" >
			  	  		<a href="<?php echo U('uc/','id='.$vo['sid']);?>">
						<div class="shopinfo">
						<div class="pull-left img">
						<img src="<?php echo ($url); echo ($vo["spic"]); ?>" width="77" height="77" class="img-circle">
						</div>
						<div class="pull-left info">
						<h2><?php echo ($vo["sname"]); ?></h2>
						<span class="label label-default">人均：￥<?php echo ($vo["sprice"]); ?></span>
						<p>满7元起 免费配送</p>
						</div>
						</div>
						</a>
		  	  			
		  	  		</div>
		  	  		<div class="col-lg-3 col-xs-12 mshop visible-xs" >
			  	  		<a href="<?php echo U('uc/','id='.$vo['sid']);?>">
						<div class="shopinfo">
						<div class="pull-left img">
						<img src="<?php echo ($url); echo ($vo["spic"]); ?>" width="77" height="77" class="img-circle">
						</div>
						<div class="pull-left info">
						<h2><?php echo ($vo["sname"]); ?></h2>
						<span class="label label-default">人均：￥<?php echo ($vo["sprice"]); ?></span>
						<p>满7元起 免费配送</p>
						</div>
						</div>
						</a>
		  	  			
		  	  		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		  	  	</div>
		  	  	</div>


		  	  	<div class="row shoplist">
		  	  	<span class="title"><strong><span class="glyphicon glyphicon-flag"></span> 暂不营业</strong></span>
<hr>

		  	  	<?php if(is_array($shoplist1)): $i = 0; $__LIST__ = $shoplist1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-lg-3 col-xs-12 shop hidden-xs" >
			  	  		<a href="<?php echo U('uc/','id='.$vo['sid']);?>">
						<div class="shopinfo">
						<div class="pull-left img">
						<img src="<?php echo ($url); echo ($vo["spic"]); ?>" width="77" height="77" class="img-circle">
						</div>
						<div class="pull-left info">
						<h2><?php echo ($vo["sname"]); ?></h2>
						<span class="label label-default">人均：￥<?php echo ($vo["sprice"]); ?></span>
						<p>满7元起 免费配送</p>
						</div>
						</div>
						</a>
		  	  			
		  	  		</div>
		  	  		<div class="col-lg-3 col-xs-12 mshop visible-xs" >
			  	  		<a href="<?php echo U('uc/','id='.$vo['sid']);?>">
						<div class="shopinfo">
						<div class="pull-left img">
						<img src="<?php echo ($url); echo ($vo["spic"]); ?>" width="77" height="77" class="img-circle">
						</div>
						<div class="pull-left info">
						<h2><?php echo ($vo["sname"]); ?></h2>
						<span class="label label-default">人均：￥<?php echo ($vo["sprice"]); ?></span>
						<p>满7元起 免费配送</p>
						</div>
						</div>
						</a>
		  	  			
		  	  		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		  	  	</div>			


</div> <!-- container --> 




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
<p align="center" class="ps">程序由<a title="民伟网络" href="http://www.wangminwei.com/" target="_blank">民伟网络</a>驱动</p>
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

<script src="__ROOT__/Public/js/bootstrap.min.js"></script> 
<script src="__ROOT__/Public/js/sco.ajax.js"></script> 


<script type="text/javascript"> 
$(document).ready(function(){   
	$('#test').load('/index.php?m=Shop&a=test');
	
	});
</script>
<script type="text/javascript"> 
function aaa(){
    document.getElementById('did').style.display="none";
}

</script>



	<!-- END CORE PLUGINS -->
</body>
<!-- END BODY -->
</html>