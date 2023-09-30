<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php
    $session = session();
    $error = $session->getFlashdata('error');
    $password = $session->getFlashdata('password');
    ?>

    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md col-lg d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

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

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Daftar</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Belum punya akun?
                                        <div class="form-outline mb-4">
                                            <input name="username" type="text" id="form2Example17" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Username</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input name="password" type="password" id="form2Example27" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input name="confirm" type="password" id="form2Example27" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Konfirmasi Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit" name="login">Daftar</button>
                                        </div>

                                        <a class="small text-muted" href="#!">Lupa password?</a>
                                        <p class="mb-5 pb-lg-2">Sudah punya akun? <a href="/auth/login" style="color: #393f81;">Masuk</a></p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>