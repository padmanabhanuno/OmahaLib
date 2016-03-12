<?php
/**
 * MemorialFixture
 *
 */
class MemorialFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Mem_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Mem_Party' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Mem_Desciption' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Mem_Inscription' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Item_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Donor_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Mem_ID', 'unique' => 1),
			'Item_ID' => array('column' => 'Item_ID', 'unique' => 0)
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
			'Mem_ID' => 1,
			'Mem_Party' => 'Lorem ipsum dolor sit amet',
			'Mem_Desciption' => 'Lorem ipsum dolor sit amet',
			'Mem_Inscription' => 'Lorem ipsum dolor sit amet',
			'Item_ID' => 1,
			'Donor_ID' => 1
		),
	);

}
