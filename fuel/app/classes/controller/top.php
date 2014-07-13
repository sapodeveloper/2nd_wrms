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
		# 学校情報を取得
		$school_data = Model_Highschool::find('all');
		# 学校情報を格納している連想配列を全て処理する
		foreach ($school_data as $row) {
			# 学校情報をフォームへ受け渡す変数に対して処理をおこなう
			# 第2添字に学校の固有IDを割り当てる
			# 上記の2次元連想配列の値に学校名を割り当てる
			$data['school_lists'][$row->id]=$row->school_name;
		}

		$data["subnav"] = array('entry'=> 'active' );

		$view = View::forge('layout/application');
		$view->contents = View::forge('top/entry', $data);
		return $view;
	}

}
