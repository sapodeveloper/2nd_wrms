<?php

class Controller_Manage extends Controller_Template
{

	public function action_view()
	{
		$data['team_lists'] = DB::query('SELECT teams.id,teams.team_name AS name,COUNT(records.id) AS records
			FROM records,teams
			WHERE records.team_id = teams.id')->as_object()->execute()->as_array();
		$view = View::forge('layout/application');
		$view->contents = View::forge('manage/view', $data);
		return $view;
	}

	public function action_record_list()
	{
		$data["subnav"] = array('record_list'=> 'active' );
		$this->template->title = 'Manage &raquo; Record list';
		$this->template->content = View::forge('manage/record_list', $data);
	}

	public function action_record_edit()
	{
		$data["subnav"] = array('record_edit'=> 'active' );
		$this->template->title = 'Manage &raquo; Record edit';
		$this->template->content = View::forge('manage/record_edit', $data);
	}

	public function action_record_detail()
	{
		$data["subnav"] = array('record_detail'=> 'active' );
		$this->template->title = 'Manage &raquo; Record detail';
		$this->template->content = View::forge('manage/record_detail', $data);
	}

}
