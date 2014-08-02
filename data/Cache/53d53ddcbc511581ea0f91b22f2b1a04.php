<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo ($title); ?>_<?php echo ($name); ?></title>
<meta content="{key}" name="description" />
<meta content="{des}" name="author" />

<!--引入Buttons按钮样式 与bootstrap核心css有冲突-->
<link href="http://cdn.bootcss.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="__ROOT__/templates/new/bootstrap32/css/buttons.css">

<!--引入bootstrap核心css-->
<link href="__ROOT__/templates/new/bootstrap32/css/bootstrap.min.css" rel="stylesheet">
<!-- Loading Flat UI -->
<link href="__ROOT__/templates/new/css/flat-ui.css" rel="stylesheet">
<!--自定义css-->
<link href="__ROOT__/templates/new/css/head.css" rel="stylesheet">
<!--nav css-->
<link type="text/css" rel="stylesheet" href="__ROOT__/templates/new/css/tmall-nav.css" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!--top开始-->
<div class="top-container">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 hidden-xs">
        <span>美食送到家！</span>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href=# onclick="javascript:addFavorite2()"><span style="color:red;">加入收藏</span></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="glyphicon glyphicon-phone"></span> <span><a href="<?php echo U('page/i/','id=mobile');?>" title="手机订餐">手机版</a></span>
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <span class="glyphicon glyphicon-user"></span> <span><a href="<?php echo U('Member/index/');?>">我的订单</a></span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">联系客服 <i class="fa fa-sort-down"></i></a>
          <span class="dropdown-arrow kf"></span>
          <ul class="dropdown-menu dropdown-menu-right kf">
          <li><a href="<?php echo U('page/i/','id=sess');?>">服务费用</a></li>
          <li><a href="<?php echo U('Article/l/','id=13');?>">常见问题</a></li>
          </ul>
        </span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">我是商家 <i class="fa fa-sort-down"></i></a>
          <span class="dropdown-arrow shop"></span>
          <ul class="dropdown-menu dropdown-menu-right shop">
          <li><a href="<?php echo U('page/i/','id=hezuo');?>">我想合作</a></li>
          <li><a href="<?php echo U('page/i/','id=ad');?>">广告投放</a></li>
          </ul>
        </span>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <span>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">更多 <i class="fa fa-sort-down"></i></a>
          <span class="dropdown-arrow"></span>
          <ul class="dropdown-menu dropdown-menu-right">
          <li><a href="<?php echo U('page/i/','id=law');?>">法律条款</a></li>
          <li><a href="<?php echo U('page/i/','id=about');?>">关于我们</a></li>
          </ul>
        </span>
      </div>
    </div>
  </div>
</div>
<!--top结束-->

<!--top AD开始-->
<div class="container hidden-xs">
  <div class="alert alert-success alert-dismissible" role="alert" style="text-align: center;">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <img  alt="【全国】世界杯" src="http://p0.meituan.net/0.0.90/tuanpic/__46752036__6614165.jpg" width="1000" height="60">
  </div>
</div>
<!--top AD结束-->

<!--top search结束-->
<div class="container">
<div class="row">
  <div class="col-lg-4 hidden-xs">
    <span style="font-size:28px;color:#2db8ad"><a href="/">临沂订餐</a></span>
  </div>
  <div class="col-lg-5 col-xs-12 search">
    <div class="input-group">
      <input type="text" class="form-control" name="id" placeholder="请输入关键词">
          <span class="input-group-btn">
        <button class="btn btn-default" type="submit">搜索</button>
      </span>
    </div>
  </div>
  <div class="col-lg-3 hidden-xs">
    <a href="#"><img src="http://s0.meituan.net/www/css/i/header-commitment.vee85ff0e.png"></a>
  </div>
