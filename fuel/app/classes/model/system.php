<?php

class Model_System extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'tournament_name',
		'ymd',
		'rules',
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
	protected static $_table_name = 'systems';

	protected static $_has_many = array(
		'teams' => array(
			'model_to' => 'Model_Team',
			'key_from' => 'id',
			'key_to' => 'team_id',
			'cascade_save' => true,
			'cascade_delete' => false
		),
	);
}
