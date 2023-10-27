<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="container">
  <div class="row mt-4">
    <div class="col-12">
      <a href="<?= base_url('user/create') ?>" class="btn btn-primary mb-3">Tambah Data</a>
      <div class="card mb-4">
        <div class="card-header">
          <h5>Users</h5>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>NPM</th>
                  <th>Kelas</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($users as $user) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $user['nama'] ?></td>
                    <td><?= $user['npm'] ?></td>
                    <td><?= $user['nama_kelas'] ?></td>
                    <td>
                      <a href="<?= base_url('user/' . $user['id']) ?>" class="btn btn-info btn-sm me-2">Detail</a>
                      <a href="<?= base_url('user/' . $user['id'] . '/edit') ?>" class="btn btn-secondary btn-sm me-2">Edit</a>
                      <form action="<?= base_url('user/' . $user['id']) ?>" method="POST">
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

<style>
  /* Dark mode styles */
  body.dark-mode {
    background-color: #222; /* Warna latar belakang mode gelap (misalnya, hitam) */
    color: #fff; /* Warna teks mode gelap (misalnya, putih) */
  }

  /* Anda dapat menambahkan gaya yang lebih spesifik untuk mode gelap jika diperlukan */
</style>

<?= $this->endSection('content') ?>
