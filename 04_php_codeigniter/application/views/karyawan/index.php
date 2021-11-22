<div class="container">

   <?php if ($this->session->flashdata('flash')) : ?>
      <div class="row mt-3">
         <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">Data Karyawan <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
         </div>
      </div>
   <?php endif; ?>

   <div class="row mt-3">
      <div class="col-md-6">
         <a href="<?= base_url() ?>karyawan/tambah" class="btn btn-primary">Tambah Data Karyawan</a>
      </div>
   </div>

   <div class="row mt-3">
      <div class="col-md-6">
         <form action="" method=POST>
            <div class="input-group">
               <input type="text" class="form-control" placeholder="Cari karyawan..." name="keyword">
               <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">Cari</button>
               </div>
            </div>
         </form>
      </div>
   </div>

   <div class="row mt-3">
      <div class="col-md-6">
         <h1>Daftar Karyawan</h1>
         <?php if (empty($karyawan)) : ?>
            <div class="alert alert-danger" role="alert">
               Data kayawan tidak ditemukan!
            </div>
         <?php endif; ?>
         <ul class="list-group">
            <?php foreach ($karyawan as $kry) : ?>
               <li class="list-group-item">
                  <?= $kry['nama']; ?>
                  <a href="<?= base_url() ?>karyawan/hapus/<?= $kry['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin');">hapus</a>
                  <a href="<?= base_url() ?>karyawan/ubah/<?= $kry['id']; ?>" class="badge badge-success float-right">ubah</a>
                  <a href="<?= base_url() ?>karyawan/detail/<?= $kry['id']; ?>" class="badge badge-primary float-right">detail</a>
               </li>
            <?php endforeach; ?>
         </ul>
      </div>
   </div>

</div>