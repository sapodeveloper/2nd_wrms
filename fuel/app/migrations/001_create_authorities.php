<?php

namespace Fuel\Migrations;

class Create_authorities
{
	public function up()
	{
		\DBUtil::create_table('authorities', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'username' => array('constraint' => 255, 'type' => 'varchar'),
			'password' => array('constraint' => 255, 'type' => 'varchar'),
			'group' => array('constraint' => 11, 'type' => 'int'),
			'email' => array('constraint' => 255, 'type' => 'varchar'),
			'profile_fields' => array('type' => 'text'),
			'last_login' => array('constraint' => 255, 'type' => 'varchar'),
			'login_hash' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('type' => 'timestamp'),
			'updated_at' => array('type' => 'timestamp'),

		), array('id'));

		$table = 'authorities';
		\DB::insert($table)->set(array('username' => 'admin',
			'password' => 'aMP4mDkQAkHjGeBKk9Vb+64wdJucfsWHA1iTHPA98nA=',
			'group' => 1,
			'email' => 'sapodev@cc.it-hiroshima.ac.jp',
			'profile_fields' => 'a:0:{}',
			'last_login' => '0'))->execute();

	}

	public function down()
	{
		\DBUtil::drop_table('authorities');
	}
}
