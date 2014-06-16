<?php

class Controller_Top extends Controller_Template
{

	public function action_entry()
	{
		$data["subnav"] = array('entry'=> 'active' );
		$this->template->title = 'Top &raquo; Entry';
		$this->template->content = View::forge('top/entry', $data);
	}

}
