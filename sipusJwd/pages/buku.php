<div class="container">
	<h1>Data Buku</h1>
	<a class="btn btn-primary mt-3" href="index.php?p=buku-input" role="button">Tambah Buku</a>

	<table class="table table-striped table-hover mt-3">
	<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Buku</th>
			<th>Judul Buku</th>
			<th>Kategori</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th id="label-opsi2">Opsi</th>
		</tr>
		<?php
		$sql="SELECT * FROM tbbuku ORDER BY idbuku DESC";
		$q_tampil_buku = mysqli_query($db, $sql);

		$nomor=1;
		while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_buku['idbuku']; ?></td>
			<td><?php echo $r_tampil_buku['judulbuku']; ?></td>
			<td><?php echo $r_tampil_buku['kategori']; ?></td>
			<td><?php echo $r_tampil_buku['pengarang']; ?></td>
			<td><?php echo $r_tampil_buku['penerbit']; ?></td>
			<td>
				<div class="btn-group">
					<a href="index.php?p=buku-edit&id=<?php echo $r_tampil_buku['idbuku'];?>" class="btn btn-warning">Edit</a>
					<a href="proses/buku-hapus.php?id=<?php echo $r_tampil_buku['idbuku']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>	
				</div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
