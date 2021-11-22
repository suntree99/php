<!-- membuat isi body dokumen HTML untuk karyawan -->

<!-- mengubah mt -->
<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <!-- memindahkan tombol tambah karyawan kedalam div tersendiri -->
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type=" button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah Data Karyawan
            </button>
        </div>
    </div>

    <!-- menambah form searching -->
    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/karyawan/cari" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari karyawan.." name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Karyawan</h3>
            <ul class="list-group">
                <?php foreach ($data['kry'] as $kry) : ?>
                    <li class="list-group-item">
                        <?= $kry['nama']; ?>
                        <a href="<?= BASEURL; ?>/karyawan/hapus/<?= $kry['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin ingin dihapus?');">hapus</a>
                        <a href="<?= BASEURL; ?>/karyawan/ubah/<?= $kry['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $kry['id']; ?>">ubah</a>
                        <a href="<?= BASEURL; ?>/karyawan/detail/<?= $kry['id']; ?>" class="badge badge-primary float-right ml-1">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>

</div>

<!-- Modal disimpan di bawah agar tersembunyi -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Karyawan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- menambah form dan isiannya -->
                <form action="<?= BASEURL; ?>/karyawan/tambah" method="POST">

                    <!-- menambah input type hidden untuk id -->
                    <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="number" class="form-control" id="nik" name="nik">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="usia">Usia</label>
                        <input type="number" class="form-control" id="usia" name="usia">
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="text" class="form-control" id="gambar" name="gambar">
                    </div>

                    <div class="form-group">
                        <label for="jenis">Jenis Kelamin</label>
                        <select class="form-control" id="jenis" name="jenis">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button> <!-- tipe button submit agar mengirim data $_POST -->
                </form> <!-- tutup form diletakan di bawah button agar termasuk ke dalam form -->
            </div>
        </div>
    </div>
</div>