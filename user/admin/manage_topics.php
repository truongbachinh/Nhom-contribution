<?php
include "../../config.php";
$date2 = strtotime("2018-09-21 10:44:01");

?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="author"/>
<meta content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons" name="description"/>
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website"/>
<meta property="og:title"
      content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons"/>
<meta property="og:description"
      content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons"/>
<meta property="og:image"
      content="https://cdn.dribbble.com/users/180706/screenshots/5424805/the_sceens_-_mobile_perspective_mockup_3_-_by_tranmautritam.jpg"/>
<meta property="og:site_name" content="atlas "/>
<title>Manage Topic</title>
<link rel="icon" type="image/x-icon" href="assets/img/logo.png"/>
<link rel="icon" href="assets/img/logo.png" type="image/png" sizes="16x16">
<link rel='stylesheet'
      href='https://d33wubrfki0l68.cloudfront.net/css/478ccdc1892151837f9e7163badb055b8a1833a5/light/assets/vendor/pace/pace.css'/>
<script src='https://d33wubrfki0l68.cloudfront.net/js/3d1965f9e8e63c62b671967aafcad6603deec90c/light/assets/vendor/pace/pace.min.js'></script>
<!--vendors-->
<link rel='stylesheet' type='text/css'
      href='https://d33wubrfki0l68.cloudfront.net/bundles/291bbeead57f19651f311362abe809b67adc3fb5.css'/>
<link rel='stylesheet'
      href='https://d33wubrfki0l68.cloudfront.net/bundles/fc681442cee6ccf717f33ccc57ebf17a4e0792e1.css'/>


<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600" rel="stylesheet">
<!--Material Icons-->
<link rel='stylesheet' type='text/css'
      href='https://d33wubrfki0l68.cloudfront.net/css/548117a22d5d22545a0ab2dddf8940a2e32c04ed/default/assets/fonts/materialdesignicons/materialdesignicons.min.css'/>
<!--Material Icons-->
<link rel='stylesheet' type='text/css'
      href='https://d33wubrfki0l68.cloudfront.net/css/0940f25997c8e50e65e95510b30245d116f639f0/light/assets/fonts/feather/feather-icons.css'/>
<!--Bootstrap + atmos Admin CSS-->
<link rel='stylesheet' type='text/css'
      href='https://d33wubrfki0l68.cloudfront.net/css/16e33a95bb46f814f87079394f72ef62972bd197/light/assets/css/atmos.min.css'/>
<!-- Additional library for page -->

