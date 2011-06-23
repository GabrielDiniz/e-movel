<?php
class VisitasController extends AppController {

	var $name = 'Visitas';

	function index() {
		$this->Visita->recursive = 0;
		$this->set('visitas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid visita', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('visita', $this->Visita->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Visita->create();
			if ($this->Visita->save($this->data)) {
				$this->Session->setFlash(__('The visita has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The visita could not be saved. Please, try again.', true));
			}
		}
		$imoveis = $this->Visita->Imovel->find('list');
		$clientes = $this->Visita->Cliente->find('list');
		$this->set(compact('imoveis', 'clientes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid visita', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Visita->save($this->data)) {
				$this->Session->setFlash(__('The visita has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The visita could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Visita->read(null, $id);
		}
		$imoveis = $this->Visita->Imovel->find('list');
		$clientes = $this->Visita->Cliente->find('list');
		$this->set(compact('imoveis', 'clientes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for visita', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Visita->delete($id)) {
			$this->Session->setFlash(__('Visita deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Visita was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
