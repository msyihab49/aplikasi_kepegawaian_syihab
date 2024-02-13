<?php  
include'../config/koneksi.php';
// include'../config/autonumber.php';

$query = "SELECT pegawai.nama_pegawai, 
jabatan.nama_jabatan, 
tunjangan.gaji_tunjangan, 
jabatan.gaji,
(jabatan.gaji + tunjangan.gaji_tunjangan) AS total_gaji
FROM pegawai
JOIN jabatan ON pegawai.id_jabatan = jabatan.id_jabatan
JOIN tunjangan ON pegawai.id_tunjangan = tunjangan.id_tunjangan;
";
$sql = mysqli_query($koneksi, $query);

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3>Kelola Data Pengajian</h3>
					<!-- <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Tambah Data Jabatan</a><br><br> -->
					<table id="dataTable" class="table table-hover">
						<thead class="table-dark">
							<tr>
								<th>NAMA PEGAWAI</th>
								<th>NAMA JABATAN</th>
								<th>GAJI TUNJANGAN</th>
								<th>GAJI POKOK</th>
								<th>TOTAL GAJI</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								while ($row = mysqli_fetch_array($sql)){
							?>
							<tr>
								<td><?php echo $row['nama_pegawai']; ?></td>
								<td><?php echo $row['nama_jabatan']; ?></td>
								<td><?php echo $row['gaji_tunjangan']; ?></td>
								<td><?php echo $row['gaji']; ?></td>
								<td><?php echo $row['total_gaji']; ?></td>
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
