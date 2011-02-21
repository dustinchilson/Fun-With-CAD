<?php
class UploadsController extends AppController {
	var $name = 'Uploads';
    
    function index() {
		$this->Upload->recursive = 0;
		$this->set('uploads', $this->paginate());
	}
 
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'photo'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('upload', $this->Upload->read(null, $id));
	}
 
	function add() {
		if (!empty($this->data)) {
			$this->Upload->create();
			if ($this->Upload->saveAll($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'photo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'photo'));
			}
		}
	}
 
	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'photo'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Upload->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'photo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'photo'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Upload->read(null, $id);
		}
	}
 
	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'photo'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Upload->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Upload'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Upload'));
		$this->redirect(array('action' => 'index'));
	}

}
?>
