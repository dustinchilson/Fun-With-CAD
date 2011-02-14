<?php
class Classe extends AppModel{
    var $name = 'classe';
    
    // ==================================================
    // Creates a one to Many relationship to Parts and 
    // subClasses.
    //
    // Subclasses uses the parent_id field for a 
    // recursive relationship
    // ==================================================
    var $hasMany = array(
        'Parts' => array(
            'className' => 'part',
        ),
        'subClass' => array(
            'className' => 'classe',
            'foreignKey' => 'parent_id'
        )
    );
    
    // ==================================================
    // Creates a many to one relationship to superClass 
    //
    // superClass uses the parent_id field for a 
    // recursive relationship
    // ==================================================
    var $belongsTo = array(
        'superClass' => array(
            'className' => 'classe',
            'foreignKey' => 'parent_id'
        )
    );
    var $validate = array();
}
?>
