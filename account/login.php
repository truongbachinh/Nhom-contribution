<?php
session_start();
include "../connect_db.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login For User</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../library/bootstrap.min.css" />
    <link rel="stylesheet" href="../library/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="../library/matrix-login.css" />
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<div class="header">
    <a href="index_admin.php" style="color:white"><i class="icon icon-share-alt"></i><span>Login For Admin</span></a>
</div>

<body>
    <div id="loginbox">
        <form name="forml" class="form-vertical" action="" method="post">
            <div class="control-group normal_text">
                <h3>Login Page</h3>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="Username" name="username" require />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="password" require />
                    </div>
                </div>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember Me
                </label>
            </div>
            <div class="form-actions">
                <span class="pull-left"><input type="submit" name="login" value="Login" class="btn btn-success"></span>
                <span class="pull-right"><a href="register.php" class="flip-link btn btn-info" id="to-recover">Register?</a></span>
            </div>
            <div class="text-center">
                <button type="submit" name="changePassword" class="btn btn-success">Change password</button>
            </div>
        </form>

        <?php
        if (!empty($_SESSION["current_user_google"])) {
            $userCurrent =  $_SESSION["current_user_google"];
        ?>
            <script type="text/javascript">
                window.location = "../user/index.php";
            </script>
        <?php
        } else {

            include "./login_google/goole_connect.php";

        ?>
    </div>
    <h2>
        Login with facebook or google
    </h2>

    &nbsp;
    &nbsp;&nbsp;
    <?php
            if (isset($authUrl)) {
    ?>
        <a href="<?= $authUrl ?>"><img src="../image/log-in-with-google-button.png" title="Google Login" alt="goole login"></a>
    <?php
            }

    ?>
<?php
        }
?>

<?php
if (isset($_POST["login"])) {
    $username = mysqli_real_escape_string($link, $_POST["username"]);
    $password = mysqli_real_escape_string($link, $_POST["password"]);

    $count = 0;
    $res = mysqli_query($link, "select * from user where username='$username' && password='$password'");
    $count = mysqli_num_rows($res);
    if ($count == 0) {
?>
        <script type="text/javascript">
            document.getElementById("failure").style.display = "block";
        </script>
    <?php
    } else {
        $user = mysqli_fetch_assoc($res);
        $userCurrent =  $_SESSION["current_user"] = $user;

    ?>
        <script type="text/javascript">
            window.location = "../user/index.php";
        </script>
<?php
    }
}
?>


</div>

<script src="js/jquery.min.js"></script>
<script src="js/matrix.login.js"></script>

</body>

</html>