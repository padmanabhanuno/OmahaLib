<?php
/**
 * VolunteerFixture
 *
 */
class VolunteerFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'volunteer';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Volunteer_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Volunteer_fName' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Volunteer_lName' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Volunteer_Email' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Volunteer_ContactNo' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'Library_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Volunteer_ID', 'unique' => 1),
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
			'Volunteer_ID' => 1,
			'Volunteer_fName' => 'Lorem ipsum dolor sit amet',
			'Volunteer_lName' => 'Lorem ipsum dolor sit amet',
			'Volunteer_Email' => 'Lorem ipsum dolor sit amet',
			'Volunteer_ContactNo' => '',
			'Library_ID' => 1
		),
	);

}
