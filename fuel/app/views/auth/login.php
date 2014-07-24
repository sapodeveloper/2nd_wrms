<div data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300, repeat: true}">
	<center><?php echo Asset::img('logo_japanese.png', array('height' => '40%', 'width' => '35%')); ?></center>
	<center><h1 class="uk-article-title">～ Water Rocket ～</h1></center>
</div>
<br>
<?php echo Form::open(array('action' => 'auth/login', 'class' => 'uk-form')); ?>
	<fieldset>
		<center>
			<div data-uk-scrollspy="{cls:'uk-animation-slide-right', delay:600, repeat: true}">
				<div class="uk-form-row">
					<?php echo Form::input('authname', '', array('placeholder' => 'ID Input', 'class' => 'uk-text-center', 'type' => 'text')); ?>
				</div>
				<br>
			</div>
			<div data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:600, repeat: true}">
				<div class="uk-form-row">
					<?php echo Form::input('password', '', array('placeholder' => 'Password Input', 'class' => 'uk-text-center', 'type' => 'password')); ?>
				</div>
			</div>
		</center>
	</fieldset>
	<br><br>
	<center>
		<button class="uk-button uk-button-primary uk-button-large">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-sign-in"></i>&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
	</center>
<?php echo Form::close(); ?>
<?php /*
<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "login" ); ?>'><?php echo Html::anchor('auth/login','Login');?></li>
	<li class='<?php echo Arr::get($subnav, "logout" ); ?>'><?php echo Html::anchor('auth/logout','Logout');?></li>

</ul>
<p>Login</p>
*/
?>
