<?php

class Model_Team extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'school_id',
		'team_name',
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
	protected static $_table_name = 'teams';

	protected static $_belongs_to = array(
		'highschool' => array(
			'model_to' => 'Model_Highschool',
			'key_from' => 'school_id',
			'key_to' => 'id',
			'cascade_save' => true,
			'cascade_delete' => false
		),
	);
	protected static $_has_many = array(
		'records' => array(
			'model_to' => 'Model_Record',
			'key_from' => 'id',
			'key_to' => 'team_id',
			'cascade_save' => true,
			'cascade_delete' => false
		),
	);
}
