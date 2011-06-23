<?php
class TipoLogradourosController extends AppController {

	var $name = 'TipoLogradouros';

	function index() {
		$this->TipoLogradouro->recursive = 0;
		$this->set('tipoLogradouros', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tipo logradouro', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tipoLogradouro', $this->TipoLogradouro->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TipoLogradouro->create();
			if ($this->TipoLogradouro->save($this->data)) {
				$this->Session->setFlash(__('The tipo logradouro has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo logradouro could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tipo logradouro', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TipoLogradouro->save($this->data)) {
				$this->Session->setFlash(__('The tipo logradouro has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo logradouro could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TipoLogradouro->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tipo logradouro', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TipoLogradouro->delete($id)) {
			$this->Session->setFlash(__('Tipo logradouro deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tipo logradouro was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
