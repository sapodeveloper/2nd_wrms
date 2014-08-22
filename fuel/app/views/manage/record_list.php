<h1 class="uk-article-title">記録表示ページ【順位順】</h1>
<div class="uk-grid">
	<div class="uk-width-medium-1-5">&nbsp;</div>
	<div class="uk-width-medium-3-5">
		<?php echo Asset::js('nt-form_submit.js'); ?>
		<?php echo Form::open(array('action' => 'manage/record_detail', 'class' => 'uk-form', 'name' => 'team', 'method' => 'get')); ?>
			<fieldset data-uk-margin>
				<table class="uk-table" border="1">
					<thead>
						<?php echo Form::hidden('team_id', '', array()); ?>
						<tr><td class="uk-width-medium-1-5">順位</td><td class="uk-width-medium-1-5">学校名</td><td class="uk-width-medium-1-5">チーム名</td><td class="uk-width-medium-1-5">最高記録</td><td class="uk-width-medium-1-5">記録表示</td></tr>
					</thead>
					<tbody>
<?php $i = 1; ?>
<?php foreach($record_lists as $record): ?>
						<tr><td><?php echo $i; ?></td><td><?php echo $record->school; ?></td><td><?php echo $record->name ; ?></td><td><?php echo $record->distance ?> m</td><td><button class="button uk-button uk-button-success uk-button-large" type="button" onClick="form_submit(<?php echo $record->team_id; ?>)"><i class="fa fa-search"></i>&nbsp;&nbsp;記録表示</button></td></tr>
<?php $i++; ?>
<?php endforeach; ?>
<?php for(;$i<=5;$i++): ?>
						<tr><td><?php echo $i; ?></td><td>未登録</td><td>未登録</td><td>----.--- m</td><td><button class="button uk-button uk-button-success uk-button-large" type="button"><i class="fa fa-search"></i>&nbsp;&nbsp;記録表示</button></td></tr>
<?php endfor; ?>
					</tbody>
				</table>
			</fieldset>
		<?php echo Form::close(); ?>
	</div>
	<div class="uk-width-medium-1-5">&nbsp;</div>
</div>
<br>
