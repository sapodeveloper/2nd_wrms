<?php

class Controller_Top extends Controller
{

	public function action_entry()
	{
		if(Input::method() == 'POST')
		{
			if(Input::post('school_id') == -1){
				Response::redirect('top/entry_extend');
			}
			if(Input::post('leader_name')){
				$data['leader_name'] = Input::post('leader_name');
				$data['teammate1_name'] = Input::post('teammate1_name');
				$data['teammate2_name'] = Input::post('teammate2_name');
			}else if(Input::post('teammate1_name')){
				$data['leader_name'] = Input::post('teammate1_name');
				$data['teammate1_name'] = Input::post('teammate2_name');
				$data['teammate2_name'] = "";
			}else if(Input::post('teammate2_name')){
				$data['leader_name'] = Input::post('teammate2_name');
				$data['teammate1_name'] = "";
				$data['teammate2_name'] = "";
			}else{
				$data['leader_name'] = "";
				$data['teammate1_name'] = "";
				$data['teammate2_name'] = "";
			}
			if(Input::post('team_name')){
				$tournament = Model_System::find('first', array('where' => array('condition' => 1)));
				$team = Model_Team::forge(array(
					'school_id' => Input::post('school_id'),
					'team_name' => Input::post('team_name'),
					'leader_name' => $data['leader_name'],
					'teammate1_name' => $data['teammate1_name'],
					'teammate2_name' => $data['teammate2_name'],
					'tournament_id' => $tournament->id,
					'created_at' => 1,
					'updated_at' => 0,
				));
	
				if ($team->save())
					{
						Response::redirect('top/entry');
					}
					else
					{
						Session::set_flash('error', '失敗');
					}
			}
		}else{
			$data['leader_name'] = "";
			$data['teammate1_name'] = "";
			$data['teammate2_name'] = "";
		}
	
		$school_data = Model_Highschool::find('all', array('where' => array(array('pref_id', '>=', '31'), array(array('pref_id', '<=', '39')))));
		$data['school_lists'][-1] = "中四国以外";
		foreach ($school_data as $row) {
			$data['school_lists'][$row->id]=$row->school_name;
		} 

		$view = View::forge('layout/application');
		$view->contents = View::forge('top/entry', $data);
		return $view;
	}

	public function action_entry_extend()
	{
		$school_data = Model_Highschool::find('all');
		foreach ($school_data as $row) {
			$data['school_lists'][$row->id]=$row->school_name;
		} 
		$data['leader_name'] = "";
		$data['teammate1_name'] = "";
		$data['teammate2_name'] = "";

		$view = View::forge('layout/application');
		$view->contents = View::forge('top/entry', $data);
		return $view;
	}
}
