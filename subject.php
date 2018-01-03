<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content="" name="description"/>
    <meta content="webthemez" name="author"/>
    <title>Bootstrap Admin html Template : Master - WebThemez</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet"/>
    <!-- Morris Chart Styles-->

    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet"/>
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
    <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet"/>
</head>
<body>
<div id="wrapper">

    <?php
    include "include_files/topnav.php";
    //        include "include_files/sidenav.php"
    ?>

    <!--/. NAV TOP  -->
    <!-- /. NAV SIDE  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li>
                    <a class="" href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="students.php"><i class="fa fa-desktop"></i> Students</a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-sitemap"></i> Payments<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="chart.html">Students fees</a>
                        </li>
                        <li>
                            <a href="morris-chart.html">Staff Salaries</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="grades.php"><i class="fa fa-qrcode"></i> Grades</a>
                </li>

                <li>
                    <a href="table.html"><i class="fa fa-table"></i> Staff</a>
                </li>
                <li>
                    <a href="form.html"><i class="fa fa-edit"></i> Results </a>
                </li>
                <li>
                    <a href="form.html"><i class="fa fa-table"></i> Timetable </a>
                </li>


                <li>
                    <a href="#"><i class="fa fa-sitemap"></i>Inventory<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Expenditure</a>
                        </li>
                        <li>
                            <a href="#">Income</a>
                        </li>
                        <li>
                            <a href="#">Second Level Link<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>

                            </ul>

                        </li>
                    </ul>
                </li>
                <li>
                    <a class="active-menu" href="subject.php"><i class="fa fa-fw fa-file"></i> Subjects</a>
                </li>
            </ul>

        </div>

    </nav>
    <div id="page-wrapper">
        <div class="header">
            <div class="container-fluid">
                <h2 class="page-header col-md-10">
                    Subjects
                </h2>
                <span class="col-md-2" style="margin-top: 40px">
                <a href="addSubject.php"> <button class="btn btn-success pull-right"> Add subject </button></a>
            </span>
            </div>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Data</li>
            </ol>

        </div>

        <div id="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div id="students_table" class="table-responsive">


                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            <!-- /. ROW  -->
        </div>
        <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez.com</a></p></footer>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="js/jquery-2.1.1.min.js"></script>

<script src="assets/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Metis Menu Js -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function () {
        getStudents();
    });
</script>
<!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function () {
        hideProgressBar();
        hideempty();
        checkAll();
    });


    function getStudents() {
        console.log("Fn reached");

        token = "all_subjects";
        $.ajax({
            type: "POST",
            url: "form_actions/dataloader.php", //Relative or absolute path to file
            data: {
                token: token
            },
            success: function (data) {
                $('#students_table').html(data);
                $('#dataTables-example').dataTable();
            }
        });

    }

    $("#search_holder").on("input", function (e) {

        dataset_type = document.getElementById("dataset_type").value;
        if (dataset_type == "Farmer") {
            getLoadData(1);

        } else {

            getVAsearchResults(1);
        }

    });


</script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>

</body>
</html>
