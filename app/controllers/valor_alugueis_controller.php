<?php
class ValorAlugueisController extends AppController {

	var $name = 'ValorAlugueis';

	function index() {
		$this->ValorAluguel->recursive = 0;
		$this->set('valorAlugueis', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid valor aluguel', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('valorAluguel', $this->ValorAluguel->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ValorAluguel->create();
			if ($this->ValorAluguel->save($this->data)) {
				$this->Session->setFlash(__('The valor aluguel has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The valor aluguel could not be saved. Please, try again.', true));
			}
		}
		$imoveis = $this->ValorAluguel->Imovel->find('list');
		$this->set(compact('imoveis'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid valor aluguel', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ValorAluguel->save($this->data)) {
				$this->Session->setFlash(__('The valor aluguel has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The valor aluguel could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ValorAluguel->read(null, $id);
		}
		$imoveis = $this->ValorAluguel->Imovel->find('list');
		$this->set(compact('imoveis'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for valor aluguel', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ValorAluguel->delete($id)) {
			$this->Session->setFlash(__('Valor aluguel deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Valor aluguel was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
