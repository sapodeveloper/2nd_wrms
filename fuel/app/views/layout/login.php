<!DOCTYPE html>
<html lang="ja" >
	<head>
			<meta charset="utf-8">
			<title>水ロケット管理システム</title>
			<?php echo Asset::css('uikit.gradient.css'); ?>
			<?php echo Asset::css('font-awesome.css'); ?>
			<?php echo Asset::css('base/jquery.ui.all.css'); ?>
			<?php echo Asset::js('jquery.js'); ?>
			<?php echo Asset::js('uikit.js'); ?>
			<?php echo Asset::js('ui/jquery-ui.js'); ?>
			<?php echo Asset::js('ui/i18n/jquery.ui.datepicker-ja.js'); ?>
			<?php echo Asset::js('jquery.tooltipster.js'); ?>
		  <script>
				<!--
		    jQuery( function() {
				  jQuery( '#jquery-ui-datepicker' ) . datepicker();
				});
				// -->
		  </script>
	</head>
	<body class="tm-background">

	<!-- Navigation Bar-->
	<nav class="tm-navbar uk-navbar uk-navbar-attached">
		<?php echo Html::anchor('/main', '<i class="fa fa-rocket"></i>&nbsp;&nbsp;水ロケット管理システム', array('class' => 'uk-navbar-brand')); ?>
		<ul class="uk-navbar-nav">
			<li class="uk-parent" data-uk-dropdown>
				<a href=""><i class="fa fa-list"></i>&nbsp;&nbsp;Navber&nbsp;<i class="fa fa-sort-asc"></i></a>
					<div class="uk-dropdown uk-dropdown-navbar">
						<ul class="uk-nav uk-nav-navbar">
							<li><?php echo Html::anchor('top/entry/', 'New Registration'); ?></li>
							<li><?php echo Html::anchor('manage/view', 'Participant List'); ?></li>
							<li><?php echo Html::anchor('manage/recordd_list', 'Record Display List'); ?></li>
						</ul>
					</div>
			</li>
		</ul>
	</nav>
	
	<!-- Padding -->
	<br>
	
	<!-- Contents -->
	<div class="uk-grid" data-uk-grid-margin>
		<div class="tm-main uk-width-medium-1-1">
			<div class="uk-text-large">
				<div class="uk-grid">
					<div class="uk-width-medium-1-1">
<?php /*   // フラッシュの記述部分　有益だと思うので残しときます。
					<?php if (Session::get_flash('success')): ?>
						<div class="uk-alert uk-alert-success" data-uk-alert>
							<a href="" class="uk-alert-close uk-close"></a>
							<p>
								<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
							</p>
						</div>
					<?php endif; ?>
					<?php if (Session::get_flash('error')): ?>
						<div class="uk-alert uk-alert-danger" data-uk-alert>
							<a href="" class="uk-alert-close uk-close"></a>
							<p>
							<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
							</p>
						</div>
					<?php endif; ?>
*/ ?>
						<article class="uk-articleuk-panel uk-panel-box">
							<?php echo $contents; ?>
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Padding -->
	<br>

	<!-- footer -->
	<footer>
		<div style="text-align: center; font-size: small;">
			<br>
			<h6>Copyright ©<?php echo date('Y'); ?> HIT ISMC Support Center All Rights Reserved.</h6>
		</div>
	</footer>
	
	</body>
</html>
