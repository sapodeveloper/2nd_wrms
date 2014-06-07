<?php

namespace Fuel\Migrations;

class Create_lecords
{
	public function up()
	{
		\DBUtil::create_table('lecords', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'team_id' => array('constraint' => 11, 'type' => 'int'),
			'distance' => array('type' => 'double'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('lecords');
	}
}