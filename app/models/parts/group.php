<?php
class Part_Group extends AppModel{
    var $name = 'group';
    var $hasMany = array ('part', 'group'); 
    var $validate = array();
}
?>
