<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Inbox</title>

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
<a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
</li>
<li>
<a href="fees.html"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
</li>
<li>
<a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
</li>
<li>
<a href="event.html"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
</li>
<li>
<a href="time-table.html"><i class="fas fa-table"></i> <span>Time Table</span></a>
</li>
<li>
<a href="library.html"><i class="fas fa-book"></i> <span>Library</span></a>
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
<li class="submenu">
<a href="#"><i data-feather="award"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
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
<h3 class="page-title">Inbox</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">Inbox</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-3 col-md-4">
<div class="compose-btn">
<a href="compose.html" class="btn btn-primary btn-block">
Compose
</a>
</div>
<ul class="inbox-menu">
<li class="active">
<a href="#"><i class="fas fa-download"></i> Inbox <span class="mail-count">(5)</span></a>
</li>
<li>
<a href="#"><i class="far fa-star"></i> Important</a>
</li>
<li>
<a href="#"><i class="far fa-paper-plane"></i> Sent Mail</a>
</li>
<li>
<a href="#"><i class="far fa-file-alt"></i> Drafts <span class="mail-count">(13)</span></a>
</li>
<li>
<a href="#"><i class="far fa-trash-alt"></i> Trash</a>
</li>
</ul>
</div>
<div class="col-lg-9 col-md-8">
<div class="card">
<div class="card-body">
<div class="email-header">
<div class="row">
<div class="col top-action-left">
<div class="float-start">
<div class="btn-group dropdown-action">
<button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown">Select <i class="fas fa-angle-down"></i></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">All</a>
<a class="dropdown-item" href="#">None</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Read</a>
<a class="dropdown-item" href="#">Unread</a>
</div>
</div>
<div class="btn-group dropdown-action">
<button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown">Actions <i class="fas fa-angle-down"></i></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Reply</a>
<a class="dropdown-item" href="#">Forward</a>
<a class="dropdown-item" href="#">Archive</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Mark As Read</a>
<a class="dropdown-item" href="#">Mark As Unread</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Delete</a>
</div>
</div>
<div class="btn-group dropdown-action">
<button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-folder"></i> <i class="fas fa-angle-down"></i></button>
<div role="menu" class="dropdown-menu">
<a class="dropdown-item" href="#">Social</a>
<a class="dropdown-item" href="#">Forums</a>
<a class="dropdown-item" href="#">Updates</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Spam</a>
<a class="dropdown-item" href="#">Trash</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">New</a>
</div>
</div>
<div class="btn-group dropdown-action">
<button type="button" data-bs-toggle="dropdown" class="btn btn-white dropdown-toggle"><i class="fas fa-tags"></i> <i class="fas fa-angle-down"></i></button>
<div role="menu" class="dropdown-menu">
<a class="dropdown-item" href="#">Work</a>
<a class="dropdown-item" href="#">Family</a>
<a class="dropdown-item" href="#">Social</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Primary</a>
<a class="dropdown-item" href="#">Promotions</a>
<a class="dropdown-item" href="#">Forums</a>
</div>
</div>
<div class="btn-group dropdown-action mail-search">
<input type="text" placeholder="Search Messages" class="form-control search-message">
</div>
</div>
</div>
<div class="col-auto top-action-right">
<div class="text-end">
<button type="button" title="Refresh" data-bs-toggle="tooltip" class="btn btn-white d-none d-md-inline-block"><i class="fas fa-sync-alt"></i></button>
<div class="btn-group">
<a class="btn btn-white"><i class="fas fa-angle-left"></i></a>
<a class="btn btn-white"><i class="fas fa-angle-right"></i></a>
</div>
</div>
<div class="text-end">
<span class="text-muted d-none d-md-inline-block">Showing 10 of 112 </span>
</div>
</div>
</div>
</div>
<div class="email-content">
<div class="table-responsive">
<table class="table table-inbox table-hover">
<thead>
<tr>
<th colspan="6">
<input type="checkbox" class="checkbox-all">
</th>
</tr>
</thead>
<tbody>
<tr class="unread clickable-row">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="fas fa-star starred"></i></span></td>
<td class="name">John Doe</td>
<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
<td><i class="fas fa-paperclip"></i></td>
<td class="mail-date">13:14</td>
</tr>
<tr class="unread clickable-row">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="far fa-star"></i></span></td>
<td class="name">Envato Account</td>
<td class="subject">Important account security update from Envato</td>
<td></td>
<td class="mail-date">8:42</td>
</tr>
<tr class="clickable-row">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="far fa-star"></i></span></td>
<td class="name">Twitter</td>
<td class="subject">HRMS Bootstrap Admin Template</td>
<td></td>
<td class="mail-date">30 Nov</td>
</tr>
<tr class="unread clickable-row">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="far fa-star"></i></span></td>
<td class="name">Richard Parker</td>
<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
<td></td>
<td class="mail-date">18 Sep</td>
</tr>
<tr class="clickable-row">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="far fa-star"></i></span></td>
<td class="name">John Smith</td>
<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
<td></td>
<td class="mail-date">21 Aug</td>
</tr>
<tr class="clickable-row">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="far fa-star"></i></span></td>
<td class="name">me, Robert Smith (3)</td>
<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
<td></td>
<td class="mail-date">1 Aug</td>
</tr>
<tr class="unread clickable-row">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="far fa-star"></i></span></td>
<td class="name">Codecanyon</td>
<td class="subject">Welcome To Codecanyon</td>
<td></td>
<td class="mail-date">Jul 13</td>
</tr>
<tr class="clickable-row">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="far fa-star"></i></span></td>
<td class="name">Richard Miles</td>
<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
<td><i class="fas fa-paperclip"></i></td>
<td class="mail-date">May 14</td>
</tr>
<tr class="unread clickable-row">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="far fa-star"></i></span></td>
<td class="name">John Smith</td>
<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
<td></td>
<td class="mail-date">11/11/16</td>
</tr>
<tr class="clickable-row">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="fas fa-star starred"></i></span></td>
<td class="name">Mike Litorus</td>
<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
<td></td>
<td class="mail-date">10/31/16</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>