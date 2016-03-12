<?php
/**
 * LibraryFixture
 *
 */
class LibraryFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'library';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Library_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Library_Name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Library_Address' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Library_City' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 18, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Library_State' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Library_Zip' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false),
		'Library_Work_Phone' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Library_ID', 'unique' => 1)
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
			'Library_ID' => 1,
			'Library_Name' => 'Lorem ipsum dolor sit amet',
			'Library_Address' => 'Lorem ipsum dolor sit amet',
			'Library_City' => 'Lorem ipsum dolo',
			'Library_State' => '',
			'Library_Zip' => 1,
			'Library_Work_Phone' => ''
		),
	);

}
