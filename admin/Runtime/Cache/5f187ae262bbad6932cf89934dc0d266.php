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
             <li ><a href="<?php echo U('Page/index/');?>" ><b>单页内容</b></a></li>
			 <li class=""><a href="<?php echo U('Page/add/');?>" ><b>内容增加</b></a></li>
			  <li class="active"><a href="#" ><b>内容修改</b></a></li>
          
          </ul>
		  <p></P>
		  
    
           <div class="row"> 
             <div class="col-lg-2 col-md-2 col-xs-2" ></div>
			 <div class="col-lg-6 col-md-6 col-xs-6" ><span class="help-block"></span></div>
			 <div class="col-lg-4 col-md-4 col-xs-4" ></div>
		  
		  </div>
		  <p></P>




			 
<form class="form-horizontal"role="form" enctype="multipart/form-data" action="__APP__/Page/editsave" method="post">
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">标题</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" name="page_title" value="<?php echo ($item["page_title"]); ?>">
	  <input type="hidden" name="pagid" value="<?php echo ($item["pagid"]); ?>">
	 
    </div>
	<div class="col-sm-4">
<span class="help-block"><i class="fa fa-exclamation"></i>请输入标题,如：关于我们</span>
 </div>
  </div>
     <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">分类目录</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputEmail3" name="pagedir" value="<?php echo ($item["pagedir"]); ?>" placeholder="">

    </div>
	<div class="col-sm-8">
<span class="help-block"><i class="fa fa-exclamation"></i> 请输入目录名称，必须英文字符,如：about.</span></span>
 </div>
  </div>
 <div class="form-group">
    <label for="inputEmail5" class="col-sm-2 control-label">所属分类</label>
    <div class="col-sm-3">
     <select class="form-control" name="page_fid">
	                           <option value="0">默认</option>
													<?php if(is_array($clist)): $i = 0; $__LIST__ = $clist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo['cid']) == $item['cid']): ?><option value="<?php echo ($vo["cid"]); ?>" selected="selected"><?php echo ($vo["name"]); ?></option>
													  <?php else: ?>
													  <option value="<?php echo ($vo["cid"]); ?>" ><?php echo ($vo["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>	
																</select>

    </div>
	<div class="col-sm-7">
<span class="help-block"><i class="fa fa-exclamation"></i>建议以默认值</span></span>
 </div>
  </div>
   
  <div class="form-group">
    <label for="inputEmail8" class="col-sm-2 control-label">图片</label>
    <div class="col-sm-4">
      
	 <input type="file" name="pic" id="exampleInputFile">


    </div>
	<div class="col-sm-6">
<span class="help-block"> 仅支持jpg,可不设置</span>
 </div>
  </div>

    <div class="form-group">
    <label for="inputEmail11" class="col-sm-2 control-label">内容</label>
    <div class="col-sm-8">



      <script id="conted" name="content" type="text/plain"><?php echo (htmlspecialchars_decode($item["page_content"])); ?></script>
<script type="text/javascript">
    var editor = UE.getEditor('conted')
</script>


    </div>
	<div class="col-sm-2">
<span class="help-block"></span>
 </div>
  </div>
   
  
 <!--     <div class="form-group">
    <label for="inputEmail10" class="col-sm-2 control-label">seo关键字</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputEmail10" name="key" value="">
	  


    </div>
	<div class="col-sm-6">
<span class="help-block"><i class="fa fa-exclamation"></i>多个关键字用,隔开</span></span>
 </div>
  </div>
   <label for="inputEmail10" class="col-sm-2 control-label">seo描述</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputEmail10" name="key" value="">
	  


    </div>
	<div class="col-sm-6">
<span class="help-block"><i class="fa fa-exclamation"></i>请输入描述</span></span>
 </div>
  </div>
  -->
   
  
<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="sumbit" class="btn btn-primary">保存</button>
      </div>


      </div>
      </form>
	

			  
			  
			
             
	
     

	  
	  
	  
	
	 </div><!-- col end -->

</div><!-- end row -->


  


    
</div><!-- end container -->


    
         
<br><br>

<div class="foot navbar-fixed-bottom" style="background-color:#333;color:#FFf;">
<div class="container">

    
<br>
<p align="center">© 2014 技术支持:<a href="http://www.wangminwei.com/" target="_blank">民伟网络</a></p> 

</div>

</div>	

	
	
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