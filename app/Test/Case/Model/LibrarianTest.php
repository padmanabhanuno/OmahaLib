<?php
App::uses('Librarian', 'Model');

/**
 * Librarian Test Case
 *
 */
class LibrarianTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.librarian'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Librarian = ClassRegistry::init('Librarian');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Librarian);

		parent::tearDown();
	}

}
