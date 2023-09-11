<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Time Table</title>

<?php include("links_rel.php") ?>

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
</head>
<body>
<?php include("common.php"); ?>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Add Time Table</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="event.php">Emploi du temps</a></li>
<li class="breadcrumb-item active">Add Time Table</li>
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
<h5 class="form-title"><span>Time Table</span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label> Professeur <span class="login-danger">*</span></label>
<select type="text" class="form-control"> 
    <option value="0">None</option>
    <option value="1">Valery DOUMATE</option>
    <option value="2">Cyrille Gavoedo</option>
    <option value="3">Abed Samon</option>
</select>
</div>
</div>



<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Nom de l'évènement <span class="login-danger">*</span></label>
<input type="text" id="userInput" class="form-control" list="options">
<datalist id="options">
    <option value="Anglais">
    <option value="Japonais">
    <option value="Maintenance">
</datalist>

</div>
</div>

<div class="col-12 col-sm-4">
<div class="form-group local-forms calendar-icon">
<label>Date <span class="login-danger">*</span></label>
<input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
</div>
</div>

<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Start Time <span class="login-danger">*</span></label>
<input type="time" class="form-control">
</div>
</div>

<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>End Time <span class="login-danger">*</span></label>
<input type="time" class="form-control">
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
<?php include("footer.php") ?>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>