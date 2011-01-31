<?php
class Classes extends AppModel{
    var $name = 'classe';
    var $hasMany = array('part', 'classe');
    var $validate = array();
}
?>
