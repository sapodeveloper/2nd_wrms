<?php echo Asset::js('nt-form_active.js'); ?>
<?php $i=1; ?>
<h1 class="uk-article-title">記録入力ページ</h1>
<?php echo Form::open(array('action' => 'manage/record_edit?team_id='.$team->id, 'class' => 'uk-form')); ?>
	<div class="uk-grid">
		<div class="uk-width-medium-1-5">&nbsp;</div>
		<div class="uk-width-medium-3-5">
			<div class="uk-grid">
				<div class="uk-width-medium-1-2"><br><?php echo $school->school_name; ?><br><br><?php echo $team->team_name; ?></div>
				<div class="uk-width-medium-1-2"><br>
					<fieldset data-uk-margin>
						<table>
<?php foreach($records as $record): ?>
							<tr><td>&nbsp;<?php echo $i; ?>&nbsp;:&nbsp;<?php echo Form::input('record'.$i, $record->distance, array('placeholder' => '飛距離　入力', 'class' => 'uk-text-center', 'type' => 'text')); ?>&nbsp;m</td></tr>
<?php $i++; ?>
<?php endforeach; ?>
<?php for(;$i<=3;$i++): ?>
							<tr><td>&nbsp;<?php echo $i; ?>&nbsp;:&nbsp;<?php echo Form::input('record'.$i, '', array('placeholder' => '飛距離　入力', 'class' => 'uk-text-center', 'id' => 'active_form', 'type' => 'text')); ?>&nbsp;m</td></tr>
<?php endfor; ?>
						</table>
					</fieldset>
				</div>
			</div>
		</div>
		<div class="uk-width-medium-1-5">&nbsp;</div>
	</div><br>
	<button class="uk-button uk-button-primary uk-button-large"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;記録入力</button>
<?php echo Form::close(); ?>
