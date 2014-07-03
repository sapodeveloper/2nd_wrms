<?php

namespace Fuel\Migrations;

class Create_highschools
{
	public function up()
	{
		\DBUtil::create_table('highschools', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'school_name' => array('constraint' => 50, 'type' => 'varchar'),
			'kana' => array('constraint' => 50, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));

		$table = 'highschools';
		\DB::insert($table)->set(array('school_name' => '広島工業大学',
			'kana' => 'ひろしまこうぎょうだいがく'))->execute();
	}

	public function down()
	{
		\DBUtil::drop_table('highschools');
	}
}
