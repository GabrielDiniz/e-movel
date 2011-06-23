<?php
class TiposController extends AppController {

	var $name = 'Tipos';

	function index() {
		$this->Tipo->recursive = 0;
		$this->set('tipos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tipo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tipo', $this->Tipo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tipo->create();
			if ($this->Tipo->save($this->data)) {
				$this->Session->setFlash(__('The tipo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo could not be saved. Please, try again.', true));
			}
		}
		$caracteristicas = $this->Tipo->Caracteristica->find('list');
		$this->set(compact('caracteristicas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tipo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tipo->save($this->data)) {
				$this->Session->setFlash(__('The tipo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tipo->read(null, $id);
		}
		$caracteristicas = $this->Tipo->Caracteristica->find('list');
		$this->set(compact('caracteristicas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tipo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tipo->delete($id)) {
			$this->Session->setFlash(__('Tipo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tipo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
