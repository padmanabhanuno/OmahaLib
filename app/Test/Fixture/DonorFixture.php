<?php
/**
 * DonorFixture
 *
 */
class DonorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Donor_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Donor_fName' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Donor_lName' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Donor_Organization' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Donor_Street_Address' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Donor_City' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 18, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Donor_State' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Donor_Zip' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false),
		'Donor_Email' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Donor_Phone' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'Donor_Notes' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Appeal_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Item_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Mem_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Donor_ID', 'unique' => 1),
			'Appeal_ID' => array('column' => 'Appeal_ID', 'unique' => 0),
			'Item_ID' => array('column' => 'Item_ID', 'unique' => 0),
			'Mem_ID' => array('column' => 'Mem_ID', 'unique' => 0)
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
			'Donor_ID' => 1,
			'Donor_fName' => 'Lorem ipsum dolor sit amet',
			'Donor_lName' => 'Lorem ipsum dolor sit amet',
			'Donor_Organization' => 'Lorem ipsum dolor sit amet',
			'Donor_Street_Address' => 'Lorem ipsum dolor sit amet',
			'Donor_City' => 'Lorem ipsum dolo',
			'Donor_State' => '',
			'Donor_Zip' => 1,
			'Donor_Email' => 'Lorem ipsum dolor sit amet',
			'Donor_Phone' => '',
			'Donor_Notes' => 'Lorem ipsum dolor sit amet',
			'Appeal_ID' => 1,
			'Item_ID' => 1,
			'Mem_ID' => 1
		),
	);

}
