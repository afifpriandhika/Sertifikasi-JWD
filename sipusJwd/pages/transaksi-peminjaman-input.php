<div class="container">
	<h1>Input Transaksi Peminjaman</h1>
	<form action="proses/transaksi-peminjaman-input-proses.php" method="post">
		<!-- <div class="mb-3 row">
			<label class="col-sm-2 col-form-label">ID Transaksi</label>
			<div class="col-sm-9">
				<input type="text" name="id_transaksi" class="form-control" required>
			</div>
		</div> -->
		<div class="mb-3 row">
			<label class="col-sm-2 col-form-label">ID Buku</label>
			<div class="col-sm-9">
				<select name="id_anggota" class="form-select" required>
					<option value="" select="selected"> Pilih Data Anggota </option>
					<?php
						$q_tampil_anggota=mysqli_query($db,
							"SELECT * FROM tbanggota
							WHERE status='Tidak Meminjam'
							ORDER BY idanggota"
						);
						while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
							echo"<option value=$r_tampil_anggota[idanggota]>$r_tampil_anggota[idanggota] | $r_tampil_anggota[nama]</option>";
						}
					?>
				</select>
			</div>
		</div>
		<div class="mb-3 row">
			<label class="col-sm-2 col-form-label">Buku</label>
			<div class="col-sm-9">
				<select name="id_buku" class="form-select" required>
					<option value="" select="selected"> Pilih Data Buku </option>
					<?php
						$q_tampil_buku=mysqli_query($db,
							"SELECT * FROM tbbuku
							WHERE status='Tersedia'
							ORDER BY idbuku"
						);
						while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
							echo"<option value=$r_tampil_buku[idbuku]>$r_tampil_buku[idbuku] | $r_tampil_buku[judulbuku]</option>";
						}
					?>
				</select>
			</div>
		</div>
		<div class="mb-3 row">
			<label class="col-sm-2 col-form-label">Tanggal Pinjam</label>
			<div class="col-sm-9">
				<input type="text" name="tgl_pinjam" value="<?php echo $tgl; ?>" readonly="readonly" class="form-control">
			</div>
		</div>
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
	</form>
</div>