<?= $this->extend('auth/template/index'); ?>

<?= $this->section('content'); ?>

<section class="login_content">
    <form action="<?= url_to('login') ?>" method="post">
        <?= csrf_field() ?>
        <h1><?= lang('Auth.loginTitle') ?></h1>
        <?= view('Myth\Auth\Views\_message_block') ?>

        <?php if ($config->validFields === ['email']) : ?>
            <div>
                <input type="text" name="login" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.email') ?>" />
                <div class="invalid-feedback">
                    <?= session('errors.login') ?>
                </div>
            </div>
        <?php else : ?>
            <div>
                <input type="text" name="login" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.emailOrUsername') ?>" />
                <div class="invalid-feedback">
                    <?= session('errors.login') ?>
                </div>
            </div>
        <?php endif; ?>
        <div>
            <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" />
            <div class="invalid-feedback">
                <?= session('errors.password') ?>
            </div>
        </div>
        <?php if ($config->allowRemembering) : ?>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                    <?= lang('Auth.rememberMe') ?>
                </label>
            </div>
        <?php endif; ?>
        <div>
            <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?></button>
            <?php if ($config->activeResetter) : ?>
                <p><a href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
            <?php endif; ?>
        </div>

        <div class="clearfix"></div>
        <?php if ($config->allowRegistration) : ?>
            <div class="separator">
                <p class="change_link">
                    <a href="<?= url_to('register') ?>" class="to_register"> <?= lang('Auth.needAnAccount') ?> </a>
                </p>
            <?php endif; ?>

            <div class="clearfix"></div>
            <br />

            <div>
                <h1><i class="fa fa-cubes"></i> SIRING&trade; v.2</h1>
                <p>&copy; KPPBC TMP C Kotabaru - <?= date('Y'); ?></p>
            </div>

            </div>

    </form>
</section>

<?= $this->endSection(); ?>