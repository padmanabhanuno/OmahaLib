<?php
/**
 * ItemFixture
 *
 */
class ItemFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Item_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Item_Description' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Item_Received_Date' => array('type' => 'date', 'null' => false, 'default' => null),
		'Item_Value' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'Item_Disposition' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Library_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Item_ID', 'unique' => 1),
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
			'Item_ID' => 1,
			'Item_Description' => 'Lorem ipsum dolor sit amet',
			'Item_Received_Date' => '2016-03-09',
			'Item_Value' => 1,
			'Item_Disposition' => 'Lorem ipsum dolor sit amet',
			'Library_ID' => 1
		),
	);

}
