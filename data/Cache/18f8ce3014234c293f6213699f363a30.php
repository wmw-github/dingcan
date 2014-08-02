<?php if (!defined('THINK_PATH')) exit();?>
				<?php if(is_array($shoplist)): $i = 0; $__LIST__ = $shoplist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-lg-3 col-xs-12 shop">
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