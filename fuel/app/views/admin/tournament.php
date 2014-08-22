<h1 class="uk-article-title">大会記録表示</h1>
<div class="uk-grid">
	<div class="uk-width-medium-1-5">&nbsp;</div>
	<div class="uk-width-medium-3-5">
		<table class="uk-table">
			<thead>
				<tr>
					<th class="uk-width-medium-1-6">学校名,</th>
					<th class="uk-width-medium-1-6">チーム名,</th>
					<th class="uk-width-medium-1-6">メンバー1,</th>
					<th class="uk-width-medium-1-6">メンバー2,</th>
					<th class="uk-width-medium-1-6">メンバー3,</th>
					<th class="uk-width-medium-1-6">最高記録</th>
				</tr>
			</thead>
			<tbody>
<?php foreach($teams as $team): ?>
				<tr>
					<td><?php echo $team->school_name ?>,</td>
					<td><?php echo $team->team_name ?>,</td>
					<td><?php echo $team->leader_name ?>,</td>
					<td><?php echo $team->teammate1_name ?>,</td>
					<td><?php echo $team->teammate2_name ?>,</td>
					<td><?php echo $team->distance ?></td>
				</tr>
<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<div class="uk-width-medium-1-5">&nbsp;</div>
</div>
<br>
