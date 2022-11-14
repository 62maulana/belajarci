<form action="<?php echo site_url('Welcome/UpdateDataSiswa'); ?>" method="post">
<table>
	<tr>
		<td>Nis</td>
		<td>:</td>
		<td>
			<input type="text" name="txt_nis" value="<?php echo $detail['nis']; ?>">
		</td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>
			<input type="text" name="txt_nama" value="<?php echo $detail['nama']; ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td>
			<input type="text" name="txt_alamat" value="<?php echo $detail['alamat']; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>