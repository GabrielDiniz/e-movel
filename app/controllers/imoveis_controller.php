<?php
class ImoveisController extends AppController {

	var $name = 'Imoveis';

	function index() {
		$this->Imovel->recursive = 3;
		$this->Imovel->unbindModel(
			array(
				'hasMany'=>array(
					'Aluguel',
					'Venda',
					'Reserva',
					'Visita'
				),
				'hasAndBelongsToMany'=>array(
					'Caracteristica'
				),
				'belongsTo'=>array(
					'Proprietario'
				)
			),false
		);
		$this->Imovel->Tipo->unbindModel(
			array(
				'hasMany'=>array(
					'Imovel',
				),
				'hasAndBelongsToMany'=>array(
					'Caracteristica'
				)
			),false
		);
		$this->Imovel->Logradouro->Bairro->unbindModel(
			array(
				'hasMany'=>array(
					'Logradouro',
				)
			),false
		);
		$this->Imovel->Logradouro->TipoLogradouro->unbindModel(
			array(
				'hasMany'=>array(
					'Logradouro',
				)
			),false
		);
		$this->Imovel->Logradouro->unbindModel(
			array(
				'hasMany'=>array(
					'Imovel',
					'Pessoa'
				)
			),false
		);
		$this->Imovel->ValorAluguel->unbindModel(
			array(
				'belongsTo'=>array(
					'Imovel'
				)
			),false
		);
		
		$this->set('imoveis', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid imovel', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('imovel', $this->Imovel->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Imovel->create();
			if ($this->Imovel->save($this->data)) {
				$this->Session->setFlash(__('The imovel has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The imovel could not be saved. Please, try again.', true));
			}
		}
		$tipos = $this->Imovel->Tipo->find('list');
		$logradouros = $this->Imovel->Logradouro->find('list');
		$proprietarios = $this->Imovel->Proprietario->find('list');
		$caracteristicas = $this->Imovel->Caracteristica->find('list');
		$this->set(compact('tipos', 'logradouros', 'proprietarios', 'caracteristicas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid imovel', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Imovel->save($this->data)) {
				$this->Session->setFlash(__('The imovel has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The imovel could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Imovel->read(null, $id);
		}
		$tipos = $this->Imovel->Tipo->find('list');
		$logradouros = $this->Imovel->Logradouro->find('list');
		$proprietarios = $this->Imovel->Proprietario->find('list');
		$caracteristicas = $this->Imovel->Caracteristica->find('list');
		$this->set(compact('tipos', 'logradouros', 'proprietarios', 'caracteristicas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for imovel', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Imovel->delete($id)) {
			$this->Session->setFlash(__('Imovel deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Imovel was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
