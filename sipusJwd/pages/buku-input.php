<div class="container">
	<h1>Input Data Buku</h1>

	<form action="proses/buku-input-proses.php" method="post">
		<div class="mb-3 mt-5 row">
			<label class="col-sm-2 col-form-label">ID Buku</label>
			<div class="col-sm-9">
				<input type="text" name="id_buku" class="form-control" required>
			</div>
		</div>
		<div class="mb-3 row">
			<label class="col-sm-2 col-form-label">Judul Buku</label>
			<div class="col-sm-9">
				<input type="text" name="judul_buku" class="form-control" required>
			</div>
		</div>
		<div class="mb-3 row">
			<label class="col-sm-2 col-form-label">Kategori</label>
			<div class="col-sm-9">
				<select name="kategori" class="form-select" required>
					<option value="" select="selected">~ Pilih Kategori ~</option>
					<option value="Ilmu Komputer">Ilmu Komputer</option>
					<option value="Ilmu Agama">Ilmu Agama</option>
					<option value="Karya Sastra">Karya Sastra</option>
				</select>
			</div>
		</div>
		<div class="mb-3 row">
			<label class="col-sm-2 col-form-label">Pengarang</label>
			<div class="col-sm-9">
				<input type="text" name="pengarang" class="form-control" required>
			</div>
		</div>
		<div class="mb-3 row">
			<label class="col-sm-2 col-form-label">Penerbit</label>
			<div class="col-sm-9">
				<input type="text" name="penerbit" class="form-control" required>
			</div>
		</div>
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
	</form>
</div>
