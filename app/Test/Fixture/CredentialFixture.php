<?php
/**
 * CredentialFixture
 *
 */
class CredentialFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'secQuestion' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'secAnswer' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Library_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Username', 'unique' => 1),
			'Library_ID' => array('column' => 'Library_ID', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'Username' => 'Lorem ipsum dolor sit amet',
			'Password' => 'Lorem ipsum dolor sit amet',
			'secQuestion' => 'Lorem ipsum dolor sit amet',
			'secAnswer' => 'Lorem ipsum dolor sit amet',
			'Library_ID' => 1
		),
	);

}
