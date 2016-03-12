<?php
/**
 * AppealFixture
 *
 */
class AppealFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'appeal';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Appeal_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Appeal_Description' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Appeal_Start_Time_Date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'Appeal_End_Time_Date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'Appeal_Type' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Appeal_ID', 'unique' => 1)
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
			'Appeal_ID' => 1,
			'Appeal_Description' => 'Lorem ipsum dolor sit amet',
			'Appeal_Start_Time_Date' => '2016-03-09 05:44:22',
			'Appeal_End_Time_Date' => '2016-03-09 05:44:22',
			'Appeal_Type' => 'Lorem ipsum dolor sit amet'
		),
	);

}
