<h1 align="center">New Registration</h1>
<br>
<?php echo Form::open(array('action' => 'top/entry', 'class' => 'uk-form')); ?>
	<fieldset>
		<center>
			<table align="center">
				<tr>
					<td>
						School name
					</td>
					<td>
						<?php echo Form::select('school_id', null, $school_lists, array('class' => '', 'id' => 'school_id')); ?>
					</td>
				</tr>
				<tr>
					<td>
						Team name
					</td>
					<td>
						<?php echo Form::input('', Input::post('team_name', isset($team) ? $team->team_name : ''), array('class' => '', 'placeholder'=>'input name')); ?>
					</td>
				</tr>
			</table>
		</center>
	</fieldset>
	<center>
		<button class="uk-button uk-button-primary uk-button-large">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;Registration&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
	</center>
<?php echo Form::close(); ?>

