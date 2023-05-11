<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- /page content-->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row" style="display: inline-block;">
        <div class="tile_count">
            <div class="col-md-2 col-sm-5  tile_stats_count">
                <span class="count_top"><i class="fa fa-envelope"></i> Permohonan</span>
                <div>Nomor Surat</div>
                <span class="count_bottom"><i class="green"></i> Tgl. Surat</span>
            </div>
            <div class="col-md-2 col-sm-5  tile_stats_count">
                <span class="count_top"><i class="fa fa-edit"></i> LC</span>
                <div>Nomor LC</div>
                <span class="count_bottom"><i class="green"></i> Tgl. LC</span>
            </div>
            <div class="col-md-2 col-sm-5  tile_stats_count">
                <span class="count_top"><i class="fa fa-ship"></i> Kapal</span>
                <div>Nama Kapal</div>
                <span class="count_bottom"><i class="green"></i> Voy/ Bendera</span>
            </div>
            <div class="col-md-2 col-sm-5  tile_stats_count">
                <span class="count_top"><i class="fa fa-anchor"></i> Asal</span>
                <div>Pelabuhan Asal</div>
                <span class="count_bottom"><i class="green"></i> Tgl. Muat</span>
            </div>
            <div class="col-md-2 col-sm-5  tile_stats_count">
                <span class="count_top"><i class="fa fa-upload"></i> Ekspor</span>
                <div>Pelabuhan Ekspor</div>
                <span class="count_bottom"><i class="green"></i> Tgl. Ekspor</span>
            </div>
        </div>
    </div>
    <!-- /top tiles -->

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="dashboard_graph">

                <div class="row x_title">
                    <div class="col-md-6">
                        <h3>PT. ABC<small> NPWP</small></h3>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>

                <div class="col-md-9 col-sm-9 ">
                    <embed src="<?= base_url(); ?>uploads/spe.pdf" type="application/pdf" width="90%" height="400px">
                    <iframe src='https://view.officeapps.live.com/op/embed.aspx?src=<?= base_url(); ?>uploads/template_permohonan_muat.docx' width='800px' height='600px' frameborder='0'>This is an embedded <a target='_blank' href='http://office.com'>Microsoft Office</a> document, powered by <a target='_blank' href='http://office.com/webapps'>Office Online</a>.</iframe>
                    <!-- <iframe src='https://docs.google.com/viewer?url=<?= base_url(); ?>uploads/template_permohonan_muat.docx&embedded=true' frameborder='0'></iframe> -->
                </div>
                <div class="col-md-3 col-sm-3  bg-white">
                    <div class="x_title">
                        <h2>Barang</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 ">
                        <div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Jenis</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Satuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">Batubara</td>
                                        <td>1000</td>
                                        <td>MT</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Batubara</td>
                                        <td>1000</td>
                                        <td>MT</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Pelabuhan Bongkar</th>
                                        <th scope="col">Negara Tujuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">Shanghai</td>
                                        <td>China</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-sm-6  bg-white">
                    <div class="x_title">
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 ">
                        <div>
                            <p>Keputusan</p>
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="">--Keputusan--</option>
                                    <option value="">Setuju</option>
                                    <option value="">Tolak</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <p>Catatan</p>
                            <div class="form-group">
                                <div>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-info">Simpan Keputusan</button>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>

    <!-- /end page content -->
    <?= $this->endSection(); ?>