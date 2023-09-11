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
<li><a href="icon-fontawesome.html" class="active">Fontawesome Icons</a></li>
<li><a href="icon-feather.html">Feather Icons</a></li>
<li><a href="icon-ionic.html">Ionic Icons</a></li>
<li><a href="icon-material.html">Material Icons</a></li>
<li><a href="icon-pe7.html">Pe7 Icons</a></li>
<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
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
<h3 class="page-title">Fontawesome Icon</h3>
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
<div class="card-title">Fontawesome Icon</div>
</div>
<div class="card-body">
<div class="icons-items">
<ul class="icons-list">
<li><i class="fa fa-address-book" data-bs-toggle="tooltip" title="fa fa-address-book"></i></li>
<li><i class="fa fa-address-card" data-bs-toggle="tooltip" title="fa fa-address-card"></i></li>
<li><i class="fa fa-align-center" data-bs-toggle="tooltip" title="fa fa-align-center"></i></li>
<li><i class="fa fa-align-justify" data-bs-toggle="tooltip" title="fa fa-align-justify"></i></li>
<li><i class="fa fa-align-left" data-bs-toggle="tooltip" title="fa fa-align-left"></i></li>
<li><i class="fa fa-align-right" data-bs-toggle="tooltip" title="fa fa-align-right"></i></li>
<li><i class="fa fa-ambulance" data-bs-toggle="tooltip" title="fa fa-ambulance"></i></li>
<li><i class="fa fa-american-sign-language-interpreting" data-bs-toggle="tooltip" title="fa fa-american-sign-language-interpreting"></i></li>
<li><i class="fa fa-anchor" data-bs-toggle="tooltip" title="fa fa-anchor"></i></li>
<li><i class="fa fa-angle-double-down" data-bs-toggle="tooltip" title="fa fa-angle-double-down"></i></li>
<li><i class="fa fa-angle-double-left" data-bs-toggle="tooltip" title="fa fa-angle-double-left"></i></li>
<li><i class="fa fa-angle-double-right" data-bs-toggle="tooltip" title="fa fa-angle-double-right"></i></li>
<li><i class="fa fa-angle-double-up" data-bs-toggle="tooltip" title="fa fa-angle-double-up"></i></li>
<li><i class="fa fa-angle-down" data-bs-toggle="tooltip" title="fa fa-angle-down"></i></li>
<li><i class="fa fa-angle-left" data-bs-toggle="tooltip" title="fa fa-angle-left"></i></li>
<li><i class="fa fa-angle-right" data-bs-toggle="tooltip" title="fa fa-angle-right"></i></li>
<li><i class="fa fa-angle-up" data-bs-toggle="tooltip" title="fa fa-angle-up"></i></li>
<li><i class="fab fa-apple" data-bs-toggle="tooltip" title="fab fa-apple"></i></li>
<li><i class="fa fa-archive" data-bs-toggle="tooltip" title="fa fa-archive"></i></li>
<li><i class="fas fa-chart-area" data-bs-toggle="tooltip" title="fas fa-chart-area"></i></li>
<li><i class="fa fa-arrow-circle-down" data-bs-toggle="tooltip" title="fa fa-arrow-circle-down"></i></li>
<li><i class="fa fa-arrow-circle-left" data-bs-toggle="tooltip" title="fa fa-arrow-circle-left"></i></li>
<li><i class="fa fa-arrow-circle-right" data-bs-toggle="tooltip" title="fa fa-arrow-circle-right"></i></li>
<li><i class="fa fa-arrow-circle-up" data-bs-toggle="tooltip" title="fa fa-arrow-circle-up"></i></li>
<li><i class="fa fa-arrow-down" data-bs-toggle="tooltip" title="fa fa-arrow-down"></i></li>
<li><i class="fa fa-arrow-left" data-bs-toggle="tooltip" title="fa fa-arrow-left"></i></li>
<li><i class="fa fa-arrow-right" data-bs-toggle="tooltip" title="fa fa-arrow-right"></i></li>
<li><i class="fa fa-arrow-up" data-bs-toggle="tooltip" title="fa fa-arrow-up"></i></li>
<li><i class="fa fa-arrows-alt" data-bs-toggle="tooltip" title="fa fa-arrows-alt"></i></li>
<li><i class="fa fa-assistive-listening-systems" data-bs-toggle="tooltip" title="fa fa-assistive-listening-systems"></i></li>
<li><i class="fa fa-asterisk" data-bs-toggle="tooltip" title="fa fa-asterisk"></i></li>
<li><i class="fa fa-at" data-bs-toggle="tooltip" title="fa fa-at"></i></li>
<li><i class="fa fa-audio-description" data-bs-toggle="tooltip" title="fa fa-audio-description"></i></li>
<li><i class="fa fa-backward" data-bs-toggle="tooltip" title="fa fa-backward"></i></li>
<li><i class="fa fa-balance-scale" data-bs-toggle="tooltip" title="fa fa-balance-scale"></i></li>
<li><i class="fa fa-ban" data-bs-toggle="tooltip" title="fa fa-ban"></i></li>
<li><i class="fa fa-barcode" data-bs-toggle="tooltip" title="fa fa-barcode"></i></li>
<li><i class="fa fa-bars" data-bs-toggle="tooltip" title="fa fa-bars"></i></li>
<li><i class="fa fa-bath" data-bs-toggle="tooltip" title="fa fa-bath"></i></li>
<li><i class="fa fa-battery-empty" data-bs-toggle="tooltip" title="fa fa-battery-empty"></i></li>
<li><i class="fa fa-battery-full" data-bs-toggle="tooltip" title="fa fa-battery-full"></i></li>
<li><i class="fa fa-battery-half" data-bs-toggle="tooltip" title="fa fa-battery-half"></i></li>
<li><i class="fa fa-battery-quarter" data-bs-toggle="tooltip" title="fa fa-battery-quarter"></i></li>
<li><i class="fa fa-battery-three-quarters" data-bs-toggle="tooltip" title="fa fa-battery-three-quarters"></i></li>
<li><i class="fa fa-bed" data-bs-toggle="tooltip" title="fa fa-bed"></i></li>
<li><i class="fa fa-beer" data-bs-toggle="tooltip" title="fa fa-beer"></i></li>
<li><i class="fa fa-bell" data-bs-toggle="tooltip" title="fa fa-bell"></i></li>
<li><i class="fa fa-bell-slash" data-bs-toggle="tooltip" title="fa fa-bell-slash"></i></li>
<li><i class="fa fa-bicycle" data-bs-toggle="tooltip" title="fa fa-bicycle"></i></li>
<li><i class="fa fa-binoculars" data-bs-toggle="tooltip" title="fa fa-binoculars"></i></li>
<li><i class="fa fa-birthday-cake" data-bs-toggle="tooltip" title="fa fa-birthday-cake"></i></li>
<li><i class="fa fa-blind" data-bs-toggle="tooltip" title="fa fa-blind"></i></li>
<li><i class="fa fa-bold" data-bs-toggle="tooltip" title="fa fa-bold"></i></li>
<li><i class="fa fa-bolt" data-bs-toggle="tooltip" title="fa fa-bolt"></i></li>
<li><i class="fa fa-bomb" data-bs-toggle="tooltip" title="fa fa-bomb"></i></li>
<li><i class="fa fa-book" data-bs-toggle="tooltip" title="fa fa-book"></i></li>
<li><i class="fa fa-bookmark" data-bs-toggle="tooltip" title="fa fa-bookmark"></i></li>
<li><i class="fa fa-braille" data-bs-toggle="tooltip" title="fa fa-braille"></i></li>
<li><i class="fa fa-briefcase" data-bs-toggle="tooltip" title="fa fa-briefcase"></i></li>
<li><i class="fa fa-bug" data-bs-toggle="tooltip" title="fa fa-bug"></i></li>
<li><i class="fa fa-building" data-bs-toggle="tooltip" title="fa fa-building"></i></li>
<li><i class="fa fa-bullhorn" data-bs-toggle="tooltip" title="fa fa-bullhorn"></i></li>
<li><i class="fa fa-bullseye" data-bs-toggle="tooltip" title="fa fa-bullseye"></i></li>
<li><i class="fa fa-bus" data-bs-toggle="tooltip" title="fa fa-bus"></i></li>
<li><i class="fa fa-calculator" data-bs-toggle="tooltip" title="fa fa-calculator"></i></li>
<li><i class="fa fa-calendar" data-bs-toggle="tooltip" title="fa fa-calendar"></i></li>
<li><i class="fa fa-camera" data-bs-toggle="tooltip" title="fa fa-camera"></i></li>
<li><i class="fa fa-camera-retro" data-bs-toggle="tooltip" title="fa fa-camera-retro"></i></li>
<li><i class="fa fa-car" data-bs-toggle="tooltip" title="fa fa-car"></i></li>
<li><i class="fa fa-caret-down" data-bs-toggle="tooltip" title="fa fa-caret-down"></i></li>
<li><i class="fa fa-caret-left" data-bs-toggle="tooltip" title="fa fa-caret-left"></i></li>
<li><i class="fa fa-caret-right" data-bs-toggle="tooltip" title="fa fa-caret-right"></i></li>
<li><i class="fa fa-cart-arrow-down" data-bs-toggle="tooltip" title="fa fa-cart-arrow-down"></i></li>
<li><i class="fa fa-cart-plus" data-bs-toggle="tooltip" title="fa fa-cart-plus"></i></li>
<li><i class="fa fa-certificate" data-bs-toggle="tooltip" title="fa fa-certificate"></i></li>
<li><i class="fa fa-check" data-bs-toggle="tooltip" title="fa fa-check"></i></li>
<li><i class="fa fa-check-circle" data-bs-toggle="tooltip" title="fa fa-check-circle"></i></li>
<li><i class="fa fa-chevron-circle-left" data-bs-toggle="tooltip" title="fa fa-chevron-circle-left"></i></li>
<li><i class="fa fa-chevron-circle-right" data-bs-toggle="tooltip" title="fa fa-chevron-circle-right"></i></li>
<li><i class="fa fa-chevron-circle-up" data-bs-toggle="tooltip" title="fa fa-chevron-circle-up"></i></li>
<li><i class="fa fa-chevron-down" data-bs-toggle="tooltip" title="fa fa-chevron-down"></i></li>
<li><i class="fa fa-chevron-left" data-bs-toggle="tooltip" title="fa fa-chevron-left"></i></li>
<li><i class="fa fa-chevron-right" data-bs-toggle="tooltip" title="fa fa-chevron-right"></i></li>
<li><i class="fa fa-chevron-up" data-bs-toggle="tooltip" title="fa fa-chevron-up"></i></li>
<li><i class="fa fa-child" data-bs-toggle="tooltip" title="fa fa-child"></i></li>
<li><i class="fa fa-circle" data-bs-toggle="tooltip" title="fa fa-circle"></i></li>
<li><i class="fa fa-clipboard" data-bs-toggle="tooltip" title="fa fa-clipboard"></i></li>
<li><i class="fa fa-clone" data-bs-toggle="tooltip" title="fa fa-clone"></i></li>
<li><i class="fa fa-cloud" data-bs-toggle="tooltip" title="fa fa-cloud"></i></li>
<li><i class="fa fa-code" data-bs-toggle="tooltip" title="fa fa-code"></i></li>
<li><i class="fa fa-coffee" data-bs-toggle="tooltip" title="fa fa-coffee"></i></li>
<li><i class="fa fa-cog" data-bs-toggle="tooltip" title="fa fa-cog"></i></li>
<li><i class="fa fa-cogs" data-bs-toggle="tooltip" title="fa fa-cogs"></i></li>
<li><i class="fa fa-columns" data-bs-toggle="tooltip" title="fa fa-columns"></i></li>
<li><i class="fa fa-comment" data-bs-toggle="tooltip" title="fa fa-comment"></i></li>
<li><i class="fa fa-compress" data-bs-toggle="tooltip" title="fa fa-compress"></i></li>
<li><i class="fa fa-copyright" data-bs-toggle="tooltip" title="fa fa-copyright"></i></li>
<li><i class="fa fa-credit-card" data-bs-toggle="tooltip" title="fa fa-credit-card"></i></li>
<li><i class="fa fa-desktop" data-bs-toggle="tooltip" title="fa fa-desktop"></i></li>
<li><i class="fa fa-edit" data-bs-toggle="tooltip" title="fa fa-edit"></i></li>
<li><i class="fa fa-eject" data-bs-toggle="tooltip" title="fa fa-eject"></i></li>
<li><i class="fa fa-ellipsis-h" data-bs-toggle="tooltip" title="fa fa-ellipsis-h"></i></li>
<li><i class="fa fa-ellipsis-v" data-bs-toggle="tooltip" title="fa fa-ellipsis-v"></i>
<li><i class="fa fa-envelope" data-bs-toggle="tooltip" title="fa fa-envelope"></i></li>
<li><i class="fa fa-envelope-open" data-bs-toggle="tooltip" title="fa fa-envelope-open"></i></li>
<li><i class="fa fa-envelope-square" data-bs-toggle="tooltip" title="fa fa-envelope-square"></i></li>
<li><i class="fa fa-eraser" data-bs-toggle="tooltip" title="fa fa-eraser"></i></li>
<li><i class="fa fa-exclamation" data-bs-toggle="tooltip" title="fa fa-exclamation"></i></li>
<li><i class="fa fa-exclamation-circle" data-bs-toggle="tooltip" title="fa fa-exclamation-circle"></i></li>
<li><i class="fa fa-exclamation-triangle" data-bs-toggle="tooltip" title="fa fa-exclamation-triangle"></i></li>
<li><i class="fa fa-expand" data-bs-toggle="tooltip" title="fa fa-expand"></i></li>
<li><i class="fa fa-eye" data-bs-toggle="tooltip" title="fa fa-eye"></i></li>
<li><i class="fa fa-eye-slash" data-bs-toggle="tooltip" title="fa fa-eye-slash"></i></li>
<li><i class="fa fa-fast-backward" data-bs-toggle="tooltip" title="fa fa-fast-backward"></i></li>
<li><i class="fa fa-fast-forward" data-bs-toggle="tooltip" title="fa fa-fast-forward"></i></li>
<li><i class="fa fa-fax" data-bs-toggle="tooltip" title="fa fa-fax"></i></li>
<li><i class="fa fa-female" data-bs-toggle="tooltip" title="fa fa-female"></i></li>
<li><i class="fa fa-fighter-jet" data-bs-toggle="tooltip" title="fa fa-fighter-jet"></i></li>
<li><i class="fa fa-file" data-bs-toggle="tooltip" title="fa fa-file"></i></li>
<li><i class="fa fa-fire" data-bs-toggle="tooltip" title="fa fa-fire"></i></li>
<li><i class="fa fa-fire-extinguisher" data-bs-toggle="tooltip" title="fa fa-fire-extinguisher"></i></li>
<li><i class="fa fa-flag" data-bs-toggle="tooltip" title="fa fa-flag"></i></li>
<li><i class="fa fa-flag-checkered" data-bs-toggle="tooltip" title="fa fa-flag-checkered"></i></li>
<li><i class="fa fa-road" data-bs-toggle="tooltip" title="fa fa-road"></i></li>
<li><i class="fa fa-rocket" data-bs-toggle="tooltip" title="fa fa-rocket"></i></li>
<li><i class="fa fa-save" data-bs-toggle="tooltip" title="fa fa-save"></i></li>
<li><i class="fa fa-search" data-bs-toggle="tooltip" title="fa fa-search"></i></li>
<li><i class="fa fa-search-minus" data-bs-toggle="tooltip" title="fa fa-search-minus"></i></li>
<li><i class="fa fa-search-plus" data-bs-toggle="tooltip" title="fa fa-search-plus"></i></li>
<li><i class="fa fa-server" data-bs-toggle="tooltip" title="fa fa-server"></i></li>
<li><i class="fa fa-share" data-bs-toggle="tooltip" title="fa fa-share"></i></li>
<li><i class="fa fa-share-alt" data-bs-toggle="tooltip" title="fa fa-share-alt"></i></li>
<li><i class="fa fa-share-alt-square" data-bs-toggle="tooltip" title="fa fa-share-alt-square"></i></li>
<li><i class="fa fa-share-square" data-bs-toggle="tooltip" title="fa fa-share-square"></i></li>
<li><i class="fa fa-ship" data-bs-toggle="tooltip" title="fa fa-ship"></i></li>
<li><i class="fa fa-shopping-bag" data-bs-toggle="tooltip" title="fa fa-shopping-bag"></i></li>
<li><i class="fa fa-shopping-basket" data-bs-toggle="tooltip" title="fa fa-shopping-basket"></i></li>
<li><i class="fa fa-shopping-cart" data-bs-toggle="tooltip" title="fa fa-shopping-cart"></i></li>
<li><i class="fa fa-shower" data-bs-toggle="tooltip" title="fa fa-shower"></i></li>
<li><i class="fa fa-sign-language" data-bs-toggle="tooltip" title="fa fa-sign-language"></i></li>
<li><i class="fa fa-signal" data-bs-toggle="tooltip" title="fa fa-signal"></i></li>
<li><i class="fa fa-sitemap" data-bs-toggle="tooltip" title="fa fa-sitemap"></i></li>
<li><i class="fa fa-sort" data-bs-toggle="tooltip" title="fa fa-sort"></i></li>
<li><i class="fa fa-sort-down" data-bs-toggle="tooltip" title="fa fa-sort-down"></i></li>
<li><i class="fa fa-square" data-bs-toggle="tooltip" title="fa fa-square"></i></li>
<li><i class="fa fa-star" data-bs-toggle="tooltip" title="fa fa-star"></i></li>
<li><i class="fa fa-star-half" data-bs-toggle="tooltip" title="fa fa-star-half"></i></li>
<li><i class="fa fa-step-backward" data-bs-toggle="tooltip" title="fa fa-step-backward"></i></li>
<li><i class="fa fa-step-forward" data-bs-toggle="tooltip" title="fa fa-step-forward"></i></li>
<li><i class="fa fa-stethoscope" data-bs-toggle="tooltip" title="fa fa-stethoscope"></i></li>
<li><i class="fa fa-sticky-note" data-bs-toggle="tooltip" title="fa fa-sticky-note"></i></li>
<li><i class="fa fa-stop" data-bs-toggle="tooltip" title="fa fa-stop"></i></li>
<li><i class="fa fa-stop-circle" data-bs-toggle="tooltip" title="fa fa-stop-circle"></i></li>
<li><i class="fa fa-street-view" data-bs-toggle="tooltip" title="fa fa-street-view"></i></li>
<li><i class="fa fa-subscript" data-bs-toggle="tooltip" title="fa fa-subscript"></i></li>
<li><i class="fa fa-suitcase" data-bs-toggle="tooltip" title="fa fa-suitcase"></i></li>
<li><i class="fa fa-superscript" data-bs-toggle="tooltip" title="fa fa-superscript"></i></li>
<li><i class="fa fa-table" data-bs-toggle="tooltip" title="fa fa-table"></i></li>
<li><i class="fa fa-tag" data-bs-toggle="tooltip" title="fa fa-tag"></i></li>
<li><i class="fa fa-tags" data-bs-toggle="tooltip" title="fa fa-tags"></i></li>
<li><i class="fa fa-tasks" data-bs-toggle="tooltip" title="fa fa-tasks"></i></li>
<li><i class="fa fa-taxi" data-bs-toggle="tooltip" title="fa fa-taxi"></i></li>
<li><i class="fa fa-terminal" data-bs-toggle="tooltip" title="fa fa-terminal"></i></li>
<li><i class="fa fa-text-height" data-bs-toggle="tooltip" title="fa fa-text-height"></i></li>
<li><i class="fa fa-text-width" data-bs-toggle="tooltip" title="fa fa-text-width"></i></li>
<li><i class="fa fa-th" data-bs-toggle="tooltip" title="fa fa-th"></i></li>
<li><i class="fa fa-th-large" data-bs-toggle="tooltip" title="fa fa-th-large"></i></li>
<li><i class="fa fa-th-list" data-bs-toggle="tooltip" title="fa fa-th-list"></i></li>
<li><i class="fa fa-thermometer" data-bs-toggle="tooltip" title="fa fa-thermometer"></i></li>
<li><i class="fa fa-thermometer-empty" data-bs-toggle="tooltip" title="fa fa-thermometer-empty"></i></li>
<li><i class="fa fa-thermometer-full" data-bs-toggle="tooltip" title="fa fa-thermometer-full"></i></li>
<li><i class="fa fa-thermometer-half" data-bs-toggle="tooltip" title="fa fa-thermometer-half"></i></li>
<li><i class="fa fa-thermometer-quarter" data-bs-toggle="tooltip" title="fa fa-thermometer-quarter"></i></li>
<li><i class="fa fa-thermometer-three-quarters" data-bs-toggle="tooltip" title="fa fa-thermometer-three-quarters"></i></li>
<li><i class="fa fa-thumbs-down" data-bs-toggle="tooltip" title="fa fa-thumbs-down"></i></li>
<li><i class="fa fa-thumbs-up" data-bs-toggle="tooltip" title="fa fa-thumbs-up"></i></li>
<li><i class="fa fa-times" data-bs-toggle="tooltip" title="fa fa-times"></i></li>
<li><i class="fa fa-times-circle" data-bs-toggle="tooltip" title="fa fa-times-circle"></i></li>
<li><i class="fa fa-tint" data-bs-toggle="tooltip" title="fa fa-tint"></i></li>
<li><i class="fa fa-toggle-off" data-bs-toggle="tooltip" title="fa fa-toggle-off"></i></li>
<li><i class="fa fa-toggle-on" data-bs-toggle="tooltip" title="fa fa-toggle-on"></i></li>
<li><i class="fa fa-trademark" data-bs-toggle="tooltip" title="fa fa-trademark"></i></li>
<li><i class="fa fa-train" data-bs-toggle="tooltip" title="fa fa-train"></i></li>
<li><i class="fa fa-transgender" data-bs-toggle="tooltip" title="fa fa-transgender"></i></li>
<li><i class="fa fa-transgender-alt" data-bs-toggle="tooltip" title="fa fa-transgender-alt"></i></li>
<li><i class="fa fa-trash" data-bs-toggle="tooltip" title="fa fa-trash"></i></li>
<li><i class="fa fa-tree" data-bs-toggle="tooltip" title="fa fa-tree"></i></li>
<li><i class="fa fa-trophy" data-bs-toggle="tooltip" title="fa fa-trophy"></i></li>
<li><i class="fa fa-tty" data-bs-toggle="tooltip" title="fa fa-tty"></i></li>
<li><i class="fa fa-tv" data-bs-toggle="tooltip" title="fa fa-tv"></i></li>
<li><i class="fa fa-umbrella" data-bs-toggle="tooltip" title="fa fa-umbrella"></i></li>
<li><i class="fa fa-underline" data-bs-toggle="tooltip" title="fa fa-underline"></i></li>
<li><i class="fa fa-undo" data-bs-toggle="tooltip" title="fa fa-undo"></i></li>
<li><i class="fa fa-universal-access" data-bs-toggle="tooltip" title="fa fa-universal-access"></i></li>
<li><i class="fa fa-university" data-bs-toggle="tooltip" title="fa fa-university"></i></li>
<li><i class="fa fa-unlink" data-bs-toggle="tooltip" title="fa fa-unlink"></i></li>
<li><i class="fa fa-unlock" data-bs-toggle="tooltip" title="fa fa-unlock"></i></li>
<li><i class="fa fa-unlock-alt" data-bs-toggle="tooltip" title="fa fa-unlock-alt"></i></li>
<li><i class="fa fa-upload" data-bs-toggle="tooltip" title="fa fa-upload"></i></li>
<li><i class="fa fa-user-circle" data-bs-toggle="tooltip" title="fa fa-user-circle"></i></li>
<li><i class="fa fa-user-md" data-bs-toggle="tooltip" title="fa fa-user-md"></i></li>
<li><i class="fa fa-user-plus" data-bs-toggle="tooltip" title="fa fa-user-plus"></i></li>
<li><i class="fa fa-user-secret" data-bs-toggle="tooltip" title="fa fa-user-secret"></i></li>
<li><i class="fa fa-user-times" data-bs-toggle="tooltip" title="fa fa-user-times"></i></li>
<li><i class="fa fa-users" data-bs-toggle="tooltip" title="fa fa-users"></i></li>
<li><i class="fa fa-venus" data-bs-toggle="tooltip" title="fa fa-venus"></i></li>
<li><i class="fa fa-venus-double" data-bs-toggle="tooltip" title="fa fa-venus-double"></i></li>
<li><i class="fa fa-venus-mars" data-bs-toggle="tooltip" title="fa fa-venus-mars"></i></li>
<li><i class="fa fa-volume-down" data-bs-toggle="tooltip" title="fa fa-volume-down"></i></li>
<li><i class="fa fa-volume-off" data-bs-toggle="tooltip" title="fa fa-volume-off"></i></li>
<li><i class="fa fa-volume-up" data-bs-toggle="tooltip" title="fa fa-volume-up"></i></li>
<li><i class="fa fa-wheelchair" data-bs-toggle="tooltip" title="fa fa-wheelchair"></i></li>
<li><i class="fa fa-wifi" data-bs-toggle="tooltip" title="fa fa-wifi"></i></li>
<li><i class="fa fa-window-close" data-bs-toggle="tooltip" title="fa fa-window-close"></i></li>
<li><i class="fa fa-window-maximize" data-bs-toggle="tooltip" title="fa fa-window-maximize"></i></li>
<li><i class="fa fa-window-minimize" data-bs-toggle="tooltip" title="fa fa-window-minimize"></i></li>
<li><i class="fa fa-window-restore" data-bs-toggle="tooltip" title="fa fa-window-restore"></i></li>
<li><i class="fa fa-wrench" data-bs-toggle="tooltip" title="fa fa-wrench"></i></li>
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