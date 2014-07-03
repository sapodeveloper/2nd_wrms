<?php

class Controller_Top extends Controller
{

	public function action_entry()
	{
		if(Input::method() == 'POST')
		{
			$team = Model_Teams::forge(array(
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

		$school_data = Model_Highschools::find('all');
		if($school_data){
			foreach($school_data as $row):
				$select_data['school_data'][$row->id]=$row->school_name;
			endforeach;
		}

		$data["subnav"] = array('entry'=> 'active' );
		$view = View::forge('layout/application');
		$view->contents = View::forge('top/entry',$data);
		return $view;
	}

}
