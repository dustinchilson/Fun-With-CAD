<?php
class PartController extends AppController {
    var $helpers = array('Html', 'Form', 'Gravatar');
    var $components = array('Session');
    var $name = 'Part';

    // ==================================================
    // Creates the index for all of the parts
    //
    // Loads every record and paginates the results
    // ==================================================
    function index() {
		$this->Parts->recursive = 0;
		$this->set('parts', $this->paginate());
	}

    
    // ==================================================
    // View page for the parts.
    //
    // Redirects back to index if no ID provided
    // ==================================================
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
