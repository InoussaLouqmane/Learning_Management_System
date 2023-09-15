<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Students</title>

    <?php include('links_rel.php'); ?>

    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

</head>

<body>

    <?php include('common.php'); 
        if(isset($_GET['id'])){
        
            $id=$_GET['id'];
            $request = "SELECT * from etudiant where id_Filiere = :id ";
            $response = $pdo->prepare($request);
            $datas =$response->execute(['id'=>$id]);
        
        } else {

            $request = "SELECT * from filiere";
            $response = $pdo->query($request);
            
        }
        $datas = $response->fetchAll();
    ?>
    
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="page-sub-header">
                            <h3 class="page-title">Students</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="students.php">Student</a></li>
                                <li class="breadcrumb-item active">All Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="student-group-form">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by ID ...">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by Name ...">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by Phone ...">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="search-student-btn">
                            <button type="btn" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table comman-shadow">
                        <div class="card-body">

                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="page-title"><?=$data['id_Filiere'];?></h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="students.php" class="btn btn-outline-gray me-2 active"><i
                                                class="feather-list"></i></a>
                                        <a href="students-grid.php" class="btn btn-outline-gray me-2"><i
                                                class="feather-grid"></i></a>
                                        <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i>
                                            Download</a>
                                        <a href="add-student.php" class="btn btn-primary"><i
                                                class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table
                                    class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>
                                                <div class="form-check check-tables">
                                                    <input class="form-check-input" type="checkbox" value="something">
                                                </div>
                                            </th>
                                            <th>ID</th>
                                            <th>Nom et Prénoms</th>
                                            <th>Date de Naissance</th>
                                            <th>Téléphone</th>
                                            <th class="text-center">Email</th>
                                            <th>Date d'inscription</th>
                                            <th class="text-center ">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($datas as $data):?>
                                        <tr>
                                            <td>
                                                <div class="form-check check-tables">
                                                    <input class="form-check-input" type="checkbox" value="something">
                                                </div>
                                            </td>
                                            <td><?= $data['id_Etudiant'] ?></td>
                                            <td>
                                                <h2 class="table-avatar">   
                                                    <a href="student-details.php?"> <?= $data['nomEtudiant'] ?> </a>
                                                </h2>
                                            </td>
                                            <td> <?= $data['date_Naissance'] ?> </td>

                                            <td> <?= $data['telephone'] ?> </td>
                                            <td> <?=$data['email'] ?></td>
                                            <td><?= $data['date_inscription'] ?></td>
                                            <td class="text-end">
                                                <div class="actions ">
                                                    <a href="student-details.php"
                                                        class="btn btn-sm bg-success-light me-2 ">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="edit-student.php" class="btn btn-sm bg-danger-light">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-sm bg-danger-light">
                                                        <i class="feather-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <?php include('footer.php'); ?>

    </div>

    <?php include('links_js.php'); ?>

    <script src="assets/plugins/datatables/datatables.min.js"></script>

</body>

</html>