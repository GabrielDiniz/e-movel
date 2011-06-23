<?php
class CaracteristicasController extends AppController {

	var $name = 'Caracteristicas';

	function index() {
		$this->Caracteristica->recursive = 0;
		$this->set('caracteristicas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid caracteristica', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('caracteristica', $this->Caracteristica->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Caracteristica->create();
			if ($this->Caracteristica->save($this->data)) {
				$this->Session->setFlash(__('The caracteristica has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The caracteristica could not be saved. Please, try again.', true));
			}
		}
		$imoveis = $this->Caracteristica->Imovel->find('list');
		$tipos = $this->Caracteristica->Tipo->find('list');
		$this->set(compact('imoveis', 'tipos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid caracteristica', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Caracteristica->save($this->data)) {
				$this->Session->setFlash(__('The caracteristica has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The caracteristica could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Caracteristica->read(null, $id);
		}
		$imoveis = $this->Caracteristica->Imovel->find('list');
		$tipos = $this->Caracteristica->Tipo->find('list');
		$this->set(compact('imoveis', 'tipos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for caracteristica', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Caracteristica->delete($id)) {
			$this->Session->setFlash(__('Caracteristica deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Caracteristica was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
