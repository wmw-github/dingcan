<?php

class FoodcatModel extends RelationModel{
    protected $_link = array(
            'Food'=>array(
            'mapping_type'    =>HAS_MANY,
                  'class_name'=>'Food',

				  'foreign_key'=>'fcid',
             ),
         );
}



?>
