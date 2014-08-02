<?php

class FoodareaModel extends RelationModel{
    protected $_link = array(
            'Area'=>array(
            'mapping_type'    =>HAS_MANY,
                  'class_name'=>'Area',

				  'foreign_key'=>'farea',
             ),
         );
}



?>
