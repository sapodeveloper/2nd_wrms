<?php

class Controller_Auth extends Controller
{

	public function action_login()
	{
		$view = View::forge('auth/login');
		$auth = Auth::instance();
		Auth::logout();
		if (Input::post())
		{
			if ($auth->login(Input::post('username'), Input::post('password')))
			{
				$user = Model_User::find('first', array('where' => array('authname' => Input::post('username'))));
				Response::redirect('top/entry');
			}
		}
		return $view;
	}

	public function action_logout()
	{
		Auth::logout();
		Response::redirect('auth/login');
	}

}
