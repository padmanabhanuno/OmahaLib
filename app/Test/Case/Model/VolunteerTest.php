<?php
App::uses('Volunteer', 'Model');

/**
 * Volunteer Test Case
 *
 */
class VolunteerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.volunteer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Volunteer = ClassRegistry::init('Volunteer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Volunteer);

		parent::tearDown();
	}

}
