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

<div class=" container " style="margin-top:60px;min-height:600px;">

<div class="row">
 
	  <div class="col-lg-12 col-md-12 col-xs-12" style="background-color: #FFF;">
	  
        
	  
        
		
		<!-- begin tab -->
	      <ul class="nav nav-tabs " >
		  

		  <?php if(($cate) == "3"): ?><li class="active"><a href="__APP__?m=Config&a=index&id=3" ><b>店铺设置</b></a></li><?php else: ?> <li class=""><a href="__APP__?m=Config&a=index&id=3" ><b>店铺设置</b></a></li><?php endif; ?>
          <?php if(($cate) == "0"): ?><li class="active"><a href="__APP__?m=Config&a=index&id=0" ><b>基本设置</b></a></li><?php else: ?> <li class=""><a href="__APP__?m=Config&a=index&id=0" ><b>基本设置</b></a></li><?php endif; ?>
	<?php if(empty($wlefe)): else: ?> 	  <?php if(($cate) == "1"): ?><li class="active"><a href="__APP__?m=Config&a=index&id=1" ><b>支付设置</b></a></li><?php else: ?> <li class=""><a href="__APP__?m=Config&a=index&id=1" ><b>支付设置</b></a></li><?php endif; ?>
		  <?php if(($cate) == "2"): ?><li class="active"><a href="__APP__?m=Config&a=index&id=2" ><b>登录设置</b></a></li><?php else: ?> <li class=""><a href="__APP__?m=Config&a=index&id=2" ><b>登录设置</b></a></li><?php endif; ?>
		  <?php if(($cate) == "4"): ?><li class="active"><a href="__APP__?m=Config&a=index&id=4" ><b>积分设置</b></a></li><?php else: ?> <li class=""><a href="__APP__?m=Config&a=index&id=4"><b>积分设置</b></a></li><?php endif; endif; ?>  

          </ul>
		  <p></P>
		  
    
           <div class="row"> 
             <div class="col-lg-2 col-md-2 col-xs-2" ></div>
			 <div class="col-lg-6 col-md-6 col-xs-6" ><span class="help-block"></span></div>
			 <div class="col-lg-4 col-md-4 col-xs-4" ></div>
		  
		  </div>
		  <p></P>




			 
<form class="form-horizontal"role="form" enctype="multipart/form-data" action="__APP__?m=Config&a=add" method="post">
<input type="hidden" class="form-control" name="cate" value="<?php echo ($cate); ?>">
<?php if(is_array($citem)): $i = 0; $__LIST__ = $citem;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; switch($vo["type"]): case "1": ?><div class="form-group">
    <label for="input<?php echo ($vo["name"]); ?>" class="col-sm-2 control-label"><?php echo ($vo["title"]); ?></label>
	 <div class="col-sm-4">
      <input type="text" class="form-control" id="input<?php echo ($vo["name"]); ?>" name="<?php echo ($vo["name"]); ?>" value="<?php echo ($vo["value"]); ?>"> </div>
	  <div class="col-sm-6">
<span class="help-block"><i class="fa fa-exclamation"></i> <?php echo ($vo["remark"]); ?></span>
 </div>
  </div><?php break;?>
	 <?php case "8": ?><div class="form-group">
    <label for="input<?php echo ($vo["name"]); ?>" class="col-sm-2 control-label"><?php echo ($vo["title"]); ?></label>
	 <div class="col-sm-2">
      <input type="text" class="form-control" id="input<?php echo ($vo["name"]); ?>" name="<?php echo ($vo["name"]); ?>" value="<?php echo ($vo["value"]); ?>"> </div>
	  <div class="col-sm-8">
<span class="help-block"><i class="fa fa-exclamation"></i> <?php echo ($vo["remark"]); ?></span>
 </div>
  </div><?php break;?>
	 	<?php case "2": ?><div class="form-group">
    <label for="input<?php echo ($vo["name"]); ?>" class="col-sm-2 control-label"><?php echo ($vo["title"]); ?></label>		
 <div class="col-sm-4">		
<textarea class="form-control" name="<?php echo ($vo["name"]); ?>" rows="3"><?php echo ($vo["value"]); ?></textarea></div>
<div class="col-sm-6">
<span class="help-block"><i class="fa fa-exclamation"></i> <?php echo ($vo["remark"]); ?></span>
 </div>
  </div><?php break;?>
	 <?php case "5": ?><div class="form-group">
    <label for="input<?php echo ($vo["name"]); ?>" class="col-sm-2 control-label"><?php echo ($vo["title"]); ?></label>
 <div class="col-sm-4">	 
  <input type="file" name="pic" id=""> </div>
  <div class="col-sm-6">
<span class="help-block"><i class="fa fa-exclamation"></i> <?php echo ($vo["remark"]); ?></span>
 </div>
  </div><?php break;?>
	 
	
	 <?php case "3": ?><div class="form-group">
    <label for="input<?php echo ($vo["name"]); ?>" class="col-sm-2 control-label"><?php echo ($vo["title"]); ?></label>
	  <div class="col-sm-4">
      
					<?php if(is_array($vo[extra])): $i = 0; $__LIST__ = $vo[extra];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group): $mod = ($i % 2 );++$i;?><div class="form-group">
    <label for="input<?php echo ($vo["name"]); ?>" class="col-sm-4 control-label"><?php echo ($key); ?>：</label>
    <div class="col-sm-8">
					<input type="text" class="form-control" id="input<?php echo ($vo["name"]); ?>" name="<?php echo ($vo["name"]); ?>" value="<?php echo ($group); ?>">
					 </div>
  </div><?php endforeach; endif; else: echo "" ;endif; ?>
	 </div>	
