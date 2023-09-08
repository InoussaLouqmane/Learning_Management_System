<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Form Validation</title>

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
<li class="submenu active">
<a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
<li><a href="form-input-groups.html">Input Groups </a></li>
<li><a href="form-horizontal.html">Horizontal Form </a></li>
<li><a href="form-vertical.html"> Vertical Form </a></li>
<li><a href="form-mask.html"> Form Mask </a></li>
<li><a href="form-validation.html" class="active"> Form Validation </a></li>
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
<div class="col-sm-12">
<h3 class="page-title">Form Validation</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">Form Validation</li>
</ul>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5 class="card-title">Custom Bootstrap Form Validation</h5>
<p class="card-text">
For custom Bootstrap form validation messages, you’ll need to add the <code>novalidate</code> boolean attribute to your form. For server side validation
<a href="https://getbootstrap.com/docs/5.1/forms/overview/" target="_blank">read full documentation</a>.
</p>
</div>
<div class="card-body">
<div class="row">
<div class="col-sm">
<form class="needs-validation" novalidate>
<div class="row">
<div class="col-md-4 mb-3">
<label for="validationCustom01">First name</label>
<input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
<div class="valid-feedback">
Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
<label for="validationCustom02">Last name</label>
<input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
<div class="valid-feedback">
Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
<label for="validationCustomUsername">Username</label>
<div class="input-group">
<span class="input-group-text" id="inputGroupPrepend">@</span>
<input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
<div class="invalid-feedback">
Please choose a username.
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 mb-3">
<label for="validationCustom03">City</label>
<input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
<div class="invalid-feedback">
Please provide a valid city.
</div>
</div>
<div class="col-md-3 mb-3">
<label for="validationCustom04">State</label>
<input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
<div class="invalid-feedback">
Please provide a valid state.
</div>
</div>
<div class="col-md-3 mb-3">
<label for="validationCustom05">Zip</label>
<input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
<div class="invalid-feedback">
Please provide a valid zip.
</div>
</div>
</div>
<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox" value id="invalidCheck" required>
<label class="form-check-label" for="invalidCheck">
Agree to terms and conditions
</label>
<div class="invalid-feedback">
You must agree before submitting.
</div>
</div>
</div>
<button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5 class="card-title">Browser defaults</h5>
<p class="card-text">Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults. Try submitting the form below.</p>
</div>
<div class="card-body">
<div class="row">
<div class="col-sm">
<form>
<div class="row">
<div class="col-md-4 mb-3">
<label for="validationDefault01">First name</label>
<input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" required>
</div>
<div class="col-md-4 mb-3">
<label for="validationDefault02">Last name</label>
<input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
</div>
<div class="col-md-4 mb-3">
<label for="validationDefaultUsername">Username</label>
<div class="input-group">
<span class="input-group-text" id="inputGroupPrepend2">@</span>
<input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 mb-3">
<label for="validationDefault03">City</label>
<input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
</div>
<div class="col-md-3 mb-3">
<label for="validationDefault04">State</label>
<input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
</div>
<div class="col-md-3 mb-3">
<label for="validationDefault05">Zip</label>
<input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
</div>
</div>
<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox" value id="invalidCheck2" required>
<label class="form-check-label" for="invalidCheck2">
Agree to terms and conditions
</label>
</div>
</div>
<button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5 class="card-title">Server side</h5>
<p class="card-text">We recommend using client side validation, but in case you require server side, you can indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code>. Note that <code>.invalid-feedback</code> is also supported with these classes.</p>
</div>
<div class="card-body">
<form>
<div class="row">
<div class="col-md-4 mb-3">
<label for="validationServer01">First name</label>
<input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
<div class="valid-feedback">
Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
<label for="validationServer02">Last name</label>
<input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
<div class="valid-feedback">
Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
<label for="validationServerUsername">Username</label>
<div class="input-group">
<span class="input-group-text" id="inputGroupPrepend3">@</span>
<input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
<div class="invalid-feedback">
Please choose a username.
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 mb-3">
<label for="validationServer03">City</label>
<input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
<div class="invalid-feedback">
Please provide a valid city.
</div>
</div>
<div class="col-md-3 mb-3">
<label for="validationServer04">State</label>
<input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
<div class="invalid-feedback">
Please provide a valid state.
</div>
</div>
<div class="col-md-3 mb-3">
<label for="validationServer05">Zip</label>
<input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
<div class="invalid-feedback">
Please provide a valid zip.
</div>
</div>
</div>
<div class="form-group">
<div class="form-check">
<input class="form-check-input is-invalid" type="checkbox" value id="invalidCheck3" required>
<label class="form-check-label" for="invalidCheck3">
Agree to terms and conditions
</label>
<div class="invalid-feedback">
You must agree before submitting.
</div>
</div>
</div>
<button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>
</div>


<div class="card">
<div class="card-header">
<h5 class="card-title">Supported elements</h5>
<p class="card-text">Form validation styles are also available for bootstrap custom form controls.</p>
</div>
<div class="card-body">
<div class="row">
<div class="col-sm">
<form class="was-validated">
<div class="form-check form-checkbox mb-3">
<input type="checkbox" class="form-check-input" id="customControlValidation1" required>
<label class="form-check-label" for="customControlValidation1">Check this custom checkbox</label>
<div class="invalid-feedback">Example invalid feedback text</div>
</div>
<div class="form-check form-radio">
<input type="radio" class="form-check-input" id="customControlValidation2" name="radio-stacked" required>
<label class="form-check-label" for="customControlValidation2">Toggle this custom radio</label>
</div>
<div class="form-check form-radio mb-3">
<input type="radio" class="form-check-input" id="customControlValidation3" name="radio-stacked" required>
<label class="form-check-label" for="customControlValidation3">Or toggle this other custom radio</label>
<div class="invalid-feedback">More example invalid feedback text</div>
</div>
<div class="form-group">
<select class="form-select" required>
<option value>Open this select menu</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
<div class="invalid-feedback">Example invalid custom select feedback</div>
</div>
<div class="mb-3">
<input type="file" class="form-control" aria-label="file example" required>
<div class="invalid-feedback">Example invalid form file feedback</div>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5 class="card-title">Tooltips</h5>
<p class="card-text">You can swap the <code>.{valid|invalid}-feedback</code> classes for <code>.{valid|invalid}-tooltip</code> classes to display validation feedback in a styled tooltip.</p>
</div>
<div class="card-body">
<form class="needs-validation" novalidate>
<div class="row">
<div class="col-md-4 mb-3">
<label for="validationTooltip01">First name</label>
<input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
<div class="valid-tooltip">
Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
<label for="validationTooltip02">Last name</label>
<input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
<div class="valid-tooltip">
Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
<label for="validationTooltipUsername">Username</label>
<input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" required>
<div class="invalid-tooltip">
Please choose a unique and valid username.
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 mb-3">
<label for="validationTooltip03">City</label>
<input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
<div class="invalid-tooltip">
Please provide a valid city.
</div>
</div>
<div class="col-md-3 mb-3">
<label for="validationTooltip04">State</label>
<input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
<div class="invalid-tooltip">
Please provide a valid state.
</div>
</div>
<div class="col-md-3 mb-3">
<label for="validationTooltip05">Zip</label>
<input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
<div class="invalid-tooltip">
Please provide a valid zip.
</div>
</div>
</div>
<button class="btn btn-primary" type="submit">Submit form</button>
</form>
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

<script src="assets/js/form-validation.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>