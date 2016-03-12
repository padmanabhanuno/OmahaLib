<?php
App::uses('Credential', 'Model');

/**
 * Credential Test Case
 *
 */
class CredentialTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.credential'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Credential = ClassRegistry::init('Credential');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Credential);

		parent::tearDown();
	}

}
