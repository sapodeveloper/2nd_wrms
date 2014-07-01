<?php

namespace Fuel\Migrations;

class Create_authorities
{
	public function up()
	{
		\DBUtil::create_table('authorities', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'authname' => array('constraint' => 16, 'type' => 'varchar'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('authorities');
	}
}