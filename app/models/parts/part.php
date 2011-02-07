<?php
class Part extends AppModel{
    var $name = 'part';
//    var $hasAndBelongsToMany = array( 
//        'Groups' => array(
//            'className' => 'group_parts'
//        ));
    var $belongsTo = array(
        'Class' => array(
            'className' => 'classe',
            'foreignKey' => 'class_id'
        ),
        'Group' => array(
            'className' => 'groups'
        )
    );
    var $validate = array();
}
?>
