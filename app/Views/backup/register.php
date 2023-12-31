<?= $this->extend('layouts/auth') ?>
<?= $this->section('content') ?>

<?php
$session = session();
$error = $session->getFlashdata('error');
$password = $session->getFlashdata('password');
?>

<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
    <style>
        .background-radial-gradient {
            background-image: url(/assets/img/hero-bg.png);
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#5766ee, #0018ed);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#5766ee, #0018ed);
            overflow: hidden;
        }

        .teks-color {
            /* make a gradient text color */
            background: linear-gradient(180deg, #7a73ee, #2f00ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.8) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }
    </style>

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5" data-aos="fade-up">
        <div class="row gx-lg-5 align-items-center mb-5 mt-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                <h1 class="my-5 display-5 fw-bold ls-tight teks-color" data-aos="fade-right">
                    Wellcome To Xiyza Website <br> Please create a new OKE
                </h1>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass" data-aos="flip-down">
                    <div class="card-body px-4 py-5 px-md-5">
                        <form method="post" action="/auth/valid_register">

                            <div>
                                <?php if ($password) { ?>
                                    <p style="color:red"><?php echo $password ?></p>
                                <?php } ?>
                            </div>

                            <div>
                                <?php if ($error) { ?>
                                    <p style="color:red">Terjadi Kesalahan:
                                        <?php foreach ($error as $e) { ?>
                                            <br>
                                    <p style="color:red"><?php echo $e ?></p>
                                <?php } ?>
                                </p>
                            <?php } ?>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Username :</label>
                                <input name="username" id="form3Example3" class="form-control" placeholder="Yourname" required />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Password :</label>
                                <input type="password" name="password" id="form3Example3" class="form-control" placeholder="Yourname123" required />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Konfirmasi Password :</label>
                                <input type="password" name="confirm" id="form3Example3" class="form-control" placeholder="Yourname123" required />
                            </div>

                            <div class="mb-3">
                                <a>Sudah Memilki Akun? <a href="/auth/login">Login</a></a>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block btn-lg mb-4" name="login">
                                Daftar
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