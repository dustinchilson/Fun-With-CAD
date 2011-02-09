<?php
class Classe extends AppModel{
    var $name = 'classe';
    var $hasMany = array(
        'Parts' => array(
            'className' => 'part',
        ),
        'subClass' => array(
            'className' => 'classe',
            'foreignKey' => 'parent_id'
        )
    );
    var $belongsTo = array(
        'superClass' => array(
            'className' => 'classe',
            'foreignKey' => 'parent_id'
        )
    );
    var $validate = array();
}
?>
