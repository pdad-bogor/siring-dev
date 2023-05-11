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
                    <?php //d($users); 
                    ?>
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Registered</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>


                                            <tbody class="a">
                                                <?php $i = 1; ?>
                                                <?php foreach ($users as $user) : ?>
                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $user->username; ?></td>
                                                        <td><?= $user->email; ?></td>
                                                        <td><?= $user->name; ?></td>
                                                        <td><?= $user->updated_at; ?></td>
                                                        <td><a href="<?= base_url('admin/') . $user->userid; ?>" class="fa fa-search btn-sm" title="Detail"></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
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