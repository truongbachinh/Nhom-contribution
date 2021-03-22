<?php
$conn = mysqli_connect("localhost", "root", "12345", "contribution_appication");
$db_selected = mysqli_select_db($conn, "contribution_appication");

if ($conn->connect_error) {
    die("Connect DB failed" . $conn->connect_error);
}
