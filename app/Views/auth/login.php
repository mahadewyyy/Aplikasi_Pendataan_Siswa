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
    $login = $session->getFlashdata('login');
    $username = $session->getFlashdata('username');
    $password = $session->getFlashdata('password');
    ?>

    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <!-- <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div> -->
                            <div class="col-md col-lg d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="post" action="/auth/valid_login">

                                        <?php if ($password) { ?>
                                            <p style="color:red"><?php echo $password ?></p>
                                        <?php } ?>

                                        <?php if ($login) { ?>
                                            <p style="color:green"><?php echo $login ?></p>
                                        <?php } ?>

                                        <?php if ($username) { ?>
                                            <p style="color:red"><?php echo $username ?></p>
                                        <?php } ?>

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <span class="h1 fw-bold mb-0">LOGIN</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Masuk ke akun Anda</h5>

                                        <div class="form-outline mb-4">
                                            <input name="username" type="text" id="form2Example17" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Username</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input name="password" type="password" id="form2Example27" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit" name="login" >Login</button>
                                        </div>

                                        <a class="small text-muted" href="#!">Lupa password?</a>
                                        <p class="mb-5 pb-lg-2">Belum punya akun? <a href="/auth/register" style="color: #393f81;">Daftar</a></p>
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