</div>
</div>
<!--top search结束-->



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



     
<!--nav 开始-->
<div class="container">
	<div class="row">
		<div class="col-lg-2 hidden-xs">
			<div id="nav">
			<div class="area clearfix">
			<div class="separate"></div>
			<div class="category-content" id="guide_2">
			<div><span class="all-goods"><span class="glyphicon glyphicon-cutlery"></span>  菜单分类</span></div>
			<div class="category">
			<ul class="category-list" id="js_climit_li">
			<li class="appliance js_toggle relative first">
			<div class="category-info list-nz">
			<h3 class="category-name b-category-name"><i></i><a id="s-category-289" href="#" target="_blank" class="ml-22" title="中餐"><span class="glyphicon glyphicon-bookmark"></span> 中餐</a></h3>
			<p class="c-category-list limit-24"><a href="#" target="_blank" title="鲁菜" id="s-goods-category-289-1">鲁菜</a><a href="#" target="_blank" title="粤菜" id="s-goods-category-289-2">粤菜</a><a href="#" target="_blank" title="川菜" id="s-goods-category-289-3">川菜</a></p>
			<em>&gt;</em></div>
			<textarea class="menu-item-wrap none">
			<div class="menu-item menu-in top">
			<div class="area-in">
			<div class="area-bg">
			<div class="menu-srot">
			<div class="sort-side">
			<dl class="dl-sort">
			<dt><span>鲁菜</span></dt>
			<dd><a title="鲁菜1" id="scategory-12633" target="_blank" href="#"><span  class="red"  >鲁菜1</span></a></dd>
			<dd><a title="鲁菜2" id="scategory-12635" target="_blank" href="#"><span  >鲁菜2</span></a></dd>
			<dd><a title="鲁菜3" id="scategory-12639" target="_blank" href="#"><span  >鲁菜3</span></a></dd>
			</dl>
			</div></div></div></div></div>
			</textarea>
			</li>
			<li class="appliance js_toggle relative">
			<div class="category-info list-nanz">
			<h3 class="category-name b-category-name"><i></i><a id="s-category-292" href="#" target="_blank" class="ml-22" title="西餐"><span class="glyphicon glyphicon-bookmark"></span>  西餐</a></h3>
			<p class="c-category-list limit-24"><a id="s-goods-category-292-1" href="#" target="_blank" title="法国菜">法国菜</a><a id="s-goods-category-292-2" href="#" target="_blank" title="日本菜">日本菜</a><a id="s-goods-category-292-3" href="#" target="_blank" title="美国菜">美国菜</a></p>
			<em>&gt;</em></div>
			<textarea class="menu-item-wrap none">
			<div class="menu-item menu-in top">
			<div class="area-in">
			<div class="area-bg">
			<div class="menu-srot">
			<div class="sort-side">
			<dl class="dl-sort">
			<dt><span>美国菜</span></dt>
			<dd><a title="牛排" id="scategory-12633" target="_blank" href="#"><span  class="red"  >牛排</span></a></dd>
			<dd><a title="披萨" id="scategory-12635" target="_blank" href="#"><span  >披萨</span></a></dd>
			<dd><a title="肯德基" id="scategory-12639" target="_blank" href="#"><span  >肯德基</span></a></dd>
			<dd><a title="可怜" id="scategory-80051" target="_blank" href="#"><span  >可乐</span></a></dd>
			<dd><a title="汉堡" id="scategory-80069" target="_blank" href="#"><span  class="red"  >汉堡</span></a></dd>
			</dl>
			</div></div></div></div></div>
			</textarea>
			</li>
			<li class="appliance js_toggle relative">
			<div class="category-info list-tz">
			<h3 class="category-name b-category-name"><i></i><a id="s-category-293" href="#" target="_blank" class="ml-22" title="快餐"><span class="glyphicon glyphicon-bookmark"></span>  快餐</a></h3>
			<p class="c-category-list limit-24"><a id="s-goods-category-293-1" href="#" target="_blank" title="盒饭">盒饭</a><a id="s-goods-category-293-2" href="#" target="_blank" title="米饭">米饭</a><a id="s-goods-category-293-3" href="#" target="_blank" title="凉菜">凉菜</a><a id="s-goods-category-293-4" href="#" target="_blank" title="包子">包子</a></p>
			<em>&gt;</em></div>
			<textarea class="menu-item-wrap none">
			<div class="menu-item menu-in top">
			<div class="area-in">
			<div class="area-bg">
			<div class="menu-srot">
			<div class="sort-side">
			<dl class="dl-sort">
			<dt><span>盒饭</span></dt>
			<dd><a title="大盒饭" id="scategory-12633" target="_blank" href="#"><span  class="red"  >大盒饭</span></a></dd>
			<dd><a title="小盒饭" id="scategory-12635" target="_blank" href="#"><span  >小盒饭</span></a></dd>
			<dd><a title="鸡蛋盒饭" id="scategory-12639" target="_blank" href="#"><span  >鸡蛋盒饭</span></a></dd>
			</dl>
			</div></div></div></div></div>
			</textarea>
			</li>
			
			<li class="appliance js_toggle relative h73">
			<div class="category-info list-xb">
			<h3 class="category-name b-category-name"><i></i><a id="s-category-343" href="#" target="_blank" class="ml-22" title="小吃"><span class="glyphicon glyphicon-bookmark"></span>  小吃</a></h3>
			<p class="c-category-list limit-24 pdb11"><a id="s-goods-category-343-1" href="#" target="_blank" title="羊肉串">羊肉串</a><a id="s-goods-category-343-2" href="#" target="_blank" title="烧烤">烧烤</a><a id="s-goods-category-343-3" href="#" target="_blank" title="啤酒">啤酒</a><a id="s-goods-category-343-4" href="#" target="_blank" title="炸鸡">炸鸡</a></p>
			<em>&gt;</em></div>
			<textarea class="menu-item-wrap none">
			<div class="menu-item menu-in top">
			<div class="area-in">
			<div class="area-bg">
			<div class="menu-srot">
			<div class="sort-side">
			<dl class="dl-sort">
			<dt><span>好累</span></dt>
			<dd><a title="小吃1" id="scategory-12633" target="_blank" href="#"><span  class="red"  >小吃1</span></a></dd>
			<dd><a title="小吃2" id="scategory-12635" target="_blank" href="#"><span  >小吃2</span></a></dd>
			<dd><a title="小吃3" id="scategory-12639" target="_blank" href="#"><span  >小吃3</span></a></dd>
			</dl>
			</div></div></div></div></div>
			</textarea>
			</li>
			
			</ul>
			</div>
			</div>
			
			</div>
			
			
			
			</div>
			</div>
		<div class="col-lg-7" style="height:300px;margin-top:20px;">
			<nav class="navbar navbar-inverse navbar-embossed" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav navbar-left"> 
              		<li class="line-l"><a href="/">首页</a></li>
  					<li><a href="<?php echo U('Shop/index/');?>">商家</a></li>
 					<li><a href="<?php echo U('Article/l/','id=15');?>">促销活动</a></li>
   					<li><a href="<?php echo U('Member/index/');?>">我的订单</a></li>
    				<li><a href="<?php echo U('Article/l/','id=13');?>">帮助中心</a></li>          
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">其他 <b class="caret"></b></a>
					<span class="dropdown-arrow"></span>
					<ul class="dropdown-menu">
					<li><a href="#">帮助</a></li>
					<li><a href="#">优惠</a></li>
					<li><a href="#">加盟</a></li>
					<li class="divider"></li>
					<li><a href="#">推广</a></li>
					</ul>
					</li>
               
               </ul>
            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
          <small><i class="fa fa-thumbs-up"></i>&nbsp;

				  <?php if(is_array($foodcatlist)): $i = 0; $__LIST__ = $foodcatlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Shop/flist/','id='.$sub['fcid']);?>" ><?php echo ($sub["fcname"]); ?></a>&nbsp;&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>

          </small>
          <hr>
          <small><i class="fa fa-map-marker"></i>&nbsp;&nbsp;
					  <?php if(is_array($foodarealist)): $i = 0; $__LIST__ = $foodarealist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Shop/farealist/','id='.$sub['a_id']);?>"><?php echo ($sub["a_name"]); ?></a>&nbsp;&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
          </small>
          <hr>
          <p><i class="fa fa-star"></i><strong>本周精选</strong></p>
          <div class="banner">
			<ul>
				<li style="background-image: url('__ROOT__/templates/new/img/sunset.jpg');">
					<div class="inner">
						<h1>幻灯片1.</h1>
						<p>文字介绍内容1.</p>
					</div>
				</li>

				<li style="background-image: url('__ROOT__/templates/new/img/wood.jpg');">
					<div class="inner">
						<h1>幻灯片2.</h1>
						<p>文字介绍内容2.</p>

					</div>
				</li>

				<li style="background-image: url('__ROOT__/templates/new/img/subway.jpg');">
					<div class="inner">
						<h1>幻灯片3.</h1>
						<p>文字介绍内容3.</p>

					</div>
				</li>

				<li style="background-image: url('__ROOT__/templates/new/img/shop.jpg');">
					<div class="inner">
						<h1>幻灯片4.</h1>
						<p>文字介绍内容4.</p>
					</div>
				</li>
			</ul>
		</div>
		</div>
		<div class="col-lg-3 hidden-xs" style="height:300px;margin-top:20px;">
			<div class="panel panel-inkfc hidden-xs">
	  			<div class="panel-heading"><span class="glyphicon glyphicon-shopping-cart"></span> 每日推荐</div>
	             <div class="panel-body">
	                <a href="#" target="_blank"><img src="__ROOT__/templates/new/img/ad.jpg" height="200" width="230"></a>
	                <?php if(is_array($toplist)): $i = 0; $__LIST__ = $toplist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><a href="<?php echo U('Article/s/','id='.$vo['aid']);?>" title="<?php echo ($vo["atitle"]); ?>"><?php echo ($vo["atitle"]); ?></a> </p><?php endforeach; endif; else: echo "" ;endif; ?>
                 </div>
             </div>
		</div>
	</div>
