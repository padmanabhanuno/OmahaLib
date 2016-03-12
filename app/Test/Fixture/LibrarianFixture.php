<?php
/**
 * LibrarianFixture
 *
 */
class LibrarianFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'librarian';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Librarian_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Librarian_fName' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Librarian_lName' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Librarian_Email' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Librarian_ContactNo' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'Library_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Librarian_ID', 'unique' => 1),
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
			'Librarian_ID' => 1,
			'Librarian_fName' => 'Lorem ipsum dolor sit amet',
			'Librarian_lName' => 'Lorem ipsum dolor sit amet',
			'Librarian_Email' => 'Lorem ipsum dolor sit amet',
			'Librarian_ContactNo' => '',
			'Library_ID' => 1
		),
	);

}
