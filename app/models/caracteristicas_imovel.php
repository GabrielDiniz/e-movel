<?php
class CaracteristicasImovel extends AppModel {
	var $name = 'CaracteristicasImovel';
	var $displayField = 'numero';
	var $validate = array(
		'imovel_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'caracteristica_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'numero' => array(
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

	var $belongsTo = array(
		'Imovel' => array(
			'className' => 'Imovel',
			'foreignKey' => 'imovel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Caracteristica' => array(
			'className' => 'Caracteristica',
			'foreignKey' => 'caracteristica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
