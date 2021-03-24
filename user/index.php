<?php
include "../config.php";

// path to content file
$mainContent = "";
$pageTitle = "CMS";


?><!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<title><?=$pageTitle?></title>
<link rel="icon" type="image/x-icon" href="/assets/img/logo.png"/>
<link rel="icon" href="/assets/img/logo.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="/assets/vendor/pace/pace.css">
<script src="/assets/vendor/pace/pace.min.js"></script>
<!--vendors-->
<link rel="stylesheet" type="text/css" href="/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" type="text/css" href="/assets/vendor/jquery-scrollbar/jquery.scrollbar.css">
<link rel="stylesheet" href="/assets/vendor/select2/css/select2.min.css">
<link rel="stylesheet" href="/assets/vendor/jquery-ui/jquery-ui.min.css">
<link rel="stylesheet" href="/assets/vendor/daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="/assets/vendor/timepicker/bootstrap-timepicker.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600" rel="stylesheet">
<!--Material Icons-->
<link rel="stylesheet" type="text/css" href="/assets/fonts/materialdesignicons/materialdesignicons.min.css">
<!--Material Icons-->
<link rel="stylesheet" type="text/css" href="/assets/fonts/feather/feather-icons.css">
<!--Bootstrap + atmos Admin CSS-->
<link rel="stylesheet" type="text/css" href="/assets/css/atmos.min.css">
<!-- Additional library for page -->


