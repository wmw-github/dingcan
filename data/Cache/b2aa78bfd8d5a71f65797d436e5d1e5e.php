<?php if (!defined('THINK_PATH')) exit();?>	<form class="form-horizontal" role="form"  method="post" action="<?php echo U('Shop/cartsave/');?>">
<?php if(empty($cartdata)): ?><div class="panel panel-cart">
             <div class="panel-body">
您的购餐车现在为空呢！
</div>
</div>
<?php else: ?> 





 <div id="collapseOne" class="panel-collapse collapse in" style="padding:0px 10px;font-size:12px;">
 <div class="food-list-content">
    <table class="table tp" width="220px">
         <thead>
          <tr>
            <td width="90px">  菜品</td>
            
            <td width="80px">  数量</td>
            <td width="40px">  小计</td>
			<td></td>
          </tr>
         </thead>
       <?php if(is_array($cartdata)): $i = 0; $__LIST__ = $cartdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td > <small style="margin-top:3px;margin-bottom:0px;"> <?php echo ($vo["name"]); ?></small></td>
            <td >
			<a class="add" href="<?php echo U('Cart/cartupdate/','id='.$vo['rowid'].'&cid=1');?>">+</a>
			<?php echo ($vo["qty"]); ?>
				<a class="add" href="<?php echo U('Cart/cartupdate/','id='.$vo['rowid'].'&cid=-1');?>">-</a>	
			

</td>
            <td><small style="margin-top:1px;margin-bottom:0px;color:#D84A38;font-weight:600;">￥<?php echo ($vo["subtotal"]); ?></small></td>
            <td class="ts"><a href="<?php echo U('Cart/cartupdate/','id='.$vo['rowid'].'&cid=-'.$vo['qty']);?>" ><i class="glyphicon glyphicon-remove"></i> </a></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          
     
        
      </table>
	  </div>
	  <hr>
	  
	  <div>合计数量：<span class="pull-right"><?php echo ($total_items); ?>份</span></div>
	  <div class="cart-totalpay">合计金额：<span class="pull-right">￥<?php echo ($total); ?>.00</span></div>
	  <br>
 	<p align="center"><a href="<?php echo U('Cart/index/');?>" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> 立刻结算</a> </p>
      <p style="color:#953C00"> 友情提示：

    
</p>
       		
	
			  </div><?php endif; ?>