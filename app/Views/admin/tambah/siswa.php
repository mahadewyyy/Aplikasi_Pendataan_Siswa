<?php $this->extend('layouts/sbadmin'); ?>
<?php $this->section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Data</h1>

            <!-- form edit data -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tambah Data Siswa
                </div>
                <div class="card-body">
                    <form action="/siswa/admin/save" method="post">
                        <?= csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="nama_siswa" class="col-sm-2 col-form-label">Nama Siswa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" autofocus placeholder="Nama Lengkap Siswa">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama_siswa'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nis" name="nis" placeholder="NIS Siswa">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nis'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="absen" class="col-sm-2 col-form-label">Absen</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="absen" name="absen" placeholder="Absen Siswa">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('absen'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas Siswa">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kelas'); ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('jenis_kelamin'); ?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
            <!-- end form edit data -->
    </main>

    <?php $this->endSection(); ?>