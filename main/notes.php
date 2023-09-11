<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Notes</title>

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

<?php include("common.php");?>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">


<div class="row">
<div class="col-sm-12">
<div class="page-sub-header">
<h3 class="page-title">Notes</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="notes.php">Notes</a></li>
<li class="breadcrumb-item active">All Notes</li>
</ul>
</div>
</div>
</div>


<?php include("search_bar.php");?>
<div class="row">
<div class="col-sm-12">
<div class="card card-table comman-shadow">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Students</h3>
</div>

</div>
</div>

<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>
<div class="form-check check-tables">
<input class="form-check-input" type="checkbox" value="something">
</div>
</th>
<th>ID</th>
<th>Nom et Prénoms</th>
<th>Moyenne</th>
<th>Mention</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="form-check check-tables">
<input class="form-check-input" type="checkbox" value="something">
</div>
</td>
<td>1</td>
<td>
<h2 class="table-avatar">
<a href="note-details.php">Nathan Humphries</a>
</h2>
</td>
<td>15.33</td>
<td>Bien</td>
<td class="text-end">
<div class="actions ">
<a href="note-details.php" class="btn btn-sm bg-success-light me-2 ">
<i class="feather-eye"></i>
</a>
</div>
</td>
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
<?php include('footer.php'); ?>

</div>



<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>
<script src="assets/js/active.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>