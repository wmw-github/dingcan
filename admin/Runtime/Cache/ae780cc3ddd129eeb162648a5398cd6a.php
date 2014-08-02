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
	
	
<script type="text/javascript" src="./Public/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="./Public/ueditor/ueditor.all.js"></script>
<!-- 语言包文件(建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败) -->

	
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

<div class=" container " style="margin-top:60px;min-height:600px;">

<div class="row">
   
	  <div class="col-lg-12 col-md-12 col-xs-12" style="background-color: #FFF;">

		<!-- begin tab -->
	      <ul class="nav nav-tabs " >
          <li><a href="<?php echo U('Foodcat/index/');?>" ><b>商品分类</b></a></li>
			 <li><a href="<?php echo U('Foodcat/add/');?>" ><b>分类增加</b></a></li>
			 <li><a href="<?php echo U('Foodarea/index/');?>" ><b>地区管理</b></a></li>
			 <li><a href="<?php echo U('Foodarea/add/');?>" ><b>地区增加</b></a></li>
             <li><a href="<?php echo U('Food/index/');?>" ><b>商品维护</b></a></li>
			 <li class="active"><a href="<?php echo U('Food/add/');?>" ><b>商品增加</b></a></li>
              </ul>
		  <p></P>

           <div class="row"> 
             <div class="col-lg-2 col-md-2 col-xs-2" ></div>
			 <div class="col-lg-6 col-md-6 col-xs-6" ><span class="help-block"></span></div>
			 <div class="col-lg-4 col-md-4 col-xs-4" ></div>

		  </div>
		  <p></P>


<form class="form-horizontal"role="form" enctype="multipart/form-data" action="<?php echo U('Food/addsave/');?>" method="post">

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">菜品名称</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputEmail3" name="fname" value="">
	 
    </div>
	<div class="col-sm-6">
<span class="help-block"><i class="fa fa-exclamation"></i>菜品名称，如水煮肉片</span>
 </div>
  </div>
 <div class="form-group">
    <label for="inputEmail5" class="col-sm-2 control-label">菜品分类</label>
    <div class="col-sm-3">
    <select class="form-control" name="fcid">
		<?php if(is_array($foodcatlist)): $i = 0; $__LIST__ = $foodcatlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["fcid"]); ?>"><?php echo ($vo["fcname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
	</select>

    </div>
	<div class="col-sm-7">
		<span class="help-block"><i class="fa fa-exclamation"></i>请输入选择分类</span></span>
	</div>
  </div>
  <div class="form-group">
    <label for="inputEmail5" class="col-sm-2 control-label">地区分类</label>
    <div class="col-sm-3">
     <select class="form-control" name="farea">
		<?php if(is_array($foodarealist)): $i = 0; $__LIST__ = $foodarealist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><option value="<?php echo ($sub["a_id"]); ?>"><?php echo ($sub["a_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
	</select>

    </div>
	<div class="col-sm-7">
		<span class="help-block"><i class="fa fa-exclamation"></i>请输入地区分类</span></span>
	</div>
  </div>
 
    <div class="form-group">
    <label for="inputEmail5" class="col-sm-2 control-label">所属商家</label>
    <div class="col-sm-3">
     <select class="form-control" name="fshop">
		<?php if(is_array($shoplist)): $i = 0; $__LIST__ = $shoplist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><option value="<?php echo ($sub["sid"]); ?>"><?php echo ($sub["sname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
	</select>

    </div>
	<div class="col-sm-7">
		<span class="help-block"><i class="fa fa-exclamation"></i>请输入所属商家</span></span>
	</div>
  </div>
 

  <div class="form-group">
    <label for="inputEmail8" class="col-sm-2 control-label">菜品图片</label>
    <div class="col-sm-4">
      
	 <input type="file" name="pic" id="exampleInputFile">


    </div>
	<div class="col-sm-6">
<span class="help-block"> 支持：'jpg','jpeg','png','gif'</span>
 </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">菜品价格</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputEmail3" name="fprice" value="">
	 
    </div>
	<div class="col-sm-8">
<span class="help-block"><i class="fa fa-exclamation"></i>请输入产品价格</span>
 </div>
  </div>

<!-- 	<div class="form-group">
	<label for="inputEmail11" class="col-sm-2 control-label">内容</label>
	<div class="col-sm-6">
	
	<textarea class="form-control" name="fcontent" rows="3"></textarea>
	
	</div>
	<div class="col-sm-4">
	<span class="help-block"></span>
	</div>
	</div> -->
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">排序</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputEmail3" name="fsort" value="0">
	 
    </div>
	<div class="col-sm-6">
<span class="help-block"><i class="fa fa-exclamation"></i>排序值0-99，值越大越向前</span>
 </div>
  </div> 
  
  
<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="sumbit" class="btn btn-primary">保存</button>
      </div>


      </div>
      </form>

	 </div><!-- col end -->

</div><!-- end row -->


  


    
</div><!-- end container -->


<!-- /.modal -->


	<br><br>

<div class="foot navbar-fixed-bottom" style="background-color:#333;color:#FFf;">
<div class="container">

    
<br>
<p align="center">© 2014 技术支持:<a href="http://www.wangminwei.com/" target="_blank">民伟网络</a></p> 

</div>

</div>	

	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   

	<!-- 配置文件 -->

	
	
    <script src="__ROOT__/Public/js/jquery.js"></script>
    <script src="__ROOT__/Public/js/bootstrap.min.js"></script> 
	








	<!-- END CORE PLUGINS -->
	
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>