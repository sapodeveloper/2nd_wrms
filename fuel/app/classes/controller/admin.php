<?php

class Controller_Admin extends Controller_Template
{

	public function action_useradd()
	{
		Auth::create_user('admin','B111090','b111090@cc.it-hiorshima.ac.jp',1,array());
		Response::redirect('auth/login');
	}

}
