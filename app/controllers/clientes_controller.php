<?php
class ClientesController extends AppController {

	var $name = 'Clientes';

	function index() {
		$this->Cliente->recursive = 0;
		$this->set('clientes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid cliente', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cliente', $this->Cliente->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Cliente->create();
			if ($this->Cliente->save($this->data)) {
				$this->Session->setFlash(__('The cliente has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cliente could not be saved. Please, try again.', true));
			}
		}
		$pessoas = $this->Cliente->Pessoa->find('list');
		$this->set(compact('pessoas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid cliente', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Cliente->save($this->data)) {
				$this->Session->setFlash(__('The cliente has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cliente could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Cliente->read(null, $id);
		}
		$pessoas = $this->Cliente->Pessoa->find('list');
		$this->set(compact('pessoas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for cliente', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Cliente->delete($id)) {
			$this->Session->setFlash(__('Cliente deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Cliente was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
