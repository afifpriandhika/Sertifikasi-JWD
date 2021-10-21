<div class="container">
	<h1>Data Anggota</h1>
	<a class="btn btn-primary mt-3" href="index.php?p=anggota-input" role="button">Tambah Anggota</a>

	<table class="table table-striped table-hover mt-3">
		<tr>
		<th No</td>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th >Opsi</th>
		</tr>
		<?php
		$sql="SELECT * FROM tbanggota ORDER BY idanggota DESC";
		$q_tampil_anggota = mysqli_query($db, $sql);
		$nomor=1;
		while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
			
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_anggota['idanggota']; ?></td>
			<td><?php echo $r_tampil_anggota['nama']; ?></td>
			<td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
			<td><?php echo $r_tampil_anggota['alamat']; ?></td>
			<td>

				<a href="index.php?p=anggota-edit&id=<?php echo $r_tampil_anggota['idanggota'];?>" class="btn btn-warning ml-2">Edit</a></div>
				<a href="proses/anggota-hapus.php?id=<?php echo $r_tampil_anggota['idanggota']; ?>" class="btn btn-danger" >Hapus</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>