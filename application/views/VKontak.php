<table border="1px">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddKontak'); ?>">Add</a>
		</td>
	</tr>
	<tr>
		<th>kd_kontak</th>
		<th>nama_kontak</th>
		<th>tools</th>
	</tr>
	<?php
	if(!empty($DataKontak))
	{
		foreach($DataKontak as $ReadDK)
		{
	?>

	<tr>
		<td><?php echo $ReadDK->kd_kontak; ?></td>
		<td><?php echo $ReadDK->nama_kontak; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataKontak/'.$ReadDK->kd_kontak.'/view') ?>">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataKontak/'.$ReadDK->kd_kontak) ?>">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>