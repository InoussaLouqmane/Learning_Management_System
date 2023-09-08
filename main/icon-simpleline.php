<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Basic Inputs</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/feather/feather.css">

<link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/simpleline/simple-line-icons.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="index.html" class="logo">
<img src="assets/img/logo.png" alt="Logo">
</a>
<a href="index.html" class="logo logo-small">
<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
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
<li class="nav-item dropdown language-drop me-2">
<a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
<img src="assets/img/icons/header-icon-01.svg" alt>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="javascript:;"><i class="flag flag-lr me-2"></i>English</a>
<a class="dropdown-item" href="javascript:;"><i class="flag flag-bl me-2"></i>Francais</a>
<a class="dropdown-item" href="javascript:;"><i class="flag flag-cn me-2"></i>Turkce</a>
</div>
</li>

<li class="nav-item dropdown noti-dropdown me-2">
<a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
<img src="assets/img/icons/header-icon-05.svg" alt>
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
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
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

<li class="nav-item zoom-screen me-2">
<a href="#" class="nav-link header-nav-list">
<img src="assets/img/icons/header-icon-04.svg" alt>
</a>
</li>

<li class="nav-item dropdown has-arrow new-user-menus">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img">
<img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor">
<div class="user-text">
<h6>Ryan Taylor</h6>
<p class="text-muted mb-0">Administrator</p>
</div>
</span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">
<h6>Ryan Taylor</h6>
<p class="text-muted mb-0">Administrator</p>
</div>
</div>
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="inbox.html">Inbox</a>
<a class="dropdown-item" href="login.html">Logout</a>
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
<li class="submenu">
<a href="#"><i class="feather-grid"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="index.html">Admin Dashboard</a></li>
<li><a href="teacher-dashboard.html">Teacher Dashboard</a></li>
<li><a href="student-dashboard.html">Student Dashboard</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="students.html">Student List</a></li>
<li><a href="student-details.html">Student View</a></li>
<li><a href="add-student.html">Student Add</a></li>
<li><a href="edit-student.html">Student Edit</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="teachers.html">Teacher List</a></li>
<li><a href="teacher-details.html">Teacher View</a></li>
<li><a href="add-teacher.html">Teacher Add</a></li>
<li><a href="edit-teacher.html">Teacher Edit</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="departments.html">Department List</a></li>
<li><a href="add-department.html">Department Add</a></li>
<li><a href="edit-department.html">Department Edit</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="subjects.html">Subject List</a></li>
<li><a href="add-subject.html">Subject Add</a></li>
<li><a href="edit-subject.html">Subject Edit</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-clipboard"></i> <span> Invoices</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="invoices.html">Invoices List</a></li>
<li><a href="invoice-grid.html">Invoices Grid</a></li>
<li><a href="add-invoice.html">Add Invoices</a></li>
<li><a href="edit-invoice.html">Edit Invoices</a></li>
<li><a href="view-invoice.html">Invoices Details</a></li>
<li><a href="invoices-settings.html">Invoices Settings</a></li>
</ul>
</li>
<li class="menu-title">
<span>Management</span>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="fees-collections.html">Fees Collection</a></li>
<li><a href="expenses.html">Expenses</a></li>
<li><a href="salary.html">Salary</a></li>
<li><a href="add-fees-collection.html">Add Fees</a></li>
<li><a href="add-expenses.html">Add Expenses</a></li>
<li><a href="add-salary.html">Add Salary</a></li>
</ul>
</li>
<li>
<a href="index.html"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
</li>
<li>
<a href="index.html"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
</li>
<li>
<a href="index.html"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
</li>
<li>
<a href="index.html"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
</li>
<li>
<a href="index.html"><i class="fas fa-table"></i> <span>Time Table</span></a>
</li>
<li>
<a href="index.html"><i class="fas fa-book"></i> <span>Library</span></a>
</li>
<li class="submenu">
<a href="#"><i class="fa fa-newspaper"></i> <span> Blogs</span>
<span class="menu-arrow"></span>
</a>
<ul>
<li><a href="blog.html">All Blogs</a></li>
<li><a href="add-blog.html">Add Blog</a></li>
<li><a href="edit-blog.html">Edit Blog</a></li>
</ul>
</li>
<li>
<a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a>
</li>
<li class="menu-title">
<span>Pages</span>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="login.html">Login</a></li>
<li><a href="register.html">Register</a></li>
<li><a href="forgot-password.html">Forgot Password</a></li>
<li><a href="error-404.html">Error Page</a></li>
</ul>
</li>
<li>
<a href="blank-page.html"><i class="fas fa-file"></i> <span>Blank Page</span></a>
</li>
<li class="menu-title">
<span>Others</span>
</li>
<li>
<a href="sports.html"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
</li>
<li>
<a href="hostel.html"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
</li>
<li>
<a href="transport.html"><i class="fas fa-bus"></i> <span>Transport</span></a>
</li>
<li class="menu-title">
<span>UI Interface</span>
</li>
<li class="submenu">
<a href="#"><i class="fab fa-get-pocket"></i> <span>Base UI </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="alerts.html">Alerts</a></li>
<li><a href="accordions.html">Accordions</a></li>
<li><a href="avatar.html">Avatar</a></li>
<li><a href="badges.html">Badges</a></li>
<li><a href="buttons.html">Buttons</a></li>
<li><a href="buttongroup.html">Button Group</a></li>
<li><a href="breadcrumbs.html">Breadcrumb</a></li>
<li><a href="cards.html">Cards</a></li>
<li><a href="carousel.html">Carousel</a></li>
<li><a href="dropdowns.html">Dropdowns</a></li>
<li><a href="grid.html">Grid</a></li>
<li><a href="images.html">Images</a></li>
<li><a href="lightbox.html">Lightbox</a></li>
<li><a href="media.html">Media</a></li>
<li><a href="modal.html">Modals</a></li>
<li><a href="offcanvas.html">Offcanvas</a></li>
<li><a href="pagination.html">Pagination</a></li>
<li><a href="popover.html">Popover</a></li>
<li><a href="progress.html">Progress Bars</a></li>
<li><a href="placeholders.html">Placeholders</a></li>
<li><a href="rangeslider.html">Range Slider</a></li>
<li><a href="spinners.html">Spinner</a></li>
<li><a href="sweetalerts.html">Sweet Alerts</a></li>
<li><a href="tab.html">Tabs</a></li>
<li><a href="toastr.html">Toasts</a></li>
<li><a href="tooltip.html">Tooltip</a></li>
<li><a href="typography.html">Typography</a></li>
<li><a href="video.html">Video</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i data-feather="box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="ribbon.html">Ribbon</a></li>
<li><a href="clipboard.html">Clipboard</a></li>
<li><a href="drag-drop.html">Drag & Drop</a></li>
<li><a href="rating.html">Rating</a></li>
<li><a href="text-editor.html">Text Editor</a></li>
<li><a href="counter.html">Counter</a></li>
<li><a href="scrollbar.html">Scrollbar</a></li>
<li><a href="notification.html">Notification</a></li>
<li><a href="stickynote.html">Sticky Note</a></li>
<li><a href="timeline.html">Timeline</a></li>
<li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
<li><a href="form-wizard.html">Form Wizard</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="chart-apex.html">Apex Charts</a></li>
<li><a href="chart-js.html">Chart Js</a></li>
<li><a href="chart-morris.html">Morris Charts</a></li>
<li><a href="chart-flot.html">Flot Charts</a></li>
<li><a href="chart-peity.html">Peity Charts</a></li>
<li><a href="chart-c3.html">C3 Charts</a></li>
</ul>
</li>
<li class="submenu active">
<a href="#"><i data-feather="award"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
<li><a href="icon-feather.html">Feather Icons</a></li>
<li><a href="icon-ionic.html">Ionic Icons</a></li>
<li><a href="icon-material.html">Material Icons</a></li>
<li><a href="icon-pe7.html">Pe7 Icons</a></li>
<li><a href="icon-simpleline.html" class="active">Simpleline Icons</a></li>
<li><a href="icon-themify.html">Themify Icons</a></li>
<li><a href="icon-weather.html">Weather Icons</a></li>
<li><a href="icon-typicon.html">Typicon Icons</a></li>
<li><a href="icon-flag.html">Flag Icons</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
<li><a href="form-input-groups.html">Input Groups </a></li>
<li><a href="form-horizontal.html">Horizontal Form </a></li>
<li><a href="form-vertical.html"> Vertical Form </a></li>
<li><a href="form-mask.html"> Form Mask </a></li>
<li><a href="form-validation.html"> Form Validation </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="tables-basic.html">Basic Tables </a></li>
<li><a href="data-tables.html">Data Table </a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
<ul>
<li class="submenu">
<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
<li class="submenu">
<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="javascript:void(0);">Level 3</a></li>
<li><a href="javascript:void(0);">Level 3</a></li>
</ul>
</li>
<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
</ul>
</li>
<li>
<a href="javascript:void(0);"> <span>Level 1</span></a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col">
<h3 class="page-title">Simpleline Icon</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">Components</li>
</ul>
</div>
</div>
</div>

