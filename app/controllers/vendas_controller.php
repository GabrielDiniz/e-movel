<?php
class VendasController extends AppController {

	var $name = 'Vendas';

	function index() {
		$this->Venda->recursive = 0;
		$this->set('vendas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid venda', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('venda', $this->Venda->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Venda->create();
			if ($this->Venda->save($this->data)) {
				$this->Session->setFlash(__('The venda has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The venda could not be saved. Please, try again.', true));
			}
		}
		$imoveis = $this->Venda->Imovel->find('list');
		$clientes = $this->Venda->Cliente->find('list');
		$this->set(compact('imoveis', 'clientes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid venda', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Venda->save($this->data)) {
				$this->Session->setFlash(__('The venda has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The venda could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Venda->read(null, $id);
		}
		$imoveis = $this->Venda->Imovel->find('list');
		$clientes = $this->Venda->Cliente->find('list');
		$this->set(compact('imoveis', 'clientes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for venda', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Venda->delete($id)) {
			$this->Session->setFlash(__('Venda deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Venda was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
