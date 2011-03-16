<?php
class PartController extends AppController {
    var $helpers = array('Html', 'Form', 'Gravatar');
    var $components = array('Session');
    var $name = 'Part';

    function index() {
		$this->Parts->recursive = 0;
		$this->set('parts', $this->paginate());
	}

    function view($id = null) {
        $this->layout = 'blank';
        if (!$id) {
			$this->Session->setFlash(__('Invalad Part Number', true));
			$this->redirect(array('action' => 'index'));
        }
        $this->Part->id = $id;
		$this->set('part', $this->Part->read());
    }
}
?>
