<?php
class Pessoa extends AppModel {
	var $name = 'Pessoa';
	var $validate = array(
		'logradouro_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasOne = array(
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'pessoa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PessoaFisica' => array(
			'className' => 'PessoaFisica',
			'foreignKey' => 'pessoa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PessoaJuridica' => array(
			'className' => 'PessoaJuridica',
			'foreignKey' => 'pessoa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Proprietario' => array(
			'className' => 'Proprietario',
			'foreignKey' => 'pessoa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'pessoa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $belongsTo = array(
		'Logradouro' => array(
			'className' => 'Logradouro',
			'foreignKey' => 'logradouro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
