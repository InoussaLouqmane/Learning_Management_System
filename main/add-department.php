<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Department</title>

<?php include("links_rel.php");?>

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

</head>
<body>

<?php include("common.php");?>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Add Department</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="departments.php">Department</a></li>
<li class="breadcrumb-item active">Add Department</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">

<!-- debut form -->

<form>
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Department Details</span></h5>
</div>

<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Nom de la Filière <span class="login-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label for="ds"> Coordinateur <span class="login-danger">*</span></label>
<select name="" id="ds" class="form-control">
<option value="0">Sélectionnez un coordinateur</option>
<option value="1">Arsene YAta</option>
<option value="2" >Graçias YEWE</option>
</select>
</div>
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
<?php include("footer.php");?>
</div>
</div>

</div>

<?php include("links_js.php");?>

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

</body>
</html>