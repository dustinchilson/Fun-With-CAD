<?php
class Part extends AppModel{
    var $name = 'part';
    #var $hasOne = array('group_parts');
    var $belongsTo = array(
        'Class' => array(
            'className' => 'classe'
        ),
        'Group' => array(
            'className' => 'groups'
        )
    );
    var $validate = array();
}
?>
