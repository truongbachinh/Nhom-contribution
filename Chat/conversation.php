<?php
include '../connect_db.php';
session_start();
// Perform query
/** @var TYPE_NAME $conn */
$userid = 1;
$partnerId = 2;
$_SESSION["userid"] = $userid;
$_SESSION["partnerId"] = $partnerId;
//
//printf("select DISTINCT tbl_chat.use_id_1 FROM tbl_chat WHERE tbl_chat.use_id_1 in ($userid, $partnerId) and tbl_chat.use_id_2 in ($userid, $partnerId)");
//$res = mysqli_fetch_array($conn->query("select DISTINCT tbl_chat.use_id_1 FROM tbl_chat WHERE tbl_chat.use_id_1 in ($userid, $partnerId) and tbl_chat.use_id_2 in ($userid, $partnerId)"), MYSQLI_ASSOC);
//var_dump(res);
//exit;
//$useridIsOne = $res["use_id_1"] == $userid;
//$_SESSION["useridIsOne"] = $useridIsOne;
?>

<!DOCTYPE html>
<html>
<head>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css"
          rel="stylesheet">
    <link rel="stylesheet" href="./conversation.php">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>::Message::</title>
    <link rel="stylesheet" href="chat.css">
    <script>
        function ajax() {
            var req =  new XMLHttpRequest();
            req.onreadystatechange = function() {
                if (req.readyState == 4 && req.status == 200) {
                    document.getElementById('chat').innerHTML = req.responseText;
                }
            }
            req.open('GET','chat.php', true);
            req.send();
        }
        setInterval(function(){ajax()},1000);
    </script>

</head>
<body>
<div class="container">
    <div class="messaging">
        <div class="inbox_msg">
            <div class="inbox_people">
                <div class="headind_srch">
                    <div class="recent_heading">
                        <h2>Message Recent</h2>
                    </div>
                    <div class="srch_bar">
                        <div class="stylish-input-group">
                            <input type="text" class="search-bar" placeholder="Search">
                            <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span></div>
                    </div>
                </div>
                <div class="inbox_chat">
                    <div class="chat_list active_chat">
                        <div class="chat_people">
                            <div class="chat_ib">
                                <h5>Nguyen Trung Hieu <span class="chat_date">Dec 25</span></h5>
                                <p>Test, which is a new approach to have all solutions
                                    astrology under one roof.</p>
                            </div>
                        </div>
                    </div>
                    <div class="chat_list">
                        <div class="chat_people">
                            <div class="chat_ib">
                                <h5>Nguyen Trung Hieu<span class="chat_date">Dec 25</span></h5>
                                <p>Test, which is a new approach to have all solutions
                                    astrology under one roof.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mesgs">
                <div class="msg_history" id="chat">

                </div>
                <div class="type_msg">
                    <form action="" method="post">
                    <div class="input_msg_write">
                            <label for="message">Chat:</label><br>
                            <textarea name="message" id="message-write" class="write_msg" placeholder="Type a message"></textarea><br>
                    </div>
                    <input type="submit" name="submit" class="msg_send_btn"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></input>
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {

                        $message = $_POST['message'];
                        if ($message != null) {
                            $query = "INSERT INTO tbl_chat (use_id_1, use_id_2, message) VALUES ('$userid','$partnerId', '$message')";
                            $run = $conn->query($query);
                            if ($run) {
                                echo "<embed loop='false' src='plink.wav' hidden='true' autoplay='true'/>";
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>
<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>::Message::</title>-->
<!--    <link rel="stylesheet" href="chat.css">-->
<!--    <script>-->
<!--        function ajax() {-->
<!--            var req =  new XMLHttpRequest();-->
<!--            req.onreadystatechange = function() {-->
<!--                if (req.readyState == 4 && req.status == 200) {-->
<!--                    document.getElementById('chat').innerHTML = req.responseText;-->
<!--                }-->
<!--            }-->
<!--            req.open('GET','chat.php', true);-->
<!--            req.send();-->
<!--        }-->
<!--        setInterval(function(){ajax()},1000);-->
<!--    </script>-->
<!--</head>-->
<!--<body onload="ajax();">-->
<!---->
<!--<div class="page">-->
<!--    <div class="display-box">-->
<!--        <div id="chat"></div>-->
<!--    </div>-->
<!--    <div class="form">-->
<!--        <form action="" method="post">-->
<!--            <label for="message">Chat:</label><br>-->
<!--            <textarea name="message" id="message-write" cols="30" rows="3"></textarea><br>-->
<!--            <input type="submit" name="submit" value="Send">-->
<!--        </form>-->
<!--        --><?php
//        if (isset($_POST['submit'])) {
//
//            $message = $_POST['message'];
//            if ($message != null) {
//                $query = "INSERT INTO tbl_chat (use_id_1, use_id_2, message) VALUES ('$userid','$partnerId', '$message')";
//                $run = $conn->query($query);
//                if ($run) {
//                    echo "<embed loop='false' src='plink.wav' hidden='true' autoplay='true'/>";
//                }
//            }
//        }
//        ?>
<!--    </div>-->
<!--</div>-->
<!---->
<!--</body>-->
<!--</html>-->
<!---->
