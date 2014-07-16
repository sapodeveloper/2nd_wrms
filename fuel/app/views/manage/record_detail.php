<h1 class="uk-article-title">Record Display Detail</h1>
<div class="uk-grid">
	<div class="uk-width-medium-1-5">&nbsp;</div>
	<div class="uk-width-medium-3-5">
		<form class="uk-form">
			<fieldset data-uk-margin>
				<table class="uk-table">
					<thead>
						<tr><td class="uk-width-medium-1-2">School name&nbsp;:&nbsp;</td><td class="uk-width-medium-1-2"><?php echo $school->school_name; ?></td></tr>
					</thead>
					<tbody>
						<tr><td>Team name&nbsp;:&nbsp;</td><td><?php echo $team->team_name ?></td></tr>
<?php $i = 1; ?>
<?php foreach($records as $record): ?>
						<tr><td>
	<?php if($i == 1): ?>
						Records&nbsp;:
	<?php endif; ?>
						&nbsp;</td><td><?php echo $record->distance; ?> m</td></tr>
	<?php $i++; ?>
<?php endforeach; ?>
<?php if($i != 1): ?>
						<tr><td>Best record&nbsp;:&nbsp;</td><td><?php echo $best_record->distance; ?> m</td></tr>
<?php endif; ?>
					</tbody>
				</table>
			</form>
		</div>
		<div class="uk-width-medium-1-5">&nbsp;</div>
	</div>
	<br>
	<a href="05 Record Display List.html">
		<button class="uk-button uk-button-primary uk-button-large">&nbsp;<i class="fa fa-reply"></i>&nbsp;&nbsp;Return&nbsp;&nbsp;&nbsp;</button>
	</a>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button class="uk-button uk-button-success uk-button-large">&nbsp;&nbsp;&nbsp;<i class="fa fa-picture-o"></i>&nbsp;&nbsp;PDF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
