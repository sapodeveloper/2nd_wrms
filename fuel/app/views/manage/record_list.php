<h1 class="uk-article-title">Record Display List</h1>
<div class="uk-grid">
	<div class="uk-width-medium-1-5">&nbsp;</div>
	<div class="uk-width-medium-3-5">
		<?php echo Asset::js('nt-form_submit.js'); ?>
		<?php echo Form::open(array('action' => 'manage/record_detail', 'class' => 'uk-form', 'name' => 'team', 'method' => 'get')); ?>
			<fieldset data-uk-margin>
				<table class="uk-table" border="1">
					<thead>
						<?php echo Form::hidden('team_id', '', array()); ?>
						<tr><td class="uk-width-medium-1-4">Ranking</td><td class="uk-width-medium-1-4">Team name</td><td class="uk-width-medium-1-4">Best Record</td><td class="uk-width-medium-1-4">Button</td></tr>
					</thead>
					<tbody>
<?php $i = 1; ?>
<?php foreach($record_lists as $record): ?>
						<tr><td><?php echo $i; ?></td><td><?php echo $record->name ; ?></td><td><?php echo $record->distance ?> m</td><td><button class="button uk-button uk-button-success uk-button-large" type="button" onClick="form_submit(<?php echo $record->team_id; ?>)"><i class="fa fa-search"></i>&nbsp;&nbsp;Records View</button></td></tr>
<?php $i++; ?>
<?php endforeach; ?>
<?php for(;$i<=5;$i++): ?>
						<tr><td><?php echo $i; ?></td><td>No Name</td><td>----.--- m</td><td><a href="" class="uk-button uk-button-success uk-button-large"><i class="fa fa-search"></i>&nbsp;&nbsp;Records View</a></td></tr>
<?php endfor; ?>
					</tbody>
				</table>
			</fieldset>
		<?php echo Form::close(); ?>
	</div>
	<div class="uk-width-medium-1-5">&nbsp;</div>
</div>
<br>
