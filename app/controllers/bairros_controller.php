<?php
class BairrosController extends AppController {

	var $name = 'Bairros';

	function index() {
		$this->Bairro->recursive = 0;
		$this->set('bairros', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid bairro', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('bairro', $this->Bairro->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Bairro->create();
			if ($this->Bairro->save($this->data)) {
				$this->Session->setFlash(__('The bairro has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bairro could not be saved. Please, try again.', true));
			}
		}
		$cidades = $this->Bairro->Cidade->find('list');
		$this->set(compact('cidades'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid bairro', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Bairro->save($this->data)) {
				$this->Session->setFlash(__('The bairro has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bairro could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Bairro->read(null, $id);
		}
		$cidades = $this->Bairro->Cidade->find('list');
		$this->set(compact('cidades'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for bairro', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Bairro->delete($id)) {
			$this->Session->setFlash(__('Bairro deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Bairro was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function porcidade($cidade = null){
		$this->layout = "ajax";
		$this->set('bairros',$this->Bairro->find('list',array('conditions'=>array('cidade_id'=>$cidade))));
	}
}
