<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/favicon.png">
    <title>test samples</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo base_url(); ?>assets/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/assets/plugins/css-chart/css-chart.css" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="<?php echo base_url(); ?>assets/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Calendar CSS -->
    <link href="<?php echo base_url(); ?>assets/assets/plugins/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url(); ?>assets/css/colors/default-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url(); ?>assets/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url(); ?>assets/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         <!-- dark Logo text -->
                         <img src="<?php echo base_url(); ?>assets/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="<?php echo base_url(); ?>assets/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-sm-down search-box">
                            <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>assets/images/users/user.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?php echo base_url(); ?>assets/images/users/user.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4>Bih Mirabel</h4>
                                            </div>  
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-cm"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
           
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile" style="background: url(<?php echo base_url(); ?>assets/images/background/) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="<?php echo base_url(); ?>assets/images/users/user.jpg" alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#">Station 1</a>
                        <div class="dropdown-menu animated flipInY"> <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a> <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a> <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a> </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">PERSONAL</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fas fa-home"></i><span class="hide-menu">Home </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index4.html">Review</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fas fa-ambulance"></i><span class="hide-menu">Outpatient </span></a>
                            <ul aria-expanded="false" class="collapse">
                            <li><a href="form-layout.html">Station 1</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="ti-themify-favicon-alt"></i><span class="hide-menu">Chat app </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>minisidebar/app-chat.html">Doctor 1</a></li>
                                <li><a href="<?php echo base_url(); ?>minisidebar/app-chat.html">Doctor 2</a></li>
                                <li><a href="<?php echo base_url(); ?>minisidebar/app-chat.html">Doctor 3</a></li>
                                <li><a href="<?php echo base_url(); ?>minisidebar/app-chat.html">Doctor 4</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-4 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Hello Welcome Back!!</h3>
                        
                    </div>
                    <div class="align-self-center col-md-4 ">
                        <div class="col-md-5  two-btn">
                            <a href="<?php echo base_url(); ?>minisidebar/index4.html" button type="button" class="btn waves-effect waves-light btn-block btn-info">Home</a>
                        </div>
                        <div class="col-md-6 two-btn">
                            <a href="<?php echo base_url(); ?>minisidebar/form-layout.html" button type="button" class="btn waves-effect waves-light btn-block btn-info">New Session</a>
                        </div>
                    </div>
                    <div class="col-md-4 align-self-center bg-warring">
                        <div class="d-flex m-t-10 justify-content-end"> 
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small></small></h6>
                                    <h4 class="m-t-0 text-primary"></h4></div>
                                    <h4 class="m-t-0 text-primary">Time: <span id="fowls"></span></h4>
                                        <script>
                                            var dt = new Date();
                                            document.getElementById("fowls").innerHTML = dt.toLocaleTimeString();
                                            </script>
                                    <div class="chart-text m-r-10">
                                        <h6 class="m-b-0"><small></small></h6>
                                        <h4 class="m-t-0 text-primary"></h4></div>
                                        <h4 class="m-t-0 text-primary">Date: <span id="datetime"></span></h4>
                                        <script>
                                        var dt = new Date();
                                        document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear());
                                        </script>
                                        
                                        </div>
                            <div class="">
                                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->  
                <div class="row">  
                    <div class="col-12 col-md-12 col-xl-12">
                        <div class="card member-panel box-shadow">  
                    <div class="card-body">   
                        <style>
        * {
          box-sizing: border-box;
        }
        
        #myInput {
          background-image: url('<?php echo base_url(); ?>css/searchicon.png');
          background-position: 10px 12px;
          background-repeat: no-repeat;
          width: 100%;
          font-size: 16px;
          padding: 12px 20px 12px 40px;
          border: 1px solid #ddd;
          margin-bottom: 12px;
        }

        #myUL {
          list-style-type: none;
          padding: 0;
          margin: 0;
        }
        
        #myUL .test .testContent {
          border: 1px solid #ddd;
          margin-top: -1px; /* Prevent double borders */
          background-color: #f6f6f6;
          padding: 12px;
          text-decoration: none;
          font-size: 18px;
          color: black;
          display: block
        }
        
        #myUL .test .testContent .header {
          background-color: #e2e2e2;
          cursor: default;
        }
        
        #myUL .test .testContent:hover:not(.header) {
          background-color: #eee;
        }
