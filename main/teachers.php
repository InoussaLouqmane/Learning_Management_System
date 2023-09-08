<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Teachers</title>
<?php include("links_rel.php");?>

<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

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
<?php include("search_bar.php");?>

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
<a href="teachers.php" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
<a href="teachers-grid.php" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="#" class="btn btn-outline-secondary me-2"><i class="fa fa-trash"></i> Delete </a>
<a href="#" class="btn btn-outline-secondary me-2"><i class="fa fa-eye"></i> View All </a>
<a href="add-teacher.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
<th>Filière</th>
<th>Genre</th>
<th>Matière</th>
<th>Téléphone</th>
<th>Email</th>
<th>Date d'Embauche</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
<!--
    un prof
-->    
<tr>
<td>
<div class="form-check check-tables">
<input class="form-check-input" type="checkbox" value="something">
</div>
</td>
<td>09</td>
<td>
<h2 class="table-avatar">
<a href="teacher-details.php">Aaliyah</a>
</h2>
</td>
<td>10</td>
<td>Female</td>
<td>Mathematics</td>
<td>097 3584 5870</td>
<td>Djakarta@gmail.com</td>
<td>17-12-2023</td>
<td class="text-end" style="padding:0;">
<div class="actions" style="padding:0;">
<a href="teacher-details.php" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-teacher.php" class="btn btn-sm bg-danger-light  me-2">
<i class="feather-edit"></i>
</a>
<a href="#" class="btn btn-sm bg-success-light me-2">
<i class="feather-trash"></i>
</a>
</div>
</td>
</tr>

<!-- fin de la partie prof -->


</tbody>
</table>
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

<script src="assets/plugins/datatables/datatables.min.js"></script>

</body>
</html>