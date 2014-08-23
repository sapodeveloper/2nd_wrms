<h1>管理者機能【システム】</h1><br>
<?php echo Asset::js('nt-select_tournament.js'); ?>
<?php echo Form::open(array('action' => 'admin/system', 'class' => 'uk-form', 'name' => 'system')); ?>
	<div class="uk-grid">
		<div class="uk-width-medium-1-4">&nbsp;</div>
		<div class="uk-width-medium-2-4">
			<?php echo Form::hidden('tournament_id', '', array()); ?>
			<fieldset data-uk-margin>
				<div>イベント作成</div>
				<table border="1">
					<tr>
						<td class="uk-width-medium-1-3">
							<?php echo Form::input('ymd', '', array('placeholder' => '開催年月日　入力', 'class' => 'uk-text-center', 'type' => 'date', 'list' => 'data')); ?>
						</td>
						<datalist id="data">
						<?php foreach($days as $day): ?>
							<option value="<?php echo $day; ?>"></option>
						<?php endforeach; ?>
						</datalist>
						<td class="uk-width-medium-1-3">
							オープンキャンパス
						</td>
						<td class="uk-width-medium-1-3">
							第&nbsp;
							<?php echo Form::select('select_number', null, array(1,2), array('class' => 'uk-text-center uk-form-width-mini u-form-small')); ?>
							&nbsp;回
						</td>
					</tr>
				</table>
			</fieldset>
			<button class="uk-button uk-button-primary uk-button-large" type="button" onClick="select_tournament(0)"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;登録</button>
		</div>
	</div>
	<div class="uk-grid">
		<div class="uk-width-medium-1-4">&nbsp;</div>
		<div class="uk-width-medium-2-4">
			<fieldset data-uk-margin>
				<div>イベント選択</div>
				<table border="1">
					<tr>
						<td class="uk-width-medium-1-4">年度</td>
						<td class="uk-width-medium-1-4">イベント名</td>
						<td class="uk-width-medium-1-4">回数</td>
						<td class="uk-width-medium-1-4">イベント選択</td>
					</tr>
					<?php foreach($tournaments as $tournament): ?>
					<tr>
						<td class="uk-width-medium-1-4">
						<?php echo $tournament->year;?>
						</td>
						<td class="uk-width-medium-1-4">
						<?php echo $tournament->name; ?>
						</td>
						<td class="uk-width-medium-1-4">第
						<?php echo $tournament->count[0]->id; ?>
						回</td>
						<td class="uk-width-medium-1-4">
<?php if($tournament->condition != 1): ?>
							<button class="uk-button uk-button-primary uk-button-large" type="button" onClick="select_tournament(<?php echo $tournament->id; ?>)"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;登録</button>
<?php else: ?>
							<button class="uk-button uk-button-success uk-button-large"></i>&nbsp;&nbsp;開催中</button>
<?php endif; ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</table>
			</fieldset>
		</div>
	</div>
<?php echo Form::close(); ?>
