<h1 class="uk-article-title">管理者機能【削除ページ】</h1>
<div class="uk-grid">
	<div class="uk-width-medium-1-5">&nbsp;</div>
	<div class="uk-width-medium-3-5">
		<?php echo Asset::js('nt-check_submit.js'); ?>
		<?php echo Form::open(array('action' => 'admin/team_list', 'class' => 'uk-form', 'name' => 'team', 'method' => 'post')); ?>
			<fieldset data-uk-margin>
				<table class="uk-table" border="1">
					<thead>
						<?php echo Form::hidden('team_id','',array()); ?>
						<tr>
							<td class="uk-width-medium-1-3">学校名</td>
							<td class="uk-width-medium-1-3">チーム名</td>
							<td class="uk-width-medium-1-3">削除</td>
						</tr>
					</thead>
					<tbody>
<?php foreach($teams as $team): ?>
						<tr>
							<td><?php echo $team->school_name; ?></td>
							<td><a href="team_edit?team_id=<?php echo $team->team_id; ?>"><?php echo $team->team_name; ?></a></td>
							<td><button class="uk-button uk-button-danger uk-button-large" type="button" onClick="check_submit(<?php echo $team->team_id; ?>)"><i class="fa fa-eraser"></i>&nbsp;&nbsp;削除</button></td>
						</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</fieldset>
		<?php echo Form::close(); ?>
	</div>
	<div class="uk-width-medium-1-5">&nbsp;</div>
</div><br>
