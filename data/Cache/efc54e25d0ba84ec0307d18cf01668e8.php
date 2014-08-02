<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>404报错</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
 
	<!-- BEGIN GLOBAL MANDATORY STYLES -->          
	
	<link href="__ROOT__/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="__ROOT__/templates/kfc/css/kfc.css" rel="stylesheet" type="text/css"/>
	<link href="__ROOT__/Public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN THEME STYLES --> 
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="__ROOT__/Public/js/html5shiv.min.js"></script>
        <script src="__ROOT__/Public/js/respond.min.js"></script>
    <![endif]-->
	<!-- END THEME STYLES -->
	


	
</head>
<!-- BEGIN BODY -->
<body>

<!-- BEGIN nav -->
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



     
<!-- end nav -->

<!-- begin container -->

<div class=" container " style="margin-top:5px">

<div class="row">
     <div class=" col-lg-3 col-md-3 col-xs-12">
	 
	 
	 
	
	 </div>
	  <div class="col-lg-9 col-md-9 col-xs-12" style="background-color: #FFF;">
	  
        
		
		<!-- begin tab -->
	      <ul class="nav nav-tabs " >
             
			
          
          </ul>
		  <p></P>
		  
    
           <div class="row"> 
             <div class="col-lg-2 col-md-2 col-xs-2" ></div>
			 <div class="col-lg-6 col-md-6 col-xs-6" ><span class="help-block"></span></div>
			 <div class="col-lg-4 col-md-4 col-xs-4" ></div>
		  
		  </div>
		  <p></P>
		  <div class="row"> 
             <div class="col-lg-3 col-md-3 col-xs-1" >
			 
			 
			 </div>
			 <div class="col-lg-6 col-md-6 col-xs-12" >
			 <h1>404报错</h1>
			 <p class="help-block">您输入的页面找不到<br></p>
			 
			 
			 </div>
			<div class="col-lg-3 col-md-3 col-xs-1" ></div>
		  
		  </div>




	
<br><br><br>
			  
			  
			
             
	
     

	  
	  
	  
	
	 </div><!-- col end -->

</div><!-- end row -->


  


    
</div><!-- end container -->


    
         
	


	
<!-- /.modal -->



				
				
			
	

	
	
	
	
	
	
	
	
	
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   

	<!-- 配置文件 -->

	
	
    <script src="__ROOT__/Public/js/jquery.js"></script>
    <script src="__ROOT__/Public/js/bootstrap.min.js"></script> 
	






<script >
	
	$('#myModal').on('hidden.bs.modal', function (e) {
	location.reload()

})
$('#ajax').on('hidden.bs.modal', function (e) {
	location.reload()

})


function delcfm() {
if (!confirm("确认要删除？")) {
window.event.returnValue = false;
}
}




</script>	

	<!-- END CORE PLUGINS -->
	
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>