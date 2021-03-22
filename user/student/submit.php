<?php
session_start();
include "../../connect_db.php";
?>

<?php
// Perform query
$user_id = 353;
$file_faculty_id = 34;
$result = mysqli_query($conn, "SELECT * FROM file_submit_to_system WHERE user_id = $user_id and $file_faculty_id = $file_faculty_id");
$file_submit_to_system = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>

<?php

function getDifferenceToDate($date1, $date2)
{
    $diff = abs(strtotime($date2) - strtotime($date1));

    $years = floor($diff / (365 * 60 * 60 * 24));

    $months = floor(($diff - $years * 365 * 60 * 60 * 24)
        / (30 * 60 * 60 * 24));

    $days = floor(($diff - $years * 365 * 60 * 60 * 24 -
            $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

    $hours = floor(($diff - $years * 365 * 60 * 60 * 24
            - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24)
        / (60 * 60));

    if ($years != 0) {
        printf("%d years, %d months, %d days, %d hours", $years, $months,
            $days, $hours);
    } else if ($months != 0) {
        printf("%d months, %d days, %d hours", $months,
            $days, $hours);
    } else {
        printf("%d days, %d hours",
            $days, $hours);
    }
}

?>

<?php
if(isset($_POST['uploadFile'])) {
    echo("Test");
    $tm = md5(time());
    var_dump($_FILES);
    $fnm1 = $_FILES["inputFileArticle"]["name"];
    $dst1 = "./image/" . $tm . $fnm1;
    $dst_db1 = "image/" . $tm . $fnm1;
    move_uploaded_file($_FILES["inputFileArticle"]["tmp_name"], $dst1);
    $date_uploaded = date('Y-m-d h:i:s');
    $query = "insert into file_submit (file_id, file_content_upload, file_date_uploaded) values (NULL, '$dst1', '$date_uploaded')";
    $upload_query = mysqli_query($conn, $query);
    $file_submit_id_result = mysqli_query($conn, "SELECT file_id FROM file_submit WHERE file_content_upload = '$dst1'");
    var_dump($file_submit_id_result);
    $file_submit_id = mysqli_fetch_array($file_submit_id_result, MYSQLI_ASSOC)["file_id"];
    $file_id = $file_submit_to_system["file_id"];
    $request = "UPDATE file_submit_to_system SET file_submit_id = $file_submit_id WHERE file_id = $file_id";
    echo $request;
    mysqli_query($conn, $request );
}
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
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="m-b-0">
                            Cloud computing
                        </h5>
                        <p class="m-b-0 text-muted">
                        </p>
                    </div>
                    <div class="card-body p-b-0">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Submission</td>
                                    <td>No attempt</td>
                                </tr>
                                <tr>
                                    <td>Grading status</td>
                                    <td>Not graded</td>
                                </tr>
                                <tr>
                                    <td>Due date</td>
                                    <td><?php
                                        echo $file_submit_to_system["file_date_uploaded"];
                                        ?></td>
                                </tr>
                                <tr>
                                    <td>Time remaining</td>
                                    <td>Deadline is overdue by:
                                        <?php getDifferenceToDate($file_submit_to_system["file_date_uploaded"], date("Y-m-d h:i:s")); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Last modified</td>
                                    <td>Deadline is overdue by: 1 year 62 days</td>
                                </tr>
                                <tr>
                                    <td>Submission comments</td>
                                    <td>
                                        <div class="input-group m-b-10">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">With textarea</span>
                                            </div>
                                            <textarea class="form-control" aria-label="With textarea" spellcheck="false"></textarea>
                                            <grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 3;" class="cGcvT"></grammarly-extension>
                                        </div>
                                        <div class="button-comment float-right">
                                            <button class="btn btn-warning">Comments</button>
                                            <button class="btn btn-danger">Cancle</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=" card-footer button-submit text-center">
                        <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target=".modal-submit-artical">Add Submission
                        </button>
                    </div>

<!--                    <form method="post">-->
<!--                        <input type="submit" name="uploadFile" class="btn btn-primary" value="uploadFile" id="uploadFile" />-->
<!--                    </form>-->

                    <!-- Modal -->

                    <div class="modal fade modal-submit-artical" tabindex="-1" role="dialog" aria-labelledby="submissionModal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="submissionModal">Upload Article</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="card-header">
                                        <p class="m-b-0 text-muted">
                                            Students are need to provide complete information prior to submitting an
                                            article.
                                        </p>
                                    </div>
<form action="" method="post" enctype="multipart/form-data">                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputName">Name of article</label>
                                                <input type="text" class="form-control" id="inputName" name="nameArticle" placeholder="Name of article">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputAuthor">Author</label>
                                                <input type="text" class="form-control" id="inputAuthor" name="nameAuthor">
                                            </div>
                                        </div>
                                        <div class="form-group"">
                                        <div>
                                            <p class=" font-secondary">File Uploads</p>
                                        <div class="form-group">
                            <div>
                                <p class=" font-secondary">File Uploads</p>
                                            <div class="input-group mb-3">
                                                <div class="custom-file" onload="GetFileInfo ()">
                                                    <input type="file" class="custom-file-input" id="inputFile" name="inputFileArticle" multiple onchange="GetFileInfo ()">
                                                    <label class="custom-file-label" for="inputFile">Choose file</label>
                                                </div>
                                            </div>
                                            <div id="info" style="margin-top:10px"></div>
                                        </div></div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck" name="agree">
                                        <label class="form-check-label" for="gridCheck">
                                            I agree to the Terms and Conditions
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group  float-right">
                                    <input type="submit" name="uploadFile" class="btn btn-primary" value="uploadFile" id="uploadFile"></input>
<!--                                    <button type="submit" value="Upload" name="uploadFile" class="btn btn-primary" value="uploadFile" id="uploadFile" onclick="onUploadI()">Submit</button>-->                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    </section>

    <head>
        <script type="text/javascript">
            var mess = "";
            var count = 0;

            function GetFileInfo() {
                var fileInput = document.getElementById("inputFile");
                var message = "";
                if ('files' in fileInput) {
                    if (fileInput.files.length == 0) {
                        message = "Please browse for one or more files.";
                    } else {
                        for (var i = 0; i < fileInput.files.length; i++) {
                            count = count + 1;
                            message += "<br /><b>File" + count + "</b><br />";
                            var file = fileInput.files[i];
                            if ('name' in file) {
                                message += "Name of file: " + file.name + "<br />";
                            } else {
                                message += "Name of file: " + file.fileName + "<br />";
                            }
                            if ('size' in file) {
                                message += "Size of file: " + file.size + " bytes <br />";
                            } else {
                                message += "Size of file: " + file.fileSize + " bytes <br />";
                            }
                            if ('mediaType' in file) {
                                message += "Type: " + file.mediaType + "<br />";
                            }
                        }
                    }
                } else {
                    if (fileInput.value == "") {
                        message += "Please browse for one or more files!";
                        message += "<br />Use the Control or Shift key for multiple selection.";
                    } else {
                        message += "Your browser doesn't support the files property!";
                        message += "<br />The path of the selected file: " + fileInput.value;
                    }
                }
                mess = mess + message;
                var info = document.getElementById("info");
                info.innerHTML = mess;

            }
        </script>
    </head>

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
if (isset($_POST['addSubmission'])) {
    $tm = md5(time());
    $fnm1 = $_FILES["inputFileArticle"]["name"];
    $dst1 = "./image/" . $tm . $fnm1;
    $dst_db1 = "image/" . $tm . $fnm1;
    move_uploaded_file($_FILES["inputFileArticle"]["tmp_name"], $dst1);
    $rest = mysqli_query($conn, "INSERT INTO `file_submit` (`file_id`, `file_authod`, `file_art`, `file_content_upload`, `file_date_uploaded`) VALUES (NULL, '$_POST[nameAuthor]','$_POST[nameArticle]','$dst1','" . time() . "') ");
?>
    <script type="text/javascript">
        alert("add successfull");
        window.location.href = window.location.href;
    </script>
<?php
}

?>
