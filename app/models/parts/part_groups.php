<?php
class Part_Group extends AppModel{
    var $name = 'group_part';
    var $hasOne = array(
        'group' => array (
            'className' => 'group'
            )
        'part' => array(
            'className' => 'part'
            )
        )
    var $validate = array();
}
?>
