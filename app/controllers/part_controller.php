<?php
class ProfileController extends AppController {
    var $helpers = array('Html', 'Form', 'Gravatar');
    var $components = array('Session');
	var $name = 'Profiles';

    function index() {
		$this->Profiles->recursive = 0;
		$this->set('profiles', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('profile', $this->Profile->read(null, $id));
	}
}
?>
