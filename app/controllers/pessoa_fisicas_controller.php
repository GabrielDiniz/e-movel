<?php
class PessoaFisicasController extends AppController {

	var $name = 'PessoaFisicas';

	function index() {
		$this->PessoaFisica->recursive = 0;
		$this->set('pessoaFisicas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid pessoa fisica', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pessoaFisica', $this->PessoaFisica->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->PessoaFisica->create();
			if ($this->PessoaFisica->save($this->data)) {
				$this->Session->setFlash(__('The pessoa fisica has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pessoa fisica could not be saved. Please, try again.', true));
			}
		}
		$pessoas = $this->PessoaFisica->Pessoa->find('list');
		$this->set(compact('pessoas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid pessoa fisica', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->PessoaFisica->save($this->data)) {
				$this->Session->setFlash(__('The pessoa fisica has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pessoa fisica could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PessoaFisica->read(null, $id);
		}
		$pessoas = $this->PessoaFisica->Pessoa->find('list');
		$this->set(compact('pessoas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for pessoa fisica', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PessoaFisica->delete($id)) {
			$this->Session->setFlash(__('Pessoa fisica deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pessoa fisica was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
