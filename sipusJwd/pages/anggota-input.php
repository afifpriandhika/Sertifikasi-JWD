<div class="container">
	<h1>Input Data Anggota</h1>
	
	<form action="proses/anggota-input-proses.php" method="post">
		<div class="mb-3">
			<div class="row">
				<div class="col-2">
					<label for="exampleInputEmail1" class="form-label">Nama</label>
				</div>
				<div class="col-10">
					<input type="text" name="nama" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="mb-3">
			<div class="row">
				<div class="col-2">
					<label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
				</div>
				<div class="col-10">
					<select class="form-select" name="jenis_kelamin" required>
						<option value="Pria" >Pria</option>
						<option value="Wanita" >Wanita</option>
					</select>
				</div>
			</div>
		</div>
		<div class="mb-3">
			<div class="row">
				<div class="col-2">
					<label for="exampleInputEmail1" class="form-label">Alamat</label>
				</div>
				<div class="col-10">
					<textarea name="alamat" class="form-control" rows="3" required></textarea>
				</div>
			</div>
		</div>
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
	</form>	
</div>