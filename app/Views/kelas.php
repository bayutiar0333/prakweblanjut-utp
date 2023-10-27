<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<section style="background-color: #EEEEEE;">
  <div class="container py-5">
    <h3 class="mb-3">Daftar Anggota Kelas</h3>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Kelas</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($kelas as $kelas) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $kelas['nama'] ?></td>
            <td><?= $kelas['nama_kelas'] ?></td>
          </tr>
        <?php }
        ?>
      </tbody>
    </table>
  </div>
</section>

<?= $this->endSection('content') ?>
