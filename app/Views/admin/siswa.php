<?php $this->extend('layouts/sbadmin'); ?>
<?php $this->section('content'); ?>

<?php
$pesan = session()->getFlashdata('pesan');
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Siswa</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Data Siswa</li>
            </ol>
            <!-- button tambah data -->
            <div class="row mb-3">
                <div class="col-sm-10">
                    <a href="/admin/tambah/siswa" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>NIS</th>
                                <th>Absen</th>
                                <th>Kelas</th>
                                <th>Jenis_Kelamin</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>NIS</th>
                                <th>Absen</th>
                                <th>Kelas</th>
                                <th>Jenis_Kelamin</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($siswa as $s) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td>
                                        <?= $s['nama_siswa']; ?>
                                    </td>
                                    <td><?= $s['nis']; ?></td>
                                    <td><?= $s['absen']; ?></td>
                                    <td><?= $s['kelas']; ?></td>
                                    <td><?= $s['jenis_kelamin']; ?></td>
                                    <td>
                                        <a href="/siswa/edit/<?= $s['id']; ?>" class="btn btn-primary" >Edit</a>
                                        <form action="/siswa/<?= $s['id']; ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">Delete</button>
                                        </form>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Modal<?= $s['id']; ?>">Detail</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php if ($pesan) { ?>
                                <h5 style="color:green"><?php echo $pesan ?><h5>
                                    <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php foreach ($siswa as $s) : ?>
            <div class="modal fade" id="Modal<?= $s['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h6>Id : <?= $s['id']; ?></h6>
                            <h6>Nama_siswa : <?= $s['nama_siswa']; ?></h6>
                            <h6>NIS : <?= $s['nis']; ?></h6>
                            <h6>Absen : <?= $s['absen']; ?></h6>
                            <h6>Kelas : <?= $s['kelas']; ?></h6>
                            <h6>Jenis_Kelamin : <?= $s['jenis_kelamin']; ?></h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </main>

    <?php $this->endSection(); ?>