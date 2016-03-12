<?php
App::uses('AppModel', 'Model');
/**
 * Volunteer Model
 *
 */
class Volunteer extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'volunteer';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'y';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'Volunteer_ID';

}
