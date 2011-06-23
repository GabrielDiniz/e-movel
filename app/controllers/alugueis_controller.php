<?php
class AlugueisController extends AppController {

	var $name = 'Alugueis';

	function index() {
		$this->Aluguel->recursive = 0;
		$this->set('alugueis', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid aluguel', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('aluguel', $this->Aluguel->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Aluguel->create();
			if ($this->Aluguel->save($this->data)) {
				$this->Session->setFlash(__('The aluguel has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aluguel could not be saved. Please, try again.', true));
			}
		}
		$imoveis = $this->Aluguel->Imovel->find('list');
		$clientes = $this->Aluguel->Cliente->find('list');
		$this->set(compact('imoveis', 'clientes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid aluguel', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Aluguel->save($this->data)) {
				$this->Session->setFlash(__('The aluguel has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aluguel could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Aluguel->read(null, $id);
		}
		$imoveis = $this->Aluguel->Imovel->find('list');
		$clientes = $this->Aluguel->Cliente->find('list');
		$this->set(compact('imoveis', 'clientes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for aluguel', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Aluguel->delete($id)) {
			$this->Session->setFlash(__('Aluguel deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Aluguel was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
