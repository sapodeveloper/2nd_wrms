<?php

namespace Fuel\Migrations;

class Create_teams
{
	public function up()
	{
		\DBUtil::create_table('teams', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'school_id' => array('constraint' => 11, 'type' => 'int'),
			'team_name' => array('constraint' => 50, 'type' => 'varchar'),
			'tournament_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('teams');
	}
}
