<h1 align="center">New Registration</h1>
<br>
<?php echo Form::open(array('action' => 'top/entry', 'class' => 'uk-form')); ?>
	<fieldset>
		<center>
			<table>
				<tr>
					<td align="center">
						School name
					</td>
					<td align="center">
						<?php echo Form::select('school_id', null, $school_lists, array('class' => '', 'id' => 'school_id')); ?>
					</td>
				</tr>
				<tr><td>　</td></tr>
				<tr>
					<td align="center">
						Team name
					</td>
					<td align="center">
						<?php echo Form::input('team_name', Input::post('team_name', isset($team) ? $team->team_name : ''), array('class' => '', 'placeholder'=>'input name')); ?>
					</td>
				</tr>
			</table>
		</center>
	</fieldset>
	<center>
		<button class="uk-button uk-button-primary uk-button-large">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;Registration&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
	</center>
<?php echo Form::close(); ?>

