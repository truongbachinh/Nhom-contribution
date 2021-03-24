<aside class="admin-sidebar">
    <div class="admin-sidebar-brand">
        <!-- begin sidebar branding-->
        <img class="admin-brand-logo">LOGO TEAM </img>
        <!-- end sidebar branding-->
        <div class="ml-auto">
            <!-- sidebar pin-->
            <a href="#" class="admin-pin-sidebar btn-ghost btn btn-rounded-circle"></a>
            <!-- sidebar close for mobile device-->
            <a href="#" class="admin-close-sidebar"></a>
        </div>
    </div>
    <div class="admin-sidebar-wrapper js-scrollbar">
        <ul class="menu">
            <?php if (!$isLoggedIn): ?>
                <li class="menu-item active ">
                    <a href="/account/login.php" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">
                                Login
                            </span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder fe fe-activity "></i>
                        </span>
                    </a>
                </li>
            <?php else: ?>
                <?php if ($currentUser['role'] === "admin"): ?>

                <?php elseif ($currentUser['role'] === "student"): ?>
                    <li class="menu-item active ">
                        <a href="/user/student/" class="menu-link">
                            <span class="menu-label">
                                <span class="menu-name">
                                    Home
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder fe fe-activity "></i>
                            </span>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="/user/student/dashboard.php" class="menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Dashboard
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder fe fe-edit "></i>
                            </span>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Calendar
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder fe fe-calendar"></i>
                            </span>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="/user/student/view_detail_faculty.php" class="menu-link">
                            <span class="menu-label">
                                <span class="menu-name">My Faculty
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder fe fe-folder"></i>
                            </span>
                        </a>
                    </li>
                <?php elseif ($currentUser['role'] === "manager-coordinator"): ?>

                <?php elseif ($currentUser['role'] === "manager-marketing"): ?>

                <?php endif?>

            <?php endif; ?>
        </ul>
    </div>
</aside>