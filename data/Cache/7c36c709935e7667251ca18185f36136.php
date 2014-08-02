<?php if (!defined('THINK_PATH')) exit();?><div class="panel panel-default">
  
        <div class="panel-body">
		<h2 class="panel-title">订单详情</h2>
		<br>
		
		<div class="row">
		     <div class="col-md-4">
			
			 <p>订单编号：<?php echo ($orderdetail["oid"]); ?></p>
			 <p>下单时间：<?php echo (date("Y-m-d H:i",$orderdetail["order_ctime"])); ?></p>
			 <p>送达时间：<?php echo (substr($orderdetail["order_dtime"],0,16)); ?></p>
			 <p>完成时间：<?php if(empty($orderdetail["order_endtime"])): else: ?> <?php echo (date("Y-m-d H:i",$orderdetail["order_endtime"])); endif; ?>
</p>
			 
			 <p>客户姓名：<?php echo ($orderdetail["oman"]); ?></p>
			 <p>手机号码：<?php echo ($orderdetail["otel"]); ?></p>
			 <p>收货地址：<?php echo ($orderdetail["oaddress"]); ?></p>
			 <p>订单备注：<?php echo ($orderdetail["morecontent"]); ?></p>
			 
			 </div>
			 <div class="col-md-8">
			<div class="panel panel-default">
            <div class="panel-heading">
              <b>商户：</b><?php echo ($orderdetail["shopname"]); ?>　<span class="pull-right">订单状态：<span class="orderd"><?php switch($vo["orderstatus"]): case "4": ?>已完成<?php break;?>
													<?php case "5": ?>送货中<?php break;?>
                                                    <?php default: ?> 提交成功<?php endswitch;?></span></span>
            </div>
        <div class="panel-body">
			 
			   <table class="table tp">
         <thead>
          <tr>
            <td >  菜品</td>
            <td >  单价</td>
            <td >  数量</td>
            <td>  小计</td>
			<td></td>
          </tr>
         </thead>
       <?php if(is_array($orderdetail["Foodorderext"])): $i = 0; $__LIST__ = $orderdetail["Foodorderext"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td >  <?php echo ($vo["fname"]); ?></td>
			<td >  <?php echo ($vo["fprice"]); ?></td>
            <td ><?php echo ($vo["fcount"]); ?></td>
			<td ><?php echo ($vo["prices"]); ?></td>
       </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          
     
        
      </table>
	   </div>
	   <div class="panel-footer">配送费用：<span class="orderd"><?php echo ($orderdetail["shopspay"]); ?></span>元　　订单总额：<span class="orderd"><?php echo ($orderdetail["orderprice"]); ?></span>元</div>
			 </div>
			 </div>
		</div>
			   </div>
			    </div>