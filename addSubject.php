<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content="" name="description"/>
    <meta content="webthemez" name="author"/>
    <title>Bootstrap Admin Theme : Master - WebThemez</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet"/>

    <link href="assets/css/select2.min.css" rel="stylesheet">
    <link href="assets/css/checkbox3.min.css" rel="stylesheet">
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet"/>
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
<!--    datepicker-->
    <link rel="stylesheet" type="text/css" href="css/datepicker.css">
    <link rel="stylesheet" type="text/css" href="less/datepicker.less">
</head>
<body>
<div id="wrapper">
    <?php
    include "include_files/topnav.php";
    ?>
    <!--/. NAV TOP  -->

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
    <!-- /. NAV SIDE  -->
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
                                <input type="hidden" value="addsubject" name="pagefrom"/>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Subject ID</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="sub_id" class="form-control" id="sub_id" placeholder="Subject ID">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext3" class="col-sm-2 control-label">Subject name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="sub_name" class="form-control" id="sub_name" placeholder="Subject name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Subject type</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="sub_type" class="form-control" placeholder="Sciences / Arts">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext3" class="col-sm-2 control-label">Priority</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="priority" class="form-control" placeholder="Priority eg 1, 2, 3 for maths and eng, sci, arts">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Save</button>
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
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->

<script src="assets/js/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

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
<script src="assets/js/select2.full.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".selectbox").select2();
    });
</script>
<!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script>

<script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
    jQuery('#my-date-input').datepicker();
    jQuery('#my-date-input1').datepicker();
    jQuery('#my-date-input2').datepicker();
    jQuery('#my-date-input3').datepicker();
    jQuery('#my-date-from').datepicker();
    jQuery('#my-date-to').datepicker();
    $('#example-getting-started').multiselect();
    $.material.init();
</script>

</body>
</html>
