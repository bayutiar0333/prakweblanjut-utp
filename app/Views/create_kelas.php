<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<section style="background-color: #EEEEEE; height: 100vh; display: flex; justify-content: center; align-items: center;">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-9 col-lg-7 col-xl-5">
        <div class="card" style="border-radius: 15px; border: 1px solid #000;">
          <div class="card-body p-4">
            <h1 class="h3 mb-3 fw-normal">Buat Kelas Baru</h1>
            <form method="POST" action="<?= base_url('/kelas/store') ?>" enctype="multipart/form-data">
              <div class="form-floating">
                <input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama Kelas" name="nama_kelas" value="<?= old('nama_kelas') ?>">
                <label for="floatingName">Nama Kelas</label>
                <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
                  <div class="invalid-feedback">
                    <?= session('validation')->getError('nama_kelas'); ?>
                  </div>
                <?php endif; ?>
              </div>
              <div class="form-floating">
                <input type="number" class="form-control mt-2 <?= session('validation') ? 'is-invalid' : '' ?>" id="floatingKapasitas" placeholder="Kapasitas" name="kapasitas" value="<?= old('kapasitas') ?>">
                <label for="floatingKapasitas">Kapasitas</label>
                <?php if (session('validation') && session('validation')->hasError('kapasitas')) : ?>
                  <div class="invalid-feedback">
                    <?= session('validation')->getError('kapasitas'); ?>
                  </div>
                <?php endif; ?>
              </div>
              <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Buat Kelas</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection('content') ?>