</div>
<!--nav 结束-->
<div class="container topshop">
<span style="font-size:20px;color:#2db8ad;"><strong><i class="fa fa-camera-retro"></i> 推荐商家</strong></span>
<hr>
	<div class="row newshop">
	<?php if(is_array($shoplisttop)): $i = 0; $__LIST__ = $shoplisttop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-lg-3 shop">
		<a href="<?php echo U('shop/uc/','id='.$vo['sid']);?>" target="_blank">
			<div class="shopinfo">
			<div class="pull-left img">
			<img src="<?php echo ($url); echo ($vo["spic"]); ?>" width="77" height="77">
			</div>
			<div class="pull-left info">
			<p><?php echo ($vo["sname"]); ?></p>
			<span class="label label-default">人均：￥<?php echo ($vo["sprice"]); ?></span><br>
			<span>满7元起 免费配送</span>
			</div>
			</div>
		</a>
			<div class="other">
				<span>平均送餐时间：30分钟</span>
			</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		
	</div><!--row-->
</div>
<div class="container newshop">
<span style="font-size:20px;color:#2db8ad;"><strong><i class="fa fa-fire"></i> 最新商家</strong></span>
<hr>
	<div class="row newshop">
		<?php if(is_array($shoplist)): $i = 0; $__LIST__ = $shoplist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-lg-3 shop">
		<a href="<?php echo U('shop/uc/','id='.$vo['sid']);?>" target="_blank">
			<div class="shopinfo">
			<div class="pull-left img">
			<img src="<?php echo ($url); echo ($vo["spic"]); ?>" width="77" height="77">
			</div>
			<div class="pull-left info">
			<p><?php echo ($vo["sname"]); ?></p>
			<span class="label label-default">人均：￥<?php echo ($vo["sprice"]); ?></span><br>
			<span>满7元起 免费配送</span>
			</div>
			</div>
		</a>
			<div class="other">
				<span>平均送餐时间：30分钟</span>
			</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		
	</div>

