<?php

namespace Fuel\Migrations;

class Create_systems
{
	public function up()
	{
		\DBUtil::create_table('systems', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'tournament_name' => array('constraint' => 50, 'type' => 'varchar'),
			'ymd' => array('type' => 'date'),
			'rules' => array('constraint' => 11, 'type' => 'int'),
			'condition' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));

		$table = 'systems';
		\DB::insert($table)->set(array('tournament_name' => '2014年度オープンキャンパスJuly',
			'ymd' => '2014-07-27',
			'rules' => 1,
			'condition' => 1))->execute();
	}

	public function down()
	{
		\DBUtil::drop_table('systems');
	}
}
