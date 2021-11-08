  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Kelas</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title"><?= $data['title']; ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="<?= base_url; ?>/kelas/simpanKelas" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label>Nama Kelas</label>
              <input type="text" class="form-control" placeholder="masukkan nama kelas..." name="nama_kelas">
            </div>
            <div class="form-group">
              <label>Prodi</label>
              <select class="form-control" name="prodi_id">
                <option value="">Pilih</option>
                <?php foreach ($data['prodi'] as $row) : ?>
                  <option value="<?= $row['prodi_id']; ?>"><?= $row['nama_prodi']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label>Semester</label>
              <input type="text" class="form-control" placeholder="masukkan alamat kelas..." name="semester">
            </div>
            <div class="form-group">
              <label>Tahun Akademik</label>
              <input type="text" class="form-control" placeholder="masukkan nomor telepon..." name="tahun_akademik">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->