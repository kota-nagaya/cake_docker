<?php
App::uses('AppModel', 'Model');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
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

	/**
	 * daxtra description json化
	 * ↓↓↓↓↓↓↓↓↓Controller↓↓↓↓↓↓↓↓↓↓
	 * $description = "Skill > IT > other";
	 * $this->Post->descConvertAry($description);
	 * ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
	 */
	public function descConvertAry($description)
	{
		$array[] = explode(" > ", $description);
		return $array;
	}
}
