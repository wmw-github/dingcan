<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php echo ($title); ?>-<?php echo ($name); ?></title>
<meta content="{key}" name="description" />
<meta content="{des}" name="author" />

<link href="__ROOT__/templates/ui/images/favicon.ico" rel="shortcut icon" />
<!--引入bootstrap核心css-->
<link href="__ROOT__/templates/ui/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--自定义css-->
<link href="__ROOT__/templates/ui/css/head.css" rel="stylesheet">
<link href="__ROOT__/templates/ui/css/index.css" rel="stylesheet">
<link href="__ROOT__/templates/ui/css/foot.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
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



     
<!--地区选择-->
<div class="container main">
    <div class="row">
      <div class="title hidden-xs">
        <h3><span class="glyphicon glyphicon-cutlery"></span> 轻松定餐，寻找您身边的美味！</h3>
      </div>

      <div class="title visible-xs">
        <h5><span class="glyphicon glyphicon-cutlery"></span> 轻松定餐，寻找您身边的美味！</h5>
      </div>
    </div>
    <div class="row area">
      <div class="col-lg-2 col-md-2 col-xs-6">
        <a href="/shop/farealist/id/1">
          <img src="__ROOT__/templates/ui/images/area/area1.jpg" alt="罗一路" class="img-thumbnail">
          <p>罗一路</p>
        </a>
      </div>

      <div class="col-lg-2 col-md-2 col-xs-6">
        <a href="/shop/farealist/id/2" >
          <img src="__ROOT__/templates/ui/images/area/area2.jpg" alt="罗二路" class="img-thumbnail">
          <p>罗二路</p>
        </a>
      </div>

      <div class="col-lg-2 col-md-2 col-xs-6">
        <a href="/shop/farealist/id/3" >
          <img src="__ROOT__/templates/ui/images/area/area3.jpg" alt="罗三路" class="img-thumbnail">
          <p>罗三路</p>
        </a>
      </div>

      <div class="col-lg-2 col-md-2 col-xs-6">
        <a href="/shop/farealist/id/4" >
          <img src="__ROOT__/templates/ui/images/area/area4.jpg" alt="罗四路" class="img-thumbnail">
          <p>罗四路</p>
        </a>
      </div>

      <div class="col-lg-2 col-md-2 col-xs-6">
        <a href="/shop/farealist/id/5" >
          <img src="__ROOT__/templates/ui/images/area/area5.jpg" alt="罗五路" class="img-thumbnail">
          <p>罗五路</p>
        </a>
      </div>

      <div class="col-lg-2 col-md-2 col-xs-6">
        <a href="/shop/farealist/id/6" >
          <img src="__ROOT__/templates/ui/images/area/area6.jpg" alt="罗六路" class="img-thumbnail">
          <p>罗六路</p>
        </a>
      </div>
    </div>
      <p class="tui">我们正努力将外卖服务推广到临沂其他地方</p>
    </div>



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


</body>
<!-- END BODY -->
</html>