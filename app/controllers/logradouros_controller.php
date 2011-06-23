<?php
class LogradourosController extends AppController {

	var $name = 'Logradouros';
	var $helpers = array('Javascript');

	function index() {
		$this->Logradouro->recursive = 2;
		$this->Logradouro->unbindModel(array('hasMany'=>array('Imovel','Pessoa')),false);
		$this->Logradouro->Bairro->unbindModel(array('hasMany'=>array('Logradouro')),false);
		$this->Logradouro->TipoLogradouro->unbindModel(array('hasMany'=>array('Logradouro')),false);
		$this->set('logradouros', $this->paginate());
	}

	function add() {
		if (!empty($this->data)) {
			$this->Logradouro->create();
			if ($this->Logradouro->save($this->data)) {
				$this->Session->setFlash(__('The logradouro has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The logradouro could not be saved. Please, try again.', true));
			}
		}
		$bairros = array('--'=>'-Selecione a cidade-');
		$tipoLogradouros = $this->Logradouro->TipoLogradouro->find('list');
		$cidades =  $this->Logradouro->Bairro->Cidade->find('list');
		$this->set(compact('bairros', 'tipoLogradouros','cidades'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid logradouro', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Logradouro->save($this->data)) {
				$this->Session->setFlash(__('The logradouro has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The logradouro could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Logradouro->read(null, $id);
		}
		$bairros = $this->Logradouro->Bairro->find('list',array('conditions'=>array('cidade_id'=>$this->data['Bairro']['cidade_id'])));
		$cidades =  $this->Logradouro->Bairro->Cidade->find('list');
		$tipoLogradouros = $this->Logradouro->TipoLogradouro->find('list');
		$this->set(compact('bairros', 'tipoLogradouros','cidades'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for logradouro', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Logradouro->delete($id)) {
			$this->Session->setFlash(__('Logradouro deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Logradouro was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
