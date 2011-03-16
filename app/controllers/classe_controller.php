<?php
class ClasseController extends AppController {
    var $helpers = array('Html', 'Form');
    var $components = array('Session');
	var $name = 'Classe';
    
    // Index Method
    function index() {
        $this->view(10018592);
        $this->render('view');
	}

    // View method
    function view($id = null) {
        if (!$id) {
			$this->Session->setFlash(__('Invalad Classe Number', true));
			$this->redirect(array('action' => 'index'));
        }
        
        $this->set('breadCrumb', 'Categories');
        $this->set('breadCrumbLink', '/classe/');

        // used to pull recursive parent classes for breadcrumbs
        // todo: switch the database schema to mptt for simpler queries
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
