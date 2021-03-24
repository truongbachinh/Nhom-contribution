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

    <section class="manage-articles">
        <div class="container m-t-30">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <h4> Manage Articles</h4>
                                </h4>
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

                            </div>
                            <div class="table-responsive p-t-10">
                                <table id="example" class="table text-center" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Article Name</th>
                                        <th>Student Owner</th>
                                        <th>Article Manager</th>
                                        <th>Acount of File</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Article_01</td>
                                        <td>Advance Cloud</td>
                                        <td>Nguyen Van B</td>
                                        <td>Nguyen Van A</td>
                                        <td>2</td>
                                        <td><span class="badge badge-warning">Processing</span></td>
                                        <td>
                                            <a href="" class="btn btn-info" role="button" data-toggle="modal"
                                               data-target="#editArticle"><i class="mdi mdi-pencil-outline"></i>
                                            </a>
                                            <a href="" class="btn btn-danger" role="button" data-toggle="modal"
                                               data-target="#deleteArticle"><i class="mdi mdi-delete"></i> </a>
                                            <a href="" class="btn btn-primary" role="button" data-toggle="modal"
                                               data-target="#detailArticle"><i class="mdi mdi-dots-horizontal"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- Modal edit -->

                                <div class="modal fade" id="editArticle" tabindex="-1" role="dialog"
                                     aria-labelledby="editArticle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editArticle">Edit Article</h5>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                    <div class="form-group">
                                                        <label for="inputNameArticle">Article Name</label>
                                                        <input type="text" class="form-control"
                                                               id="inputNameArticle" name="nameArticle"
                                                               placeholder="Advance Cloud" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputArticleId">Article ID</label>
                                                        <input type="text" class="form-control" id="inputArticleId"
                                                               name="articleId" disabled value="Article_01">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputStatus">Status</label>
                                                        <select class="form-control">
                                                            <option selected="">Choose...</option>
                                                            <option>Processing</option>
                                                            <option>Approved</option>
                                                            <option>Rejected</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Student Owner</label>
                                                        <input type="text" class="form-control" value="Nguyen Van A"
                                                               disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Article Manager</label>
                                                        <input type="text" class="form-control" value="Nguyen Van A"
                                                               disabled>
                                                    </div>

                                                    <div class="model-footer">
                                                        <input type="button" class="btn btn-warning" name="change"
                                                               value="Save Changes">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">
                                                            Close
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <!-- Modal delete -->


                                <div class="modal fade" id="deleteArticle" tabindex="-1" role="dialog"
                                     aria-labelledby="deleteArticle" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-align-top-left" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteArticle">Confirm
                                                    Delete Article
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                This action cannot undo. Are you sure you want to delete
                                                this article?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger">Delete</button>
                                                <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">
                                                    Close
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Detail -->

                                <div class="modal fade" id="detailArticle" tabindex="-1" role="dialog"
                                     aria-labelledby="detailArticle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="detailArticle">Detai
                                                    Infomation Article
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
                                                            <td>Article</td>
                                                            <td>Data Stucture</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Article ID</td>
                                                            <td>Article_01</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Status</td>
                                                            <td>Processing</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Student Owner</td>
                                                            <td>Nguyen Van B</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Article Manager</td>
                                                            <td>Nguyen Van A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Topic</td>
                                                            <td>Advance Computing</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Faculty</td>
                                                            <td>Facutly_01</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Amount of File</td>
                                                            <td>2</td>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "../partials/js_libs.php"; ?>
</body>
</html>