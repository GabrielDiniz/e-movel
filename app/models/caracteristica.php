<?php
class Caracteristica extends AppModel {
	var $name = 'Caracteristica';
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

	var $hasAndBelongsToMany = array(
		'Imovel' => array(
			'className' => 'Imovel',
			'joinTable' => 'caracteristicas_imoveis',
			'foreignKey' => 'caracteristica_id',
			'associationForeignKey' => 'imovel_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Tipo' => array(
			'className' => 'Tipo',
			'joinTable' => 'caracteristicas_tipos',
			'foreignKey' => 'caracteristica_id',
			'associationForeignKey' => 'tipo_id',
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
