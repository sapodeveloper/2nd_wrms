<h1 class="uk-article-title">参加者リスト</h1>
<div class="uk-grid">
	<div class="uk-width-medium-1-5">&nbsp;</div>
	<div class="uk-width-medium-3-5">
		<?php echo Asset::js('nt-form_submit.js'); ?>
		<?php echo Form::open(array('action' => 'manage/record_edit', 'class' => 'uk-form', 'name' => 'team', 'method' => 'get')); ?>
			<fieldset data-uk-margin>
				<table class="uk-table" border="1">
					<thead>
						<?php echo Form::hidden('team_id','',array()); ?>
						<tr><td class="uk-width-medium-1-4">学校名</td><td class="uk-width-medium-1-4">チーム名</td><td class="uk-width-medium-1-4">打ち上げ回数</td><td class="uk-width-medium-1-4">記録入力</td></tr>
					</thead>
					<tbody>
<?php foreach ($team_lists as $team): ?>
<?php if($team->name != NULL): ?>
						<tr><td><?php echo $team->school; ?></td><td><?php echo $team->name; ?></td><td>&nbsp;<?php echo $team->records; ?>&nbsp;/&nbsp;3&nbsp;</td><td><button class="button uk-button uk-button-success uk-button-large" type="button" onClick="form_submit(<?php echo $team->team_id; ?>)"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;記録入力</button></td></tr>
<?php endif; ?>
<?php endforeach; ?>
<?php foreach ($non_record_team_lists as $no_team): ?>
						<tr><td><?php echo $no_team->school; ?><td><?php echo $no_team->name; ?></td><td>&nbsp;0&nbsp;/&nbsp;3&nbsp;</td><td><button class="button uk-button uk-button-success uk-button-large" type="button" onClick="form_submit(<?php echo $no_team->team_id; ?>)"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;記録入力</button></td></tr>
<?php endforeach; ?>
<?php foreach ($end_team_lists as $end_team): ?>
						<tr><td><?php echo $end_team->school; ?><td><?php echo $end_team->name; ?></td><td>&nbsp;0&nbsp;/&nbsp;3&nbsp;</td><td><button class="button uk-button uk-button-success uk-button-large" type="button" onClick="form_submit(<?php echo $end_team->team_id; ?>)"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;記録入力</button></td></tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</fieldset>
		<?php echo Form::close(); ?>
	</div>
	<div class="uk-width-medium-1-5">&nbsp;</div>
</div>
<br>
