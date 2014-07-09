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

		$table = 'teams';
		\DB::insert($table)->set(array('school_id' => '1',
			'team_name' => 'カレーうどん三澤',
			'tournament_id' => '1'))->execute();
	}

	public function down()
	{
		\DBUtil::drop_table('teams');
	}
}
