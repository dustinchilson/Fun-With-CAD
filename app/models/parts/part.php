<?php
class Part extends AppModel{
    var $name = 'part';
    
    // =====================================
    // Creates the many to one relationship
    // to Class and Group
    //
    // Allows this information to be 
    // referenced from the parts view
    // =====================================
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