</div>


<!--在线客服-->
<link href="__ROOT__/templates/kfc/css/kf.css" rel="stylesheet" type="text/css"/>

<div id="service" class="hidden-xs">
	<a href="#" class="srvLog" target="_blank">在线帮助</a>
	<a class="srvCns" href="tencent://message/?uin=1207491516&Site=企业网站&Menu=yes">在线咨询</a>
	<a href="<?php echo U('page/i/','id=hezuo');?>" class="srvDj" target="_blank">申请合作</a>
	<a href="<?php echo U('Article/l/','id=15');?>" class="mscBtn" id="audioBtn" title="最新优惠">最新优惠</a>
	<a class="goTop" id="goTop" title="返回顶部" style="display:none">返回顶部</a>
</div>

<!--在线客服-->

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



<p align="center">© 2014 <?php echo ($name); ?> 　<?php echo ($icp); ?> 　　</p>
<p align="center" class="ps">程序由<a title="民伟网络" href="http://www.wangminwei.com/">民伟网络</a>驱动</p>


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

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="__ROOT__/templates/new/bootstrap32/js/bootstrap.min.js"></script> 
<!--钉-->
<script src="__ROOT__/templates/new/bootstrap32/js/jquery.pin.js"></script> 
<script>
      $(".pinned").pin({containerSelector: ".container", minWidth: 940});
</script>

<!-- Load JS here for greater good =============================-->
    <script src="__ROOT__/templates/new/js/jquery-1.8.3.min.js"></script>
    <script src="__ROOT__/templates/new/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="__ROOT__/templates/new/js/jquery.ui.touch-punch.min.js"></script>
    <script src="__ROOT__/templates/new/js/bootstrap-select.js"></script>
    <script src="__ROOT__/templates/new/js/bootstrap-switch.js"></script>
    <script src="__ROOT__/templates/new/js/flatui-checkbox.js"></script>
    <script src="__ROOT__/templates/new/js/flatui-radio.js"></script>
    <script src="__ROOT__/templates/new/js/jquery.tagsinput.js"></script>
    <script src="__ROOT__/templates/new/js/jquery.placeholder.js"></script>
    <script src="__ROOT__/templates/new//js/tmall-nav.js" /></script>
    <script src="__ROOT__/templates/new//js/unslider.min.js"></script>


<script type="text/javascript">
	$('.banner').unslider({
	speed: 500,               //  The speed to animate each slide (in milliseconds)
	delay: 3000,              //  The delay between slide animations (in milliseconds)
	complete: function() {},  //  A function that gets called after every slide animation
	keys: true,               //  Enable keyboard (left, right) arrow shortcuts
	dots: true,               //  Display dot navigation
	fluid: false,              //  Support responsive design. May break non-responsive designs
	arrows: true
});
</script>

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


</body>
<!-- END BODY -->
</html>