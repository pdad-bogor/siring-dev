<?= $this->extend('auth/template/index'); ?>

<?= $this->section('content'); ?>

<section class="login_content">

    <?= view('Myth\Auth\Views\_message_block') ?>
    <h2><?= lang('Auth.forgotPassword') ?></h2>
    <p><?= lang('Auth.enterEmailForInstructions') ?></p>
    <form action="<?= url_to('forgot') ?>" method="post">
        <?= csrf_field() ?>

        <div>
            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>">
        </div>
        <div class="invalid-feedback">
            <?= session('errors.email') ?>
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.sendInstructions') ?></button>
        </div>

        <div class="clearfix"></div>

    </form>
</section>

<?= $this->endSection(); ?>