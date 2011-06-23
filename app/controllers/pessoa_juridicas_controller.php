<?php
class PessoaJuridicasController extends AppController {

	var $name = 'PessoaJuridicas';

	function index() {
		$this->PessoaJuridica->recursive = 0;
		$this->set('pessoaJuridicas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid pessoa juridica', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pessoaJuridica', $this->PessoaJuridica->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->PessoaJuridica->create();
			if ($this->PessoaJuridica->save($this->data)) {
				$this->Session->setFlash(__('The pessoa juridica has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pessoa juridica could not be saved. Please, try again.', true));
			}
		}
		$pessoas = $this->PessoaJuridica->Pessoa->find('list');
		$this->set(compact('pessoas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid pessoa juridica', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->PessoaJuridica->save($this->data)) {
				$this->Session->setFlash(__('The pessoa juridica has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pessoa juridica could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PessoaJuridica->read(null, $id);
		}
		$pessoas = $this->PessoaJuridica->Pessoa->find('list');
		$this->set(compact('pessoas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for pessoa juridica', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PessoaJuridica->delete($id)) {
			$this->Session->setFlash(__('Pessoa juridica deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pessoa juridica was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
