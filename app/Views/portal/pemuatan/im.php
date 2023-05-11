<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<!-- /page -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a href="<?= base_url('portal/addMuat'); ?>" class="btn btn-info btn-sm"><i class="fa fa-edit a"> Pengajuan Baru</i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>PENGAJUAN IJIN <small>Pemuatan Di Luar Kawasan Pabean</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No. Surat</th>
                                            <th>Tgl. Surat</th>
                                            <th>Nama Eksportir</th>
                                            <th>Nama Kapal</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>


                                    <tbody class="a">
                                        <tr>
                                            <td>124/SHKE-EXIM/KTBR-1/IV/2023</td>
                                            <td>2023-04-10</td>
                                            <td>PT. BARAMEGA CITRA MULIA PERSADA</td>
                                            <td>MV. MARIT TRADER</td>
                                            <td>SUBMIT</td>
                                            <td><a href="#" class="fa fa-search btn-sm" title="Detail"></a>
                                                <a href="#" class="fa fa-pencil tn-sm" title="Edit"></a>
                                                <a href="#" class="fa fa-paper-plane-o btn-sm" title="Kirim"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>123/SHKE-EXIM/KTBR-1/IV/2023</td>
                                            <td>2023-04-10</td>
                                            <td>PT. BARAMEGA CITRA MULIA PERSADA</td>
                                            <td>MV. TAI HANG 8</td>
                                            <td>SUBMIT</td>
                                            <td><a href="#" class="fa fa-search btn-sm" title="Detail"></a>
                                                <a href="#" class="fa fa-pencil tn-sm" title="Edit"></a>
                                                <a href="#" class="fa fa-paper-plane-o btn-sm" title="Kirim"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1875/BIB-JKT/PE/2023</td>
                                            <td>2023-04-07</td>
                                            <td>PT. BORNEO INDOBARA</td>
                                            <td>MV. AGIOS IOANNIS</td>
                                            <td>SELESAI</td>
                                            <td><a href="#" class="fa fa-search btn-sm" title="Detail"></a>
                                                <a href="#" class="fa fa-pencil tn-sm" title="Edit"></a>
                                                <a href="#" class="fa fa-check btn-sm" title="PEB"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>124/SHKE-EXIM/KTBR-1/IV/2023</td>
                                            <td>2023-04-10</td>
                                            <td>PT. BARAMEGA CITRA MULIA PERSADA</td>
                                            <td>MV. MARIT TRADER</td>
                                            <td>SUBMIT</td>
                                            <td><a href="#" class="fa fa-search btn-sm" title="Detail"></a>
                                                <a href="#" class="fa fa-pencil tn-sm" title="Edit"></a>
                                                <a href="#" class="fa fa-paper-plane-o btn-sm" title="Kirim"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>123/SHKE-EXIM/KTBR-1/IV/2023</td>
                                            <td>2023-04-10</td>
                                            <td>PT. BARAMEGA CITRA MULIA PERSADA</td>
                                            <td>MV. TAI HANG 8</td>
                                            <td>SUBMIT</td>
                                            <td><a href="#" class="fa fa-search btn-sm" title="Detail"></a>
                                                <a href="#" class="fa fa-pencil tn-sm" title="Edit"></a>
                                                <a href="#" class="fa fa-paper-plane-o btn-sm" title="Kirim"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1875/BIB-JKT/PE/2023</td>
                                            <td>2023-04-07</td>
                                            <td>PT. BORNEO INDOBARA</td>
                                            <td>MV. AGIOS IOANNIS</td>
                                            <td>SELESAI</td>
                                            <td><a href="#" class="fa fa-search btn-sm" title="Detail"></a>
                                                <a href="#" class="fa fa-pencil tn-sm" title="Edit"></a>
                                                <a href="#" class="fa fa-check btn-sm" title="PEB"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>124/SHKE-EXIM/KTBR-1/IV/2023</td>
                                            <td>2023-04-10</td>
                                            <td>PT. BARAMEGA CITRA MULIA PERSADA</td>
                                            <td>MV. MARIT TRADER</td>
                                            <td>SUBMIT</td>
                                            <td><a href="#" class="fa fa-search btn-sm" title="Detail"></a>
                                                <a href="#" class="fa fa-pencil tn-sm" title="Edit"></a>
                                                <a href="#" class="fa fa-paper-plane-o btn-sm" title="Kirim"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>123/SHKE-EXIM/KTBR-1/IV/2023</td>
                                            <td>2023-04-10</td>
                                            <td>PT. BARAMEGA CITRA MULIA PERSADA</td>
                                            <td>MV. TAI HANG 8</td>
                                            <td>SUBMIT</td>
                                            <td><a href="#" class="fa fa-search btn-sm" title="Detail"></a>
                                                <a href="#" class="fa fa-pencil tn-sm" title="Edit"></a>
                                                <a href="#" class="fa fa-paper-plane-o btn-sm" title="Kirim"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1875/BIB-JKT/PE/2023</td>
                                            <td>2023-04-07</td>
                                            <td>PT. BORNEO INDOBARA</td>
                                            <td>MV. AGIOS IOANNIS</td>
                                            <td>SELESAI</td>
                                            <td><a href="#" class="fa fa-search btn-sm" title="Detail"></a>
                                                <a href="#" class="fa fa-pencil tn-sm" title="Edit"></a>
                                                <a href="#" class="fa fa-check btn-sm" title="PEB"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>124/SHKE-EXIM/KTBR-1/IV/2023</td>
                                            <td>2023-04-10</td>
                                            <td>PT. BARAMEGA CITRA MULIA PERSADA</td>
                                            <td>MV. MARIT TRADER</td>
                                            <td>SUBMIT</td>
                                            <td><a href="#" class="fa fa-search btn-sm" title="Detail"></a>
                                                <a href="#" class="fa fa-pencil tn-sm" title="Edit"></a>
                                                <a href="#" class="fa fa-paper-plane-o btn-sm" title="Kirim"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>123/SHKE-EXIM/KTBR-1/IV/2023</td>
                                            <td>2023-04-10</td>
                                            <td>PT. BARAMEGA CITRA MULIA PERSADA</td>
                                            <td>MV. TAI HANG 8</td>
                                            <td>SUBMIT</td>
                                            <td><a href="#" class="fa fa-search btn-sm" title="Detail"></a>
                                                <a href="#" class="fa fa-pencil tn-sm" title="Edit"></a>
                                                <a href="#" class="fa fa-paper-plane-o btn-sm" title="Kirim"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1875/BIB-JKT/PE/2023</td>
                                            <td>2023-04-07</td>
                                            <td>PT. BORNEO INDOBARA</td>
                                            <td>MV. AGIOS IOANNIS</td>
                                            <td>SELESAI</td>
                                            <td><a href="#" class="fa fa-search btn-sm" title="Detail"></a>
                                                <a href="#" class="fa fa-pencil tn-sm" title="Edit"></a>
                                                <a href="#" class="fa fa-check btn-sm" title="PEB"></a>
                                            </td>
                                        </tr>
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
<!-- /end page -->
<?= $this->endSection(); ?>