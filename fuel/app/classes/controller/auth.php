<?php

class Controller_Auth extends Controller
{

	public function action_login()
	{
		if (Input::post())
		{
			$auth = Auth::instance();
			if ($auth->login(Input::post('authname'), Input::post('password')))
			{
				Response::redirect('top/entry');
			}
		}
		$view = View::forge('layout/application');
		$view->contents = View::forge('auth/login');
		$auth = Auth::instance();
		Auth::logout();
		return $view;
	}

	public function action_logout()
	{
		Auth::logout();
		Response::redirect('auth/login');
	}

}
