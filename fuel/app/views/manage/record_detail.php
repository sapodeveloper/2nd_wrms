<h1 class="uk-article-title">記録表示ページ【詳細】</h1>
<div class="uk-grid">
	<div class="uk-width-medium-1-5">&nbsp;</div>
	<div class="uk-width-medium-3-5">
		<form class="uk-form">
			<fieldset data-uk-margin>
				<table class="uk-table">
					<thead>
						<tr><td class="uk-width-medium-1-2">学校名&nbsp;:&nbsp;</td><td class="uk-width-medium-1-2"><?php echo $school->school_name; ?></td></tr>
					</thead>
					<tbody>
						<tr><td>チーム名&nbsp;:&nbsp;</td><td><?php echo $team->team_name ?></td></tr>
<?php $i = 1; ?>
<?php foreach($records as $record): ?>
						<tr><td>
	<?php if($i == 1): ?>
						記録&nbsp;:
	<?php endif; ?>
						&nbsp;</td><td><?php echo $record->distance; ?> m</td></tr>
	<?php $i++; ?>
<?php endforeach; ?>
<?php if($i != 1): ?>
						<tr><td>最高記録&nbsp;:&nbsp;</td><td><?php echo $best_record->distance; ?> m</td></tr>
<?php endif; ?>
					</tbody>
				</table>
			</form>
		</div>
		<div class="uk-width-medium-1-5">&nbsp;</div>
	</div>
	<br>
	<?php echo Html::anchor('manage/record_list', '<button class="uk-button uk-button-primary uk-button-large">&nbsp;<i class="fa fa-reply"></i>&nbsp;&nbsp;記録表次ページ【順位順】へ&nbsp;&nbsp;&nbsp;</button>'); ?>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button class="uk-button uk-button-success uk-button-large">&nbsp;&nbsp;&nbsp;<i class="fa fa-picture-o"></i>&nbsp;&nbsp;PDF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
