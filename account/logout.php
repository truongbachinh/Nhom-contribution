<?php
session_start();
include "../connect_db.php";


if (!empty($_SESSION['current_user_google'])) {

?>
    <script type="text/javascript">
        window.location = "login.php";
    </script>
<?php
    unset($_SESSION['current_user_google']);
    unset($_SESSION['access_token']);
}
if (!empty($_SESSION['current_user'])) {

?>
    <script type="text/javascript">
        window.location = "login.php";
    </script>

<?php
    unset($_SESSION['current_user']);
}
