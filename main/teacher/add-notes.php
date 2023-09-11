<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Add Notes</title>

<link rel="shortcut icon" href="../assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="../assets/plugins/feather/feather.css">

<link rel="stylesheet" href="../assets/plugins/icons/flags/flags.css">

<link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<?php include("common.php");?>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col">
<h3 class="page-title">Add-Notes</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="notes.php">Notes</a></li>
<li class="breadcrumb-item active">Add-Notes</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card card-table comman-shadow">
<div class="card-body">



<form>
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Nom de la matière</span></h5>
</div>



<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Note 1<span class="login-danger">*</span></label>
<input type="number" min="1" max="20" class="form-control" value="15">
</div>
</div>


<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Note 2<span class="login-danger">*</span></label>
<input type="number" min="1" max="20" class="form-control" value="15">
</div>
</div>


<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Devoir 1<span class="login-danger">*</span></label>
<input type="number" min="1" max="20" class="form-control" value="18">
</div>
</div>


<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Devoir 2<span class="login-danger">*</span></label>
<input type="number" min="1" max="20" class="form-control" value="12">
</div>
</div>


<div class="col-12 col-sm-4">
<div class="form-group local-forms">


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
<?php include("footer.php");?>
</div>

</div>


<script src="../assets/js/jquery-3.6.0.min.js"></script>

<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/feather.min.js"></script>
<script src="../assets/js/active.js"></script>

<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="../assets/js/script.js"></script>
</body>
</html>