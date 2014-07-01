<?php

class Controller_Top extends Controller
{

	public function action_entry()
	{
		if(Input::method() == 'POST')
		{
			$team = Model_Teams::forge(array(
				'school_id' => 1,
				'team_name' => Input::post('team_name'),
				'tournament_id' => 1,
				'created_at' => 1,
				'updated_at' => 0,
			));

			if ($team->save())
				{}
				else
				{
					Session::set_flash('error', '失敗');
				}

			Response::redirect('top/entry'); 
		}

		$data["subnav"] = array('entry'=> 'active' );
		$view = View::forge('layout/application');
		$view->contents = View::forge('top/entry',$data);
		return $view;
	}

}
