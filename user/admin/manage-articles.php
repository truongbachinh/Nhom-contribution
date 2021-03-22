<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="author" />
<meta content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons"
    name="description" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title"
    content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons" />
<meta property="og:description"
    content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons" />
<meta property="og:image"
    content="https://cdn.dribbble.com/users/180706/screenshots/5424805/the_sceens_-_mobile_perspective_mockup_3_-_by_tranmautritam.jpg" />
<meta property="og:site_name" content="atlas " />
<title>Manage Articles</title>
<link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
<link rel="icon" href="assets/img/logo.png" type="image/png" sizes="16x16">
<link rel='stylesheet'
    href='https://d33wubrfki0l68.cloudfront.net/css/478ccdc1892151837f9e7163badb055b8a1833a5/light/assets/vendor/pace/pace.css' />
<script
    src='https://d33wubrfki0l68.cloudfront.net/js/3d1965f9e8e63c62b671967aafcad6603deec90c/light/assets/vendor/pace/pace.min.js'></script>
<!--vendors-->
<link rel='stylesheet' type='text/css'
    href='https://d33wubrfki0l68.cloudfront.net/bundles/291bbeead57f19651f311362abe809b67adc3fb5.css' />
<link rel='stylesheet'
    href='https://d33wubrfki0l68.cloudfront.net/bundles/fc681442cee6ccf717f33ccc57ebf17a4e0792e1.css' />


<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600" rel="stylesheet">
<!--Material Icons-->
<link rel='stylesheet' type='text/css'
    href='https://d33wubrfki0l68.cloudfront.net/css/548117a22d5d22545a0ab2dddf8940a2e32c04ed/default/assets/fonts/materialdesignicons/materialdesignicons.min.css' />
<!--Material Icons-->
<link rel='stylesheet' type='text/css'
    href='https://d33wubrfki0l68.cloudfront.net/css/0940f25997c8e50e65e95510b30245d116f639f0/light/assets/fonts/feather/feather-icons.css' />
<!--Bootstrap + atmos Admin CSS-->
<link rel='stylesheet' type='text/css'
    href='https://d33wubrfki0l68.cloudfront.net/css/16e33a95bb46f814f87079394f72ef62972bd197/light/assets/css/atmos.min.css' />
<!-- Additional library for page -->

<body class="sidebar-pinned ">
    <?php include 'aside.php' ?>
    <main class="admin-main">
        <!-- Header -->
        <?php include 'header.php' ?>
        <!-- Session -->

        <section class="manage-articles">
            <div class="container m-t-30">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <h4> Manage Articles</h4> </h4>
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
                                                        <a href="" class="btn btn-info" role="button"
                                                            data-toggle="modal" data-target="#editArticle"><i
                                                                class="mdi mdi-pencil-outline"></i> </a>
                                                        <a href="" class="btn btn-danger" role="button"
                                                            data-toggle="modal" data-target="#deleteArticle"><i
                                                                class="mdi mdi-delete"></i> </a>
                                                        <a href="" class="btn btn-primary" role="button"
                                                            data-toggle="modal" data-target="#detailArticle"><i
                                                                class="mdi mdi-dots-horizontal"></i> </a>
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
                                                                    <input type="text" class="form-control"
                                                                        id="inputArticleId" name="articleId" disabled
                                                                        value="Article_01">
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
                                                                    <input type="text" class="form-control"
                                                                     value="Nguyen Van A" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Article Manager</label>
                                                                    <input type="text" class="form-control"
                                                                     value="Nguyen Van A" disabled>
                                                                </div>

                                                                <div class="model-footer">
                                                                    <input type="button" class="btn btn-warning"
                                                                        name="change" value="Save Changes">
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
                                                    <div class="modal-dialog  modal-dialog-align-top-left"
                                                        role="document">
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
                                                                <button type="button"
                                                                    class="btn btn-danger">Delete</button>
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
                        </div>
        </section>
    </main>
</body>


</body>


<script src='https://d33wubrfki0l68.cloudfront.net/bundles/85bd871e04eb889b6141c1aba0fedfa1a2215991.js'></script>
<!--page specific scripts for demo-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66116118-3"></script>
<script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-66116118-3');</script>

<!--Additional Page includes-->
<script
    src='https://d33wubrfki0l68.cloudfront.net/js/c36248babf70a3c7ad1dcd98d4250fa60842eea9/light/assets/vendor/apexchart/apexcharts.min.js'></script>
<!--chart data for current dashboard-->
<script
    src='https://d33wubrfki0l68.cloudfront.net/js/d678dabfdc5c3131d492af7ef517fbe46fbbd8e4/light/assets/js/dashboard-01.js'></script>

</body>

</html>