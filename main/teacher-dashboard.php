<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Dashboard</title>

<?php include('links_rel.php'); ?>

<link rel="stylesheet" href="assets/plugins/simple-calendar/simple-calendar.css">

</head>
<body>
<?php include('common.php'); ?>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<div class="page-sub-header">
<h3 class="page-title">Welcome Jonathan!</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active">Teacher</li>
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
<h6>Total Students</h6>
<h3>40/60</h3>
</div>
<div class="db-icon">
<img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
</div>
</div>
</div>
</div>
</div>

</div>

<!-- debut emplois du temps  -->

<div class="row">

    <div class="col-12 col-lg-12 col-xl-8">
    <div class="row">
    <div class="col-12 col-lg-8 col-xl-8 d-flex">
    <div class="card flex-fill comman-shadow">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col-6">
                <h5 class="card-title">Upcoming Lesson</h5>
                </div>
                <div class="col-6">
                <span class="float-end view-link"><a href="#">View All Courses</a></span>
                </div>
            </div>
        </div>
<div class="pt-3 pb-3">
<div class="table-responsive lesson">

<table class="table table-center">
<tbody>
<tr>
<td>
<div class="date">
<b>Lessons 30</b>
<p>3.1 Ipsuum dolor</p>
<ul class="teacher-date-list">
<li><i class="fas fa-calendar-alt me-2"></i>Sep 5, 2022</li>
<li>|</li>
<li><i class="fas fa-clock me-2"></i>09:00 - 10:00 am</li>
</ul>
</div>
</td>
<td>
<div class="lesson-confirm">
<a href="#">Confirmed</a>
</div>
<button type="submit" class="btn btn-info">Reschedule</button>
</td>
</tr>
<tr>
<td>
<div class="date">
<b>Lessons 30</b>
<p>3.1 Ipsuum dolor</p>
<ul class="teacher-date-list">
<li><i class="fas fa-calendar-alt me-2"></i>Sep 5, 2022</li>
<li>|</li>
<li><i class="fas fa-clock me-2"></i>09:00 - 10:00 am</li>
</ul>
</div>
</td>
<td>
<div class="lesson-confirm">
<a href="#">Confirmed</a>
</div>
<button type="submit" class="btn btn-info">Reschedule</button>
</td>
</tr>
</tbody>
</table>

</div>
</div>
</div>
</div>

<div class="col-12 col-lg-12 col-xl-4 d-flex">
<div class="card flex-fill comman-shadow">
<div class="card-body">
<div id="calendar-doctor" class="calendar-container">
    <div class="calendar"><header>
        <h2 class="month">september 
            <div class="year">
                2023
            </div>
        </h2>
        <a class="simple-calendar-btn btn-prev" href="#">

        </a>
        <a class="simple-calendar-btn btn-next" href="#"></a>
    </header>
    <table>
        <thead>
            <td>sun</td>
            <td>mon</td>
            <td>tue</td>
            <td>wed</td>
            <td>thu</td>
            <td>fri</td>
            <td>sat</td>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="day wrong-month disabled" data-date="2023-08-26T23:00:00.000Z">
                        27
                    </div>
                </td>
                <td>
                    <div class="day wrong-month disabled" data-date="2023-08-28T11:00:00.000Z">
                        28
                    </div>
                </td>
                <td>
                    <div class="day wrong-month disabled" data-date="2023-08-29T11:00:00.000Z">
                        29
                    </div>
                </td>
                <td>
                    <div class="day wrong-month disabled" data-date="2023-08-30T11:00:00.000Z">
                        30
                    </div>
                </td>
                <td>
                    <div class="day wrong-month disabled" data-date="2023-08-31T11:00:00.000Z">
                        31
                    </div>
                </td>
                <td>
                    <div class="day disabled" data-date="2023-09-01T11:00:00.000Z">1</div>
                </td>
                <td>
                    <div class="day disabled" data-date="2023-09-02T11:00:00.000Z">2</div>
                </td>
            </tr>
            <tr>
                <td><div class="day disabled" data-date="2023-09-03T11:00:00.000Z">3</div></td>
                <td><div class="day disabled" data-date="2023-09-04T11:00:00.000Z">4</div></td>
                <td><div class="day disabled" data-date="2023-09-05T11:00:00.000Z">5</div></td>
                <td><div class="day has-event" data-date="2023-09-06T11:00:00.000Z">6</div></td>
                <td><div class="day has-event" data-date="2023-09-07T11:00:00.000Z">7</div></td>
                <td><div class="day today disabled" data-date="2023-09-08T11:00:00.000Z">8</div></td>
                <td><div class="day has-event" data-date="2023-09-09T11:00:00.000Z">9</div></td>
            </tr><tr><td><div class="day disabled" data-date="2023-09-10T11:00:00.000Z">10</div></td>
            <td><div class="day disabled" data-date="2023-09-11T11:00:00.000Z">11</div></td>
            <td><div class="day disabled" data-date="2023-09-12T11:00:00.000Z">12</div></td>
            <td><div class="day disabled" data-date="2023-09-13T11:00:00.000Z">13</div></td>
            <td><div class="day disabled" data-date="2023-09-14T11:00:00.000Z">14</div></td>
            <td><div class="day disabled" data-date="2023-09-15T11:00:00.000Z">15</div></td>
            <td><div class="day disabled" data-date="2023-09-16T11:00:00.000Z">16</div></td>
        </tr>
        <tr>
            <td><div class="day disabled" data-date="2023-09-17T11:00:00.000Z">17</div></td>
            <td><div class="day disabled" data-date="2023-09-18T11:00:00.000Z">18</div></td>
            <td><div class="day disabled" data-date="2023-09-19T11:00:00.000Z">19</div></td>
            <td><div class="day disabled" data-date="2023-09-20T11:00:00.000Z">20</div></td>
            <td><div class="day disabled" data-date="2023-09-21T11:00:00.000Z">21</div></td><td><div class="day disabled" data-date="2023-09-22T11:00:00.000Z">22</div></td><td><div class="day disabled" data-date="2023-09-23T11:00:00.000Z">23</div></td></tr>
            <tr><td><div class="day disabled" data-date="2023-09-24T11:00:00.000Z">24</div></td>
            <td><div class="day disabled" data-date="2023-09-25T11:00:00.000Z">25</div></td>
            <td><div class="day disabled" data-date="2023-09-26T11:00:00.000Z">26</div></td>
            <td><div class="day disabled" data-date="2023-09-27T11:00:00.000Z">27</div></td>
            <td><div class="day disabled" data-date="2023-09-28T11:00:00.000Z">28</div></td>
            <td><div class="day disabled" data-date="2023-09-29T11:00:00.000Z">29</div></td>
            <td><div class="day disabled" data-date="2023-09-30T11:00:00.000Z">30</div></td>
        </tr>
        </tbody>
    </table>
    <div class="event-container">
        <div class="close"></div>
        <div class="event-wrapper"></div>
    </div>
</div>


</div>
</div>
</div>



</div>

<?php include("links_js.php"); ?>

<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<script src="assets/plugins/simple-calendar/jquery.simple-calendar.js"></script>
<script src="assets/js/calander.js"></script>

<script src="assets/js/circle-progress.min.js"></script>


</body>

</html









































































