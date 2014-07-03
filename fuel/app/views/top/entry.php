<div align="center">
<h1>New Registration</h1>
<br>
School name
<?php echo Form::select('school_id', null, $school_date, array('class' => '', 'id' => 'school_id')); ?>
<br>
<br>
Team name
<?php echo Form::input('', Input::post('team_name', isset($team) ? $team->team_name : ''), array('class' => '', 'placeholder'=>'input name')); ?>
<br>
<br>
<button class="uk-button uk-button-primary" type="submit">Registration</button>
</div>
<?php echo Form::close(); ?>
