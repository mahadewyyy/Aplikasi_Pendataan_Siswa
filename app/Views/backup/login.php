<?= $this->extend('layouts/auth') ?>
<?= $this->section('content') ?>

<?php
$session = session();
$login = $session->getFlashdata('login');
$username = $session->getFlashdata('username');
$password = $session->getFlashdata('password');
?>

<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5" data-aos="fade-up">
        <div class="row gx-lg-5 align-items-center mb-5 mt-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                <h1 class="my-5 display-5 fw-bold ls-tight teks-color" data-aos="fade-right">
                    Welcome To Xiyza Website <br> Silahkan Login Sebelum Melanjutkan
                </h1>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass" data-aos="flip-down">
                    <div class="card-body px-4 py-5 px-md-5">
                        <form method="post" action="/auth/valid_login">

                            <!-- NPWP input -->
                            <?php if ($password) { ?>
                                <p style="color:red"><?php echo $password ?></p>
                            <?php } ?>

                            <?php if ($login) { ?>
                                <p style="color:green"><?php echo $login ?></p>
                            <?php } ?>

                            <?php if ($username) { ?>
                                <p style="color:red"><?php echo $username ?></p>
                            <?php } ?>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Username :</label>
                                <input name="username" id="form3Example3" class="form-control" placeholder="Yourname" required />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Password :</label>
                                <input type="password" name="password" id="form3Example3" class="form-control" placeholder="Yourname123" required />
                            </div>

                            <div class="mb-3">
                                <a>Not Have Account? <a href="/auth/daftar">Daftar</a></a>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block btn-lg mb-4" name="login">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->

<?= $this->endSection() ?>