<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Filières</title>

<?php include("links_rel.php"); ?>


<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

</head>
<body>


<?php include("common.php"); ?>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Filières</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
<li class="breadcrumb-item active">Filières</li>
</ul>
</div>
</div>
</div>

<?php include("search_bar.php"); ?>


<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Filières</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i>Download</a>
<?php include("options.php");?>
<a href="add-department.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>

<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>
<div class="form-check check-tables">
<input class="form-check-input" type="checkbox" value="something">
</div>
</th>
<th>ID</th>
<th>Nom</th>
<th>Coordinateur</th>
<th>Nombre d'Etudiants</th>
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
<h2>
<a>Anglais</a>
</h2>
</td>
<td>YATA</td>
<td>180</td>
<td class="text-end" style="padding:0;">
<div class="actions">
<a href="subjects.php" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-department.php" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
<a href="#" class="btn btn-sm bg-danger-light">
<i class="feather-trash"></i>
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


<?php include("footer.php"); ?>


</div>

</div>

<?php include("links_js.php"); ?>
<script src="assets/plugins/datatables/datatables.min.js"></script>

</body>
</html>