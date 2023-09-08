<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Books</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/feather/feather.css">

<link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include("common.php")?>

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Edit Books</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="library.php">Library</a></li>
<li class="breadcrumb-item active">Edit Books</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form>
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Book Information</span></h5>
</div>

<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Nom du Livre <span class="login-danger">*</span></label>
<input type="text" class="form-control" value="Acoustics">
</div>
</div>

<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Language <span class="login-danger">*</span></label>
<select class="form-control select">
<option>Français</option>
<option>English</option>
<option>Turkish</option>
<option>Chinese</option>
<option>Spanish</option>
<option>Arabic</option>
</select>
</div>
</div>

<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label >Nombre d'exemplaire<span class="login-danger">*</span></label>
<input type="number" min="1" class="form-control" value="Acoustics">
</div>
</div>


<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label >Domaine(s)<span class="login-danger">*</span></label>
<input type="text" min="1" class="form-control" value="Acoustics">
</div>
</div>



<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Type <span class="login-danger">*</span></label>
<select class="form-control select">
<option>Book</option>
<option>Book</option>
<option>DVD</option>
<option>CD</option>
<option>Newspaper</option>
</select>
</div>
</div>

<div class="col-12">
<div class="student-submit">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

</div>
 <?php include('footer.php');?>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/js/active.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>