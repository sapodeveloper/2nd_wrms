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
				# top/entry以外でのアクセスをしてからログインをおこなった場合
				if (Session::get('uri'))
				{
					# セッション情報を保持していた場合はそのページへリダイレクト
					Response::redirect(Session::get('uri'));
				}else{
					# セッション情報を保持していなければ指定したリダイレクト
					Response::redirect('top/entry');
				}
			}
		}
		$view = View::forge('layout/login');
		$view->contents = View::forge('auth/login');
		return $view;
	}

	public function action_logout()
	{
		Auth::logout();
		Session::destroy();
		Response::redirect('auth/login');
	}

}