<body class="sidebar-pinned ">
<?php include 'aside.php' ?>
<main class="admin-main">
    <!-- Header -->
    <?php include 'header.php' ?>
    <!-- Session -->

    <section class="manage-topic">
        <div class="container m-t-30">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <h4> Manage Topic </h4>
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
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Topic Name</th>
                                            <th>Topic Description</th>
                                            <th>Topic Start Deadline</th>
                                            <th>Topic End Deadline</th>
                                            <!-- <th>Articles</th> -->
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i = 1;
                                        $res = mysqli_query($conn, "select * from topic");
                                        while ($row = mysqli_fetch_array($res)) {
                                            ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?php echo $row["topic_id"]; ?></td>
                                                <td><?php echo $row["topic_name"]; ?></td>
                                                <td><?php echo $row["topic_description"]; ?></td>
                                                <td><?php echo $row["topic_deadline"]; ?></td>
                                                <td><?php echo $row["topic_deadline"]; ?></td>
                                                <td><span class="badge badge-warning">Processing</span></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a href="" class="btn btn-info btn-get-info" role="button"
                                                           data-id="<?= $row['id'] ?>"><i
                                                                    class="mdi mdi-pencil-outline"></i> </a>
                                                        <a href="" class="btn btn-danger btn-delete-topic" role="button"
                                                           data-id="<?= $row['id'] ?>"><i class="mdi mdi-delete"></i>
                                                        </a>
                                                        <a href="" class="btn btn-primary btn-detail-topic"
                                                           role="button"
                                                           data-id="<?= $row['id'] ?>"><i
                                                                    class="mdi mdi-dots-horizontal"></i> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>

                                    <!-- Modal add faculty -->
                                    <div class="modal fade" id="addTopic" tabindex="-1" role="dialog"
                                         aria-labelledby="addTopic" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addTopic">Add Topic</h5>
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="inputNameTopic">Topic Name</label>
                                                            <input type="text" class="form-control" id="inputNameTopic"
                                                                   name="nameTopic" value="Advnace Coding" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputTopicId">Topic ID</label>
                                                            <input type="text" class="form-control" id="inputTopicId"
                                                                   name="topicId" placeholder="Input Id" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputIdManager">Manager Topic</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Input name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="example-date-input">Date</label>
                                                            <input class="form-control" type="date" value="2011-08-19"
                                                                   id="example-date-input">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputManager">Desciption</label>
                                                            <textarea class="form-control" aria-label="With textarea"
                                                                      spellcheck="false"></textarea>
                                                            <grammarly-extension data-grammarly-shadow-root="true"
                                                                                 style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 3;"
                                                                                 class="cGcvT"></grammarly-extension>
                                                        </div>

                                                        <div class="model-footer">
                                                            <input type="button" class="btn btn-warning" name="change"
                                                                   value="Create Topic">
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

                                    <!-- Modal edit -->

                                    <div class="modal fade" id="editTopic" tabindex="-1" role="dialog"
                                         aria-labelledby="editTopic" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editTopic">Edit Topic</h5>
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="inputNameTopic">Topic Name</label>
                                                            <input type="text" class="form-control" id="topicName"
                                                                   required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputTopicId">Topic ID</label>
                                                            <input type="text" class="form-control" id="topicCode"
                                                                   required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="example-date-input">Deadline</label>
                                                            <input class="form-control" type="datetime-local"
                                                                   id="deadline">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputManager">Description</label>
                                                            <textarea class="form-control" id="description"
                                                                      aria-label="With textarea"
                                                                      spellcheck="false"></textarea>
                                                            <grammarly-extension data-grammarly-shadow-root="true"
                                                                                 style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 3;"
                                                                                 class="cGcvT"></grammarly-extension>
                                                        </div>

                                                        <div class="model-footer">
                                                            <input type="button"
                                                                   class="btn btn-warning btn-update-topic"
                                                                   name="change"
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


                                    <div class="modal fade" id="deleteTopic" tabindex="-1" role="dialog"
                                         aria-labelledby="deleteTopic" aria-hidden="true">
                                        <div class="modal-dialog  modal-dialog-align-top-left" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteTopic">Confirm
                                                        Delete Topic
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    This action cannot undo. Are you sure you want to delete
                                                    this topic?
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

                                    <div class="modal fade" id="detailTopic" tabindex="-1" role="dialog"
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>

<script src="../../js/utils.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function (e) {
        let activeId = null;
        $(document).on('click', ".btn-get-info", function (e) {
            e.preventDefault();
            const topicId = parseInt($(this).data("id"));
            activeId = topicId;
            console.log(topicId)
            Utils.api("get_topic_info", {
                id: topicId
            }).then(response => {
                console.log(response.data.topic_deadline.split(' ')[0])
                $('#topicName').val(response.data.topic_name);
                $('#topicCode').val(response.data.topic_id);
                $('#description').val(response.data.topic_description);
                $('#deadline').val(response.data.topic_deadline.replace(" ", "T").slice(0, -3));
                $('#editTopic').modal();
            }).catch(err => {

            })
        });

        $(document).on('click', ".btn-update-topic", function (e) {
            Utils.api('update_topic_info', {
                id: activeId,
                deadline: $("#deadline").val().replace("T", " ") + ":00",
                topicName: $('#topicName').val(),
                topicCode: $('#topicCode').val(),
                description: $('#description').val()
            }).then(response => {
                $("#editFaculty").modal("hide");
                swal("Notice", "Record is updated successfully!", "success").then(function (e) {
                    location.reload()
                });
            }).catch(err => {
            })
        })

        $(document).on('click', ".btn-delete-topic", function (e) {
            e.preventDefault();
            swal({
                title: "Please confirm",
                text: 'Are sure you want to delete this topic?',
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    Utils.api('delete_topic', {
                        id: $(this).data('id'),
                    }).then(response => {
                        $("#editFaculty").modal("hide");
                        swal("Notice", response.msg, "success").then(function (e) {
                            location.reload();
                        });
                    }).catch(err => {
                    })
                }
            });
        });

        $(document).on('click', '.btn-detail-topic', function (e) {
            e.preventDefault();
            const topicId = parseInt($(this).data("id"));
            Utils.api('get_topic_info', {
                id: topicId
            }).then(response => {
                $('#t-name').text(response.data.topic_name);
                $('#t-id').text(response.data.topic_id);
                $('#t_deadline').text(response.data.topic_deadline)
                $('#t-description').text(response.data.topic_description)
                $('#detailTopic').modal();
            }).catch(err => {

            })
        });
    })
</script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script src='https://d33wubrfki0l68.cloudfront.net/bundles/85bd871e04eb889b6141c1aba0fedfa1a2215991.js'></script>
<!--page specific scripts for demo-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66116118-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'UA-66116118-3');
</script>

<!--Additional Page includes-->
<script src='https://d33wubrfki0l68.cloudfront.net/js/c36248babf70a3c7ad1dcd98d4250fa60842eea9/light/assets/vendor/apexchart/apexcharts.min.js'></script>
<!--chart data for current dashboard-->
<script src='https://d33wubrfki0l68.cloudfront.net/js/d678dabfdc5c3131d492af7ef517fbe46fbbd8e4/light/assets/js/dashboard-01.js'></script>

</body>

</html>