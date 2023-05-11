<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- /page content-->
<div class="right_col" role="main">
    <div class="">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><?= $title; ?><small>Menu</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <?php //d($user); 
                    ?>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?= base_url('images/') . user()->img_profil ?>" alt="<?= user()->username; ?>">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <h4>Username : <?= user()->username; ?></h4>
                                        </li>
                                        <?php if (user()->fullname) : ?>
                                            <li class="list-group-item"><?= user()->fullname; ?></li>
                                        <?php endif; ?>
                                        <li class="list-group-item"><?= user()->email; ?></li>
                                        <li class="list-group-item"><a href="<?= base_url('home') ?>">&laquo; Back to List</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /end page content -->
<?= $this->endSection(); ?>