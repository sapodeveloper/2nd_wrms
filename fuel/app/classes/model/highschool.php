<?php

class Model_Highschool extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'school_name',
		'kana',
		'pref_id',
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
	protected static $_table_name = 'highschools';

	protected static $_has_many = array(
		'teams' => array(
			'model_to' => 'Model_Team',
			'key_from' => 'id',
			'key_to' => 'school_id',
			'cascade_save' => true,
			'cascade_delete' => false
		),
	);
}
