<form action="<?php echo site_url('Welcome/UpdateDataKontak'); ?>" method="post">
<table>
	<tr>
		<td>Kd_kontak</td>
		<td>:</td>
		<td>
			<input type="text" name="txt_kd_kontak" value="<?php echo $detail['kd_kontak']; ?>">
		</td>
	</tr>
	<tr>
		<td>Nama_kontak</td>F
		<td>:</td>
		<td>
			<input type="text" name="txt_nama_kontak" value="<?php echo $detail['nama_kontak']; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>