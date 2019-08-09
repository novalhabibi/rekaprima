 <!-- BEGIN HEADER-->
 <header id="header" class="header-inverse">



     <div class="headerbar">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="headerbar-left">
             <ul class="header-nav header-nav-options">
                 <li class="header-nav-brand">
                     <div class="brand-holder">
                         <a href="<?= site_url('dashboard') ?>">
                             <span class="text-lg text-bold text-info">PT. Len Rekaprima Semesta</span>
                         </a>
                     </div>
                 </li>
                 <li>
                     <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                         <i class="fa fa-bars"></i>
                     </a>
                 </li>
             </ul>
         </div>

         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="headerbar-right">
             <ul class="header-nav header-nav-options">
                 <li>
                     <!-- Search form -->
                     <form class="navbar-search" role="search">
                         <div class="form-group">
                             <input type="text" class="form-control" name="headerSearch"
                                 placeholder="Enter your keyword">
                         </div>
                         <button type="submit" class="btn btn-icon-toggle ink-reaction"><i
                                 class="fa fa-search"></i></button>
                     </form>
                 </li>
                 <li class="dropdown hidden-xs">
                     <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
                         <i class="fa fa-bell"></i><sup class="badge style-danger">4</sup>
                     </a>
                     <ul class="dropdown-menu animation-expand">
                         <li class="dropdown-header">Today's messages</li>
                         <li>
                             <a class="alert alert-callout alert-warning" href="javascript:void(0);">
                                 <img class="pull-right img-circle dropdown-avatar"
                                     src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar2.jpg?1422538624"
                                     alt="" />
                                 <strong>Alex Anistor</strong><br />
                                 <small>Testing functionality...</small>
                             </a>
                         </li>
                         <li>
                             <a class="alert alert-callout alert-info" href="javascript:void(0);">
                                 <img class="pull-right img-circle dropdown-avatar"
                                     src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar3.jpg?1422538624"
                                     alt="" />
                                 <strong>Alicia Adell</strong><br />
                                 <small>Reviewing last changes...</small>
                             </a>
                         </li>
                         <li class="dropdown-header">Options</li>
                         <li><a href="http://www.codecovers.eu/materialadmin/pages/login">View all messages <span
                                     class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
                         <li><a href="http://www.codecovers.eu/materialadmin/pages/login">Mark as read <span
                                     class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
                     </ul>
                     <!--end .dropdown-menu -->
                 </li>
                 <!--end .dropdown -->
                 <li class="dropdown hidden-xs">
                     <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
                         <i class="fa fa-area-chart"></i>
                     </a>
                     <ul class="dropdown-menu animation-expand">
                         <li class="dropdown-header">Server load</li>
                         <li class="dropdown-progress">
                             <a href="javascript:void(0);">
                                 <div class="dropdown-label">
                                     <span class="text-light">Server load <strong>Today</strong></span>
                                     <strong class="pull-right">93%</strong>
                                 </div>
                                 <div class="progress">
                                     <div class="progress-bar progress-bar-danger" style="width: 93%"></div>
                                 </div>
                             </a>
                         </li>
                         <!--end .dropdown-progress -->
                         <li class="dropdown-progress">
                             <a href="javascript:void(0);">
                                 <div class="dropdown-label">
                                     <span class="text-light">Server load <strong>Yesterday</strong></span>
                                     <strong class="pull-right">30%</strong>
                                 </div>
                                 <div class="progress">
                                     <div class="progress-bar progress-bar-success" style="width: 30%"></div>
                                 </div>
                             </a>
                         </li>
                         <!--end .dropdown-progress -->
                         <li class="dropdown-progress">
                             <a href="javascript:void(0);">
                                 <div class="dropdown-label">
                                     <span class="text-light">Server load <strong>Lastweek</strong></span>
                                     <strong class="pull-right">74%</strong>
                                 </div>
                                 <div class="progress">
                                     <div class="progress-bar progress-bar-warning" style="width: 74%"></div>
                                 </div>
                             </a>
                         </li>
                         <!--end .dropdown-progress -->
                     </ul>
                     <!--end .dropdown-menu -->
                 </li>
                 <!--end .dropdown -->
             </ul>
             <!--end .header-nav-options -->
             <ul class="header-nav header-nav-profile">
                 <li class="dropdown">
                     <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                         <img src="<?= base_url() ?><?= $this->session->foto_admin ; ?>"
                             alt="" />
                         <span class="profile-info">
                            <?= $this->session->nama_admin ; ?>
                             <small> <?= $this->session->level_admin == 1 ?'Super Admin':'Admin' ?></small>
                         </span>
                     </a>
                     <ul class="dropdown-menu animation-dock">
                         <li class="dropdown-header">Config</li>
                         <li><a href="http://www.codecovers.eu/materialadmin/pages/profile">My profile</a></li>
                         
                         <li><a href="http://www.codecovers.eu/materialadmin/pages/locked"><i
                                     class="fa fa-fw fa-lock"></i> Lock</a></li>
                         <li><a href="#" data-toggle="modal" data-target="#logout"><i
                                     class="fa fa-fw fa-power-off text-danger"></i> Logout</a>
                                    
                                    
                        </li>
                     </ul>
                     <!--end .dropdown-menu -->
                 </li>
                 <!--end .dropdown -->
             </ul>
             <!--end .header-nav-profile -->
             
             <!--end .header-nav-toggle -->
         </div>
         <!--end #header-navbar-collapse -->
     </div>
 </header>
 <!-- END HEADER-->