<div class="row">

<div class="col-md-12">
<div class="card">
<div class="card-header">
<div class="card-title">Simpleline Icons</div>
</div>
<div class="card-body">
<div class="icons-items">
<ul class="icons-list">
<li><i class="si si-user" data-bs-toggle="tooltip" title="si-user"></i></li>
<li><i class="si si-people" data-bs-toggle="tooltip" title="si-people"></i></li>
<li><i class="si si-user-female" data-bs-toggle="tooltip" title="si-user-female"></i></li>
<li><i class="si si-user-follow" data-bs-toggle="tooltip" title="si-user-follow"></i></li>
<li><i class="si si-user-following" data-bs-toggle="tooltip" title="si-user-following"></i></li>
<li><i class="si si-user-unfollow" data-bs-toggle="tooltip" title="si-user-unfollow"></i></li>
<li><i class="si si-login" data-bs-toggle="tooltip" title="si-login"></i></li>
<li><i class="si si-logout" data-bs-toggle="tooltip" title="si-logout"></i></li>
<li><i class="si si-emotsmile" data-bs-toggle="tooltip" title="si-emotsmile"></i></li>
<li><i class="si si-phone" data-bs-toggle="tooltip" title="si-phone"></i></li>
<li><i class="si si-call-end" data-bs-toggle="tooltip" title="si-call-end"></i></li>
<li><i class="si si-call-in" data-bs-toggle="tooltip" title="si-call-in"></i></li>
<li><i class="si si-call-out" data-bs-toggle="tooltip" title="si-call-out"></i></li>
<li><i class="si si-map" data-bs-toggle="tooltip" title="si-map"></i></li>
<li><i class="si si-location-pin" data-bs-toggle="tooltip" title="si-location-pin"></i></li>
<li><i class="si si-direction" data-bs-toggle="tooltip" title="si-direction"></i></li>
<li><i class="si si-directions" data-bs-toggle="tooltip" title="si-directions"></i></li>
<li><i class="si si-compass" data-bs-toggle="tooltip" title="si-compass"></i></li>
<li><i class="si si-layers" data-bs-toggle="tooltip" title="si-layers"></i></li>
<li><i class="si si-menu" data-bs-toggle="tooltip" title="si-menu"></i></li>
<li><i class="si si-list" data-bs-toggle="tooltip" title="si-list"></i></li>
<li><i class="si si-options-vertical" data-bs-toggle="tooltip" title="si-options-vertical"></i></li>
<li><i class="si si-options" data-bs-toggle="tooltip" title="si-options"></i></li>
<li><i class="si si-arrow-down" data-bs-toggle="tooltip" title="si-arrow-down"></i></li>
<li><i class="si si-arrow-left" data-bs-toggle="tooltip" title="si-arrow-left"></i></li>
<li><i class="si si-arrow-right" data-bs-toggle="tooltip" title="si-arrow-right"></i></li>
<li><i class="si si-arrow-up" data-bs-toggle="tooltip" title="si-arrow-up"></i></li>
<li><i class="si si-arrow-up-circle" data-bs-toggle="tooltip" title="si-arrow-up-circle"></i></li>
<li><i class="si si-arrow-left-circle" data-bs-toggle="tooltip" title="si-arrow-left-circle"></i></li>
<li><i class="si si-arrow-right-circle" data-bs-toggle="tooltip" title="si-arrow-right-circle"></i></li>
<li><i class="si si-arrow-down-circle" data-bs-toggle="tooltip" title="si-arrow-down-circle"></i></li>
<li><i class="si si-check" data-bs-toggle="tooltip" title="si-check"></i></li>
<li><i class="si si-clock" data-bs-toggle="tooltip" title="si-clock"></i></li>
<li><i class="si si-plus" data-bs-toggle="tooltip" title="si-plus"></i></li>
<li><i class="si si-minus" data-bs-toggle="tooltip" title="si-minus"></i></li>
<li><i class="si si-close" data-bs-toggle="tooltip" title="si-close"></i></li>
<li><i class="si si-event" data-bs-toggle="tooltip" title="si-event"></i></li>
<li><i class="si si-exclamation" data-bs-toggle="tooltip" title="si-exclamation"></i></li>
<li><i class="si si-organization" data-bs-toggle="tooltip" title="si-organization"></i></li>
<li><i class="si si-trophy" data-bs-toggle="tooltip" title="si-trophy"></i></li>
<li><i class="si si-screen-smartphone" data-bs-toggle="tooltip" title="si-screen-smartphone"></i></li>
<li><i class="si si-screen-desktop" data-bs-toggle="tooltip" title="si-screen-desktop"></i></li>
<li><i class="si si-plane" data-bs-toggle="tooltip" title="si-plane"></i></li>
<li><i class="si si-notebook" data-bs-toggle="tooltip" title="si-notebook"></i></li>
<li><i class="si si-mustache" data-bs-toggle="tooltip" title="si-mustache"></i></li>
<li><i class="si si-mouse" data-bs-toggle="tooltip" title="si-mouse"></i></li>
<li><i class="si si-magnet" data-bs-toggle="tooltip" title="si-magnet"></i></li>
<li><i class="si si-energy" data-bs-toggle="tooltip" title="si-energy"></i></li>
<li><i class="si si-disc" data-bs-toggle="tooltip" title="si-disc"></i></li>
<li><i class="si si-cursor" data-bs-toggle="tooltip" title="si-cursor"></i></li>
<li><i class="si si-cursor-move" data-bs-toggle="tooltip" title="si-cursor-move"></i></li>
<li><i class="si si-crop" data-bs-toggle="tooltip" title="si-crop"></i></li>
<li><i class="si si-chemistry" data-bs-toggle="tooltip" title="si-chemistry"></i></li>
<li><i class="si si-speedometer" data-bs-toggle="tooltip" title="si-speedometer"></i></li>
<li><i class="si si-shield" data-bs-toggle="tooltip" title="si-shield"></i></li>
<li><i class="si si-screen-tablet" data-bs-toggle="tooltip" title="si-screen-tablet"></i></li>
<li><i class="si si-magic-wand" data-bs-toggle="tooltip" title="si-magic-wand"></i></li>
<li><i class="si si-hourglass" data-bs-toggle="tooltip" title="si-hourglass"></i></li>
<li><i class="si si-graduation" data-bs-toggle="tooltip" title="si-graduation"></i></li>
<li><i class="si si-ghost" data-bs-toggle="tooltip" title="si-ghost"></i></li>
<li><i class="si si-game-controller" data-bs-toggle="tooltip" title="si-game-controller"></i></li>
<li><i class="si si-fire" data-bs-toggle="tooltip" title="si-fire"></i></li>
<li><i class="si si-eyeglass" data-bs-toggle="tooltip" title="si-eyeglass"></i></li>
<li><i class="si si-envelope-open" data-bs-toggle="tooltip" title="si-envelope-open"></i></li>
<li><i class="si si-envelope-letter" data-bs-toggle="tooltip" title="si-envelope-letter"></i></li>
<li><i class="si si-bell" data-bs-toggle="tooltip" title="si-bell"></i></li>
<li><i class="si si-badge" data-bs-toggle="tooltip" title="si-badge"></i></li>
<li><i class="si si-anchor" data-bs-toggle="tooltip" title="si-anchor"></i></li>
<li><i class="si si-wallet" data-bs-toggle="tooltip" title="si-wallet"></i></li>
<li><i class="si si-vector" data-bs-toggle="tooltip" title="si-vector"></i></li>
<li><i class="si si-speech" data-bs-toggle="tooltip" title="si-speech"></i></li>
<li><i class="si si-puzzle" data-bs-toggle="tooltip" title="si-puzzle"></i></li>
<li><i class="si si-printer" data-bs-toggle="tooltip" title="si-printer"></i></li>
<li><i class="si si-present" data-bs-toggle="tooltip" title="si-present"></i></li>
<li><i class="si si-playlist" data-bs-toggle="tooltip" title="si-playlist"></i></li>
<li><i class="si si-pin" data-bs-toggle="tooltip" title="si-pin"></i></li>
<li><i class="si si-picture" data-bs-toggle="tooltip" title="si-picture"></i></li>
<li><i class="si si-handbag" data-bs-toggle="tooltip" title="si-handbag"></i></li>
<li><i class="si si-globe-alt" data-bs-toggle="tooltip" title="si-globe-alt"></i></li>
<li><i class="si si-globe" data-bs-toggle="tooltip" title="si-globe"></i></li>
<li><i class="si si-folder-alt" data-bs-toggle="tooltip" title="si-folder-alt"></i></li>
<li><i class="si si-folder" data-bs-toggle="tooltip" title="si-folder"></i></li>
<li><i class="si si-film" data-bs-toggle="tooltip" title="si-film"></i></li>
<li><i class="si si-feed" data-bs-toggle="tooltip" title="si-feed"></i></li>
<li><i class="si si-drop" data-bs-toggle="tooltip" title="si-drop"></i></li>
<li><i class="si si-drawer" data-bs-toggle="tooltip" title="si-drawer"></i></li>
<li><i class="si si-docs" data-bs-toggle="tooltip" title="si-docs"></i></li>
<li><i class="si si-doc" data-bs-toggle="tooltip" title="si-doc"></i></li>
<li><i class="si si-diamond" data-bs-toggle="tooltip" title="si-diamond"></i></li>
<li><i class="si si-cup" data-bs-toggle="tooltip" title="si-cup"></i></li>
<li><i class="si si-calculator" data-bs-toggle="tooltip" title="si-calculator"></i></li>
<li><i class="si si-bubbles" data-bs-toggle="tooltip" title="si-bubbles"></i></li>
<li><i class="si si-briefcase" data-bs-toggle="tooltip" title="si-briefcase"></i></li>
<li><i class="si si-book-open" data-bs-toggle="tooltip" title="si-book-open"></i></li>
<li><i class="si si-basket-loaded" data-bs-toggle="tooltip" title="si-basket-loaded"></i></li>
<li><i class="si si-basket" data-bs-toggle="tooltip" title="si-basket"></i></li>
<li><i class="si si-bag" data-bs-toggle="tooltip" title="si-bag"></i></li>
<li><i class="si si-action-undo" data-bs-toggle="tooltip" title="si-action-undo"></i></li>
<li><i class="si si-action-redo" data-bs-toggle="tooltip" title="si-action-redo"></i></li>
<li><i class="si si-wrench" data-bs-toggle="tooltip" title="si-wrench"></i></li>
<li><i class="si si-umbrella" data-bs-toggle="tooltip" title="si-umbrella"></i></li>
<li><i class="si si-trash" data-bs-toggle="tooltip" title="si-trash"></i></li>
<li><i class="si si-tag" data-bs-toggle="tooltip" title="si-tag"></i></li>
<li><i class="si si-support" data-bs-toggle="tooltip" title="si-support"></i></li>
<li><i class="si si-frame" data-bs-toggle="tooltip" title="si-frame"></i></li>
<li><i class="si si-size-fullscreen" data-bs-toggle="tooltip" title="si-size-fullscreen"></i></li>
<li><i class="si si-size-actual" data-bs-toggle="tooltip" title="si-size-actual"></i></li>
<li><i class="si si-shuffle" data-bs-toggle="tooltip" title="si-shuffle"></i></li>
<li><i class="si si-share-alt" data-bs-toggle="tooltip" title="si-share-alt"></i></li>
<li><i class="si si-share" data-bs-toggle="tooltip" title="si-share"></i></li>
<li><i class="si si-rocket" data-bs-toggle="tooltip" title="si-rocket"></i></li>
<li><i class="si si-question" data-bs-toggle="tooltip" title="si-question"></i></li>
<li><i class="si si-pie-chart" data-bs-toggle="tooltip" title="si-pie-chart"></i></li>
<li><i class="si si-pencil" data-bs-toggle="tooltip" title="si-pencil"></i></li>
<li><i class="si si-note" data-bs-toggle="tooltip" title="si-note"></i></li>
<li><i class="si si-loop" data-bs-toggle="tooltip" title="si-loop"></i></li>
<li><i class="si si-home" data-bs-toggle="tooltip" title="si-home"></i></li>
<li><i class="si si-grid" data-bs-toggle="tooltip" title="si-grid"></i></li>
<li><i class="si si-graph" data-bs-toggle="tooltip" title="si-graph"></i></li>
<li><i class="si si-microphone" data-bs-toggle="tooltip" title="si-microphone"></i></li>
<li><i class="si si-music-tone-alt" data-bs-toggle="tooltip" title="si-music-tone-alt"></i></li>
<li><i class="si si-music-tone" data-bs-toggle="tooltip" title="si-music-tone"></i></li>
<li><i class="si si-earphones-alt" data-bs-toggle="tooltip" title="si-earphones-alt"></i></li>
<li><i class="si si-earphones" data-bs-toggle="tooltip" title="si-earphones"></i></li>
<li><i class="si si-equalizer" data-bs-toggle="tooltip" title="si-equalizer"></i></li>
<li><i class="si si-like" data-bs-toggle="tooltip" title="si-like"></i></li>
<li><i class="si si-dislike" data-bs-toggle="tooltip" title="si-dislike"></i></li>
<li><i class="si si-control-start" data-bs-toggle="tooltip" title="si-control-start"></i></li>
<li><i class="si si-control-rewind" data-bs-toggle="tooltip" title="si-control-rewind"></i></li>
<li><i class="si si-control-play" data-bs-toggle="tooltip" title="si-control-play"></i></li>
<li><i class="si si-control-pause" data-bs-toggle="tooltip" title="si-control-pause"></i></li>
<li><i class="si si-control-forward" data-bs-toggle="tooltip" title="si-control-forward"></i></li>
<li><i class="si si-control-end" data-bs-toggle="tooltip" title="si-control-end"></i></li>
<li><i class="si si-volume-1" data-bs-toggle="tooltip" title="si-volume-1"></i></li>
<li><i class="si si-volume-2" data-bs-toggle="tooltip" title="si-volume-2"></i></li>
<li><i class="si si-volume-off" data-bs-toggle="tooltip" title="si-volume-off"></i></li>
<li><i class="si si-calendar" data-bs-toggle="tooltip" title="si-calendar"></i></li>
<li><i class="si si-bulb" data-bs-toggle="tooltip" title="si-bulb"></i></li>
<li><i class="si si-chart" data-bs-toggle="tooltip" title="si-chart"></i></li>
<li><i class="si si-ban" data-bs-toggle="tooltip" title="si-ban"></i></li>
<li><i class="si si-bubble" data-bs-toggle="tooltip" title="si-bubble"></i></li>
<li><i class="si si-camrecorder" data-bs-toggle="tooltip" title="si-camrecorder"></i></li>
<li><i class="si si-camera" data-bs-toggle="tooltip" title="si-camera"></i></li>
<li><i class="si si-cloud-download" data-bs-toggle="tooltip" title="si-cloud-download"></i></li>
<li><i class="si si-cloud-upload" data-bs-toggle="tooltip" title="si-cloud-upload"></i></li>
<li><i class="si si-envelope" data-bs-toggle="tooltip" title="si-envelope"></i></li>
<li><i class="si si-eye" data-bs-toggle="tooltip" title="si-eye"></i></li>
<li><i class="si si-flag" data-bs-toggle="tooltip" title="si-flag"></i></li>
<li><i class="si si-heart" data-bs-toggle="tooltip" title="si-heart"></i></li>
<li><i class="si si-info" data-bs-toggle="tooltip" title="si-info"></i></li>
<li><i class="si si-key" data-bs-toggle="tooltip" title="si-key"></i></li>
<li><i class="si si-link" data-bs-toggle="tooltip" title="si-link"></i></li>
<li><i class="si si-lock" data-bs-toggle="tooltip" title="si-lock"></i></li>
<li><i class="si si-lock-open" data-bs-toggle="tooltip" title="si-lock-open"></i></li>
<li><i class="si si-magnifier" data-bs-toggle="tooltip" title="si-magnifier"></i></li>
<li><i class="si si-magnifier-add" data-bs-toggle="tooltip" title="si-magnifier-add"></i></li>
<li><i class="si si-magnifier-remove" data-bs-toggle="tooltip" title="si-magnifier-remove"></i></li>
<li><i class="si si-paper-clip" data-bs-toggle="tooltip" title="si-paper-clip"></i></li>
<li><i class="si si-paper-plane" data-bs-toggle="tooltip" title="si-paper-plane"></i></li>
<li><i class="si si-power" data-bs-toggle="tooltip" title="si-power"></i></li>
<li><i class="si si-refresh" data-bs-toggle="tooltip" title="si-refresh"></i></li>
<li><i class="si si-reload" data-bs-toggle="tooltip" title="si-reload"></i></li>
<li><i class="si si-settings" data-bs-toggle="tooltip" title="si-settings"></i></li>
<li><i class="si si-star" data-bs-toggle="tooltip" title="si-star"></i></li>
<li><i class="si si-symbol-female" data-bs-toggle="tooltip" title="si-symbol-female"></i></li>
<li><i class="si si-symbol-male" data-bs-toggle="tooltip" title="si-symbol-male"></i></li>
<li><i class="si si-target" data-bs-toggle="tooltip" title="si-target"></i></li>
<li><i class="si si-credit-card" data-bs-toggle="tooltip" title="si-credit-card"></i></li>
<li><i class="si si-paypal" data-bs-toggle="tooltip" title="si-paypal"></i></li>
<li><i class="si si-social-tumblr" data-bs-toggle="tooltip" title="si-social-tumblr"></i></li>
<li><i class="si si-social-twitter" data-bs-toggle="tooltip" title="si-social-twitter"></i></li>
<li><i class="si si-social-facebook" data-bs-toggle="tooltip" title="si-social-facebook"></i></li>
<li><i class="si si-social-instagram" data-bs-toggle="tooltip" title="si-social-instagram"></i></li>
<li><i class="si si-social-linkedin" data-bs-toggle="tooltip" title="si-social-linkedin"></i></li>
<li><i class="si si-social-pinterest" data-bs-toggle="tooltip" title="si-social-pinterest"></i></li>
<li><i class="si si-social-github" data-bs-toggle="tooltip" title="si-social-github"></i></li>
<li><i class="si si-social-google" data-bs-toggle="tooltip" title="si-social-google"></i></li>
<li><i class="si si-social-reddit" data-bs-toggle="tooltip" title="si-social-reddit"></i></li>
<li><i class="si si-social-skype" data-bs-toggle="tooltip" title="si-social-skype"></i></li>
<li><i class="si si-social-dribbble" data-bs-toggle="tooltip" title="si-social-dribbble"></i></li>
<li><i class="si si-social-behance" data-bs-toggle="tooltip" title="si-social-behance"></i></li>
<li><i class="si si-social-foursqare" data-bs-toggle="tooltip" title="si-social-foursqare"></i></li>
<li><i class="si si-social-soundcloud" data-bs-toggle="tooltip" title="si-social-soundcloud"></i></li>
<li><i class="si si-social-spotify" data-bs-toggle="tooltip" title="si-social-spotify"></i></li>
<li><i class="si si-social-stumbleupon" data-bs-toggle="tooltip" title="si-social-stumbleupon"></i></li>
<li><i class="si si-social-youtube" data-bs-toggle="tooltip" title="si-social-youtube"></i></li>
<li><i class="si si-social-dropbox" data-bs-toggle="tooltip" title="si-social-dropbox"></i></li>
<li><i class="si si-social-vkontakte" data-bs-toggle="tooltip" title="si-social-vkontakte"></i></li>
<li><i class="si si-social-steam" data-bs-toggle="tooltip" title="si-social-steam"></i></li>
</ul>
</div>
</div>
</div>
</div>

</div>
</div>

<footer>
<p>Copyright © 2022 Dreamguys.</p>
</footer>

</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>