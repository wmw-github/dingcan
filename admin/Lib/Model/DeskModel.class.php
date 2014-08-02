<?php
class DeskModel extends Model {
	// 自动验证设置
	protected $_validate	 =	 array(
            array('did','number','桌号必须为数字'),
			array('did','','编号已经存在！请换个试试',0,'unique',1), 
            
        );
	

}
?>