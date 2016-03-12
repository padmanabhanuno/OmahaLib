<?php
App::uses('AppModel', 'Model');
/**
 * Library Model
 *
 */
class Library extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'library';

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
	public $displayField = 'Library_ID';

}
