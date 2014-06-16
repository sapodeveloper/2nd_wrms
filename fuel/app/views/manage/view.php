<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "view" ); ?>'><?php echo Html::anchor('manage/view','View');?></li>
	<li class='<?php echo Arr::get($subnav, "record_list" ); ?>'><?php echo Html::anchor('manage/record_list','Record list');?></li>
	<li class='<?php echo Arr::get($subnav, "record_edit" ); ?>'><?php echo Html::anchor('manage/record_edit','Record edit');?></li>
	<li class='<?php echo Arr::get($subnav, "record_detail" ); ?>'><?php echo Html::anchor('manage/record_detail','Record detail');?></li>

</ul>
<p>View</p>