<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 */
class Post extends AppModel
{
	public $actsAs = array('Search.Searchable');
	public $filterArgs = array(
		'id' => array('type' => 'value'),
		'title' => array('type' => 'value'),

	);

	public $validate = array(
		'title' => array(
			'rule' => 'notBlank'
		),
		'body' => array(
			'rule' => 'notBlank'
		)
	);
	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'title';
}
