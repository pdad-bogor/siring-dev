<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- /page content-->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?= $title; ?> <small></small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-3 col-sm-3  profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view" src="<?= base_url('images/') . user()->img_profil ?>" alt="Avatar" title="Change the avatar">
                                </div>
                            </div>
                            <h3><?= user()->username; ?></h3>

                            <ul class="list-unstyled user_data">
                                <?php if (user()->fullname) : ?>
                                    <li><i class="fa fa-map-marker user-profile-icon"></i><?= user()->fullname; ?>
                                    <?php endif; ?>
                                    </li>

                                    <li>
                                        <i class="fa fa-briefcase user-profile-icon"></i> <?= user()->email; ?>
                                    </li>

                                    <li class="m-top-xs">
                                        <a href="<?= base_url('user') ?>">&laquo; Back to List</a>
                                    </li>
                            </ul>

                            <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                            <br />

                        </div>
                        <div class="col-md-9 col-sm-9 ">
                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Data Perusahaan</a>
                                    </li>
                                    <?php if (user()->level == "ppjk") : ?>
                                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Pemberi Kuasa</a>
                                        </li>
                                    <?php endif; ?>
                                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Pelabuhan Muat</a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">

                                        <!-- start data perusahaan -->
                                        <form class="form-label-left input_mask">
                                            <!-- Jika sudah terisi data di disable-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-3 ">Nama Perusahaan</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="text" name="nm_perusahaan" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-3 ">NPWP</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="text" name="npwp" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-3 ">Alamat</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <textarea type="text" name="alamat" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-3 ">No. Induk Kepabeanan</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="text" name="nik" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-3 ">Penanggung Jawab</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="text" name="penanggung" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-3 ">Kota TTD.</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="text" name="kota" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-3 ">File Kops Atas</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="file" class="custom-file-input" id="f_kopsatas" name="f_kopsatas">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-3 ">File Kops Bawah</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="file" class="custom-file-input" id="f_kopsbawah" name="f_kopsbawah">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-3 ">File Tanda Tangan</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="file" class="custom-file-input" id="f_ttd" name="f_ttd">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-3 ">Dokumen Perijinan</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="file" class="custom-file-input" id="f_dokap" name="f_dokap">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>

                                            <div class="ln_solid"></div>
                                            <div class="form-group row">
                                                <div class="col-md-9 col-sm-9  offset-md-12">
                                                    <a href="<?= base_url('portal/im'); ?>" type="button" class="btn btn-primary">Simpan</a>
                                                </div>
                                            </div>

                                            <!-- end data perusahaan -->
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                        <!-- start pemberi kuasa -->

                                        <div class="form-group row">
                                            <div class="col-md-9 col-sm-9  offset-md-12">
                                                <a href="<?= base_url('portal'); ?>" type="button" class="btn btn-primary btn-sm">Tambah</a>
                                            </div>
                                        </div>
                                        <table class="data table table-striped no-margin">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama Perusahaan</th>
                                                    <th>NPWP</th>
                                                    <th>Alamat</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>PT. Bamega Exportama</td>
                                                    <td>021999210292000</td>
                                                    <td>Jl. Pangeran Diponogoro 5 Kotabaru</td>
                                                    <td><a href="#" class="fa fa-search btn-sm" title="Lihat"></a>
                                                        <a href="#" class="fa fa-pencil tn-sm" title="Edit"></a>
                                                        <a href="#" class="fa fa-close tn-sm" title="Hapus"></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>PT. Saijaan Importer</td>
                                                    <td>021999210292000</td>
                                                    <td>Jl. Pelabuhan Batulicin 9 Tanah Bumbu</td>
                                                    <td><a href="#" class="fa fa-search btn-sm" title="Lihat"></a>
                                                        <a href="#" class="fa fa-pencil tn-sm" title="Edit"></a>
                                                        <a href="#" class="fa fa-close tn-sm" title="Hapus"></a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <!-- end pemberi  kuasa -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                        <div class="form-group row">
                                            <div class="col-md-9 col-sm-9  offset-md-12">
                                                <a href="<?= base_url('portal'); ?>" type="button" class="btn btn-primary btn-sm">Tambah</a>
                                            </div>
                                            <!-- start pemberi kuasa -->
                                            <table class="data table table-striped no-margin">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nama Pelabuhan</th>
                                                        <th>Alamat</th>
                                                        <th>Denah</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>BUNATI ANCHORAGE, SATUI, SOUTH KALIMANTAN, INDONESIA</td>
                                                        <td>Kalimantan Selatan</td>
                                                        <td>Bunati.PDF</td>
                                                        <td><a href="#" class="fa fa-search btn-sm" title="Lihat"></a>
                                                            <a href="#" class="fa fa-pencil tn-sm" title="Edit"></a>
                                                            <a href="#" class="fa fa-close tn-sm" title="Hapus"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>INDONESIA BULK TERMINAL</td>
                                                        <td>Kalimantan Selatan</td>
                                                        <td>Bulk Term.PDF</td>
                                                        <td><a href="#" class="fa fa-search btn-sm" title="Lihat"></a>
                                                            <a href="#" class="fa fa-pencil tn-sm" title="Edit"></a>
                                                            <a href="#" class="fa fa-close tn-sm" title="Hapus"></a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                            <!-- end pemberi  kuasa -->
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