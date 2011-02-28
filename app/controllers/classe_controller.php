<?php
class ClasseController extends AppController {
    var $helpers = array('Html', 'Form');
    var $components = array('Session');
	var $name = 'Classe';
    
    // Index Method
    // {{{
    // ===============================================
    // Creates the index page for the classification
    // structure.
    //
    // Loads all records from the Classes table and
    // paginates the results
    // ===============================================
    function index() {
		//$this->Classes->recursive = 0;
		//$this->set('classes', $this->paginate());
        $this->view(10018592);
        $this->render('view');
	}
    // }}}

    // View method
    // {{{
    // ===============================================
    // Creates the view page for the classification
    // structure.
    //
    // loads the information related to the record
    // associated with the id from the URL structure
    // ex. /classe/view/1002 1002 is the ID
    // ===============================================
    function view($id = null) {
        if (!$id) {
			$this->Session->setFlash(__('Invalad Classe Number', true));
			$this->redirect(array('action' => 'index'));
        }
        
        $this->set('breadCrumb', 'Categories');
        $this->set('breadCrumbLink', '/classe/');

        $this->set('uberClass', $this->Classe->query(
            'SELECT 
	            `superSuperClass`.`id`,
	            `superSuperClass`.`desc`,
	            `uberClass`.`id`,
	            `uberClass`.`desc`
            FROM `classes` AS `Classe` 
            LEFT JOIN `classes` AS `superClass`
            ON (`Classe`.`parent_id` = `superClass`.`id`) 
            LEFT JOIN `classes` AS `superSuperClass`  
            ON (`superClass`.`parent_id` = `superSuperClass`.`id`) 
            LEFT JOIN `classes` AS `uberClass`  
            ON (`superSuperClass`.`parent_id` = `uberClass`.`id`) 
            WHERE `Classe`.`id` = '.$id.' 
            LIMIT 1'
        ));

        $this->Classe->id = $id;
        $this->set('classe', $this->Classe->read());
    }
    // }}}
}
?>