</head>
<body class="sidebar-pinned ">
<?php include "partials/aside.php"; ?>
<main class="admin-main">
    <?php include "partials/header.php"; ?>

    <section class="admin-content">
        <div class="container p-t-20">
            <div class="row">
                <div class="col-12 m-b-30">
                    <h3>Project Dashboard</h3>
                </div>
                <div class="col-md-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h3> Overview</h3>
                            <p class="text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <div id="chart-09"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 my-auto">
                                    <h2>Project Status </h2>
                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cumque cupiditate deserunt
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <div style="  overflow: hidden;
    max-height: 210px!important">
                                        <div id="chart-07"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <!--widget card begin-->
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col my-auto">
                                            <div class="h6 text-muted ">Media Reach </div>
                                        </div>

                                        <div class="col-auto my-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle badge-soft-danger"><i
                                                            class="mdi mdi-heart  "></i></div>

                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="display-4 fw-600">16k</h1>
                                    <div class="h6">
                                        <span class="text-success"> <i class="mdi mdi-arrow-top-right"></i> +0.65% </span>
                                        More activity than usual.
                                    </div>
                                </div>
                            </div>
                            <!--widget card ends-->

                        </div>
                        <div class="col-lg-6">
                            <!--widget card begin-->
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col my-auto">
                                            <div class="h6 text-muted ">New Modules </div>
                                        </div>

                                        <div class="col-auto my-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-soft-primary"><i
                                                            class="mdi mdi-script  "></i></div>

                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="display-4 fw-600">120</h1>
                                    <div class="h6">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> +0.65% </span>
                                        Less activity than usual.
                                    </div>
                                </div>
                            </div>
                            <!--widget card ends-->

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">

                        <div class="card-body">
                            <div class="card-header">
                                <h3 class=" m-b-0">Tickets</h3>

                                <div class="card-controls">

                                    <a href="#" class="js-card-fullscreen icon"></a>
                                    <a href="#" class="js-card-refresh icon"></a>
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                    class="icon mdi  mdi-dots-vertical"></i> </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="chart-08"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!--widget card begin-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="card-title"><i class="mdi mdi-18px text-info mdi-circle"></i> Project Status
                            </div>

                            <div class="card-controls">

                                <a href="#" class="js-card-refresh icon"> </a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="text-center ">
                                <img src="/assets/img/logos/mailchimp.jpg" class="rounded-circle" width="80" alt="">
                            </div>
                            <h4 class="text-center m-t-20">
                                Branding & Product Design
                            </h4>
                            <div class="text-muted text-center m-b-20">
                                5 Members
                            </div>
                            <div class="text-center m-b-30">
                                <div class=" avatar-group ">
                                    <div class="avatar avatar-sm">
                                        <img src="/assets/img/users/user-5.jpg" class="avatar-img rounded-circle"
                                             alt="">
                                    </div>
                                    <div class="avatar avatar-sm">
                                        <img src="/assets/img/users/user-4.jpg" class="avatar-img rounded-circle"
                                             alt="">
                                    </div>
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title rounded-circle bg-warning">A</div>
                                    </div>
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title rounded-circle bg-accent">X</div>
                                    </div>

                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title rounded-circle bg-danger">N</div>
                                    </div>
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title rounded-circle"><i class="mdi mdi-plus"></i></div>
                                    </div>
                                </div>
                            </div>


                            <div class="text-center p-b-20">
                                <button class="btn btn-primary">View Project</button>
                            </div>
                        </div>
                    </div>
                    <!--widget card ends-->


                </div>
                <div class="col-lg-4">
                    <!--widget card begin-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title m-b-0">People </h5>

                            <div class="card-controls">

                                <a href="#" class="js-card-fullscreen icon"></a>
                                <a href="#" class="js-card-refresh icon"></a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush ">


                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm "><img src="/assets/img/users/user-1.jpg"
                                                                        class="avatar-img avatar-sm rounded-circle"
                                                                        alt=""></div>
                                </div>
                                <div class="">
                                    <div>Alex Johnson</div>
                                    <div class="text-muted">Visual Designer
                                    </div>
                                </div>

                                <div class="ml-auto">
                                    <a href="#" class="btn  btn-white">Follow</a>
                                </div>

                            </div>

                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm "><img src="/assets/img/users/user-2.jpg"
                                                                        class="avatar-img avatar-sm rounded-circle"
                                                                        alt=""></div>
                                </div>
                                <div class="">
                                    <div>Beckett Brown</div>
                                    <div class="text-muted">Project Manager
                                    </div>
                                </div>

                                <div class="ml-auto">
                                    <a href="#" class="btn  btn-white">Follow</a>
                                </div>

                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm "><img src="/assets/img/users/user-3.jpg"
                                                                        class="avatar-img avatar-sm rounded-circle"
                                                                        alt=""></div>
                                </div>
                                <div class="">
                                    <div>Brielle Cote</div>
                                    <div class="text-muted">Web Developer
                                    </div>
                                </div>

                                <div class="ml-auto">
                                    <a href="#" class="btn  btn-white">Follow</a>
                                </div>

                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm "><img src="/assets/img/users/user-4.jpg"
                                                                        class="avatar-img avatar-sm rounded-circle"
                                                                        alt=""></div>
                                </div>
                                <div class="">
                                    <div>Liam Lévesque</div>
                                    <div class="text-muted">Product Designer
                                    </div>
                                </div>

                                <div class="ml-auto">
                                    <a href="#" class="btn  btn-white">Follow</a>
                                </div>

                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm "><img src="/assets/img/users/user-5.jpg"
                                                                        class="avatar-img avatar-sm rounded-circle"
                                                                        alt=""></div>
                                </div>
                                <div class="">
                                    <div>Parker Roy</div>
                                    <div class="text-muted">Visual Designer
                                    </div>
                                </div>

                                <div class="ml-auto">
                                    <a href="#" class="btn  btn-white">Follow</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--widget card ends-->

                </div>
                <div class="col-lg-4">
                    <!--widget card begin-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title m-b-0">Costing Slabs</h5>

                            <div class="card-controls">

                                <a href="#" class="js-card-fullscreen icon"></a>
                                <a href="#" class="js-card-refresh icon"></a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">

                            <div class="p-t-15 p-b-15  border-bottom border-bottom-dashed">
                                <div class="row ">
                                    <div class="col-md-7">
                                        <h6 class="">Project Budget
                                        </h6>
                                        <p class="text-muted m-0 ">
                                            Includes Tax and other liabilities

                                        </p>
                                    </div>
                                    <div class="col-md-5 my-auto  text-right">
                                        <h4 class="text-primary m-0">$5900</h4>

                                    </div>
                                </div>

                            </div>
                            <div class="p-t-15 p-b-15  border-bottom border-bottom-dashed">
                                <div class="row ">
                                    <div class="col-md-7">
                                        <h6 class="">Hosting Costs</h6>
                                        <p class="text-muted m-0 ">
                                            Server and CDN Hosting
                                        </p>
                                    </div>
                                    <div class="col-md-5 my-auto  text-right">
                                        <h4 class="text-success m-0">$563</h4>

                                    </div>
                                </div>

                            </div>
                            <div class="p-t-15 p-b-15  border-bottom border-bottom-dashed">
                                <div class="row ">
                                    <div class="col-md-7">
                                        <h6 class="">Payments</h6>
                                        <p class="text-muted m-0 ">
                                            Infrastructure and Rent
                                        </p>
                                    </div>
                                    <div class="col-md-5 my-auto  text-right">
                                        <h4 class="text-danger m-0">$720</h4>

                                    </div>
                                </div>

                            </div>

                            <div class="p-t-15 p-b-15  ">
                                <div class="row ">
                                    <div class="col-md-7">
                                        <h6 class="">Logistics</h6>
                                        <p class="text-muted m-0 ">
                                            Overall Regional Logistics

                                        </p>
                                    </div>
                                    <div class="col-md-5 my-auto  text-right">
                                        <h4 class="text-danger m-0">-15%</h4>

                                    </div>
                                </div>

                            </div>



                        </div>
                    </div>
                    <!--widget card ends-->

                </div>
            </div>
        </div>
    </section>

</main>


<script src="/assets/vendor/jquery/jquery.min.js"   ></script>
<script src="/assets/vendor/jquery-ui/jquery-ui.min.js"   ></script>
<script src="/assets/vendor/popper/popper.js"   ></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.min.js"   ></script>
<script src="/assets/vendor/select2/js/select2.full.min.js"   ></script>
<script src="/assets/vendor/jquery-scrollbar/jquery.scrollbar.min.js"   ></script>
<script src="/assets/vendor/listjs/listjs.min.js"   ></script>
<script src="/assets/vendor/moment/moment.min.js"></script>
<script src="/assets/vendor/daterangepicker/daterangepicker.js"></script>
<script src="/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="/assets/vendor/bootstrap-notify/bootstrap-notify.min.js"   ></script>
<script src="/assets/js/atmos.min.js"></script>
<!--page specific scripts for demo-->

<!--Additional Page includes-->
<script src="/assets/vendor/apexchart/apexcharts.min.js"></script>
<!--chart data for current dashboard-->
<script src="/assets/js/dashboard-01.js" ></script>

</body>
</html>