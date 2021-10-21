<div class="container">
	<h1>Data Buku</h1>
	<a class="btn btn-primary mt-3" href="index.php?p=transaksi-peminjaman-input" role="button">Transaksi Baru</a>

	<table class="table table-striped table-hover mt-3">
		<tr>
			<th>No</th>
			<th>ID Transaksi</th>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>ID Buku</th>
			<th>Judul Buku</th>
			<th>Tanggal Pinjam</th>
			<th>Opsi</th>
		</tr>

		<?php
		$sql="SELECT tbtransaksi.*,tbanggota.*,tbbuku.*
		FROM tbtransaksi,tbanggota,tbbuku
		WHERE tbtransaksi.idanggota=tbanggota.idanggota
		AND tbtransaksi.idbuku=tbbuku.idbuku
		AND tbtransaksi.tglkembali='0000-00-00'
		ORDER BY tbtransaksi.idtransaksi DESC";
		
		$q_transaksi = mysqli_query($db, $sql);

		$nomor=1;
		while($r_transaksi=mysqli_fetch_array($q_transaksi)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_transaksi['idtransaksi']; ?></td>
			<td><?php echo $r_transaksi['idanggota']; ?></td>
			<td><?php echo $r_transaksi['nama']; ?></td>
			<td><?php echo $r_transaksi['idbuku']; ?></td>
			<td><?php echo $r_transaksi['judulbuku']; ?></td>
			<td><?php echo $r_transaksi['tglpinjam']; ?></td>
			<td>
				<div class="btn-group">
					<a href="cetak/nota-peminjaman.php?&id=<?php echo $r_transaksi['idtransaksi'];?>" class="btn btn-primary">Cetak Nota</a>
					<a href="proses/pengembalian-proses.php?&id=<?php echo $r_transaksi['idtransaksi'];?>" class="btn btn-success">Pengembalian</a>	
				</div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
