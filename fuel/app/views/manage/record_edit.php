<?php echo Asset::js('nt-form_active.js'); ?>
<?php $i=0; ?>
<h1 class="uk-article-title">Record input</h1>
<div class="uk-grid">
	<div class="uk-width-medium-1-5">&nbsp;</div>
	<div class="uk-width-medium-3-5">
		<div class="uk-grid">
			<div class="uk-width-medium-1-2"><br><?php echo $school->school_name; ?><br><br><?php echo $team->team_name; ?></div>
			<div class="uk-width-medium-1-2"><br>
				<form class="uk-form">
					<fieldset data-uk-margin>
						<table>
<?php foreach($records as $record): ?>
							<tr><td>&nbsp;<?php echo $i; ?>&nbsp;:&nbsp;<input class="uk-text-center" type="text" placeholder="Record Input" value="<?php echo $record->distance; ?>">&nbsp;m</td></tr>
<?php $i++; ?>
<?php endforeach; ?>
							<tr><td>&nbsp;<?php echo $i; ?>&nbsp;:&nbsp;<input class="uk-text-center" type="text" placeholder="Record Input" id="active_form">&nbsp;m</td></tr>
						</table>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<div class="uk-width-medium-1-5">&nbsp;</div>
</div><br>
