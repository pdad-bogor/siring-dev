<!-- /navbar -->
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><span><img src="<?= base_url(); ?>images/siring.png" alt="..."></span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->

        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>MENU</h3>
                <ul class="nav side-menu">
                    <li><a href="<?= base_url(); ?>"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <?php if (in_groups('admin')) : ?>
                        <li><a><i class="fa fa-gear"></i> Pengaturan <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?= base_url('admin'); ?>">Pengguna</a></li>
                                <li><a href="index2.html">Hak Akses</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if (in_groups('eksportir', 'ppjk')) : ?>
                        <li><a><i class="fa fa-upload"></i> Ijin Muat <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?= base_url(); ?>portal/im">Rekam Ijin Muat</a></li>
                                <li><a href="index2.html">Browse</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if (in_groups('agen')) : ?>
                        <li><a><i class="fa fa-download"></i> Ijin Bongkar <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="form.html">Rekam Ijin Bongkar</a></li>
                                <li><a href="form_advanced.html">Browse</a></li>
                            </ul>
                        </li>
                        <li><a href="form_advanced.html"><i class="fa fa-pencil"></i>Redrass Manifes</a></li>
                    <?php endif; ?>
                    <?php if (in_groups('importir', 'ppjk') and (user()->approved == 1)) : ?>
                        <li><a><i class="fa fa-cubes"></i> Ijin Timbun <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="general_elements.html">Rekam Ijin Timbun</a></li>
                                <li><a href="media_gallery.html">Browse</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if (in_groups('pegawai')) : ?>
                        <li><a><i class="fa fa-check-square-o"></i> Keputusan <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="tables.html">Ijin Muat <span class="badge bg-red">10</span></a></li>
                                <li><a href="tables_dynamic.html">Ijin Bongkar</a></li>
                                <li><a href="tables_dynamic.html">Ijin Timbun</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('logout'); ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <img src="<?= base_url(); ?>images/<?= user()->img_profil; ?>" alt=""><?= user()->username; ?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('portal/profil'); ?>"> Profile</a>
                        <a class="dropdown-item" href="<?= base_url('logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /end navbar -->