<!-- BEGIN MAIN MENU -->




<ul id="main-menu" class="gui-controls">
    <!-- BEGIN DASHBOARD -->
    <li>
        <a href="<?= site_url('dashboard') ?>" class="active">
            <div class="gui-icon"><i class="md md-home"></i></div>
            <span class="title">Dashboard</span>
        </a>
    </li>
    <!--end /menu-li -->
    <!-- END DASHBOARD -->

    <!-- BEGIN EMAIL -->
    <li class="gui-folder">
        <a>
            <div class="gui-icon"><i class="md md-email"></i></div>
            <span class="title">Maintenances</span>
        </a>
        <!--start submenu -->
        <ul>
            <li><a href="<?php echo site_url('dashboard/kategorimaintenance') ?>"><span class="title">Kategori Maintenance</span></a></li>

            <li><a href="http://www.codecovers.eu/materialadmin/mail/compose"><span class="title">Compose</span></a>
            </li>

            <li><a href="http://www.codecovers.eu/materialadmin/mail/reply"><span class="title">Reply</span></a></li>

            <li><a href="http://www.codecovers.eu/materialadmin/mail/message"><span class="title">View
                        message</span></a></li>

        </ul>
        <!--end /submenu -->
    </li>
    <!--end /menu-li -->
    <!-- END EMAIL -->

    <!-- BEGIN DASHBOARD -->
    <li>
        <a href="<?= site_url('dashboard/admin') ?>">
            <div class="gui-icon"><i class="md md-person"></i></div>
            <span class="title">Admin</span>
        </a>
    </li>
    <!-- News -->
    <li>
        <a href="<?= site_url('dashboard/news') ?>">
            <div class="gui-icon"><i class="md md-web"></i></div>
            <span class="title">News</span>
        </a>
    </li>
    <!-- End NEws -->
    <!--end /menu-li -->
    <!-- END DASHBOARD -->
    <!-- BEGIN CLIENT -->
    <li>
        <a href="<?= site_url('dashboard/client') ?>">
            <div class="gui-icon"><i class="md md-account-box"></i></div>
            <span class="title">Client</span>
        </a>
    </li>
    <!--end /menu-li -->
    <!-- END CLIENT -->

    <!-- BEGIN UI -->
    <li class="gui-folder">
        <a>
            <div class="gui-icon"><i class="fa fa-puzzle-piece fa-fw"></i></div>
            <span class="title">Sliders</span>
        </a>
        <!--start submenu -->
        <ul>
            <li><a href="<?= base_url('dashboard/slider') ?>"><span class="title">Slider IND</span></a></li>

            

            <!--end /menu-li -->
        </ul>
        <!--end /submenu -->
    </li>
    <!--end /menu-li -->
    <!-- END UI -->

    <!-- BEGIN TABLES -->
    <li class="gui-folder">
        <a>
            <div class="gui-icon"><i class="fa fa-table"></i></div>
            <span class="title">Tables</span>
        </a>
        <!--start submenu -->
        <ul>
            <li><a href="http://www.codecovers.eu/materialadmin/tables/static"><span class="title">Static
                        Tables</span></a></li>

            <li><a href="table_dynamic.php"><span class="title">Dynamic
                        Tables</span></a></li>

            <li><a href="http://www.codecovers.eu/materialadmin/tables/responsive"><span class="title">Responsive
                        Table</span></a></li>

        </ul>
        <!--end /submenu -->
    </li>
    <!--end /menu-li -->
    <!-- END TABLES -->

    <!-- BEGIN FORMS -->
    <li class="gui-folder">
        <a>
            <div class="gui-icon"><i class="fa fa-list"></i></div>
            <span class="title">Forms</span>
        </a>
        <!--start submenu -->
        <ul>
            <li><a href="http://www.codecovers.eu/materialadmin/forms/basic"><span class="title">Form
                        basic</span></a></li>

            <li><a href="form_advanced.php"><span class="title">Form
                        advanced</span></a></li>

            <li><a href="http://www.codecovers.eu/materialadmin/forms/layouts"><span class="title">Form
                        layouts</span></a></li>

            <li><a href="http://www.codecovers.eu/materialadmin/forms/editors"><span class="title">Editors</span></a>
            </li>

            <li><a href="form_validation.php"><span class="title">Form
                        validation</span></a></li>

            <li><a href="http://www.codecovers.eu/materialadmin/forms/wizard"><span class="title">Form
                        wizard</span></a></li>

        </ul>
        <!--end /submenu -->
    </li>
    <!--end /menu-li -->
    <!-- END FORMS -->

    <!-- BEGIN PAGES -->
    <li class="gui-folder">
        <a>
            <div class="gui-icon"><i class="md md-computer"></i></div>
            <span class="title">Pages</span>
        </a>
        <!--start submenu -->
        <ul>
            <li class="gui-folder">
                <a href="javascript:void(0);">
                    <span class="title">Contacts</span>
                </a>
                <!--start submenu -->
                <ul>
                    <li><a href="http://www.codecovers.eu/materialadmin/pages/contacts/search"><span
                                class="title">Search</span></a></li>

                    <li><a href="http://www.codecovers.eu/materialadmin/pages/contacts/details"><span
                                class="title">Contact card</span></a></li>

                    <li><a href="http://www.codecovers.eu/materialadmin/pages/contacts/add"><span class="title">Insert
                                contact</span></a></li>

                </ul>
                <!--end /submenu -->
            </li>
            <!--end /menu-li -->
            <li class="gui-folder">
                <a href="javascript:void(0);">
                    <span class="title">Search</span>
                </a>
                <!--start submenu -->
                <ul>
                    <li><a href="http://www.codecovers.eu/materialadmin/pages/search/results-text"><span
                                class="title">Results - Text</span></a></li>

                    <li><a href="http://www.codecovers.eu/materialadmin/pages/search/results-text-image"><span
                                class="title">Results - Text and Image</span></a></li>

                </ul>
                <!--end /submenu -->
            </li>
            <!--end /menu-li -->
            <li class="gui-folder">
                <a href="javascript:void(0);">
                    <span class="title">Blog</span>
                </a>
                <!--start submenu -->
                <ul>
                    <li><a href="http://www.codecovers.eu/materialadmin/pages/blog/masonry"><span class="title">Blog
                                masonry</span></a></li>

                    <li><a href="http://www.codecovers.eu/materialadmin/pages/blog/list"><span class="title">Blog
                                list</span></a></li>

                    <li><a href="http://www.codecovers.eu/materialadmin/pages/blog/post"><span class="title">Blog
                                post</span></a></li>

                </ul>
                <!--end /submenu -->
            </li>
            <!--end /menu-li -->
            <li class="gui-folder">
                <a href="javascript:void(0);">
                    <span class="title">Error pages</span>
                </a>
                <!--start submenu -->
                <ul>
                    <li><a href="http://www.codecovers.eu/materialadmin/pages/404"><span class="title">404
                                page</span></a></li>

                    <li><a href="http://www.codecovers.eu/materialadmin/pages/500"><span class="title">500
                                page</span></a></li>

                </ul>
                <!--end /submenu -->
            </li>
            <!--end /menu-li -->
            <li><a href="http://www.codecovers.eu/materialadmin/pages/profile"><span class="title">User
                        profile<span class="badge style-accent">42</span></span></a></li>

            <li><a href="http://www.codecovers.eu/materialadmin/pages/invoice"><span class="title">Invoice</span></a>
            </li>

            <li><a href="http://www.codecovers.eu/materialadmin/pages/calendar"><span class="title">Calendar</span></a>
            </li>

            <li><a href="http://www.codecovers.eu/materialadmin/pages/pricing"><span class="title">Pricing</span></a>
            </li>

            <li><a href="http://www.codecovers.eu/materialadmin/pages/timeline"><span class="title">Timeline</span></a>
            </li>

            <li><a href="http://www.codecovers.eu/materialadmin/pages/maps"><span class="title">Maps</span></a></li>

            <li><a href="http://www.codecovers.eu/materialadmin/pages/locked"><span class="title">Lock
                        screen</span></a></li>

            <li><a href="login.php"><span class="title">Login</span></a></li>

            <li><a href="http://www.codecovers.eu/materialadmin/pages/blank"><span class="title">Blank
                        page</span></a></li>

        </ul>
        <!--end /submenu -->
    </li>
    <!--end /menu-li -->
    <!-- END FORMS -->

    <!-- BEGIN CHARTS -->
    <li>
        <a href="http://www.codecovers.eu/materialadmin/charts/charts">
            <div class="gui-icon"><i class="md md-assessment"></i></div>
            <span class="title">Charts</span>
        </a>
    </li>
    <!--end /menu-li -->
    <!-- END CHARTS -->

    <!-- BEGIN LEVELS -->
    <li class="gui-folder">
        <a>
            <div class="gui-icon"><i class="fa fa-folder-open fa-fw"></i></div>
            <span class="title">Menu levels demo</span>
        </a>
        <!--start submenu -->
        <ul>
            <li><a href="#"><span class="title">Item 1</span></a></li>
            <li><a href="#"><span class="title">Item 1</span></a></li>
            <li class="gui-folder">
                <a href="javascript:void(0);">
                    <span class="title">Open level 2</span>
                </a>
                <!--start submenu -->
                <ul>
                    <li><a href="#"><span class="title">Item 2</span></a></li>
                    <li class="gui-folder">
                        <a href="javascript:void(0);">
                            <span class="title">Open level 3</span>
                        </a>
                        <!--start submenu -->
                        <ul>
                            <li><a href="#"><span class="title">Item 3</span></a></li>
                            <li><a href="#"><span class="title">Item 3</span></a></li>
                            <li class="gui-folder">
                                <a href="javascript:void(0);">
                                    <span class="title">Open level 4</span>
                                </a>
                                <!--start submenu -->
                                <ul>
                                    <li><a href="#"><span class="title">Item 4</span></a></li>
                                    <li class="gui-folder">
                                        <a href="javascript:void(0);">
                                            <span class="title">Open level 5</span>
                                        </a>
                                        <!--start submenu -->
                                        <ul>
                                            <li><a href="#"><span class="title">Item 5</span></a></li>
                                            <li><a href="#"><span class="title">Item 5</span></a></li>
                                        </ul>
                                        <!--end /submenu -->
                                    </li>
                                    <!--end /submenu-li -->
                                </ul>
                                <!--end /submenu -->
                            </li>
                            <!--end /submenu-li -->
                        </ul>
                        <!--end /submenu -->
                    </li>
                    <!--end /submenu-li -->
                </ul>
                <!--end /submenu -->
            </li>
            <!--end /submenu-li -->
        </ul>
        <!--end /submenu -->
    </li>
    <!--end /menu-li -->
    <!-- END LEVELS -->

</ul>
<!--end .main-menu -->
<!-- END MAIN MENU -->