<div class="col-sm-6">
<span class="help-block"><i class="fa fa-exclamation"></i> <?php echo ($vo["remark"]); ?></span>
 </div>
  </div><?php break;?>
	  <?php case "4": ?><div class="form-group">
    <label for="input<?php echo ($vo["name"]); ?>" class="col-sm-2 control-label"><?php echo ($vo["title"]); ?></label>
	   <div class="col-sm-4">
	  <select name="<?php echo ($vo["name"]); ?>"  class="form-control">
					<?php if(is_array($vo[extra])): $i = 0; $__LIST__ = $vo[extra];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>"><?php echo ($group); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
    </div>
	<div class="col-sm-6">
<span class="help-block"><i class="fa fa-exclamation"></i> <?php echo ($vo["remark"]); ?></span>
 </div>
  </div><?php break;?>
	 
	 
	<?php case "7": break;?>
	   
   <?php case "6": ?><div class="form-group">
    <label for="input<?php echo ($vo["name"]); ?>" class="col-sm-2 control-label"><?php echo ($vo["title"]); ?></label>
    <div class="col-sm-2">
	<select class="form-control" name="opentime">
	<?php if(is_array($vo[value])): $i = 0; $__LIST__ = array_slice($vo[value],0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group): $mod = ($i % 2 );++$i;?><option value="<?php echo ($group); ?>" selected="selected"><?php echo ($group); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
  
					 <option value="01:00">01:00</option>
                     <option value="02:00">02:00</option> 
                     <option value="03:00">03:00</option> 
                     <option value="04:00">04:00</option> 
                     <option value="05:00">05:00</option>
                     <option value="06:00">06:00</option>
                     <option value="07:00">07:00</option>
					 <option value="08:00">08:00</option>
                     <option value="09:00">09:00</option> 
                     <option value="10:00">10:00</option> 
                     <option value="11:00">11:00</option> 
                     <option value="12:00">12:00</option>
                     <option value="13:00">13:00</option>
                     <option value="14:00">14:00</option> 
					 <option value="15:00">15:00</option>
                     <option value="16:00">16:00</option> 
                     <option value="17:00">17:00</option> 
                     <option value="18:00">18:00</option> 
                     <option value="19:00">19:00</option>
                     <option value="20:00">20:00</option>
                     <option value="21:00">21:00</option> 
 <option value="22:00">22:00</option> 
 <option value="23:00">23:00</option>
<option value="00:00">00:00</option>   
                       					 
					 
				</select>    </div>
				
				<div class="col-sm-2">
	<select class="form-control" name="endtime">
		<?php if(is_array($vo[value])): $i = 0; $__LIST__ = array_slice($vo[value],1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group): $mod = ($i % 2 );++$i;?><option value="<?php echo ($group); ?>" selected="selected"><?php echo ($group); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					 <option value="01:00">01:00</option>
                     <option value="02:00">02:00</option> 
                     <option value="03:00">03:00</option> 
                     <option value="04:00">04:00</option> 
                     <option value="05:00">05:00</option>
                     <option value="06:00">06:00</option>
                     <option value="07:00">07:00</option>
					 <option value="08:00">08:00</option>
                     <option value="09:00">09:00</option> 
                     <option value="10:00">10:00</option> 
                     <option value="11:00">11:00</option> 
                     <option value="12:00">12:00</option>
                     <option value="13:00">13:00</option>
                     <option value="14:00">14:00</option> 
					 <option value="15:00">15:00</option>
                     <option value="16:00">16:00</option> 
                     <option value="17:00">17:00</option> 
                     <option value="18:00">18:00</option> 
                     <option value="19:00">19:00</option>
                     <option value="20:00">20:00</option>
                     <option value="21:00">21:00</option> 
 <option value="22:00">22:00</option> 
 <option value="23:00">23:00</option>
<option value="00:00">00:00</option>   
	
				
				</select>    </div>
				<div class="col-sm-6">
<span class="help-block"><i class="fa fa-exclamation"></i> <?php echo ($vo["remark"]); ?></span>
 </div>
  </div><?php break; endswitch; endforeach; endif; else: echo "" ;endif; ?>

   
  
<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="sumbit" class="btn btn-primary">保存</button>
      </div>


      </div>
      </form>
	

			  
			  
			
             
	
     

	  
	  
	  
	
	 </div><!-- col end -->

</div><!-- end row -->


  


    
</div><!-- end container -->



<div class="foot navbar-fixed-bottom" style="background-color:#333;color:#FFf;">
<div class="container">

    
<br>
<p align="center">© 2014 技术支持:<a href="http://www.wangminwei.com/" target="_blank">民伟网络</a></p> 

</div>

</div>	

	
	
    <script src="__ROOT__/Public/js/jquery.js"></script>
    <script src="__ROOT__/Public/js/bootstrap.min.js"></script> 
	





	<!-- END CORE PLUGINS -->
	
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>