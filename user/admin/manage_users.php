<?php
include "../../config.php";

$date2 = strtotime("2018-09-21 10:44:01");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../partials/html_header.php"; ?>
</head>
<body class="sidebar-pinned ">
<?php include "../partials/aside.php"; ?>
<main class="admin-main">
    <?php include "../partials/header.php"; ?>

    <!-- PLACE CODE INSIDE THIS AREA -->

    <section class="manage-topic">
        <div class="container m-t-30">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <h4> Manage Users</h4>
                            </div>
                        </div>


                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group has-search">
                                        <span class="fa fa-search form-control-feedback"></span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <a href="" class="btn btn-info float-right" role="button" data-toggle="modal"
                                       data-target="#addTopic"><i class="mdi mdi-clipboard-plus"></i> Add Topic
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive p-t-10">
                                <table id="example" class="table text-center" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Fullname</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Manage</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i = 1;
                                    $res = mysqli_query($conn, "select * from user");
                                    while ($row = mysqli_fetch_array($res)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row["u_id"]; ?></td>
                                            <td><?php echo $row["username"]; ?></td>
                                            <td><?php echo $row["fullname"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["status"]; ?></td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="#" onclick="edit(<?=$row['u_id']?>)" class="btn btn-info" role="button">
                                                        <i class="mdi mdi-pencil-outline"></i>
                                                    </a>
                                                    <a href="#" onclick="remove(<?=$row['u_id']?>)" class="btn btn-danger" role="button">
                                                        <i class="mdi mdi-delete"></i>
                                                    </a>
                                                    <a href="#" onclick="detail(<?=$row['u_id']?>)" class="btn btn-primary" role="button">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal edit -->
            <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="editTopic" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editTopic">Edit User Information</h5>
                            </h5>
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="form-group">
                                    <label for="inp-username">Username</label>
                                    <input type="text" class="form-control" id="inp-username" required>
                                </div>
                                <div class="form-group">
                                    <label for="inp-fullname">Full Name</label>
                                    <input type="text" class="form-control" id="inp-fullname" required>
                                </div>
                                <div class="form-group">
                                    <label for="inp-email">Email</label>
                                    <input type="text" class="form-control" id="inp-email" required>
                                </div>
                                <div class="form-group">
                                    <label for="inp-status">Status</label>
                                    <select id="inp-status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="2">Blocked</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inp-role">Role</label>
                                    <select id="inp-role" class="form-control">
                                        <option value="student">Student</option>
                                        <option value="admin">Admin</option>
                                        <option value="manager-coordinator">Coordinator Manager</option>
                                        <option value="manager-marketing">Marketing Manager</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="inp-password">New Password (Leave blank for unchanged)</label>
                                    <input type="password" placeholder="Leave blank for unchanged..." class="form-control" id="inp-password" required>
                                </div>

                                <div class="model-footer">
                                    <button type="button" class="btn btn-warning btn-save">
                                        Save Changes
                                    </button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Modal Detail -->
            <div class="modal fade" id="userDetail" tabindex="-1" role="dialog"
                 aria-labelledby="detailTopic" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="detailTopic">Detai
                                Infomation Topic
                            </h5>
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="detail">
                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <td>Topic Name</td>
                                        <td id="t-name"></td>
                                    </tr>
                                    <tr>
                                        <td>Topic ID</td>
                                        <td id="t-id"></td>
                                    </tr>
                                    <tr>
                                        <td>Start Date</td>
                                        <td id="t_deadline"></td>
                                    </tr>
                                    <tr>
                                        <td>Deadline</td>
                                        <td>22/20/2021</td>
                                    </tr
                                    <tr>
                                        <td>Description</td>
                                        <td id="t-description">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="button-close float-right">
                                <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">
                                    Close
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
    </section>

    <!--/ PLACE CODE INSIDE THIS AREA -->
</main>
<?php include "../partials/js_libs.php"; ?>

<script>
    function remove(userId) {
        swal({
            title: "Please confirm",
            text: 'Are sure you want to delete this user?',
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                Utils.api('delete_user', {
                    id: userId,
                }).then(response => {
                    $("#editFaculty").modal("hide");
                    swal("Notice", response.msg, "success").then(function (e) {
                        location.reload();
                    });
                }).catch(err => {
                })
            }
        });
    }

    function edit(userId) {
        $('#editUser .btn-save').unbind('click');
        Utils.api("get_user_info", {
            id: userId
        }).then(response => {
            let user = response.data;
            $('#editUser #inp-username').val(user.username);
            $('#editUser #inp-fullname').val(user.fullname);
            $('#editUser #inp-email').val(user.email);
            $('#editUser #inp-status').val(user.status);
            $('#editUser #inp-role').val(user.role);
            $('#editUser').modal();
            $('#editUser .btn-save').click(() => {
                Utils.api("update_user_info", {
                    id: userId,
                    username: $('#editUser #inp-username').val(),
                    fullname: $('#editUser #inp-fullname').val(),
                    email: $('#editUser #inp-email').val(),
                    status: $('#editUser #inp-status').val(),
                    role: $('#editUser #inp-role').val(),
                    newPassword: $('#editUser #inp-password').val()
                }).then((response) => {
                    swal("Notice", response['msg'], "success").then(function (e) {
                        location.reload()
                    });
                });
            });
        });
    }

    function detail(userId) {

    }
</script>
</body>
</html>