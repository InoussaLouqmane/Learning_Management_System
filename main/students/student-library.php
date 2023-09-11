<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Library</title>

<link rel="shortcut icon" href="../assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="../assets/plugins/feather/feather.css">

<link rel="stylesheet" href="../assets/plugins/icons/flags/flags.css">

<link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="../assets/plugins/datatables/datatables.min.css">

<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<?php include('common.php');?>

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Library</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
<li class="breadcrumb-item active">Library</li>
</ul>
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
<h3 class="page-title">Library</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<!-- <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="add-books.php" class="btn btn-primary"><i class="fas fa-plus"></i></a> -->
</div>
</div>
</div>

<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>ID</th>
<th>Nom du Livre</th>
<th>Langue</th>
<th>Domaine(s)</th>
<!-- <th>Type</th> -->
<th>Status</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>
<h2>
<a>L'art de faire la guerre</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<!-- <td>Book</td> -->
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<!-- <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a> -->
</div>
<div class="col-auto profile-btn">
<a href="emprunt.php" class="btn btn-primary" style="Color : white">
Emprunter
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

<?php include('footer.php');?>

</div>

</div>


<script src="../assets/js/jquery-3.6.0.min.js"></script>

<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/feather.min.js"></script>

<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="../assets/plugins/datatables/datatables.min.js"></script>

<script src="../assets/js/script.js"></script>
</body>
</html>