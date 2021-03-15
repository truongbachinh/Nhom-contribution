<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="author" />
<meta content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons"
    name="description" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title"
    content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons" />
<meta property="og:description"
    content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons" />
<meta property="og:image"
    content="https://cdn.dribbble.com/users/180706/screenshots/5424805/the_sceens_-_mobile_perspective_mockup_3_-_by_tranmautritam.jpg" />
<meta property="og:site_name" content="atlas " />
<title>Home Page</title>
<link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
<link rel="icon" href="assets/img/logo.png" type="image/png" sizes="16x16">
<link rel='stylesheet'
    href='https://d33wubrfki0l68.cloudfront.net/css/478ccdc1892151837f9e7163badb055b8a1833a5/light/assets/vendor/pace/pace.css' />
<script
    src='https://d33wubrfki0l68.cloudfront.net/js/3d1965f9e8e63c62b671967aafcad6603deec90c/light/assets/vendor/pace/pace.min.js'></script>
<!--vendors-->
<link rel='stylesheet' type='text/css'
    href='https://d33wubrfki0l68.cloudfront.net/bundles/291bbeead57f19651f311362abe809b67adc3fb5.css' />
<link rel='stylesheet'
    href='https://d33wubrfki0l68.cloudfront.net/bundles/fc681442cee6ccf717f33ccc57ebf17a4e0792e1.css' />


<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600" rel="stylesheet">
<!--Material Icons-->
<link rel='stylesheet' type='text/css'
    href='https://d33wubrfki0l68.cloudfront.net/css/548117a22d5d22545a0ab2dddf8940a2e32c04ed/default/assets/fonts/materialdesignicons/materialdesignicons.min.css' />
<!--Material Icons-->
<link rel='stylesheet' type='text/css'
    href='https://d33wubrfki0l68.cloudfront.net/css/0940f25997c8e50e65e95510b30245d116f639f0/light/assets/fonts/feather/feather-icons.css' />
<!--Bootstrap + atmos Admin CSS-->
<link rel='stylesheet' type='text/css'
    href='https://d33wubrfki0l68.cloudfront.net/css/16e33a95bb46f814f87079394f72ef62972bd197/light/assets/css/atmos.min.css' />
<!-- Additional library for page -->

<body class="sidebar-pinned ">
    <?php include 'aside.php' ?>
    <main class="admin-main">
        <!-- Header -->
        <?php include 'header.php' ?>
        <!-- Session -->

        <section class="admin-content">
            <div class="container m-t-30">
                <form action="">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="m-b-0">
                            Create New Account
                        </h5>
                        <p class="m-b-0 text-muted">
                            Please input fullfill information.
                        </p>
                    </div>
                    <div class="card-body ">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName1">First Name</label>
                                <input type="text" class="form-control" id="inputName1" name="firstName"
                                    placeholder="Thu Thuy" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputName2">Last Name</label>
                                <input type="text" class="form-control" id="inputName2" name="lastName"
                                    placeholder="Nguyen" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1">Email</label>
                            <input type="email" class="form-control" id="inputEmail1"
                                placeholder="thuthuynguyen@gmail.com" name="inputEmail" required>
                        </div>
                        <div class="form-group">
                            <label for="inputPass1">Password</label>
                            <input type="text" class="form-control" id="inputPass1" name="inputPass" required>
                        </div>
                        <div class="form-group">
                            <label for="inputPass2">Confirm Passs</label>
                            <input type="text" class="form-control" id="inputPass2" name="inputConfirmPass" required>
                        </div>
                        <div class="form-group">
                            <label for="inputRole1">Roles</label>
                            <select class="form-control" name="role">
                                <option selected value="student">Student</option>
                                <option value="manager-coordinator">Manager Coordinator</option>
                                <option value="manager-marketing">Manager Marketing</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress1">Address</label>
                            <input type="text" class="form-control" id="inputAddress1" name="inputAddress" required>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary float-right" value="Create Account"></button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </section>
    </main>
</body>


</body>


<script src='https://d33wubrfki0l68.cloudfront.net/bundles/85bd871e04eb889b6141c1aba0fedfa1a2215991.js'></script>
<!--page specific scripts for demo-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66116118-3"></script>
<script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-66116118-3');</script>

<!--Additional Page includes-->
<script
    src='https://d33wubrfki0l68.cloudfront.net/js/c36248babf70a3c7ad1dcd98d4250fa60842eea9/light/assets/vendor/apexchart/apexcharts.min.js'></script>
<!--chart data for current dashboard-->
<script
    src='https://d33wubrfki0l68.cloudfront.net/js/d678dabfdc5c3131d492af7ef517fbe46fbbd8e4/light/assets/js/dashboard-01.js'></script>

</body>

</html>