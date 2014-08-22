<h1>学校・参加者登録ページ</h1>
<br>
<div class="uk-grid">
	<div class="uk-width-medium-1-3">&nbsp;</div>
	<div class="uk-width-medium-2-3">
		<?php echo Form::open(array('action' => 'top/entry', 'class' => 'uk-form')); ?>
			<fieldset data-uk-margin>
				<table>
					<tr>
						<td>
							学校名
						</td>
						<td>
							&nbsp;
						</td>
						<td>
							<?php echo Form::select('school_id', null, $school_lists, array('class' => 'uk-text-center', 'id' => 'school_id')); ?>
						</td>
					</tr>
					<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr>
						<td>
							チーム名
						</td>
						<td>
							&nbsp;
						</td>
						<td>
							<?php echo Form::input('team_name', Input::post('team_name', isset($team) ? $team->team_name : ''), array('class' => 'uk-text-center', 'placeholder'=>'チーム名　入力')); ?>
						</td>
					</tr>
					<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr>
						<td>
							メンバー名
						</td>
						<td>
							&nbsp;
						</td>
						<td>
							<?php echo Form::input('leader_name', $leader_name, array('class' => 'uk-text-center', 'placeholder'=>'メンバー名　入力')); ?>
						</td>
					</tr>
					<tr>
						<td>
							&nbsp;
						</td>
						<td>
							&nbsp;
						</td>
						<td>
							<?php echo Form::input('teammate1_name', $teammate1_name, array('class' => 'uk-text-center', 'placeholder'=>'メンバー名　入力')); ?>
						</td>
					</tr>
					<tr>
						<td>
							&nbsp;
						</td>
						<td>
							&nbsp;
						</td>
						<td>
							<?php echo Form::input('teammate2_name', $teammate2_name, array('class' => 'uk-text-center', 'placeholder'=>'メンバー名　入力')); ?>
						</td>
					</tr>
				</table>
			</fieldset>
		</div>
	</div>
	<br>
	<button class="uk-button uk-button-primary uk-button-large"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;登録</button>
<?php echo Form::close(); ?>
<br>
