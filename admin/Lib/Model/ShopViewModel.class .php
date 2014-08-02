<?php

/**后台商家模型
 */
class ShopViewModel extends ViewModel {	
	public $viewFields = array(
     'Shop'=>array('*'),
     'Foodcat'=>array('fcname', '_on'=>'Foodcat.fcid=Shop.scid'),
     
   );

}
?>
