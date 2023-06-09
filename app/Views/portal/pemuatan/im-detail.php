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
                    <h2>Detail <small>Ijin Pemuatan</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form class="form-label-left input_mask">

                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess3" placeholder="Last Name">
                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                            <input type="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                            <input type="tel" class="form-control" id="inputSuccess5" placeholder="Phone">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">Default Input</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" placeholder="Default Input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">Disabled Input </label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">Read-Only Input</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">Date Of Birth <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <input class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                <script>
                                    function timeFunctionLong(input) {
                                        setTimeout(function() {
                                            input.type = 'text';
                                        }, 60000);
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group row">
                            <div class="col-md-9 col-sm-9  offset-md-3">
                                <button type="button" class="btn btn-primary">Simpan</button>
                                <button type="submit" class="btn btn-success">Kirim</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <div class="x_panel">
                <div class="x_title">
                    <h2>Registration Form <small>Click to validate</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <!-- start form for validation -->
                    <form id="demo-form" data-parsley-validate>
                        <label for="fullname">Full Name * :</label>
                        <input type="text" id="fullname" class="form-control" name="fullname" required />

                        <label for="email">Email * :</label>
                        <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />

                        <label>Gender *:</label>
                        <p>
                            M:
                            <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> F:
                            <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                        </p>

                        <label>Hobbies (2 minimum):</label>
                        <p style="padding: 5px;">
                            <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" required class="flat" /> Skiing
                            <br />

                            <input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Running
                            <br />

                            <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" /> Eating
                            <br />

                            <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Sleeping
                            <br />
                        <p>

                            <label for="heard">Heard us by *:</label>
                            <select id="heard" class="form-control" required>
                                <option value="">Choose..</option>
                                <option value="press">Press</option>
                                <option value="net">Internet</option>
                                <option value="mouth">Word of mouth</option>
                            </select>

                            <label for="message">Message (20 chars min, 100 max) :</label>
                            <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>

                            <br />
                            <span class="btn btn-primary">Validate form</span>

                    </form>
                    <!-- end form for validations -->

                </div>
            </div>


        </div>
    </div>
</div>