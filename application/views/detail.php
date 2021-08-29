  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-1"></div>
          <div class="col-sm-11">
          	<h1 class="m-0"><b>Arsip Surat &nbsp; >> &nbsp; Lihat</b></h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <p>
              Nomor : <?= $detail['nomor_surat'] ?> <br>
              Kategori : <?= $detail['kategori'] ?> <br>
              Judul : <?= $detail['judul'] ?> <br>
              Waktu Unggah : <?= $detail['waktu'] ?>
            </p>
            
            <iframe src="<?= base_url('upload/'.$detail["file"]) ?>" width="100%" height="350"></iframe>

          </div>
          <div class="col-lg-1"></div>
        </div>
        <br><br>

        <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <a href="<?= base_url('c_arsip') ?>" class="btn bg-info">
              <i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i> &nbsp; Kembali
            </a>
            &nbsp;&nbsp;&nbsp;
            <a href="<?= base_url('c_arsip/unduh/').$detail['id']; ?>" class="btn btn-warning">
              <i class="fas fa-download"></i> &nbsp; Unduh
            </a>
            &nbsp;&nbsp;&nbsp;
            <a href="<?= base_url('c_arsip/edit/').$detail['id']; ?>" class="btn btn-success">
              <i class="fas fa-edit"></i> &nbsp; Edit/Ganti File
            </a>
          </div>
          <div class="col-lg-1"></div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
