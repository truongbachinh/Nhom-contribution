<?php
include "./connect_db.php";
session_start();
$userId = $_SESSION["current_user"]["u_id"];
$resultInfor = mysqli_query($conn, "select * from user_infor where user_id = '$userId'");
$result = mysqli_query($conn, "select * from user where u_id = '$userId'");
$rowInfor = mysqli_fetch_array($resultInfor, MYSQLI_ASSOC);
$rowUserInfor = mysqli_fetch_array($result, MYSQLI_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="author" />
<meta content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons" name="description" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons" />
<meta property="og:description" content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons" />
<meta property="og:image" content="https://cdn.dribbble.com/users/180706/screenshots/5424805/the_sceens_-_mobile_perspective_mockup_3_-_by_tranmautritam.jpg" />
<meta property="og:site_name" content="atlas " />
<title>Home Page</title>
<link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
<link rel="icon" href="assets/img/logo.png" type="image/png" sizes="16x16">
<link rel='stylesheet' href='https://d33wubrfki0l68.cloudfront.net/css/478ccdc1892151837f9e7163badb055b8a1833a5/light/assets/vendor/pace/pace.css' />
<script src='https://d33wubrfki0l68.cloudfront.net/js/3d1965f9e8e63c62b671967aafcad6603deec90c/light/assets/vendor/pace/pace.min.js'></script>
<!--vendors-->
<link rel='stylesheet' type='text/css' href='https://d33wubrfki0l68.cloudfront.net/bundles/291bbeead57f19651f311362abe809b67adc3fb5.css' />
<link rel='stylesheet' href='https://d33wubrfki0l68.cloudfront.net/bundles/fc681442cee6ccf717f33ccc57ebf17a4e0792e1.css' />


<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600" rel="stylesheet">
<!--Material Icons-->
<link rel='stylesheet' type='text/css' href='https://d33wubrfki0l68.cloudfront.net/css/548117a22d5d22545a0ab2dddf8940a2e32c04ed/default/assets/fonts/materialdesignicons/materialdesignicons.min.css' />
<!--Material Icons-->
<link rel='stylesheet' type='text/css' href='https://d33wubrfki0l68.cloudfront.net/css/0940f25997c8e50e65e95510b30245d116f639f0/light/assets/fonts/feather/feather-icons.css' />
<!--Bootstrap + atmos Admin CSS-->
<link rel='stylesheet' type='text/css' href='https://d33wubrfki0l68.cloudfront.net/css/16e33a95bb46f814f87079394f72ef62972bd197/light/assets/css/atmos.min.css' />
<!-- Additional library for page -->
<?php include 'aside.php' ?>


<body class="sidebar-pinned ">
    <?php include 'aside.php' ?>
    <main class="admin-main">
        <!-- Header -->
        <?php include 'header.php' ?>
        <!-- Session -->

        <section class="admin-content">
            <div class="container m-t-30">
                <div class="row justify-content-md-center">
                    <div class="col-lg-8">
                        <div class="card m-b-30">
                            <div class="card-media">
                                <img class="card-img-top" src="https://www.balmerlawrie.com/img/main_images/inside_banner/travel-banner1.jpg" alt="banner">
                            </div>
                            <div class="card-body">
                                <div class="text-center pull-up-sm">
                                    <div class="avatar avatar-xxl">

                                        <img class="avatar-img rounded-circle" src="https://i.pinimg.com/originals/75/31/5d/75315db511a058432745fc37d82a7c44.png" alt="avatar">

                                    </div>
                                    <h4 class="text-center m-t-20">
                                        <div class="text text-center m-b-5"><?= $rowUserInfor["fullname"] ?></div>
                                    </h4>
                                </div>
                                <!-- Modal edit profile -->
                                <div class="row justify-content-end p-r-40">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                        Edit profile
                                    </button>


                                    <!-- Model edit -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit profile
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" name="forml" method="post" class="form-horizontal" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label for="studentId">Student ID</label>
                                                            <input type="text" class="form-control" id="inputStudentId" name="idStudent">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="studentName">Name Student</label>
                                                            <input type="text" class="form-control" id="inputStudentName" name="nameStudent">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="inputAddress">Address</label>
                                                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputPhone">Phone</label>
                                                            <input type="text" class="form-control" id="inputPhone" name="phone">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputPhone">Email</label>
                                                            <input type="text" class="form-control" id="inputEmail" name="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputPhone">DOB</label>
                                                            <input type="date" class="form-control" id="inputDoB" name="DoB">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputPhone">Major</label>
                                                            <input type="text" class="form-control" id="inputMajor" name="major">
                                                        </div>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                            Close
                                                        </button>
                                                        <input type="submit" class="btn btn-primary" name="updateProfile" value="Save changes">
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-9">
                                        <div class="tab-infor m-b-15">
                                            <ul class="nav nav-tabs" id="myTabInforStudent" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#inforStudent" role="tab" aria-controls="home" aria-selected="true">About</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#myFaculty" role="tab" aria-controls="profile" aria-selected="false">My Faculty</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="about-student">
                                            <div class="tab-content profile-tab" id="myTabContent">
                                                <div class="tab-pane fade active show" id="inforStudent" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Student ID</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <?php
                                                            if (!empty($rowInfor["id_card"])) {
                                                            ?>
                                                                <p><?= $rowInfor["id_card"] ?></p>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <p>Null</p>
                                                            <?php
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Student Name</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <?php
                                                            if (!empty($rowInfor["name"])) {
                                                            ?>
                                                                <p><?= $rowInfor["name"] ?></p>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <p>Null</p>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>D0B</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <?php
                                                            if (!empty($rowInfor["DOB"])) {
                                                            ?>
                                                                <p><?= $rowInfor["DOB"] ?></p>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <p>Null</p>
                                                            <?php
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Phone</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <?php
                                                            if (!empty($rowInfor["phone"])) {
                                                            ?>
                                                                <p><?= $rowInfor["phone"] ?></p>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <p>Null</p>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Email</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <?php
                                                            if (!empty($rowInfor["email"])) {
                                                            ?>
                                                                <p><?= $rowInfor["email"] ?></p>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <p>Null</p>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Profession</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <?php
                                                            if (!empty($rowInfor["major"])) {
                                                            ?>
                                                                <p><?= $rowInfor["major"] ?></p>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <p>Null</p>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="myFaculty" role="tabpanel" aria-labelledby="profile-tab">
                                                        <ul class="list-group- list-group-flush p-0">
                                                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                                                <span>List of my faculty</span>
                                                            </li>
                                                            <a class="list-group-item list-group-item-action">Dapibus ac
                                                                facilisis in</a>
                                                            <a class="list-group-item list-group-item-action">Morbi leo
                                                                risus</a>
                                                            <a class="list-group-item list-group-item-action">Porta ac
                                                                consectetur ac</a>
                                                            <a class="list-group-item list-group-item-action">Vestibulum
                                                                at eros</a>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
</body>

<script src='https://d33wubrfki0l68.cloudfront.net/bundles/85bd871e04eb889b6141c1aba0fedfa1a2215991.js'></script>
<!--page specific scripts for demo-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66116118-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-66116118-3');
</script>

<!--Additional Page includes-->
<script src='https://d33wubrfki0l68.cloudfront.net/js/c36248babf70a3c7ad1dcd98d4250fa60842eea9/light/assets/vendor/apexchart/apexcharts.min.js'></script>
<!--chart data for current dashboard-->
<script src='https://d33wubrfki0l68.cloudfront.net/js/d678dabfdc5c3131d492af7ef517fbe46fbbd8e4/light/assets/js/dashboard-01.js'></script>

</body>

</html>



<?php
if (isset($_POST["updateProfile"])) {

    if ($rowInfor == NULL) {

        $addInfor = mysqli_query($conn, "INSERT INTO `user_infor` (`user_id`, `id_card`, `name`, `address`, `phone`,`email`, `DOB`, `major`) VALUES ('$userId', '$_POST[idStudent]', '$_POST[nameStudent]', '$_POST[address]', '$_POST[phone]','$_POST[email]', '$_POST[DoB]', '$_POST[major]');");
    } else {
        $updateInfor = mysqli_query($conn, "update `user_infor` set `user_id` = '$userId' , `id_card`  = '$_POST[idStudent]', `name`  = '$_POST[nameStudent]', `address`  = '$_POST[address]', `phone`  = '$_POST[phone]',`email`  = '$_POST[email]', `DOB`  = '$_POST[DoB]', `major` = '$_POST[major]';");
    }



    if ($updateInfor == true) {
?>
        <script type="text/javascript">
            alert("update Infor successful");
            window.location.replace("./profile.php");
        </script>
    <?php
    } elseif ($addInfor == true) {
    ?>
        <script type="text/javascript">
            alert("add Infor successful");
            window.location.replace("./profile.php");
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            window.location = "./homepage.php"
        </script>
<?php
    }
}
?>