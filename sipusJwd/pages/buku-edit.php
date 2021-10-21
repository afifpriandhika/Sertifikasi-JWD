<?php
	$id_buku=$_GET['id'];
	$q_tampil_buku=mysqli_query($db,"SELECT * FROM tbbuku WHERE idbuku='$id_buku'");
	$r_tampil_buku=mysqli_fetch_array($q_tampil_buku);

?>
<div class="container">
	<h1>EditData Buku</h1>

	<form action="proses/buku-edit-proses.php" method="post">
		<div class="mb-3 mt-5 row">
			<label class="col-sm-2 col-form-label">ID Buku</label>
			<div class="col-sm-9">
				<input type="text" name="id_buku" value="<?php echo $r_tampil_buku['idbuku']; ?>" readonly="readonly" class="form-control" >
			</div>
		</div>
		<div class="mb-3 row">
			<label class="col-sm-2 col-form-label">Judul Buku</label>
			<div class="col-sm-9">
				<input type="text" name="judul_buku" value="<?php echo $r_tampil_buku['judulbuku']; ?>" class="form-control" required>
			</div>
		</div>
		<div class="mb-3 row">
			<label class="col-sm-2 col-form-label">Kategori</label>
			<div class="col-sm-9">
				<select name="kategori" class="form-select">
					<option value="Pria" <?php if( $r_tampil_buku['kategori']=="Ilmu Komputer") echo 'selected';?> >Ilmu Komputer</option>
					<option value="Wanita" <?php if( $r_tampil_buku['kategori']=="Ilmu Agama") echo 'selected';?> >Ilmu Agama</option>
					<option value="Wanita" <?php if( $r_tampil_buku['kategori']=="Karya Sastra") echo 'selected';?> >Karya Sastra</option>
				</select>
			</div>
		</div>
		<div class="mb-3 row">
			<label class="col-sm-2 col-form-label">Pengarang</label>
			<div class="col-sm-9">
				<input type="text" name="pengarang" value="<?php echo $r_tampil_buku['pengarang']; ?>" class="form-control" required>
			</div>
		</div>
		<div class="mb-3 row">
			<label class="col-sm-2 col-form-label">Penerbit</label>
			<div class="col-sm-9">
				<input type="text" name="penerbit" value="<?php echo $r_tampil_buku['penerbit']; ?>" class="form-control" required>
			</div>
		</div>
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
	</form>	
</div>