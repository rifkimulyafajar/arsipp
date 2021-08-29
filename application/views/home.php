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
        <div class="row">
          <div class="col-lg-1"><h5>Cari Surat:</h5></div>
          <div class="col-lg-9">
          	<input type="" class="form-control" name="" placeholder=" Cari">
          </div>
          <div class="col-lg-2">
          	<button class="btn btn-block bg-success">Cari &nbsp; <i class="fas fa-search"></i></button>
          </div>
        </div> <br>

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
                <tr>
                  <td>2020/PD3/TU/001</td>
                  <td>Pengumuman</td>
                  <td>Nota Dinas WFH</td>
                  <td>2021-06-21 17:23</td>
                  <td>
                  	<button class="btn-danger"><i class="fas fa-trash"></i> Hapus</button> &nbsp;
                  	<button class="btn-success"><i class="fas fa-download"></i> Unduh</button> &nbsp;
                  	<button class="btn-info"><i class="fas fa-eye"></i> Lihat</button>
                  </td>
                </tr>
                <tr>
                  <td>2020/PD2/TU/002</td>
                  <td>Undangan</td>
                  <td>Undangan Halal Bi Halal</td>
                  <td>2021-04-21 18:23</td>
                  <td>
                  	<button class="btn-danger"><i class="fas fa-trash"></i> Hapus</button> &nbsp;
                  	<button class="btn-success"><i class="fas fa-download"></i> Unduh</button> &nbsp;
                  	<button class="btn-info"><i class="fas fa-eye"></i> Lihat</button>
                  </td>
                </tr>
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
        		<a href="<?= base_url('c_addarsip') ?>" class="btn bg-success btn-block"><i class="fas fa-plus-circle"></i> &nbsp;&nbsp; Arsipkan Surat..</a>
        	</div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
