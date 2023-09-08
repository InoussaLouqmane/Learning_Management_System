<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Teachers</title>
<?php include('links_rel.php');?>

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

</head>
<body>

<?php include("common.php"); ?>

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Add Teachers</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="teachers.php">Teachers</a></li>
<li class="breadcrumb-item active">Add Teachers</li>
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
<h5 class="form-title"><span>Infos Générales</span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Nom <span class="login-danger">*</span></label>
<input type="text" class="form-control" >
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Prénoms <span class="login-danger">*</span></label>
<input type="text" class="form-control" >
</div>
</div>

<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Genre <span class="login-danger">*</span></label>
<select class="form-control ">
<option value="1">Masculin</option>
<option value="0">Féminin</option>
</select>
</div>
</div>

<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Filière <span class="login-danger">*</span></label>
<select class="form-control ">
<option value="1">English </option>
<option value="0">Japanese </option>

</select>
</div>
</div>

<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Matière <span class="login-danger">*</span></label>
<select class="form-control ">
<option value="1">English Grammar</option>
<option value="0">Japanese Grammar</option>

</select>
</div>
</div>


<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Téléphone <span class="login-danger">*</span></label>
<input type="text" class="form-control" >
</div>
</div>



<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Email <span class="login-danger">*</span></label>
<input type="email" class="form-control" >
</div>
</div>


<div class="col-12">
<h5 class="form-title"><span>Mot de passe</span></h5>
</div>

<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Mot de Passe <span class="login-danger">*</span></label>
<input type="text" class="form-control" placeholder="Enter Password">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Répétez le mot de passe <span class="login-danger">*</span></label>
<input type="text" class="form-control" placeholder="Repeat Password">
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
<?php include("footer.php");?>
</div>
</div>



<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/feather.min.js"></script>
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/datatables/datatables.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/js/script.js"></script>


</body>
</html>