</style>  
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for tests.." title="Type in a name of test">
                        
                                                <div id="myUL">
                                                    <div class="row">
                                                    <div class="col-md-4">
                                                    <?php echo form_open('index.php/Indexcontroller/labtech_update'); ?>
                                                    <div class="test checkbox"><label class="header">Biochemistry</label>
                                                    </div>    
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="hidden" name="id" readonly="" value="<?php echo $students['id_student'] ?>">

                                                            <input type="checkbox" name="test[]" value="pus" id="PUS" class="filled-in chk-col-forest">
                                                            <label class="" for="PUS">PUS/RHS</label>
                                                        </label> 
                                                    </div>    
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="screat" id="S.CREAT" class="filled-in chk-col-forest">
                                                            <label class="" for="S.CREAT">S.CREAT</label>
                                                        </label> 
                                                    </div>     
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="urea" id="UREA" class="filled-in chk-col-forest">
                                                            <label class="" for="UREA">UREA</label>
                                                        </label> 
                                                    </div> 
                                                   <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="uricacid" id="URIC_ACID" class="filled-in chk-col-forest">
                                                            <label class="" for="URIC_ACID">URIC ACID</label>
                                                        </label> 
                                                    </div>  
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hdl" id="HDL" class="filled-in chk-col-forest">
                                                            <label class="" for="HDL">HDL</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="ldl" id="LDL" class="filled-in chk-col-forest">
                                                            <label class="" for="LDL">LDL</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="triglyceride" id="TRIGLYCERIDE" class="filled-in chk-col-forest">
                                                            <label class="" for="TRIGLYCERIDE">TRIGLYCERIDE</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="cholesterol" id="TOTAL_CHOLESTEROL" class="filled-in chk-col-forest">
                                                            <label class="" for="TOTAL_CHOLESTEROL">TOTAL CHOLESTEROL</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="sodium" id="SODIUM" class="filled-in chk-col-forest">
                                                            <label class="" for="SODIUM">SODIUM</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="potassium" id="POTASSIUM" class="filled-in chk-col-forest">
                                                            <label class="" for="POTASSIUM">POTASSIUM</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="chloride" id="CHLORIDE" class="filled-in chk-col-forest">
                                                            <label class="" for="CHLORIDE">CHLORIDE</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="calcium" id="CALCIUM" class="filled-in chk-col-forest">
                                                            <label class="" for="CALCIUM">CALCIUM</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="magnesium" id="MAGNESIUM" class="filled-in chk-col-forest">
                                                            <label class="" for="MAGNESIUM">MAGNESIUM</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="gpt" id="GPT" class="filled-in chk-col-forest">
                                                            <label class="" for="GPT">GPT/ALAT</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="got" id="GOT" class="filled-in chk-col-forest">
                                                            <label class="" for="GOT">GOT</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="gamma_gt" id="GAMMA_GT" class="filled-in chk-col-forest">
                                                            <label class="" for="GAMMA_GT">GAMMA GT</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="amylase" id="AMYLASE" class="filled-in chk-col-forest">
                                                            <label class="" for="AMYLASE">AMYLASE</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="alkaline_phosphate" id="ALKALINE_PHOSPHATASE" class="filled-in chk-col-forest">
                                                            <label class="" for="ALKALINE_PHOSPHATASE">ALKALINE PHOSPHATASE</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="rubella" id="RUBELLA_1gM" class="filled-in chk-col-forest">
                                                            <label class="" for="RUBELLA_1gM">RUBELLA 1gM</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="chlamydia_1gm" id="CHLAMYDIA_1gM" class="filled-in chk-col-forest">
                                                            <label class="" for="CHLAMYDIA_1gM">CHLAMYDIA 1gM</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="chlamydia_1gg" id="CHLAMYDIA_1gG" class="filled-in chk-col-forest">
                                                            <label class="" for="CHLAMYDIA_1gG">CHLAMYDIA 1gG</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hsv_1gm" id="HSV_1_AND_2_1gM" class="filled-in chk-col-forest">
                                                            <label class="" for="HSV_1_AND_2_1gM">HSV 1 AND 2 1gM</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hsv_1gg" id="HSV_1_AND_2_1gG" class="filled-in chk-col-forest">
                                                            <label class="" for="HSV_1_AND_2_1gG">HSV 1 AND 2 1gG</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="toxo_1gm" id="TOXO_1gM" class="filled-in chk-col-forest">
                                                            <label class="" for="TOXO_1gM">TOXO 1gM</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="toxo_1gg" id="TOXO_1gG" class="filled-in chk-col-forest">
                                                            <label class="" for="TOXO_1gG">TOXO 1gG</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="cmv_1gm" id="CMV_1gM" class="filled-in chk-col-forest">
                                                            <label class="" for="CMV_1gM">CMV 1gM</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="cmv_1gg" id="CMV_1gG" class="filled-in chk-col-forest">
                                                            <label class="" for="CMV_1gG">CMV 1gG</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="t3" id="T3" class="filled-in chk-col-forest">
                                                            <label class="" for="T3">T3</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="t4" id="T4" class="filled-in chk-col-forest">
                                                            <label class="" for="T4">T4</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="t5" id="T5" class="filled-in chk-col-forest">
                                                            <label class="" for="T5">T5</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="progesterone" id="PROGESTERONE" class="filled-in chk-col-forest">
                                                            <label class="" for="PROGESTERONE">PROGESTERONE</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="testosterone" id="TESTOSTERONE" class="filled-in chk-col-forest">
                                                            <label class="" for="TESTOSTERONE">TESTOSTERONE</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="lh" id="LH" class="filled-in chk-col-forest">
                                                            <label class="" for="LH">LH</label>
                                                        </label> 
                                                    </div>
                                                   <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="fsh" id="FSH" class="filled-in chk-col-forest">
                                                            <label class="" for="FSH">FSH</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="prolactin" id="PROLACTIN" class="filled-in chk-col-forest">
                                                            <label class="" for="PROLACTIN">PROLACTIN</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="cortisol" id="CORTISOL" class="filled-in chk-col-forest">
                                                            <label class="" for="CORTISOL">CORTISOL</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="estrogen" id="OESTROGEN" class="filled-in chk-col-forest">
                                                            <label class="" for="OESTROGEN">OESTROGEN/ESTROGEN</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="psa" id="PSA" class="filled-in chk-col-forest">
                                                            <label class="" for="PSA">PSA</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="ca_125" id="CA-125" class="filled-in chk-col-forest">
                                                            <label class="" for="CA-125">CA-125</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="cea" id="CEA" class="filled-in chk-col-forest">
                                                            <label class="" for="CEA">CEA</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="alpha_feto_proteins" id="ALPHA_FETO_PRONTEINS" class="filled-in chk-col-forest">
                                                            <label class="" for="ALPHA_FETO_PRONTEINS">ALPHA FETO PRONTEINS</label>
                                                        </label> 
                                                    </div>
                                                    </div>
                                                    
                                                      
                                                    <div class="col-md-4"> 
                                                    <!--===========CULTURE ========-->  
                                                    <div class="test checkbox"><label class="header">CULTURE</label>
                                                    </div>   
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="urine" id="URINE" class="filled-in chk-col-forest">
                                                            <label class="" for="URINE">URINE</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="pus_or_wound_swab" id="PUS_OR_WOUND_SWAB" class="filled-in chk-col-forest">
                                                            <label class="" for="PUS_OR_WOUND_SWAB">PUS OR WOUND SWAB</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="stool" id="EAR_SWAB" class="filled-in chk-col-forest">
                                                            <label class="" for="EAR_SWAB">STOOL</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="throat_swab" id="THROAT_SWAB" class="filled-in chk-col-forest">
                                                            <label class="" for="THROAT_SWAB">THROAT SWAB</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="semen_culture" id="SEMEN_CULTURE" class="filled-in chk-col-forest">
                                                            <label class="" for="SEMEN_CULTURE">SEMEN CULTURE</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="csf" id="CSF" class="filled-in chk-col-forest">
                                                            <label class="" for="CSF">CSF</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="pleural_fluid" id="PLEURAL_FLUID" class="filled-in chk-col-forest">
                                                            <label class="" for="PLEURAL_FLUID">PLEURAL FLUID</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="synovial_fluid" id="SYNOVIAL_FLUID" class="filled-in chk-col-forest">
                                                            <label class="" for="SYNOVIAL_FLUID"> SYNOVIAL FLUID</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="pericardial_fluid" id="PERICARDIAL_FLUID" class="filled-in chk-col-forest">
                                                            <label class="" for="PERICARDIAL_FLUID">PERICARDIAL FLUID</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="ascites" id="ASCITES" class="filled-in chk-col-forest">
                                                            <label class="" for="ASCITES">ASCITES</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hydroceal_fluid" id="HYDROCEAL_FLUID" class="filled-in chk-col-forest">
                                                            <label class="" for="HYDROCEAL_FLUID">HYDROCEAL FLUID</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="pus_ulcer_skin_swabs" id="PUS_ULCER_SKIN_SWABS" class="filled-in chk-col-forest">
                                                            <label class="" for="PUS_ULCER_SKIN_SWABS">PUS ULCER SKIN SWABS</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="throat_mouth_swab" id="THROAT_MOUTH_SWAB" class="filled-in chk-col-forest">
                                                            <label class="" for="THROAT_MOUTH_SWAB">THROAT MOUTH SWAB</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="skin_hair_nail_scrab" id="SKIN_HAIR_NAIL_SCRAB" class="filled-in chk-col-forest">
                                                            <label class="" for="SKIN_HAIR_NAIL_SCRAB">SKIN HAIR NAIL SCRAB</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="tips_of_catheter" id="TIPS_OF_CATHETER" class="filled-in chk-col-forest">
                                                            <label class="" for="TIPS_OF_CATHETER">TIPS OF CATHETER</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="mycoplasma" id="MYCOPLASMA" class="filled-in chk-col-forest">
                                                            <label class="" for="MYCOPLASMA">MYCOPLASMA</label>
                                                        </label> 
                                                    </div> 
                                                    
                                                    <!--=========== END CULTURE ========-->  
                                                    
                                                    <!--===========HAEMATOLOGY ========-->  
                                                    <div class="test checkbox"><label class="header">HAEMATOLOGY</label>
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hb_hct" id="HB" class="filled-in chk-col-forest">
                                                            <label class="" for="HB">HB/HCT</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="wbc_d" id="WBC_D" class="filled-in chk-col-forest">
                                                            <label class="" for="WBC_D">WBC+D/C</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="rbc" id="RBC" class="filled-in chk-col-forest">
                                                            <label class="" for="RBC">RBC</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="fbc" id="FBC" class="filled-in chk-col-forest">
                                                            <label class="" for="FBC">FBC</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="esr" id="ESR" class="filled-in chk-col-forest">
                                                            <label class="" for="ESR">ESR</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="mp" id="MP" class="filled-in chk-col-forest">
                                                            <label class="" for="MP">MP</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hb_electrophoresis" id="Hb_ELECTROHORESIS" class="filled-in chk-col-forest">
                                                            <label class="" for="Hb_ELECTROHORESIS">Hb ELECTROHORESIS</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="pt" id="PT" class="filled-in chk-col-forest">
                                                            <label class="" for="PT">PT</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="ptt" id="PTT" class="filled-in chk-col-forest">
                                                            <label class="" for="PTT">PTT</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="clotting_time" id="CLOTTING_TIME" class="filled-in chk-col-forest">
                                                            <label class="" for="CLOTTING_TIME">CLOTTING TIME</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="bleeding_time" id="BLEEDING_TIME" class="filled-in chk-col-forest">
                                                            <label class="" for="BLEEDING_TIME">BLEEDING TIME</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hb_a" id="HB-A" class="filled-in chk-col-forest">
                                                            <label class="" for="HB-A">HB-A</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="wbc" id="WBC" class="filled-in chk-col-forest">
                                                            <label class="" for="WBC">WBC</label>
                                                        </label> 
                                                    </div>
                                                    <!--=========== END HAEMATOLOGY ========-->  
                                                    
                                                    <!--===========MICROBIOLOGY ========-->  
                                                    <div class="test checkbox"><label class="header">MICROBIOLOGY</label>
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hys" id="HYS" class="filled-in chk-col-forest">
                                                            <label class="" for="HYS">HYS</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="v_s" id="V" class="filled-in chk-col-forest">
                                                            <label class="" for="V">V/S</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="u_s" id="U" class="filled-in chk-col-forest">
                                                            <label class="" for="U">U/S</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="spermogramme" id="SPERMOGRAMME" class="filled-in chk-col-forest">
                                                            <label class="" for="SPERMOGRAMME">SPERMOGRAMME</label>
                                                        </label> 
                                                    </div>  
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="afbx3" id="AFBX3" class="filled-in chk-col-forest">
                                                            <label class="" for="AFBX3">AFBX3</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="sputum" id="SPUTUM" class="filled-in chk-col-forest">
                                                            <label class="" for="SPUTUM">SPUTUM</label>
                                                        </label> 
                                                    </div>   
                                                    
                                                    <!--===========END OF MICROBIOLOGY ========-->  
                                                   </div> 
                                                     
                                                    <div class="col-md-4">
                                                     <div class="test checkbox"><label class="header">Parasitology</label>
                                                    </div>
                                                    <!--===========PARASITOLOGY ========--> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="stool_exam" id="STOOL_EXAM" class="filled-in chk-col-forest">
                                                            <label class="" for="STOOL_EXAM">STOOL EXAM</label>
                                                        </label> 
                                                    </div>
                                                    
                                                    <div class="test">
                                                        <label class="testContent"> 
                                                          <input type="checkbox" name="test[]" value="urinalysis" id="URINALYSIS" class="filled-in chk-col-forest">
                                                          <label class="" for="URINALYSIS">URINALYSIS</label> 
                                                        </label>
                                                    </div> 
                                                     <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="blood_microfilia" id="BLOOD_MICROFILIA" class="filled-in chk-col-forest">
                                                             <label class="" for="BLOOD_MICROFILIA">BLOOD MICROFILIA</label>
                                                        </label>  
                                                    </div>
                                                    
                                                    <div class="test">
                                                        <label class="testContent">
                                                          <input type="checkbox" name="test[]" value="skin_scrappings" id="SKIN_SCRAPPINGS" class="filled-in chk-col-forest">
                                                          <label class="" for="SKIN_SCRAPPINGS">SKIN SCRAPPINGS</label>
                                                        </label>
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent"> 
                                                          <input type="checkbox" name="test[]" value="scotch_tape_test" id="SCOTCH_TAPE_TEST" class="filled-in chk-col-forest">
                                                          <label class="" for="SCOTCH_TAPE_TEST">SCOTCH TAPE TEST</label> 
                                                        </label>
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent"> 
                                                          <input type="checkbox" name="test[]" value="h_pylori" id="H.Pylori" class="filled-in chk-col-forest">
                                                          <label class="" for="H.Pylori">H.Pylori</label> 
                                                        </label>
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent"> 
                                                          <input type="checkbox" name="test[]" value="blood_films" id="BLOOD_FIlMS" class="filled-in chk-col-forest">
                                                          <label class="" for="BLOOD_FIlMS">BLOOD FIlMS</label> 
                                                        </label>
                                                    </div> 
                                                     
                                                    <!--==========END OF PARASITOLOGY =========--> 
                                                     
                                                    <!--=========SEROLOGY =======-->
                                                    <div class="test checkbox"><label class="header">SEROLOGY</label>
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="tpha" id="TPHA" class="filled-in chk-col-forest">
                                                            <label class="" for="TPHA">TPHA</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="rfr" id="RFR" class="filled-in chk-col-forest">
                                                            <label class="" for="RFR">RFR</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="fob" id="FOB" class="filled-in chk-col-forest">
                                                            <label class="" for="FOB">FOB</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="h_pytori" id="H.Pytori" class="filled-in chk-col-forest">
                                                            <label class="" for="H.Pytori">H.Pytori</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="widal" id="WIDAL" class="filled-in chk-col-forest">
                                                            <label class="" for="WIDAL">WIDAL</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="rf" id="RF" class="filled-in chk-col-forest">
                                                            <label class="" for="RF">RF</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="crf" id="CRF" class="filled-in chk-col-forest">
                                                            <label class="" for="CRF">CRF</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="vdrl" id="VDRL" class="filled-in chk-col-forest">
                                                            <label class="" for="VDRL">VDRL</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hbeag" id="HBeAg" class="filled-in chk-col-forest">
                                                            <label class="" for="HBeAg">HBeAg</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hcv" id="HCV" class="filled-in chk-col-forest">
                                                            <label class="" for="HCV">HCV</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hepatis_b_panel" id="HEPATITIS_B_PANEL" class="filled-in chk-col-forest">
                                                            <label class="" for="HEPATITIS_B_PANEL">HEPATITIS B PANEL</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="agrv" id="AgRv" class="filled-in chk-col-forest">
                                                            <label class="" for="AgRv">AgRv</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="blood_grouping" id="BLOOD_GROUPING" class="filled-in chk-col-forest">
                                                            <label class="" for="BLOOD_GROUPING">BLOOD GROUPING</label>
                                                        </label> 
                                                    </div>
                                                    
                                                    
                                                    <!--+++++++ TESTS ++========-->
                                                    <div class="test checkbox"><label class="header">TEST</label>
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hiv" id="TEST_1" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_1">TEST 1 (HIV)</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="covid_19" id="TEST_2" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_2">TEST 2 (COVID-19)</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="test_3" id="TEST_3" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_2">TEST 3</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="test_4" id="TEST_3" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_3">TEST 4</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="test_5" id="TEST_5" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_4">TEST 5</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="test_6" id="TEST_6" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_5">TEST 6</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="test_7" id="TEST_7" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_6">TEST 7</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="test_8" id="TEST_8" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_7">TEST 8</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="test_9" id="TEST_9" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_9">TEST 9</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="test_10" id="TEST_10" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_10">TEST 10</label>
                                                        </label> 
                                                    </div>
                                                    </div>   
                                                </div>
                                                <button type="submit" name="submit" class="btn waves-effect waves-light btn-block btn-success">Submit</button>
                                            </form>
                        
                    <script>
                    function myFunction() {
                        var input, filter, ul, li, a, i;
                        input = document.getElementById("myInput");
                        filter = input.value.toUpperCase();
                        ul = document.getElementById("myUL");
                        li = document.getElementsByClassName("test");
                        for (i = 0; i < li.length; i++) {
                            a = li[i].getElementsByTagName("label")[0];
                            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                li[i].style.display = "";
                            } else {
                                li[i].style.display = "none";
                    
                            }
                        }
                    }
                    </script>   
                 </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2021 UBaHMS
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script data-cfasync="false" src="<?php echo base_url(); ?><?php echo base_url(); ?><?php echo base_url(); ?><?php echo base_url(); ?>cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/assets/plugins/popper/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url(); ?>assets/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="<?php echo base_url(); ?>assets/assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/plugins/echarts/echarts-all.js"></script>
    <!-- Vector map JavaScript -->
    <script src="<?php echo base_url(); ?>assets/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Calendar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/assets/plugins/moment/moment.js"></script>
    <script src='<?php echo base_url(); ?>assets/assets/plugins/calendar/dist/fullcalendar.min.js'></script>
    <script src="<?php echo base_url(); ?>assets/assets/plugins/calendar/dist/jquery.fullcalendar.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/plugins/calendar/dist/cal-init.js"></script>
    <!-- sparkline chart -->
    <script src="<?php echo base_url(); ?>assets/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dashboard4.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/material-pro/minisidebar/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 11:12:24 GMT -->
</html>