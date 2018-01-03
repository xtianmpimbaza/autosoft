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
                    <a class="active-menu" href="grades.php"><i class="fa fa-qrcode"></i> Grades</a>
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
                    <a class="" href="subject.php"><i class="fa fa-fw fa-file"></i> Subjects</a>
                </li>
            </ul>

        </div>

    </nav>
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Add a subject
                <small>Subjects addition page</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">Data</li>
            </ol>

        </div>

        <div id="page-inner">

            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="card-title">
                                <div class="title">Add a subject</div>
                            </div>
                        </div>
                        <div class="panel-body">

                            <form class="form-horizontal">
                                <input type="hidden" value="addgrade" name="pagefrom"/>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Grade</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="grade" class="form-control"  placeholder="D1 to F9">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext3" class="col-sm-2 control-label">Lower margin value</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="lower_margin" class="form-control" id="sub_name" placeholder="Number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Upper margin value</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="upper_margin" class="form-control" placeholder="Number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" name="submit" class="btn btn-primary" value="Save">
                                    </div>
                                </div>
                            </form>

                            <div class="bg bg-info container-fluid text-center" id="alert_feedback" style="display:none; padding: 20px; font-size: 16px"> Form Submitted Success</div>


                        </div>
                    </div>
                </div>
            </div>

            <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez.com</a></p></footer>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="assets/js/jquery-2.1.1.min.js"></script>

<script src="assets/js/jquery-1.10.2.js"></script>

<script>
    $(function () {

        $('form').on('submit', function (e) {

            e.preventDefault();

//            console.log("time for ajax");
            $.ajax({
                type: 'post',
                url: 'form_actions/saveStudent.php',
                data: $('form').serialize(),
                success: function (data) {
                    console.log(data);
//                    if(data){
                    $('#alert_feedback').fadeIn(200).show();
                    $('#alert_feedback').html(data);
//                        alert(data);
//                    }
                }
            });

        });

    });
</script>
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

    function getStudents() {
//        console.log("Fn reached");

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
