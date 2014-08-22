<h1 class="uk-article-title">高校登録ページ</h1>
<?php echo Form::open(array('action' => 'admin/highschool_input', 'class' => 'uk-form')); ?>
	<div class="uk-grid">
		<div class="uk-width-medium-1-5">&nbsp;</div>
		<div class="uk-width-medium-3-5">
			<div class="uk-grid">
				<br>このページは高校が登録されていなかった場合に使用される、<br>応急処置的なページです。<br>
				<br><font color="red"><i>必ず、重複することのないようにお願いします。</i></font><br>
				<br><?php echo Form::input('school_name','', array('placeholder' => '高等学校名(正式名称で)', 'class' => 'uk-text-center', 'type' => 'text')); ?>
				<br><?php echo Form::select('pref_id', null, $pref_lists, array('class' => 'uk-text-center', 'id' => 'pref_id')); ?>
				</div>
			</div>
		</div>
		<div class="uk-width-medium-1-5">&nbsp;</div>
	<button class="uk-button uk-button-primary uk-button-large"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;登録</button>
<?php echo Form::close(); ?>
	</div><br>
