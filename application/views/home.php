  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-2"></div>
          <div class="col-sm-10">
          	<h1 class="m-0">Arsip Surat</h1>
            <p>
            	Berikut ini adalah surat-surat yang telah terbit dan diarsipkan <br>
            	Klik "Lihat" pada kolom aksi untuk menampilkan surat
        	</p> 
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <form action="<?= base_url('c_arsip') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
          <div class="row">
            <div class="col-lg-1"><h5>Cari Surat:</h5></div>
            <div class="col-lg-9">
            	<input type="text" class="form-control" name="cari" placeholder="Cari" <?php if (isset($_POST['cari'])):?> value="<?= $_POST['cari'] ?>" <?php endif ?>>
            </div>
            <div class="col-lg-2">
            	<button type="submit" class="btn btn-block bg-secondary">Cari &nbsp; <i class="fas fa-search"></i></button>
            </div>
          </div>
        </form>
        <br>

        <div class="row">
          <div class="col-lg-12">
          	<table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr class="text-center">
                  <th>No. Surat</th>
                  <th>Kategori</th>
                  <th>Judul</th>
                  <th>Waktu Pengarsipan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach ($arsip as $a) { ?>

                <tr>
                  <td><?= $a['nomor_surat'] ?></td>
                  <td><?= $a['kategori'] ?></td>
                  <td><?= $a['judul'] ?></td>
                  <td><?= $a['waktu'] ?></td>
                  <td class="text-center">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $a['id'] ?>">
                      <i class="fas fa-trash"></i> &nbsp; Hapus
                    </button> &nbsp;
                    <a href="<?= base_url('c_arsip/unduh/').$a['id']; ?>" class="btn btn-warning">
                      <i class="fas fa-download"></i> &nbsp; Unduh
                    </a> &nbsp;
                    <a href="<?= base_url('c_arsip/detail/').$a['id']; ?>" class="btn btn-info">
                      <i class="fas fa-eye"></i> &nbsp; Lihat
                    </a>
                  </td>

  <div class="modal fade" id="hapus-<?= $a['id'] ?>">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Apakah Anda yakin ingin menghapus arsip surat ini?</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <a href="<?= base_url('c_arsip/delete/').$a['id']; ?>" type="button" class="btn btn-danger">Ya!</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

                </tr>

                <?php } ?>

              </tbody>
              <tfoot>
                <tr class="text-center">
                  <th>No. Surat</th>
                  <th>Kategori</th>
                  <th>Judul</th>
                  <th>Waktu Pengarsipan</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>

        <br>
        <div class="row">
        	<div class="col-sm-3">
        		<a href="<?= base_url('c_arsip/add') ?>" class="btn bg-success btn-block"><i class="fas fa-plus-circle"></i> &nbsp;&nbsp; Arsipkan Surat..</a>
        	</div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
