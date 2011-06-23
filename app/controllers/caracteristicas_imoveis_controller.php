<?php
class CaracteristicasImoveisController extends AppController {

	var $name = 'CaracteristicasImoveis';

	function index() {
		$this->CaracteristicasImovel->recursive = 0;
		$this->set('caracteristicasImoveis', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid caracteristicas imovel', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('caracteristicasImovel', $this->CaracteristicasImovel->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CaracteristicasImovel->create();
			if ($this->CaracteristicasImovel->save($this->data)) {
				$this->Session->setFlash(__('The caracteristicas imovel has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The caracteristicas imovel could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid caracteristicas imovel', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CaracteristicasImovel->save($this->data)) {
				$this->Session->setFlash(__('The caracteristicas imovel has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The caracteristicas imovel could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CaracteristicasImovel->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for caracteristicas imovel', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CaracteristicasImovel->delete($id)) {
			$this->Session->setFlash(__('Caracteristicas imovel deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Caracteristicas imovel was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
