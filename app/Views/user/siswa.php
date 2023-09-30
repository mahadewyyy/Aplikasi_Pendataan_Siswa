<?php $this->extend('layouts/user'); ?>
<?php $this->section('content'); ?>

<?php
$pesan = session()->getFlashdata('pesan');
?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
    <div class="container position-relative">
        <div class="card bg-glass" data-aos="flip-down">
            <div class="card-body px-4 py-5 px-md-5">
                <form method="post" action="/siswa/save">
                    <?= csrf_field(); ?>

                    <div>
                        <?php if ($pesan) { ?>
                            <p style="color:green"><?php echo $pesan ?></p>
                        <?php } ?>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="nama_siswa">Nama Siswa :</label>
                        <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" placeholder="Nama Lengkap Siswa" value="<?= old('nama_siswa'); ?>" required />
                        <?= $validation->getError('nama_siswa'); ?>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="nis">NIS Siswa :</label>
                        <input type="text" name="nis" id="nis" class="form-control" placeholder="NIS Siswa" value="<?= old('nis'); ?>" required />
                        <?= $validation->getError('nis'); ?>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="absen">Absen Siswa :</label>
                        <input type="text" name="absen" id="absen" class="form-control" placeholder="Absen Siswa" value="<?= old('absen'); ?>" required />
                        <?= $validation->getError('absen'); ?>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="kelas">Kelas Siswa :</label>
                        <input type="text" name="kelas" id="kelas" class="form-control" placeholder="kelas Siswa" value="<?= old('kelas'); ?>" required />
                        <?= $validation->getError('kelas'); ?>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="jenis_kelamin">Jenis Kelamin :</label>
                        <select name="jenis_kelamin" id="jenis_kelamin">
                            <option value="Laki-laki" id="jenis_kelamin">Laki-laki</option>
                            <option value="Perempuan" id="jenis_kelamin">Perempuan</option>
                        </select>
                        <?= $validation->getError('jenis_kelamin'); ?>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block btn-lg mb-4">
                        Tambah Data
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

<?php $this->endSection(); ?>