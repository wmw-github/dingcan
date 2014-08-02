<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title><?php echo ($shopname); ?>-商家中心-<?php echo ($title); ?></title>
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
<link href="__ROOT__/templates/ui/css/uc.css" rel="stylesheet">

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


<!--top 简介开始-->
<div class="container">

<div class="row breadcrumbrow">
<ol class="breadcrumb">
  <li><a href="/"><span class="glyphicon glyphicon-home">首页</span></a></li>
  <?php if(is_array($shopinfo)): $i = 0; $__LIST__ = $shopinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('shop/farealist/','id='.$vo['sarea']);?>"><?php echo ($foodareaname); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
  <li class="active"><?php echo ($shopname); ?></li>
</ol>
</div>

	<div class="row top-content">
	<?php if(is_array($shopinfo)): $i = 0; $__LIST__ = $shopinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-lg-4">
			<div class="pull-left">
			<img src="<?php echo ($url); echo ($vo["spic"]); ?>" width="77" height="77">
			</div>
			<div class="pull-left info">
			<h2><?php echo ($vo["sname"]); ?></h2>
			<div class="hidden-xs">
			<p>营业时间：<span class="label label-default" id="dingdan"><?php echo ($vo["opentime"]); ?>:00--<?php echo ($vo["closetime"]); ?>:00</span>
                <span id="s1" style="display:none;"><?php echo ($vo["opentime"]); ?></span>
				<span id="s2" style="display:none;"><?php echo ($vo["closetime"]); ?></span><br>
				
						<script>
							var myDate = new Date();
							var data1 = document.getElementById("s1").innerText;
							var data2 = document.getElementById("s2").innerText;
							var data3 = '{$vo.closetime}';
							//var button_obj = document.getElementById("dingdan");
							var current = myDate.getHours();
							//alert("data1="+data3);
							if(data1<current && current<data2) 
								{
									document.write('<span class="label label-success">正常营业!</span>');
								}else
								{
									document.write('<span class="label label-danger">打烊啦!</span>');
								}

						</script>
					
					</p>
				</div><!--hidden-xs-->
				<div class="visible-xs">
						<?php if(is_array($shopinfo)): $i = 0; $__LIST__ = $shopinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="tel:<?php echo ($vo["sphone"]); ?>" class="btn btn-default">
							 <span class="glyphicon glyphicon-phone-alt"></span> 电话订餐</a><?php endforeach; endif; else: echo "" ;endif; ?>

						
						<script>
							var myDate = new Date();
							var data1 = document.getElementById("s1").innerText;
							var data2 = document.getElementById("s2").innerText;
							var data3 = '{$vo.closetime}';
							//var button_obj = document.getElementById("dingdan");
							var current = myDate.getHours();
							//alert("data1="+data3);
							if(data1<current && current<data2) 
								{
									document.write('<span class="label label-success">正常营业!</span>');
								}else
								{
									document.write('<span class="label label-danger">打烊啦!</span>');
								}

						</script>
						


				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>


		<div class="col-lg-4 hidden-xs" style="padding-top:20px;">
		<!-- Button trigger modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  评价商家
</button>
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
  评论列表
</button>
<div class="hidden">
	<span id="result"><?php echo ($star); ?></span>
</div>
	<ul id="star">
		<li>★</li>
		<li>★</li>
		<li>★</li>
		<li>★</li>
		<li>★</li>
	</ul>

<!-- Modal1 评论列表 -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">取消</span></button>
        <h4 class="modal-title" id="myModalLabel">评论列表</h4>
      </div>
      <div class="modal-body">
      <ul>
      <?php if(!$commentlist): ?>没有评论
      <?php else: ?>
	   <?php if(is_array($commentlist)): $i = 0; $__LIST__ = $commentlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="margin-top:5px;">
	   		<?php echo (substr($vo["tel"],0,4)); ?>***<?php echo (substr($vo["tel"],7,11)); ?>-
	   		<code>
    			<?php echo ($vo["comment"]); ?>
    		</code>
    		-<span class="label label-warning">评分:<?php echo ($vo["star"]); ?></span>
    		</li><?php endforeach; endif; else: echo "" ;endif; endif; ?>
	   </ul>
	   <!--分页
	   <ul class="pagination">
			<?php echo ($page); ?>
		</ul>
		-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">返回</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal 商家评论-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">取消</span></button>
        <h4 class="modal-title" id="myModalLabel">评论商家</h4>
      </div>
      <div class="modal-body" style="margin-left:10px;">
	    <form class="form-horizontal"role="form" enctype="multipart/form-data" action="<?php echo U('Comment/addsave/');?>" method="post">

			  <div class="form-group">
			    <label for="exampleInputEmail1">手机号</label>
			    <input type="text" class="form-control" name="tel" placeholder="请输入手机号">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">评论内容</label>
			    <textarea class="form-control" rows="3" name="comment" placeholder="请输入评论内容"></textarea>
			  </div>

			  <div class="form-group">
			  <label for="exampleInputEmail1">评分：</label>
			  	<label class="radio-inline">
				  <input type="radio" name="star" value="1"> 1
				</label>
				<label class="radio-inline">
				  <input type="radio" name="star" value="2"> 2
				</label>
				<label class="radio-inline">
				  <input type="radio" name="star" value="3" checked="true"> 3
				</label>
				<label class="radio-inline">
				  <input type="radio" name="star" value="4"> 4
				</label>
				<label class="radio-inline">
				  <input type="radio" name="star" value="5"> 5
				</label>
				</div>
	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="sumbit" class="btn btn-primary">评论</button></form>
      </div>
    </div>
  </div>
