<?php

class Controller_Top extends Controller
{

	public function action_entry()
	{
		$data["subnav"] = array('entry'=> 'active' );
		$view = View::forge('layout/application');
		$view->contents = View::forge('top/entry',$data);
		return $view;
	}

}
