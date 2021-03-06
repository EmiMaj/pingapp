<div class="dashboard-actions-wrapper">
	<div class="new-message">
		<a href="/groups/edit" class="button  expand">New Group [+]</a>
	</div>
</div>

<div class="dashboard-display-table-wrapper">
	<div class="dashboard-display-table">
		<table class="display dataTable" id="activity">
			<thead>
				<tr>
					<th>Group Name</th>
					<th width="200">Members</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($groups as $group):?>
				<tr>
					<td><a href="/groups/edit/<?php echo $group->id; ?>"><strong><?php echo $group->name; ?></strong></a></td>
					<td><span class="radius secondary label"><?php echo $group->people; ?></span></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
