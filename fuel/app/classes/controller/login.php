<?php

class Controller_Login extends Controller_Template
{

	public function action_login()
	{
		$data["subnav"] = array('login'=> 'active' );
		$this->template->title = 'Login &raquo; Login';
		$this->template->content = View::forge('login/login', $data);
	}

	public function action_logout()
	{
		$data["subnav"] = array('logout'=> 'active' );
		$this->template->title = 'Login &raquo; Logout';
		$this->template->content = View::forge('login/logout', $data);
	}

}
