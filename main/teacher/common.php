<!--
    Ce fichier contient une partie commune à toutes mes pages de templates...
-->

<div class="main-wrapper">

    <div class="header">

        <div class="header-left">
            <a href="index.php" class="logo">
                <img src="../assets/img/logo.png" alt="Logo">
            </a>
            <a href="index.php" class="logo logo-small">
                <img src="../assets/img/logo-small.png" alt="Logo" width="30" height="30">
            </a>
        </div>

        <div class="menu-toggle">
            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fas fa-bars"></i>
            </a>
        </div>

        <div class="top-nav-search">
            <form>
                <input type="text" class="form-control" placeholder="Search here">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>


        <a class="mobile_btn" id="mobile_btn">
            <i class="fas fa-bars"></i>
        </a>


        <ul class="nav user-menu">
            <li class="nav-item dropdown noti-dropdown language-drop me-2">


            </li>

            <li class="nav-item dropdown noti-dropdown me-2">
                <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                    <img src="../assets/img/icons/header-icon-05.svg" alt>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar avatar-sm flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image"
                                                src="../assets/img/profiles/avatar-02.jpg">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">Carlson Tech</span> has
                                                approved <span class="noti-title">your estimate</span></p>
                                            <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar avatar-sm flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image"
                                                src="../assets/img/profiles/avatar-11.jpg">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">International Software
                                                    Inc</span> has sent you a invoice in the amount of <span
                                                    class="noti-title">$218</span></p>
                                            <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar avatar-sm flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image"
                                                src="../assets/img/profiles/avatar-17.jpg">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">John Hendry</span> sent a
                                                cancellation request <span class="noti-title">Apple iPhone XR</span></p>
                                            <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar avatar-sm flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image"
                                                src="../assets/img/profiles/avatar-13.jpg">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">Mercury Software Inc</span>
                                                added a new product <span class="noti-title">Apple MacBook Pro</span>
                                            </p>
                                            <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="#">View all Notifications</a>
                    </div>
                </div>
            </li>



            <li class="nav-item dropdown has-arrow new-user-menus">
                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    <span class="user-img">
                        <img class="rounded-circle" src="../assets/img/profiles/avatar-01.jpg" width="31"
                            alt="Ryan Taylor">
                        <div class="user-text">
                            <h6>Ryan Taylor</h6>
                            <p class="text-muted mb-0">Professeur</p>
                        </div>
                    </span>
                </a>


                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            <img src="../assets/img/profiles/avatar-01.jpg" alt="User Image"
                                class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                            <h6>Ryan Taylor</h6>
                            <p class="text-muted mb-0">Administrator</p>
                        </div>
                    </div>
                    <a class="dropdown-item" href="profile.php">My Profile</a>
                    <a class="dropdown-item" href="inbox.php">Inbox</a>
                    <a class="dropdown-item" href="login.php">Logout</a>
                </div>
            </li>

        </ul>

    </div>


    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main Menu</span>
                    </li>
                    <li>
                        <a href="teacher-dashboard.php"><i class="feather-grid"></i> <span> Dashboard</span> 
                            <!-- <span
                                    class="menu-arrow">
                            </span> -->
                        </a>
                        <!-- <ul>
                            <li><a href="index.php"> Dashboard Admin </a></li>
                            <li><a href="teacher-dashboard.php"> Dashboard Professeur</a></li>
                            <li><a href="student-dashboard.php"> Dashboard Etudiant</a></li>
                        </ul> -->
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fas fa-graduation-cap"></i> <span> Etudiants</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="#">Listes des Etudiants <span class="menu-arrow"></span></a>
                                <ul>
                                    <li>
                                        <a href="students.php">Anglais</a>
                                    </li>
                            </li>
                            <li>
                                <a href="students.php">Japonais</a>
                            </li>
                    </li>
                    <li> <a href="students.php">Tous</a></li>
                </ul>

                </li>


                <!-- <li><a href="add-student.php">Ajout d'un Etudiant</a></li> -->
                </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Professeurs</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="#">Listes des Professeurs <span class="menu-arrow"></span></a>
                            <ul>
                                <li>
                                    <a href="teachers.php">Anglais</a>
                                </li>
                        </li>
                        <li>
                            <a href="teachers.php">Japonais</a>
                        </li>
                </li>
                <li> <a href="teachers.php">Tous</a></li>
                </ul>

                </li>

                <!-- <li><a href="add-teacher.php">Ajout d'un Professeur</a></li> -->

                </ul>
                </li>
                <li class="submenu">
                    <!-- <a href="#"><i class="fas fa-building"></i> <span> Filières</span> <span
                            class="menu-arrow"></span></a> -->
                    <ul>
                        <li><a href="#"><span> Liste des filières </span> <span class="menu-arrow"></span></a>

                            <ul>
                                <li>
                                    <a href="subjects.php">Anglais</a>
                                </li>
                        </li>
                        <li>
                            <a href="subjects.php">Japonais</a>
                        </li>
                </li>
                <li> <a href="subjects.php">Toutes</a></li>
                </ul>


                </li>
                <li><a href="add-department.php">Ajout d'une Filière</a></li>

                </ul>
                </li>
                <!-- <li class="submenu">
