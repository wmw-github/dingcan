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