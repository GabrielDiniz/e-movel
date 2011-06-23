<?php
class PessoasController extends AppController {

	var $name = 'Pessoas';

	function index() {
		$this->Pessoa->recursive = 0;
		$this->set('pessoas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid pessoa', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pessoa', $this->Pessoa->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Pessoa->create();
			if ($this->Pessoa->save($this->data)) {
				$this->Session->setFlash(__('The pessoa has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pessoa could not be saved. Please, try again.', true));
			}
		}
		$logradouros = $this->Pessoa->Logradouro->find('list');
		$this->set(compact('logradouros'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid pessoa', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pessoa->save($this->data)) {
				$this->Session->setFlash(__('The pessoa has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pessoa could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pessoa->read(null, $id);
		}
		$logradouros = $this->Pessoa->Logradouro->find('list');
		$this->set(compact('logradouros'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for pessoa', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pessoa->delete($id)) {
			$this->Session->setFlash(__('Pessoa deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pessoa was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
