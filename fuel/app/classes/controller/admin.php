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

	public function action_highschool_input()
	{
		if(Model_Authority::find(Auth::get('id'))->id!=1){
			Response::redirect('auth/login');
		}
		if(Input::post('school_name')){
			$school = Model_Highschool::forge(array(
				'school_name' => Input::post('school_name'),
				'kana' => '',
				'pref_id' => Input::post('pref_id'),
				'created_at' => 1,
				'updated_at' => 0,
			));
			$school->save();
		}
		$pref_lists = array("北海道","青森県", "岩手県" ,"宮城県", "秋田県", "山形県", "福島県","茨城県" ,"栃木県", "群馬県", "埼玉県", "千葉県", "東京都", "神奈川県"
,"新潟県" ,"富山県", "石川県", "福井県", "山梨県", "長野県", "岐阜県", "静岡県", "愛知県","三重県", "滋賀県", "京都府", "大阪府", "兵庫県", "奈良県", "和歌山県"
,"鳥取県", "島根県", "岡山県", "広島県", "山口県","徳島県", "香川県", "愛媛県", "高知県","福岡県", "佐賀県", "長崎県", "熊本県", "大分県", "宮崎県", "鹿児島県","沖縄県");
		$i = 1;
		foreach ($pref_lists as $pref){
			$data['pref_lists'][$i]=$pref;
			$i++;
		}
		$view = View::forge('layout/application');
		$view->contents = View::forge('admin/highschool_input',$data);
		return $view;
	}

	public function action_system()
	{
		if(Model_Authority::find(Auth::get('id'))->id!=1){
			Response::redirect('auth/login');
		}
		$data["subnav"] = array('system'=> 'active' );
		$this->template->title = 'Admin &raquo; System';
		$this->template->content = View::forge('admin/system', $data);
	}

	public function action_tournament()
	{
		if(Model_Authority::find(Auth::get('id'))->id!=1){
			Response::redirect('auth/login');
		}
		if(!Input::get('tournament_id')){
			Response::redirect('top/entry');
		}
		$id = Input::get('tournament_id');
		$data['tournament'] = Model_System::find($id);
		$data['teams'] = DB::query('SELECT school_name,team_name,leader_name,teammate1_name,teammate2_name,MAX(distance) AS distance 
			FROM teams AS t,highschools AS h,records AS r 
			WHERE t.tournament_id = '.$id.' 
			AND t.school_id = h.id AND t.id = r.team_id 
			GROUP BY t.id
			ORDER BY MAX(r.distance) DESC')->as_object()->execute()->as_array();
		$view = View::forge('layout/application');
		$view->contents = View::forge('admin/tournament',$data);
		return $view;
	}
}
