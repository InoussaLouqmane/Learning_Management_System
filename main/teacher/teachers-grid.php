<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Teachers</title>

<?php include("links_rel.php");?>

<link rel="stylesheet" href="../assets/plugins/datatables/datatables.min.css">

</head>
<body>
<?php include("common.php");?>
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Teachers</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
<li class="breadcrumb-item active">Teachers</li>
</ul>
</div>
</div>
</div>

<div class="student-group-form">
<div class="row">
<div class="col-lg-3 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by ID ...">
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by Name ...">
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by Phone ...">
</div>
</div>
<div class="col-lg-2">
<div class="search-student-btn">
<button type="btn" class="btn btn-primary">Search</button>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Teachers</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="teachers.php" class="btn btn-outline-gray me-2"><i class="feather-list"></i></a>
<a href="teachers-grid.php" class="btn btn-outline-gray me-2 active"><i class="feather-grid "></i></a>
</div>
</div>
</div>

<div class="student-pro-list">
<div class="row">

<!--

début carte professeur 

-->
<div class="col-xl-3 col-lg-4 col-md-6 d-flex">
<div class="card">
<div class="card-body">
<div class="student-box flex-fill">
<div class="student-img">
<a href="teacher-details.php">
<img class="img-fluid" alt="Students Info" src="../assets/img/profiles/avatar-06.jpg">
</a>
</div>
<div class="student-content pb-0">
<h5><a href="teacher-details.php">Malynne</a></h5>
<h6>Teacher</h6>
</div>
</div>
</div>
</div>
</div>
<!-- 
fin carte professeur
 -->


</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include("footer.php");?>

</div>

</div>

<?php include("links_js.php");?>
<script src="../assets/plugins/datatables/datatables.min.js"></script>

</body>
</html>