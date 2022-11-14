<table border="1px">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddProfile'); ?>">Add</a>
		</td>
	</tr>
	<tr>
		<th>kd_profile</th>
		<th>nama_profile</th>
		<th>tools</th>
	</tr>
	<?php
	if(!empty($DataProfile))
	{
		foreach($DataProfile as $ReadDP)
		{
	?>

	<tr>
		<td><?php echo $ReadDP->kd_profile; ?></td>
		<td><?php echo $ReadDP->nama_profile; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataProfile/'.$ReadDP->kd_profile.'/view') ?>">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataProfile/'.$ReadDP->kd_profile) ?>">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>