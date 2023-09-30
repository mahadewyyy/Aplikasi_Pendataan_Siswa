<?php $this->extend('layouts/sbadmin'); ?>
<?php $this->section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Data</h1>

            <!-- form edit data -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Edit Data Siswa
                </div>
                <div class="card-body">
                    <form action="/siswa/update/<?= $siswa['id']; ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $siswa['id']; ?>">
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama siswa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('nama_siswa')) ? 'is-invalid' : ''; ?>" id="nama_siswa" name="nama_siswa" autofocus value="<?= (old('nama_siswa')) ? old('nama_siswa') : $siswa['nama_siswa']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama_siswa'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nik" class="col-sm-2 col-form-label">NIS</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('nis')) ? 'is-invalid' : ''; ?>" id="nis" name="nis" value="<?= (old('nis')) ? old('nis') : $siswa['nis']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nis'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggal_lahir" class="col-sm-2 col-form-label">Absen</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('absen')) ? 'is-invalid' : ''; ?>" id="absen" name="absen" value="<?= (old('absen')) ? old('absen') : $siswa['absen']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('absen'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggal_lahir" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('kelas')) ? 'is-invalid' : ''; ?>" id="kelas" name="kelas" value="<?= (old('kelas')) ? old('kelas') : $siswa['kelas']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kelas'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select class="form-select <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="<?= (old('jenis_kelamin')) ? old('jenis_kelamin') : $siswa['jenis_kelamin']; ?>" selected><?= (old('jenis_kelamin')) ? old('jenis_kelamin') : $siswa['jenis_kelamin']; ?></option>
                                    <option value="Laki-laki">Laki-laki</option>

                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('jenis_kelamin'); ?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                    </form>
                </div>
            </div>
            <!-- end form edit data -->
    </main>

    <?php $this->endSection(); ?>