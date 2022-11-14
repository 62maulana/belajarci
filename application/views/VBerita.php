<table border="1px">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddBerita'); ?>">Add</a>
		</td>
	</tr>
	<tr>
		<th>kd_berita</th>
		<th>nama_berita</th>
		<th>tools</th>
	</tr>
	<?php
	if(!empty($DataBerita))
	{
		foreach($DataBerita as $ReadDB)
		{
	?>

	<tr>
		<td><?php echo $ReadDB->kd_berita; ?></td>
		<td><?php echo $ReadDB->nama_berita; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataBerita/'.$ReadDB->kd_berita.'/view') ?>">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataBerita/'.$ReadDB->kd_berita) ?>">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>