<?= $this->extend('auth/template/index'); ?>

<?= $this->section('content'); ?>

<section class="login_content">

    <?= view('Myth\Auth\Views\_message_block') ?>
    <form action="<?= url_to('register') ?>" method="post">
        <?= csrf_field() ?>
        <h1><?= lang('Auth.register') ?></h1>
        <div>
            <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" />
        </div>
        <div>
            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" />
        </div>
        <div>
            <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off" />
        </div>
        <div>
            <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off" />
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>
        </div>

        <div class="clearfix"></div>

        <div class="separator">
            <p class="change_link"><?= lang('Auth.alreadyRegistered') ?>
                <a href="<?= url_to('login') ?>" class="to_register"> <?= lang('Auth.signIn') ?> </a>
            </p>

            <div class="clearfix"></div>

        </div>
    </form>
</section>

<?= $this->endSection(); ?>