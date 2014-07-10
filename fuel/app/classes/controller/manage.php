<?php

class Controller_Manage extends Controller_Template
{

	public function action_view()
	{
		$data['team_lists'] = DB::query('SELECT teams.id AS team_id,teams.team_name AS name,COUNT(records.id) AS records
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
		if(! Input::method() == 'POST')
		{
			Response::redirect('manage/view');
		}
		$team_id = Input::post('team_id');
		$data['team'] = Model_Team::find($team_id);
		$data['school'] = Model_Highschool::find($data['team']->school_id);
		$data['records'] = Model_Record::find('all', array('where' => array('team_id' => $team_id)));
		$view = View::forge('layout/application');
		$view->contents = View::forge('manage/record_edit',$data);
		return $view;
	}

	public function action_record_detail()
	{
		$data["subnav"] = array('record_detail'=> 'active' );
		$this->template->title = 'Manage &raquo; Record detail';
		$this->template->content = View::forge('manage/record_detail', $data);
	}

}
