<h1 class="uk-article-title">Participant List</h1>
<div class="uk-grid">
	<div class="uk-width-medium-1-5">&nbsp;</div>
	<div class="uk-width-medium-3-5">
		<?php echo Asset::js('nt-form_submit.js'); ?>
		<?php echo Form::open(array('action' => 'manage/record_edit', 'class' => 'uk-form', 'name' => 'team')); ?>
			<fieldset data-uk-margin>
				<table class="uk-table" border="1">
					<thead>
						<?php echo Form::hidden('team_id','',array()); ?>
						<tr><td class="uk-width-medium-1-3">Team name</td><td class="uk-width-medium-1-3">State</td><td class="uk-width-medium-1-3">Button</td></tr>
					</thead>
					<tbody>
<?php foreach ($team_lists as $team): ?>
						<tr><td><?php echo $team->name; ?></td><td>&nbsp;<?php echo $team->records; ?>&nbsp;/&nbsp;3&nbsp;</td><td><button class="button uk-button uk-button-success uk-button-large" type="button" onClick="form_submit(<?php echo $team->team_id; ?>)"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;Record Input</button></td></tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</fieldset>
		<?php echo Form::close(); ?>
	</div>
	<div class="uk-width-medium-1-5">&nbsp;</div>
</div>
<br>
