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
				if ($redirect = Session::get('uri'))
				{
					Response::redirect($redirect);
					Session::destory();
				}else{
					Response::redirect('top/entry');
				}
			}
		}
		$view = View::forge('layout/login');
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
