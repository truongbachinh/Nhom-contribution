<!-- <link rel="stylesheet" href="./css/admin.css" /> -->
<header class="admin-header">
    <a href="#" class="sidebar-toggle" data-toggleclass="sidebar-open" data-target="body"> </a>
    <nav class=" ml-auto">
        <ul class="nav align-items-center m-r-30">
            <li class=nav-item>
                <div class="d-flex p-all-15  justify-content-between">
                    <a href="#!" class="nar-link"><i class="mdi mdi-24px mdi-chat"></i>
                        <!-- <span class="notification-counter"></span></a> -->
            </li>

            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="d-inline-flex">
                        <div class="avatar avatar-sm avatar-online mr-3">
                            <span class="avatar-title rounded-circle bg-dark">T</span>
                        </div>
                        <div class="d-flex flex-column">
                            <?php
                            if (!empty($_SESSION["current_user"]["username"])) {
                            ?>
                                <div class="d-flex flex-column">
                                    <div class="name-student"><?php echo $_SESSION["current_user"]["username"] ?></div>
                                    <div class="role">Admin Account</div>
                                </div>
                                <div class="dropdown-menu  dropdown-menu-right">
                                    <a class="dropdown-item" onclick="profileButton()"> Profile
                                    </a>
                                    <a class="dropdown-item" onclick="changePassword()"> Reset Password</a>
                                    <a class="dropdown-item" href=""> Help </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" onclick="logoutButton()"> Logout</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu  dropdown-menu-right">
                    <a class="dropdown-item" onclick="profileButton()"> Profile
                    </a>
                    <a class="dropdown-item" href="#"> Reset Password</a>
                    <a class="dropdown-item" href="#"> Help </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" onclick="logoutButton()"> Logout</a>
                </div>
            </li>
        </ul>

    </nav>
</header>
<script type="text/javascript">
    function logoutButton() {
        window.location = "/b/contribution_application/account/logout.php";
    }

    function profileButton() {
        window.location = "./profile.php";
    }
</script>