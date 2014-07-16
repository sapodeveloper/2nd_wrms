<?php

class Controller_Manage extends Controller_Template
{

	public function action_view()
	{
		$data['non_record_team_lists'] = DB::query('SELECT teams.id AS team_id,teams.team_name AS name
			FROM teams
			WHERE NOT EXISTS (SELECT *
			FROM records
			WHERE records.team_id = teams.id)')->as_object()->execute()->as_array();
		$data['team_lists'] = DB::query('SELECT teams.id AS team_id,teams.team_name AS name,COUNT(records.team_id) AS records
			FROM records,teams
			WHERE records.team_id = teams.id
			GROUP BY records.team_id')->as_object()->execute()->as_array();
		$view = View::forge('layout/application');
		$view->contents = View::forge('manage/view', $data);
		return $view;
	}

	public function action_record_list()
	{
		$data['record_lists'] = DB::query('SELECT records.id AS id,teams.team_name AS name,teams.id AS team_id,MAX(records.distance) AS distance
			FROM records,teams
			WHERE records.team_id = teams.id
			GROUP BY records.team_id
			ORDER BY MAX(records.distance) DESC
			LIMIT 0,5')->as_object()->execute()->as_array();
		$view = View::forge('layout/application');
		$view->contents = View::forge('manage/record_list', $data);
		return $view;
	}

	public function action_record_edit()
	{
		$id = Input::get('team_id');
		if(empty($id))
		{
			Response::redirect('manage/view');
		}
		if(Input::method() == 'POST')
		{
			$i = 1;
			$records = Model_Record::find('all', array('where' => array('team_id' => $id)));
			foreach($records as $record){
				$post_record = Input::post('record'.$i);
				if($record->distance != $post_record){
					if(empty($post_record)){
						$delete_record = Model_Record::find($record->id);
						$delete_record->delete();
					}else{
						$update_record = Model_Record::find($record->id);
						$update_record->distance = $post_record;
						$update_record->save();
					}
				}
				$i++;
			}
			for(;$i<=3;$i++){
				if($post_record = Input::post('record'.$i)){
					$new_record = Model_Record::forge(array(
						'team_id' => $id,
						'distance' => $post_record,
					));
					$new_record->save();
				}
			}
			Response::redirect('manage/view');
		}
		$data['team'] = Model_Team::find($id);
		$data['school'] = Model_Highschool::find($data['team']->school_id);
		$data['records'] = Model_Record::find('all', array('where' => array('team_id' => $id)));
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
