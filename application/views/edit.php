  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-1"></div>
          <div class="col-sm-11">
          	<h1 class="m-0"><b>Arsip Surat &nbsp; >> &nbsp; Edit</b></h1>
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
            <p>Unggah surat yang telah terbit pada form ini untuk diarsipkan <br>
              Catatan: <br>
              - &nbsp;&nbsp;&nbsp; <b><i>Gunakan file berformat PDF</i></b>
            </p>
            <br><br>

            <form action="<?= base_url('c_arsip/edit/'.$detail['id']) ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
              <div class="row form-group">
                <div class="col-lg-2">
                  Nomor Surat
                </div>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="nomor" value="<?= $detail['nomor_surat'] ?>">
                  <?= form_error('nomor', '<small class="text-danger">', '</small>'); ?>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-2">
                  Kategori
                </div>
                <div class="col-lg-10">
                  <select class="custom-select rounded-0" name="kategori">
                    <option value="Undangan" <?php if ($detail['kategori'] == "Undangan"): ?> selected <?php endif ?>>Undangan</option>
                    <option value="Pengumumam" <?php if ($detail['kategori'] == "Pengumuman"): ?> selected <?php endif ?>>Pengumuman</option>
                    <option value="Nota Dinas" <?php if ($detail['kategori'] == "Nota Dinas"): ?> selected <?php endif ?>>Nota Dinas</option>
                  </select>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-2">
                  Judul
                </div>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="judul" value="<?= $detail['judul'] ?>">
                  <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-2">
                  File Surat (PDF)
                </div>
                <div class="col-lg-10">
                  <input type="file" class="form-control" name="file" accept="application/pdf"> <br>
                  <p>File saat ini : <?= $detail['file'] ?></p>
                  <input type="hidden" name="before" value="<?= $detail['file'] ?>">
                </div>
              </div>
              <br>

              <input type="hidden" name="waktu" value="<?= $detail['waktu'] ?>">

              <div class="row">
                <div class="col-lg-12">
                  <a href=<?= base_url('c_arsip/detail/').$detail['id']; ?>" class="btn bg-info"><i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i> &nbsp; Kembali</a>
                  &nbsp;&nbsp;&nbsp;
                  <button type="submit" class="btn bg-success"><i class="fas fa-save"></i> &nbsp;&nbsp;&nbsp; Simpan</button>
                </div>
              </div>

            </form>

          </div>
          <div class="col-lg-1">

          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
