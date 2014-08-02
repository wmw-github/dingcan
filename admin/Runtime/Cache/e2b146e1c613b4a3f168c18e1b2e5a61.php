<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title><?php echo ($webtitle); ?>－管理后台</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
 
	<!-- BEGIN GLOBAL MANDATORY STYLES -->          
	
	<link href="__ROOT__/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="__ROOT__/Public/css/admin.css" rel="stylesheet" type="text/css"/>
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
	 <!-- BEGIN nav -->
<div role="navigation" class="navbar  navbar-default navbar-fixed-top">
        <div class=" container" >
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="./" class="navbar-brand" target="_blank" title="网站前台"><i class="fa fa-cutlery"></i> 订餐系统</a>
		  
        </div>

<p class="navbar-text" style="color:#FFF;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>


        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
             <li class="nli"><a href="<?php echo U('Config/index/');?>" ><i class="fa fa-cog"></i> 基本设置</a></li>
            <li class="nli"><a href="<?php echo U('Foodcat/index/');?>"><i class="fa fa-th"></i> 商品管理</a></li>
            <li class="nli"><a href="<?php echo U('Shop/index/');?>"><i class="glyphicon glyphicon-tower"></i> 商家管理</a></li>
			 <li class="nli"><a href="<?php echo U('Member/shoporder/');?>"><i class="fa fa-shopping-cart"></i> 订单管理</a></li>
			 <li class="nli"><a href="<?php echo U('Article/index/');?>"><i class="fa fa-user"></i> 文章管理</a></li>
           
          </ul>
		  
		  <ul class="nav navbar-nav navbar-right">
		  
      <li><a href="<?php echo U('Config/unrunfile/');?>"> 清除缓存</a></li>
	     
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">更多 <b class="caret"></b></a>
        <ul class="dropdown-menu">
		   <li><a href="<?php echo U('Public/logout/');?>">退出</a></li>
          <li><a href="<?php echo U('Dbak/index/');?>">数据库备份</a></li>
          <li><a href="<?php echo U('Admin/adminindex/');?>">管理员管理</a></li>
	 <li><a href="<?php echo U('Link/index/');?>">友情链接</a></li>
	 
        </ul>
      </li>
    </ul>
		  
		  
		  
		  
		  
		  
		  
		  
        </div><!--/.nav-collapse -->
		
		
      </div>
    </div>
<!-- end nav -->

<!-- begin container -->
<!-- end nav -->

<!-- begin container -->

<div class=" container " style="margin-top:60px">

<div class="row">
     <div class=" col-lg-2 col-md-2 col-xs-12">
	 
	 <ul class="list-group list-unstyled">

 <li class=""> <a href="<?php echo U('Articlecate/index/');?>" class="list-group-item active"> <i class="fa fa-calendar"></i> 文章模块</a> </li>
  
<?php if(is_array($leftlist)): $i = 0; $__LIST__ = $leftlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class=""> <a href="<?php echo U('Article/alist/','id='.$vo['acid']);?>" class="list-group-item"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["aname"]); ?> </a></li><?php endforeach; endif; else: echo "" ;endif; ?>


  
 
  <li class=""> <a href="<?php echo U('Page/index/');?>" class="list-group-item active"> <i class="fa fa-list-ul"></i> 单页模块 </a></li>
 <?php if(is_array($pageslist)): $i = 0; $__LIST__ = $pageslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class=""> <a href="<?php echo U('Page/edit/','id='.$vo['pagid']);?>" class="list-group-item"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["page_title"]); ?> </a></li><?php endforeach; endif; else: echo "" ;endif; ?>

 
</ul> 
	 
	
	 </div>
	  <div class="col-lg-10 col-md-10 col-xs-12" style="background-color: #FFF;">
	  
        
		
		<!-- begin tab -->
	      <ul class="nav nav-tabs " >
             
			 <li ><a href="<?php echo U('Dbak/index/');?>" ><b>数据库备份</b></a></li>
             <li ><a href="<?php echo U('Dbak/import/');?>" ><b>备份列表</b></a></li>
             <li class="active"><a href="<?php echo U('Dbak/import/');?>" ><b>备份成功</b></a></li>
          </ul>
		  <p></P>
		  
    
           <div class="row"> 
             <div class="col-lg-2 col-md-2 col-xs-2" ></div>
			 <div class="col-lg-6 col-md-6 col-xs-6" ><span class="help-block"></span></div>
			 <div class="col-lg-4 col-md-4 col-xs-4" ></div>
		  
		  </div><!-- end 添加 -->
		  <p></P>




			  <?php echo ($msg); ?>
			    
			  
			  
			  




			  
	

			  
			  
			
             
	
     

	  
	  
	  
	
	 </div><!-- col end -->

</div><!-- end row -->


  


    
</div><!-- end container -->


    
         
	


	
<!-- /.modal -->



				
				
			
	

	
	
	
	
	
	
	
	
	
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   

	
	
	
    <script src="__ROOT__/Public/js/jquery.js"></script>
    <script src="__ROOT__/Public/js/bootstrap.min.js"></script> 
<script >
	



</script>	

	<!-- END CORE PLUGINS -->
	
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>