</div>
		</div><!--col-lg-4-->


		<div class="col-lg-4 hidden-xs">
		<?php if(is_array($shopinfo)): $i = 0; $__LIST__ = $shopinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pull-right">
			 <p><span class="glyphicon glyphicon-glass"></span>送餐速度：30分钟</p>
			 <p><span class="glyphicon glyphicon-earphone"></span>送餐电话：<?php echo ($vo["sphone"]); ?></p>
			 <p><span class="glyphicon glyphicon-map-marker"></span>餐厅地址：<?php echo ($vo["sdizhi"]); ?></p>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>

	</div>
</div>
<!--top 简介结束-->
<!--商家菜单开始-->
<div class="container shopmenu">
	<div class="row">
		<div class="col-lg-9 menu">
			<div class="contaner">
				<div class="row">
				<?php if(is_array($foodlist)): $i = 0; $__LIST__ = $foodlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-lg-3 food hidden-xs">
						<img src="<?php echo ($url); echo ($vo["fpic"]); ?>">
						<br>
						<small><?php echo ($vo["fname"]); ?></small>
						<span class="label label-success">￥<?php echo ($vo["fprice"]); ?></span>
						<a href="<?php echo U('Cart/cartadd/','id='.$vo['fid']);?>" data-target="#ajax_target" data-trigger="ajax" class="button button-rounded button-flat-highlight" title="加入购物车"><span class="glyphicon glyphicon-plus addcart"></span></a>
					
					</div>

					<div class="col-lg-3 mfood visible-xs">
						<div class="pull-left">
						<img src="<?php echo ($url); echo ($vo["fpic"]); ?>">
						</div>
						<div class="foodinfo">
						<h2><?php echo ($vo["fname"]); ?></h2>
						<p><span class="label label-success">￥<?php echo ($vo["fprice"]); ?></span></p>
						<p><a href="<?php echo U('Cart/cartadds/','id='.$vo['fid']);?>"  class="btn btn-danger btn-xs "><i class="fa fa-shopping-cart"></i> 加入购物车</a></p>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
		<div class="col-lg-3 notice">
		<div class="panel panel-inkfc hidden-xs">
               <div class="panel-heading">
               <span class="glyphicon glyphicon-shopping-cart"></span>我的菜单
               </div>
                <div class="panel-body">
                 <div id="ajax_target"><div id="test"></div></div>
                 </div>
         </div>
         <div class="panel panel-inkfc hidden-xs">
         	<div class="panel-heading">
               <span class="glyphicon glyphicon-volume-up"></span>商家公告
            </div>
            <div class="panel-body">
            	<?php if(is_array($shopinfo)): $i = 0; $__LIST__ = $shopinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><?php echo ($vo["scontent"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
         </div>
		</div>
	</div>
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



<script src="__ROOT__/Public/js/bootstrap.min.js"></script> 
<script src="__ROOT__/Public/js/sco.ajax.js"></script> 


<script type="text/javascript"> 
$(document).ready(function(){   
	$('#test').load('/index.php/Cart/cart');//index.php?m=Cart&a=cart
	
	});
</script>


<script>
window.onload = function(){

  	var star = document.getElementById("star");
    var star_li = star.getElementsByTagName("li");
    var result = document.getElementById("result").innerText;
    //alert(parseInt(result));//转成int类型
    var len = parseInt(result);
    var i=0;
   
        for(i=0; i<len; i++){
            star_li[i].className = "act";
                    
        }
    

}
</script>



  
	<!-- END CORE PLUGINS -->
</body>
<!-- END BODY -->
</html>