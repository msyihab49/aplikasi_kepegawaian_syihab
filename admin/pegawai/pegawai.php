<?php  
include'../config/koneksi.php';
// include'../config/autonumber.php';

$query = "SELECT * FROM pegawai ORDER BY id_pegawai ASC ";
$sql = mysqli_query($koneksi, $query);

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3>Kelola Data Pegawai</h3>
					<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Tambah Data Pegawai</a><br><br>
					<table id="dataTable" class="table table-hover">
						<thead class="table-dark">
							<tr>
								<th>ID_PEGAWAI</th>
								<th>NAMA_PEGAWAI</th>
								<th>EMAIL PEGAWAI</th>
								<th>ALAMAT PEGAWAI</th>
								<th>NAMA JABATAN PEGAWAI</th>
								<th>STATUS</th>
								<th>JUMLAH ANAK</th>
								<th>NO TELEPHON</th>
								<th>ID JABATAN</th>
								<th>ID TUNJANGAN</th>
								<th>AKSI</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								while ($row = mysqli_fetch_array($sql)){
							?>
							<tr>
								<td><?php echo $row['id_pegawai']; ?></td>
								<td><?php echo $row['nama_pegawai']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['alamat']; ?></td>
								<td><?php echo $row['nama_jabatan']; ?></td>
								<td><?php echo $row['status']; ?></td>
								<td><?php echo $row['jumlah_anak']; ?></td>
								<td><?php echo $row['no_telp']; ?></td>
								<td><?php echo $row['id_jabatan']; ?></td>
								<td><?php echo $row['id_tunjangan']; ?></td>
								<td>	
									<a href="home.php?menu=5&id=<?php echo $row['id_pegawai'];?>" class="btn btn-outline-warning"><i class="fas fa-pencil-alt"></i></a>
									<a href="pegawai/hapus.php?id=<?php echo $row['id_pegawai']; ?>" class="btn btn-outline-danger" onclick="return confirm('Apa Anda Yakin Menghapus Data Ini?')"><i class="fas fa-trash"></i></a>
								</td>
							</tr>
							<?php 
								}
							?>
						</tbody>
					</table>	
				</div>
			</div>
		</div>
	</div>	
</div>
<!-- Modal -->
<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">

				<form action="pegawai/simpan.php" method="POST" role="form">
					<legend>Tambah Data Pegawai</legend>
				
					<div class="form-group">
						<label>Nama Pegawai</label>
						<input type="text" class="form-control" name="nama_pegawai" id="" placeholder="Nama Pegawai">
					</div>
                    <div class="form-group">
						<label>email</label>
						<input type="text" class="form-control" name="email" id="" placeholder="email">
					</div>
                    <div class="form-group">
						<label>Alamat</label>
						<input type="text" class="form-control" name="alamat" id="" placeholder="alamat">
					</div>
                    <div class="form-group">
						<label>Nama Jabatan</label>
                        <select name="nama_jabatan" id="" class="form-control">
                            <option value="">-- SILAHKAN PILIH --</option>
                            <option value="MANAJER">MANAJER</option>
                            <option value="OFFICE BOY">OFFICE BOY</option>
                            <option value="AKUNTING">AKUNTING</option>
                            <option value="MARKETING">MARKETING</option>
                            <option value="IT SUPPORT">IT SUPPORT</option>
                        </select>
					</div>
                    <div class="form-group">
						<label>Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="">-- SILAHKAN PILIH --</option>
                            <option value="SUDAH MENIKAH">SUDAH MENIKAH</option>
                            <option value="BELUM MENIKAH">BELUM MENIKAH</option>
                        </select>
					</div>
					<div class="form-group">
						<label>Jumlah Anak</label>
						<input type="number" class="form-control" name="jumlah_anak" id="" placeholder="Jumlah Anak">
					</div>
					<div class="form-group">
						<label>No Telephon</label>
						<input type="number" class="form-control" name="no_telp" id="" placeholder="No Telepon">
					</div>
                    <div class="form-group">
						<label>Id Jabatan</label>
                        <input type="number" class="form-control" name="id_jabatan" id="" placeholder="Id Jabatan">
					</div>
                    <div class="form-group">
						<label>Id Tunjangan</label>
                        <input type="number" class="form-control" name="id_tunjangan" id="" placeholder="Id Tunjangan">
					</div>
						
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-default" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
			</form>
		</div>
	</div>
</div>