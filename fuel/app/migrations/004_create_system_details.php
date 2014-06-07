<?php

namespace Fuel\Migrations;

class Create_system_details
{
	public function up()
	{
		\DBUtil::create_table('system_details', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'tournament_name' => array('constraint' => 50, 'type' => 'varchar'),
			'ymd' => array('type' => 'date'),
			'rules_select' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('system_details');
	}
}