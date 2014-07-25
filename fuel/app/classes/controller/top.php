<?php

class Controller_Top extends Controller
{

	public function action_entry()
	{
		if(Input::method() == 'POST')
		{
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
				$team = Model_Team::forge(array(
					'school_id' => Input::post('school_id'),
					'team_name' => Input::post('team_name'),
					'leader_name' => $data['leader_name'],
					'teammate1_name' => $data['teammate1_name'],
					'teammate2_name' => $data['teammate2_name'],
					'tournament_id' => 1,
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
	
		$school_data = Model_Highschool::find('all');
		foreach ($school_data as $row) {
			$data['school_lists'][$row->id]=$row->school_name;
		} 

		$view = View::forge('layout/application');
		$view->contents = View::forge('top/entry', $data);
		return $view;
	}

}
