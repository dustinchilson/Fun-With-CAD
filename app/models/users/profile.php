<?php
class Profile extends AppModel{
    var $name = 'Users';
    var $validate = array(
        'name' => array('rule' => 'notEmpty'),
        'password' => array('rule' => 'notEmpty')
    );
}
?>
