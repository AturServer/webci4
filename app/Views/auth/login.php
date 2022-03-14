<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login !</title>

    <!-- Bootstrap -->
    <link href="<?=base_url('assets')?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url('assets')?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url('assets')?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?=base_url('assets')?>/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url('assets')?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form method="post" action="<?=base_url('auth/signin')?>">
                        <?= csrf_field() ?>
                        <h3 class="text-left">Login</h3>
                        <div class="form-group">
                            <p class="text-left" style="padding:0;margin:0;">Username</p>
                            <input class="form-control" autocomplete="off" name="txtUser" value="admin@pis.pis"
                                required="">
                        </div>
                        <div class="form-group">
                            <p class="text-left" style="padding:0;margin:0;">Password</p>
                            <input class="form-control" autocomplete="off" name="txtPass" type="password" value="123"
                                required="">
                        </div>

                        <br>
                        <button class="btn btn-primary text-left" name="btnLogin">Login</button>

                    </form>
                    <?= session()->getFlashData('info') ?>
                </section>
            </div>

            <div id="register" class="animate form registration_form">
                <section class="login_content">

                </section>
            </div>
        </div>
    </div>
</body>

</html>