<a href="#"><i class="fas fa-book-reader"></i> <span> Matières </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="subjects.php">Liste des Matières</a></li>
<li><a href="add-subject.php">Ajout d'une Matière</a></li>
<li><a href="edit-subject.php">Subject Edit</a></li>
</ul>
</li> -->
                <!-- 
    Pas besoin de ce submenu pour l'instant.
    <li class="submenu">
<a href="#"><i class="fas fa-clipboard"></i> <span> Invoices</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="invoices.php">Invoices List</a></li>
<li><a href="invoice-grid.php">Invoices Grid</a></li>
<li><a href="add-invoice.php">Add Invoices</a></li>
<li><a href="edit-invoice.php">Edit Invoices</a></li>
<li><a href="view-invoice.php">Invoices Details</a></li>
<li><a href="invoices-settings.php">Invoices Settings</a></li>
</ul>
</li>-->
                <li class="menu-title">
                    <span>Management</span>
                </li>
                <!--<li class="submenu">
<a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="fees-collections.php">Fees Collection</a></li>
<li><a href="expenses.php">Expenses</a></li>
<li><a href="salary.php">Salary</a></li>
<li><a href="add-fees-collection.php">Add Fees</a></li>
<li><a href="add-expenses.php">Add Expenses</a></li>
<li><a href="add-salary.php">Add Salary</a></li>
</ul>
</li>-->
                <!-- <li>
<a href="holiday.php"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
</li>
<li>
<a href="fees.php"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
</li> -->
                <!-- <li>
<a href="exam.php"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
</li> -->
                <li class="submenu">
                    <a href="#"><i class="fas fa-calendar"></i><span> Emploi du temps </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li> <a href="event.php"><span> Anglais </span></a></li>
                        <li> <a href="event.php"><span> Japonais </span></a></li>
                    </ul>


                </li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-sticky-note"></i><span> Notes </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li> <a href="students-note.php"><span> Ajouter une note </span></a></li>
                        <li> <a href="#"><span> Liste des notes </span><span class="menu-arrow"></span></a>
                            <ul>
                            <li> <a href="notes.php"><span> Anglais </span></a></li>
                            <li> <a href="notes.php"><span> Japonais </span></a></li>
                            </ul>
                        </li>
                    </ul>


                </li>

                <!-- <li>
<a href="time-table.php"><i class="fas fa-table"></i> <span>Time Table</span></a>
</li> -->
                <li>
                    <a href="teacher-library.php"><i class="fas fa-book"></i> <span>Library</span></a>
                </li>

                <!-- 

<li class="submenu">
<a href="#"><i class="fa fa-newspaper"></i> <span> Blogs</span>
<span class="menu-arrow"></span>
</a>
<ul>
<li><a href="blog.php">All Blogs</a></li>
<li><a href="add-blog.php">Add Blog</a></li>
<li><a href="edit-blog.php">Edit Blog</a></li>
</ul>

</li> 
<li>
<a href="settings.php"><i class="fas fa-cog"></i> <span>Settings</span></a>
</li>
<li class="menu-title">
<span>Pages</span>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="login.php">Login</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="forgot-password.php">Forgot Password</a></li>
<li><a href="error-404.php">Error Page</a></li>
</ul>
</li>
<li>
<a href="blank-page.php"><i class="fas fa-file"></i> <span>Blank Page</span></a>
</li>-->
                <!-- <li class="menu-title">
