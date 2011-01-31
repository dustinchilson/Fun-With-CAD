<?php
class Part extends AppModel{
    var $name = 'part';
    #var $hasOne = array('group_parts');
    var $belongsTo = array('class' => array(
        'className' => 'classe',
    ));
    var $validate = array();
}
?>
