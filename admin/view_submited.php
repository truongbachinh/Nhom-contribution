<?php

include "../connect_db.php";

?>


<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/sb-admin.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">




<div class="widget-box">

    <div class="widget-content nopadding">
        <table class="table table-bordered table-striped">
            <thead>
                <tr style="background-color: red;">
                    <th>Id</th>
                    <th>File content</th>
                    <th>Date Submit</th>
                    <th>Comment</th>
                    <th>Select</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $res = mysqli_query($conn, "select * from file_submit ");
                while ($conn = mysqli_fetch_array($res)) {
                    echo "<td>";
                    echo $i++;
                    echo "</td>";
                    echo "<td>";

                    if (strpos($conn["file_content_upload"], 'image/')) {
                ?>
                        <img src="/contribution_application/user/<?php echo $conn["file_content_upload"]; ?>" height="50" width="50">
                    <?php
                    } else {

                        echo ('no image');
                    }
                    echo "</td>";
                    echo "<td>";
                    echo date("d/m/y H:i", $conn["file_date_uploaded"]);
                    echo "</td>";

                    echo "<td>";
                    ?>
                    <a href="#">Comment</a>
                    <?php
                    echo "</td>";
                    echo "<td>";
                    ?>
                    <a href="#">Mark</a>
                <?php
                    echo "</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

    </div>
</div>