<span>Others</span>
</li>
<li>
<a href="sports.php"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
</li>
<li>
<a href="hostel.php"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
</li>
<li>
<a href="transport.php"><i class="fas fa-bus"></i> <span>Transport</span></a>
</li> 
<li class="menu-title">
<span>UI Interface</span>
</li>-->

                <li class="submenu">
                    <!-- <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span
                            class="menu-arrow"></span></a> -->
                    <ul>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="forgot-password.php">Forgot Password</a></li>
                        <li><a href="error-404.php">Error Page</a></li>
                    </ul>
                </li>
                <li>
                    <!-- <a href="blank-page.php"><i class="fas fa-file"></i> <span>Blank Page</span></a> -->
                </li>

                <li class="submenu">
                    <!-- <a href="#"><i class="fab fa-get-pocket"></i> <span>Base UI </span> <span
                            class="menu-arrow"></span></a> -->
                    <ul>
                        <li><a href="alerts.php">Alerts</a></li>
                        <li><a href="accordions.php">Accordions</a></li>
                        <li><a href="avatar.php">Avatar</a></li>
                        <li><a href="badges.php">Badges</a></li>
                        <li><a href="buttons.php">Buttons</a></li>
                        <li><a href="buttongroup.php">Button Group</a></li>
                        <li><a href="breadcrumbs.php">Breadcrumb</a></li>
                        <li><a href="cards.php">Cards</a></li>
                        <li><a href="carousel.php">Carousel</a></li>
                        <li><a href="dropdowns.php">Dropdowns</a></li>
                        <li><a href="grid.php">Grid</a></li>
                        <li><a href="images.php">Images</a></li>
                        <li><a href="lightbox.php">Lightbox</a></li>
                        <li><a href="media.php">Media</a></li>
                        <li><a href="modal.php">Modals</a></li>
                        <li><a href="offcanvas.php">Offcanvas</a></li>
                        <li><a href="pagination.php">Pagination</a></li>
                        <li><a href="popover.php">Popover</a></li>
                        <li><a href="progress.php">Progress Bars</a></li>
                        <li><a href="placeholders.php">Placeholders</a></li>
                        <li><a href="rangeslider.php">Range Slider</a></li>
                        <li><a href="spinners.php">Spinner</a></li>
                        <li><a href="sweetalerts.php">Sweet Alerts</a></li>
                        <li><a href="tab.php">Tabs</a></li>
                        <li><a href="toastr.php">Toasts</a></li>
                        <li><a href="tooltip.php">Tooltip</a></li>
                        <li><a href="typography.php">Typography</a></li>
                        <li><a href="video.php">Video</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <!-- <a href="#"><i data-feather="box"></i> <span>Elements </span> <span class="menu-arrow"></span></a> -->
                    <ul>
                        <li><a href="ribbon.php">Ribbon</a></li>
                        <li><a href="clipboard.php">Clipboard</a></li>
                        <li><a href="drag-drop.php">Drag & Drop</a></li>
                        <li><a href="rating.php">Rating</a></li>
                        <li><a href="text-editor.php">Text Editor</a></li>
                        <li><a href="counter.php">Counter</a></li>
                        <li><a href="scrollbar.php">Scrollbar</a></li>
                        <li><a href="notification.php">Notification</a></li>
                        <li><a href="stickynote.php">Sticky Note</a></li>
                        <li><a href="timeline.php">Timeline</a></li>
                        <li><a href="horizontal-timeline.php">Horizontal Timeline</a></li>
                        <li><a href="form-wizard.php">Form Wizard</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <!-- <a href="#"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span
                            class="menu-arrow"></span></a> -->
                    <ul>
                        <li><a href="chart-apex.php">Apex Charts</a></li>
                        <li><a href="chart-js.php">Chart Js</a></li>
                        <li><a href="chart-morris.php">Morris Charts</a></li>
                        <li><a href="chart-flot.php">Flot Charts</a></li>
                        <li><a href="chart-peity.php">Peity Charts</a></li>
                        <li><a href="chart-c3.php">C3 Charts</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <!-- <a href="#"><i data-feather="award"></i> <span> Icons </span> <span class="menu-arrow"></span></a> -->
                    <ul>
                        <li><a href="icon-fontawesome.php">Fontawesome Icons</a></li>
                        <li><a href="icon-feather.php">Feather Icons</a></li>
                        <li><a href="icon-ionic.php">Ionic Icons</a></li>
                        <li><a href="icon-material.php">Material Icons</a></li>
                        <li><a href="icon-pe7.php">Pe7 Icons</a></li>
                        <li><a href="icon-simpleline.php">Simpleline Icons</a></li>
                        <li><a href="icon-themify.php">Themify Icons</a></li>
                        <li><a href="icon-weather.php">Weather Icons</a></li>
                        <li><a href="icon-typicon.php">Typicon Icons</a></li>
                        <li><a href="icon-flag.php">Flag Icons</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <!-- <a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a> -->
                    <ul>
                        <li><a href="form-basic-inputs.php">Basic Inputs </a></li>
                        <li><a href="form-input-groups.php">Input Groups </a></li>
                        <li><a href="form-horizontal.php">Horizontal Form </a></li>
                        <li><a href="form-vertical.php"> Vertical Form </a></li>
                        <li><a href="form-mask.php"> Form Mask </a></li>
                        <li><a href="form-validation.php"> Form Validation </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <!-- <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a> -->
                    <ul>
                        <li><a href="tables-basic.php">Basic Tables </a></li>
                        <li><a href="data-tables.php">Data Table </a></li>
                    </ul>
                </li>
                </ul>
            </div>
        </div>
    </div>