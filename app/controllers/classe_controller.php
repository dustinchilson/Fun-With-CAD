<?php
class ClasseController extends AppController {
    var $helpers = array('Html', 'Form', 'Gravatar');
    var $components = array('Session');
	var $name = 'Classe';

    function index() {
		$this->Classes->recursive = 0;
		$this->set('classes', $this->paginate());
	}

    function view($id = null) {
        if (!$id) {
			$this->Session->setFlash(__('Invalad Classe Number', true));
			$this->redirect(array('action' => 'index'));
        }
        $this->Classe->id = $id;
        $this->set('classe', $this->Classe->read());
    }
}
?>
