<h1>New Registration</h1>
<br>
<div class="uk-grid">
	<div class="uk-width-medium-1-3">&nbsp;</div>
	<div class="uk-width-medium-2-3">
		<?php echo Form::open(array('action' => 'top/entry', 'class' => 'uk-form')); ?>
			<fieldset data-uk-margin>
				<table>
					<tr>
						<td>
							School name
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
							Team name
						</td>
						<td>
							&nbsp;
						</td>
						<td>
							<?php echo Form::input('team_name', Input::post('team_name', isset($team) ? $team->team_name : ''), array('class' => 'uk-text-center', 'placeholder'=>'input name')); ?>
						</td>
					</tr>
					<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr>
						<td>
							Team members
						</td>
						<td>
							&nbsp;
						</td>
						<td>
							<?php echo Form::input('leader_name', $leader_name, array('class' => 'uk-text-center', 'placeholder'=>'input name')); ?>
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
							<?php echo Form::input('teammate1_name', $teammate1_name, array('class' => 'uk-text-center', 'placeholder'=>'input name')); ?>
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
							<?php echo Form::input('teammate2_name', $teammate2_name, array('class' => 'uk-text-center', 'placeholder'=>'input name')); ?>
						</td>
					</tr>
				</table>
			</fieldset>
		</div>
	</div>
	<br>
	<button class="uk-button uk-button-primary uk-button-large"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;Registration</button>
<?php echo Form::close(); ?>
<br>
