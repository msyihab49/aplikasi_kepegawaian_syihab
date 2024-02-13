<?php  
include'../config/koneksi.php';
// include'../config/autonumber.php';

$query = "SELECT * FROM tunjangan ORDER BY id_tunjangan ASC ";
$sql = mysqli_query($koneksi, $query);

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3>Kelola Data Jabatan</h3>
					<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Tambah Data Tunjangan</a><br><br>
					<table id="dataTable" class="table table-hover">
						<thead class="table-dark">
							<tr>
								<th>ID_TUNJANGAN</th>
								<th>NAMA_TUNJANGAN</th>
								<th>GAJI TUNJANGAN</th>
								<th>AKSI</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								while ($row = mysqli_fetch_array($sql)){
							?>
							<tr>
								<td><?php echo $row['id_tunjangan']; ?></td>
								<td><?php echo $row['nama_tunjangan']; ?></td>
								<td><?php echo $row['gaji_tunjangan']; ?></td>
								<td>	
									<a href="home.php?menu=7&id=<?php echo $row['id_tunjangan'];?>" class="btn btn-outline-warning"><i class="fas fa-pencil-alt"></i></a>
									<a href="tunjangan/hapus.php?id=<?php echo $row['id_tunjangan']; ?>" class="btn btn-outline-danger" onclick="return confirm('Apa Anda Yakin Menghapus Data Ini?')"><i class="fas fa-trash"></i></a>
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

				<form action="tunjangan/simpan.php" method="POST" role="form">
					<legend>Tambah Data Tunjangan</legend>
				
					<div class="form-group">
						<label>Nama Tunjangan</label>
						<input type="text" class="form-control" name="nama_tunjangan" id="" placeholder="Nama Tunjangan">
					</div>
                    <div class="form-group">
						<label>Gaji Tunjangan</label>
						<input type="number" class="form-control" name="gaji_tunjangan" id="" placeholder="Gaji">
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