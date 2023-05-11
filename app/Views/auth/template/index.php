<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | </title>

    <!-- Bootstrap -->
    <link href="<?= base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url(); ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url(); ?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= base_url(); ?>vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url(); ?>build/css/custom.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url("<?= base_url(); ?>images/inbox.png");
            background-color: #cccccc;
        }
    </style>
</head>

<body class="login">
    <div>
        <div class="login_wrapper">
            <div class="animate form login_form">

                <?= $this->renderSection('content'); ?>

            </div>
        </div>
    </div>
</body>

</html>