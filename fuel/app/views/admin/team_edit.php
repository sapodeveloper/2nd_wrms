<h1 class="uk-article-title">Team edit</h1>
<?php echo Form::open(array('action' => 'admin/team_edit?team_id='.$team->id, 'class' => 'uk-form')); ?>
	<div class="uk-grid">
		<div class="uk-width-medium-1-5">&nbsp;</div>
		<div class="uk-width-medium-3-5">
			<div class="uk-grid">
				<div class="uk-width-medium-1-2">
					<br><?php echo $school->school_name; ?><br>
					<br><?php echo Form::input('team_name', $team->team_name, array('placeholder' => 'Team Name', 'class' => 'uk-text-center', 'type' => 'text')); ?>
				</div>
				<div class="uk-width-medium-1-2"><br>
					<fieldset data-uk-margin>
						<table>
							<tr>
								<td>
									代表者名
								</td>
								<td>
									<?php echo Form::input('leader_name', $team->leader_name, array('placeholder' => 'Name input', 'class' => 'uk-text-center', 'type' => 'text')); ?>&nbsp;
								</td>
							</tr>
							<tr>
								<td>
									名前
								</td>
								<td>
									<?php echo Form::input('teammate1_name', $team->teammate1_name, array('placeholder' => 'Name input', 'class' => 'uk-text-center', 'type' => 'text')); ?>&nbsp;
								</td>
							</tr>
							<tr>
								<td>
									名前
								</td>
								<td>
									<?php echo Form::input('teammate2_name', $team->teammate2_name, array('placeholder' => 'Name input', 'class' => 'uk-text-center', 'type' => 'text')); ?>&nbsp;
								</td>
							</tr>
						</table>
					</fieldset>
				</div>
			</div>
		</div>
		<div class="uk-width-medium-1-5">&nbsp;</div>
	</div><br>
	<button class="uk-button uk-button-primary uk-button-large"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;Registration</button>
<?php echo Form::close(); ?>
