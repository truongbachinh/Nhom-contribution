<?php
include "../connect_db.php"
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register Now</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="../library/css/bootstrap.min.css">
    <link rel="stylesheet" href="../library/css/font-awesome.min.css">
    <link rel="stylesheet" href="../library/css/owl.carousel.css">
    <link rel="stylesheet" href="../library/css/owl.theme.css">
    <link rel="stylesheet" href="../library/css/main.css">
    <link rel="stylesheet" href="../library/style.css">
    <link rel="stylesheet" href="../library/css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center custom-login">
                <h3>Register Now</h3>

            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="" name="forml" method="post">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submitl" class="btn btn-success">Register</button>
                            </div>
                            <div class="alert alert-success" id="success" style="margin-top: 10px; display: none">
                                <strong>Success!</strong> Account Registration Successfully.
                            </div>
                            <div class="alert alert-danger" id="failure" style="margin-top: 10px; display: none">
                                <strong>Already exist!</strong> The Username Alreadly Exits!
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php
    $button = '';
    if (isset($_POST["submitl"])) {
        $count = 0;
        $res = mysqli_query($conn, "select * from user where username ='$_POST[username]'") or die(mysqli_error($link));
        $count = mysqli_num_rows($res);

        if ($count > 0) {
    ?>
            <script type="text/javascript">
                document.getElementById("success").style.display = "none";
                document.getElementById("failure").style.display = "block";
            </script>
        <?php
        } else {
            mysqli_query($conn, "insert into user (username, password, email) values('$_POST[username]','$_POST[password]','$_POST[email]')");
        ?>
            <script type="text/javascript">
                const a = document.getElementById("success")
                document.getElementById("success").style.display = "block";
                document.getElementById("failure").style.display = "none";
                if (a.style.display == "block") {
                    window.location.href = "./login.php"
                }
            </script>
    <?php
        }
    }
    ?>



</body>

</html>