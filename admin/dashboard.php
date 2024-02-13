<?php 
include('../config/koneksi.php');
$query = "SELECT count(*) as jumlah_pegawai FROM pegawai";
$sql = mysqli_query($koneksi, $query);
$hasil = mysqli_fetch_array($sql);

$query2 = "SELECT count(*) as jumlah_jabatan FROM jabatan";
$sql2 = mysqli_query($koneksi, $query2);
$hasil2 = mysqli_fetch_array($sql2);
?>

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $hasil['jumlah_pegawai']?></h3>

                <p>Jumlah Pegawai</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $hasil2['jumlah_jabatan']?></h3>

                <p>Jumlah Jabatan</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->