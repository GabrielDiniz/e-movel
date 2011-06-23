<?php
class ReservasController extends AppController {

	var $name = 'Reservas';

	function index() {
		$this->Reserva->recursive = 0;
		$this->set('reservas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid reserva', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('reserva', $this->Reserva->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Reserva->create();
			if ($this->Reserva->save($this->data)) {
				$this->Session->setFlash(__('The reserva has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reserva could not be saved. Please, try again.', true));
			}
		}
		$imoveis = $this->Reserva->Imovel->find('list');
		$clientes = $this->Reserva->Cliente->find('list');
		$this->set(compact('imoveis', 'clientes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid reserva', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Reserva->save($this->data)) {
				$this->Session->setFlash(__('The reserva has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reserva could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Reserva->read(null, $id);
		}
		$imoveis = $this->Reserva->Imovel->find('list');
		$clientes = $this->Reserva->Cliente->find('list');
		$this->set(compact('imoveis', 'clientes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for reserva', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Reserva->delete($id)) {
			$this->Session->setFlash(__('Reserva deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Reserva was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
