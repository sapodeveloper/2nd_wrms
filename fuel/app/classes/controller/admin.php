<?php

class Controller_Admin extends Controller_Template
{

	public function action_team_list()
	{
		if(Model_Authority::find(Auth::get('id'))->id!=1){
			Response::redirect('auth/login');
		}
		if(Input::method() == 'POST')
		{
			$id = Input::post('team_id');
			$team = Model_Team::find($id);
			$team->delete();
		}
		$data['teams'] = DB::query('SELECT teams.team_name AS team_name, highschools.school_name AS school_name, teams.id AS team_id
			FROM highschools,teams
			WHERE highschools.id = teams.school_id;
			ORDER BY highschools.id DESC')->as_object()->execute()->as_array();
		$view = View::forge('layout/application');
		$view->contents = View::forge('admin/team_list',$data);
		return $view;
	}

	public function action_team_edit()
	{
		if(Model_Authority::find(Auth::get('id'))->id!=1){
			Response::redirect('auth/login');
		}
		if(Input::get('team_id')){
			$id = Input::get('team_id');
		}else{
			Response::redirect('admin/team_list');
		}
		if(Input::method() == 'POST'){
			$team = Model_Team::find($id);
			$team->team_name = Input::post('team_name');
			$team->leader_name = Input::post('leader_name');
			$team->teammate1_name = Input::post('teammate1_name');
			$team->teammate2_name = Input::post('teammate2_name');
			$team->save();
		}
		$data['team'] = Model_Team::find($id);
		$data['school'] = Model_Highschool::find($data['team']->school_id);
		$view = View::forge('layout/application');
		$view->contents = View::forge('admin/team_edit',$data);
		return $view;
	}

	public function action_system()
	{
		$data["subnav"] = array('system'=> 'active' );
		$this->template->title = 'Admin &raquo; System';
		$this->template->content = View::forge('admin/system', $data);
	}

}
