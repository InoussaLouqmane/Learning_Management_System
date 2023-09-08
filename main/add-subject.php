<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Subject</title>

<?php include("links_rel.php");?>

</head>
<body>

<?php include("common.php");?>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Add Subject</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="subjects.php">Filière</a></li>
<li class="breadcrumb-item active">Add Subject</li>
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
<h5 class="form-title"><span>Subject Information</span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Nom de la matière <span class="login-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Coefficient <span class="login-danger">*</span></label>
<input type="text" class="form-control">
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


<?php include("links_js.php");?>>
</body>
</html>