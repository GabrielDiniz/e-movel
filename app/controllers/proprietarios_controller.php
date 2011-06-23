<?php
class ProprietariosController extends AppController {

	var $name = 'Proprietarios';

	function index() {
		$this->Proprietario->recursive = 0;
		$this->set('proprietarios', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid proprietario', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('proprietario', $this->Proprietario->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Proprietario->create();
			if ($this->Proprietario->save($this->data)) {
				$this->Session->setFlash(__('The proprietario has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proprietario could not be saved. Please, try again.', true));
			}
		}
		$pessoas = $this->Proprietario->Pessoa->find('list');
		$this->set(compact('pessoas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid proprietario', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Proprietario->save($this->data)) {
				$this->Session->setFlash(__('The proprietario has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proprietario could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Proprietario->read(null, $id);
		}
		$pessoas = $this->Proprietario->Pessoa->find('list');
		$this->set(compact('pessoas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for proprietario', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Proprietario->delete($id)) {
			$this->Session->setFlash(__('Proprietario deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Proprietario was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
