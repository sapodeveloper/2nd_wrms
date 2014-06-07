<?php

namespace Fuel\Migrations;

class Create_records
{
	public function up()
	{
		\DBUtil::create_table('records', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'team_id' => array('constraint' => 11, 'type' => 'int'),
			'distance' => array('type' => 'double'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('records');
	}
}