<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="container">
  <div class="row mt-4">
    <div class="col-12">
      <a href="<?= base_url('kelas/create') ?>" class="btn btn-primary mb-3">Tambah Data</a>
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0">Kelas</h5>
        </div>
        <div class="card-body p-0">
          <?php if (session('validation') && session('validation')->hasError('delete_failed')) : ?>
            <div class="alert alert-danger mb-3">
              <?= session('validation')->getError('delete_failed'); ?>
            </div>
          <?php endif; ?>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kelas</th>
                  <th>Kapasitas Kelas</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($kelas as $kelas) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $kelas['nama_kelas'] ?></td>
                    <td><?= $kelas['kapasitas'] ?></td>
                    <td>
                      <a href="<?= base_url('kelas/' . $kelas['id']) ?>" class="btn btn-info btn-sm me-2">Detail</a>
                      <a href="<?= base_url('kelas/' . $kelas['id'] . '/edit') ?>" class="btn btn-secondary btn-sm me-2">Edit</a>
                      <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                      </form>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection('content') ?>
