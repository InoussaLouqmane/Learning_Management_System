<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Students</title>

<?php include('links_rel.php');?>
<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

</head>
<body>

<?php include('common.php');?>

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col-sm-12">
<div class="page-sub-header">
<h3 class="page-title">Edit Students</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="students.php">Student</a></li>
<li class="breadcrumb-item active">Edit Students</li>
</ul>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card comman-shadow">
<div class="card-body">
    
<form action="" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-12">
<h5 class="form-title student-info">Student Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
</div>

<!--DEBUT input-->

<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Nom <span class="login-danger">*</span></label>
<input class="form-control" name="nom" type="text" placeholder="Enter First Name" required>
</div>
</div>

<!--FIN FORM-->

<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Prénoms<span class="login-danger">*</span></label>
<input class="form-control" type="text" name="prenoms" placeholder="Enter First Name">
</div>
</div>

<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Genre <span class="login-danger">*</span></label>
<select name="genre" class="form-control select">
    <option value="1">Masculin</option>
    <option value="0">Féminin</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms calendar-icon">
<label>Date de Naissance <span class="login-danger">*</span></label>
<input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Filière <span class="login-danger">*</span> </label>
<select name="filiere" class="form-control select" required>
    <option value="ang">Anglais</option>
    <option value="jap">Japonais</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Durée <span class="login-danger">*</span> </label>
<select name="duree" class="form-control select" required>
    <option value="debutant">Débutant</option>
    <option value="intermediaire">Intermédiaire</option>
    <option value="avance">Avancé</option>
</select>
</div>
</div>

<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>E-Mail <span class="login-danger">*</span></label>
<input class="form-control" type="text" placeholder="Enter Email Address">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Téléphone</label>
<input class="form-control" type="text" placeholder="Enter the phone number">
</div>
</div>

<div class="col-12 col-sm-4">
<div class="form-group students-up-files">
<label>Upload Student Photo (150px X 150px)</label>
<div class="uplod">
<label class="file-upload image-upbtn mb-0">
Choose File <input type="file">
</label>
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
<?php include('footer.php');?>
</div>
</div>

</div>

<?php include('links_js.php');?>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

</body>
</html>