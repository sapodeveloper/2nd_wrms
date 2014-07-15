<?php

class Controller_Top extends Controller
{

	public function action_entry()
	{
		if(Input::method() == 'POST')
		{
			$team = Model_Team::forge(array(
				'school_id' => Input::post('school_id'),
				'team_name' => Input::post('team_name'),
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

		$school_data = Model_Highschool::find('all');
		foreach ($school_data as $row) {
			$data['school_lists'][$row->id]=$row->school_name;
			} 

		$data["subnav"] = array('entry'=> 'active' );

		$view = View::forge('layout/application');
		$view->contents = View::forge('top/entry', $data);
		return $view;
	}

}
