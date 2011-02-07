<?php
class Classe extends AppModel{
    var $name = 'classe';
    var $hasMany = array(
        'Parts' => array(
            'className' => 'part',
        )
    );
    var $validate = array();
}
?>
