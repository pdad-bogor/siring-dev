<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3></h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Rekam Permohonan<small></small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="x_title">
                        <small>DATA HEADER</small>
                        <div class="clearfix"></div>
                    </div>
                    <br />
                    <form class="form-label-left input_mask">
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">NPWP</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" name="npwp" class="form-control" disabled="disabled" placeholder="NPWP">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">Nama Eksportir</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" name="nama_perusahaan" class="form-control" disabled="disabled" placeholder="Nama Perusahaan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 "></label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" name="alamat" class="form-control" disabled="disabled" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 mt-4 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="no_surat" name="no_surat" placeholder="Nomor Surat">
                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 mt-4">Tgl. Surat <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 mt-4">
                                <input class="date-picker form-control" name="tgl_surat" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                <script>
                                    function timeFunctionLong(input) {
                                        setTimeout(function() {
                                            input.type = 'text';
                                        }, 60000);
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="no_lc" name="no_lc" placeholder="Nomor L/C">
                            <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">Tgl. L/C<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" id="tgl_lc" name="tgl_lc" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                <script>
                                    function timeFunctionLong(input) {
                                        setTimeout(function() {
                                            input.type = 'text';
                                        }, 60000);
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                            <input type="email" class="form-control has-feedback-left" id="nama_kapal" name="nama_kapal" placeholder="Nama Kapal">
                            <span class="fa fa-anchor form-control-feedback left" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                            <input type="tel" class="form-control" id="voyage" name="voyage" placeholder="Voyage">
                            <span class="fa fa-flag-o form-control-feedback right" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="pel_asal" name="pel_asal" placeholder="Pelabuhan Asal">
                            <span class="fa fa-sign-out form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">Rencana Muat<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" id="tgl_muat" name="tgl_muat" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                <script>
                                    function timeFunctionLong(input) {
                                        setTimeout(function() {
                                            input.type = 'text';
                                        }, 60000);
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                            <select type="text" class="form-control has-feedback-left" id="pel_ekspor" name="pel_ekspor" placeholder="Pelabuhan Ekspor">
                                <option value="">Pilih Pelabuhan Ekspor..</option>
                                <option value="press">Press</option>
                                <option value="net">Internet</option>
                                <option value="mouth">Word of mouth</option>
                            </select>
                            <span class="fa fa-sign-in form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">Perkiraan Ekspor<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" id="tgl_ekspor" name="tgl_ekspor" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                <script>
                                    function timeFunctionLong(input) {
                                        setTimeout(function() {
                                            input.type = 'text';
                                        }, 60000);
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="x_title">
                            <small>DATA DETAIL</small>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row control-group after-add-more1">
                            <div class="col-md-8 col-sm-8  form-group has-feedback">
                                <input type="email" class="form-control has-feedback-left" id="pel_bongkar" name="pel_bongkar[]" placeholder="Pelabuhan Bongkar">
                                <span class="fa fa-anchor form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-4 col-sm-4  form-group has-feedback">
                                <input type="tel" class="form-control" id="negara_tujuan" name="negara_tujuan[]" placeholder="Negara Tujuan">
                                <span class="fa fa-plus btn-success add-more1 form-control-feedback right" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="copy1 invisible">
                            <div class="row control-group">
                                <div class="col-md-8 col-sm-8  form-group has-feedback">
                                    <input type="email" class="form-control has-feedback-left" id="pel_bongkar" name="pel_bongkar[]" placeholder="Pelabuhan Bongkar">
                                    <span class="fa fa-anchor form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <input type="tel" class="form-control" id="negara_tujuan" name="negara_tujuan[]" placeholder="Negara Tujuan">
                                    <span class="fa fa-minus btn-danger remove form-control-feedback right" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row control-group after-add-more2">
                            <div class="col-md-8 col-sm-8  form-group has-feedback">
                                <input type="email" class="form-control has-feedback-left" id="barang" name="barang[]" placeholder="Uraian Barang">
                                <span class="fa fa-shopping-cart form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-2 col-sm-2  form-group has-feedback">
                                <input type="tel" class="form-control" id="jumlah" name="jumlah[]" placeholder="Jumlah">
                                <span class="fa fa-database form-control-feedback right" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-2 col-sm-2  form-group has-feedback">
                                <input type="tel" class="form-control" id="satuan" name="satuan[]" placeholder="Satuan">
                                <span class="fa fa-plus btn-success add-more2 form-control-feedback right" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="copy2 invisible">
                            <div class="row control-group">
                                <div class="col-md-8 col-sm-8  form-group has-feedback">
                                    <input type="email" class="form-control has-feedback-left" id="barang" name="barang[]" placeholder="Uraian Barang">
                                    <span class="fa fa-cube form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-2 col-sm-2  form-group has-feedback">
                                    <input type="tel" class="form-control" id="jumlah" name="jumlah[]" placeholder="Jumlah">
                                    <span class="fa fa-dollar form-control-feedback right" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-2 col-sm-2  form-group has-feedback">
                                    <input type="tel" class="form-control" id="satuan" name="satuan[]" placeholder="Satuan">
                                    <span class="fa fa-minus btn-danger remove2 form-control-feedback right" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">Surat Permohonan</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="file" class="custom-file-input" id="f_surat" name="f_surat">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">Dokumen Pelengkap</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="file" class="custom-file-input" id="f_dokap" name="f_dokap">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group row">
                            <div class="col-md-9 col-sm-9  offset-md-12">
                                <button type="button" class="btn btn-primary">Simpan Draft</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    </form>
</div>
</div>
</div>
</div>
</div>