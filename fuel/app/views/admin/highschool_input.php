<h1 class="uk-article-title">HighSchool Input</h1>
<?php echo Form::open(array('action' => 'admin/highschool_input', 'class' => 'uk-form')); ?>
	<div class="uk-grid">
		<div class="uk-width-medium-1-5">&nbsp;</div>
		<div class="uk-width-medium-3-5">
			<div class="uk-grid">
				<br><?php echo Form::input('school_name','', array('placeholder' => 'HighSchool Name', 'class' => 'uk-text-center', 'type' => 'text')); ?>
				<br><?php echo Form::select('pref_id', null, $pref_lists, array('class' => 'uk-text-center', 'id' => 'pref_id')); ?>
				</div>
			</div>
		</div>
		<div class="uk-width-medium-1-5">&nbsp;</div>
	<button class="uk-button uk-button-primary uk-button-large"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;Registration</button>
<?php echo Form::close(); ?>
	</div><br>
