<?php
header('Content-Type: application/json');
include "./connect_db.php";

$response = array();
$data = [];
$msg = "";
$error = 0;
$action = @$_POST['action'];


// check login and password
$isLoggedIn = true;
if ($isLoggedIn) {
    // process requests
    switch ($action) {
        case "get_faculty_info":
            $id = $_POST['id'];
            $query = $conn->query("SELECT * FROM `faculty` WHERE `f_id` = $id");
            if ($query->num_rows == 0) {
                $error = 1;
                $msg = "This file is not available.";
            } else {
                $data = $query->fetch_assoc();
            }
            break;
        case "update_faculty_info":
            $id = $_POST['id'];
            $nameFaculty = $_POST['facultyName'];
            $description = $_POST['description'];
            $manager = $_POST['facultyManager'];
            $facultyId = $_POST['facultyId'];
            $stmt = $conn->prepare("UPDATE `faculty` SET 
                `faculty_id`= ?,`f_name`= ?,`f_description`=?,`f_manager`=? WHERE `f_id`=?");
            $stmt->bind_param("ssssi", $facultyId, $nameFaculty, $description, $manager, $id);
            if ($stmt->execute()) {
                $msg = "Record updated successfully";
            } else {
                $error = 400;
                $msg = "Error updating record: " . $conn->error;
            }
            break;
        case "delete_faculty_info":
            $id = $_POST['id'];
            $query = $conn->query("DELETE FROM `faculty` WHERE `f_id` = $id");
            if($query){
                $msg = "Record deleted successfully";
            } else {
                $error = 400;
                $msg = "Error delete record: " . $conn->error;
            }
            break;
        case "get_topic_info":
            $id = $_POST['id'];
            $query = $conn ->query("SELECT * FROM `topic`");
            if($query -> num_rows == 0 ){
                $error = 1;
                $smg = "This file is not available";
            } else {
                $data = $query->fetch_assoc();
            }
            break;
        case "update_topic_info":
            $id = $_POST['id'];
            $topicName = $_POST['topicName'];
            $topicCode = $_POST['topicCode'];
            $deadline = $_POST['deadline'];
            $description = $_POST['description'];
            $stmt = $conn->prepare("UPDATE `topic` SET `topic_id`=?,`topic_name`=?,`topic_description`=?,`topic_deadline`=? WHERE `id`=?");
            $stmt->bind_param("ssssi",$topicCode, $topicName,$description,$deadline, $id);
            if($stmt->execute()){
                $msg = "Record updated successfully";
            } else {
                $error = 400;
                $msg = "Error delete record: " . $conn->error;
            }
            break;
        case "delete_topic":
            $id = $_POST['id'];
            $stmt = $conn->prepare("DELETE FROM `topic` WHERE `id` = ?");
            $stmt->bind_param("i", $id);
            if ($stmt->execute()) {
                $msg = "Successfully deleted topic.";
            } else {
                $error = 400;
                $msg = "Error delete record: " . $conn->error;
            }
            break;
    }
} else {
    $error = 500;
    $msg = "Unauthorized.";
}


$response["msg"] = $msg;
$response["error"] = $error;
$response["data"] = $data;

echo json_encode($response);

?>