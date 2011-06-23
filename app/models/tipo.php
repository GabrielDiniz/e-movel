<?php
class Tipo extends AppModel {
	var $name = 'Tipo';
	var $displayField = 'descricao';
	var $validate = array(
		'descricao' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Imovel' => array(
			'className' => 'Imovel',
			'foreignKey' => 'tipo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


	var $hasAndBelongsToMany = array(
		'Caracteristica' => array(
			'className' => 'Caracteristica',
			'joinTable' => 'caracteristicas_tipos',
			'foreignKey' => 'tipo_id',
			'associationForeignKey' => 'caracteristica_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
