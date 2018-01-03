<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
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
                    <a class="active-menu" href="students.php"><i class="fa fa-desktop"></i> Students</a>
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
                    <a href="subject.php"><i class="fa fa-fw fa-file"></i> Subjects</a>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Add a student
                <small>Students addition platform</small>
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
                                <div class="title">Add students</div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal">
                                <input type="hidden" value="addstudent" name="pagefrom"/>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Firstname</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="fname" class="form-control" id="firstname" placeholder="first name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext3" class="col-sm-2 control-label">Lastname</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="lname" class="form-control" id="lastname" placeholder="last name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Date of birth</label>
                                    <div class="col-sm-10">
                                        <input type="" id="my-date-input" name="dob" class="form-control" placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext3" class="col-sm-2 control-label">Class</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="class" class="form-control" id="student_class" placeholder="class">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Mother's name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="mom" id="mothers_name" placeholder="Mother's name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext3" class="col-sm-2 control-label">Father's name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="dad" class="form-control" id="fathers_name" placeholder="Farther's name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Previous school</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="prevsch" class="form-control" id="previous_school" placeholder="previous school">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext3" class="col-sm-2 control-label">How you knew us</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="awemode" class="form-control" id="awareness_mode" placeholder="Awareness mode">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Expected years</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="expected" class="form-control" id="inputEmail3" placeholder="Years expected to stay in this school">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext3" class="col-sm-2 control-label">Admission date</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="admdate" class="form-control" id="my-date-input2" placeholder="Date of admission dd-mm-yyyy">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">today</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="today" class="form-control" id="my-date-input3" placeholder="Todays date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext3" class="col-sm-2 control-label">Sponsor</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="sponsor" class="form-control" id="sponsor" placeholder="Sponsor">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Religion</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="religion" class="form-control" id="religion" placeholder="Studens religion">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext3" class="col-sm-2 control-label">Tribe</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="tribe" class="form-control" id="tribe" placeholder="tribe">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Home adress</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="homeaddress" class="form-control" id="home_address" placeholder="Home address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext3" class="col-sm-2 control-label">Current adress</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="currentaddress" class="form-control" id="current_address" placeholder="Where he/she stays now">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Previous aggregates</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="prevagg" class="form-control" id="prev_agg" placeholder="Previous aggregates">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext3" class="col-sm-2 control-label">Previous class</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="prevclass" class="form-control" id="prev_class" placeholder="previous class">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext3" class="col-sm-2 control-label">House</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="house" class="form-control" id="house" placeholder="House">
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
<script src="assets/js/select2.full.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".selectbox").select2();
    });
</script>
<!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script>

<!--<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
<!--<script type="text/javascript" src="../js/jq.js"></script>-->
<!--<script type="text/javascript" src="../js/bootstrap.min.js"></script>-->
<!--<script type="text/javascript" src="../js/sweetalert.min.js"></script>-->
<script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
<!--<script src="http://maps.google.com/maps/api/js?sensor=false"></script>-->
<!--<script type="text/javascript" src="../js/bootstrap-multiselect.js"></script>-->
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
