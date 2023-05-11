<?= $this->extend('auth/template/index'); ?>

<?= $this->section('content'); ?>

<section class="login_content">
    <h1><?= lang('Auth.resetYourPassword') ?></h1>
    <?= view('Myth\Auth\Views\_message_block') ?>
    <p><?= lang('Auth.enterCodeEmailPassword') ?></p>
    <form action="<?= url_to('reset-password') ?>" method="post">
        <?= csrf_field() ?>

        <div>
            <input type="text" class="form-control <?php if (session('errors.token')) : ?>is-invalid<?php endif ?>" name="token" placeholder="<?= lang('Auth.token') ?>" value="<?= old('token', $token ?? '') ?>">
            <div class="invalid-feedback">
                <?= session('errors.token') ?>
            </div>
        </div>
        <div>
            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
            <div class="invalid-feedback">
                <?= session('errors.email') ?>
            </div>
        </div>
        <div>
            <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>">
            <div class="invalid-feedback">
                <?= session('errors.password') ?>
            </div>
        </div>
        <div>
            <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>">
            <div class="invalid-feedback">
                <?= session('errors.pass_confirm') ?>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.resetPassword') ?></button>
        </div>

        <div class="clearfix"></div>

    </form>
</section>

<?= $this->endSection(); ?>