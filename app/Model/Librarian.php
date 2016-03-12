<?php
App::uses('AppModel', 'Model');
/**
 * Librarian Model
 *
 */
class Librarian extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'librarian';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'Librarian_ID';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'Librarian_ID';

}
