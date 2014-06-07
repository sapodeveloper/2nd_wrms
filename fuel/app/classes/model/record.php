<?php

class Model_Record extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'team_id',
		'distance',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);
	protected static $_table_name = 'records';

	protected static $_belongs_to = array(
		'team' => array(
			'model_to' => 'Model_Team',
			'key_from' => 'team_id',
			'key_to' => 'id',
			'cascade_save' => true,
			'cascade_save' => false
		),
	);
}
