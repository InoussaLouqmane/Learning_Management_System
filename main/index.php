<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Dashboard</title>

    <?php include("links_rel.php"); ?>
</head>

<body>

    <?php include('common.php'); ?>


    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Welcome Admin!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Admin</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Students</h6>
                                    <h3>50055</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Department</h6>
                                    <h3>30+</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

            <?php include('footer.php'); ?>

        </div>

    </div>




    <?php include('links_js.php') ?>

    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>

</body>

</html>