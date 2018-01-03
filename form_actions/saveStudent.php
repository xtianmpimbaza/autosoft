<?php
session_start();
#includes
require_once dirname(dirname(__FILE__)) . "/php_lib/user_functions/crud_functions_class.php";
require_once dirname(dirname(__FILE__)) . "/php_lib/lib_functions/utility_class.php";

$util_obj = new Utilties();
$mCrudFunctions = new CrudFunctions();
$con = new mysqli("localhost", "root", "", "report");

switch ($_POST["pagefrom"]) {
    case "addsubject":
        $sub_id = $_POST["sub_id"];
        $sub_name = $_POST["sub_name"];
        $sub_type = $_POST["sub_type"];
        $priority = $_POST["priority"];

        $flag = $mCrudFunctions->insert_into_subject(
            $sub_id, $sub_name, $sub_type, $priority
        );

        if ($flag) {
//            $util_obj->redirect_to("../subject.php?message='success'");
            echo "successifully added";
        } else {
//        $util_obj->redirect_to("../addSubject.php?message=failed");
            echo 'failed';
        }
        break;

    case "addgrade":
        $sub_id = $_POST["grade"];
        $sub_name = $_POST["lower_margin"];
        $sub_type = $_POST["upper_margin"];

        $rows = $mCrudFunctions->fetch_rows("grades", "*", " 1 grade_id='$sub_id'");

        $query = mysqli_query($con, "SELECT * FROM grades WHERE grade_id='" . $sub_id . "'");

        if (mysqli_num_rows($query) > 0) {

            echo "grade already exists";
//            $util_obj->redirect_to("../grades.php?message=exists");
        } else {

            $flag = $mCrudFunctions->insert_into_grade(
                $sub_id, $sub_name, $sub_type
            );

            if ($flag) {
//                $util_obj->redirect_to("../grades.php?message=success");
                echo "successifully saved";
            } else {
//        $util_obj->redirect_to("../addSubject.php?message=failed");
                echo 'grade failed';
            }

        }


        break;
    case "addmarks":
        $year = $_POST["year"];
        $term = $_POST["term"];
        $marks = $_POST["marks"];
        $student_id = $_POST["student_id"];
        $subject = $_POST["subject"];

        $query = mysqli_query($con, "SELECT * FROM finalmarks WHERE year = $year && term = $term && subject = $subject && id = $student_id limit 1");

        if (mysqli_num_rows($query) > 0) {

//            echo "Marks already exists";
            $util_obj->redirect_to("../students.php?message=exists");

        } else {

            $flag = $mCrudFunctions->insert_into_marks("finalmarks",$year, $term, $student_id, $subject, $marks);

            if ($flag) {
               $util_obj->redirect_to("../students.php?message=success");

//                echo "successfully saved";
            } else {
                echo 'Marks insertion failed';
                $util_obj->redirect_to("../students.php?message=failed");

            }

        }


        break;

    case "addstudent":
        if (isset($_POST["fname"]) &&
            $_POST["fname"] != '' &&
            isset($_POST["class"]) &&
            $_POST["class"] != '' &&
            isset($_POST["class"]) &&
            $_POST["class"] != ''
//    isset($_POST["password"]) &&
//    $_POST["password"] != '' &&
//    isset($_POST["c_password"]) &&
//    $_POST["c_password"] != '' &&
//    isset($_POST["contact_name"]) &&
//    $_POST["contact_name"] != '' &&
//    isset($_POST["contact_phone"]) &&
//    $_POST["contact_phone"] != '' &&
//    isset($_POST["contact_email"]) &&
//    $_POST["contact_email"] != '' &&
//    isset($_POST["contact_office"]) &&
//    $_POST["contact_office"] != '' &&
//    isset($_POST["c_email"]) &&
//    $_POST["c_email"] != ''
        ) {


            //$password=sha1($_POST["password"]);


            $student_id = "ST123APX";
            $first_name = $_POST["fname"];
            $last_name = $_POST["lname"];
            $date_of_birth = $_POST["dob"];
            $class = $_POST["class"];
            $mum_name = $_POST["mom"];
            $dad_name = $_POST["dad"];
            $previous_school = $_POST["prevsch"];
            $school_awareness_mode = $_POST["awemode"];
            $years_expected = $_POST["expected"];
            $admition_date = $_POST["admdate"];
            $today = $_POST["today"];
            $sponsor = $_POST["sponsor"];
            $religion = $_POST["religion"];
            $tribe = $_POST["tribe"];
            $home_adress = $_POST["homeaddress"];
            $current_adress = $_POST["currentaddress"];
            $previous_agregate = $_POST["prevagg"];
            $previous_class = $_POST["prevclass"];
            $house = $_POST["house"];

            $flag = $mCrudFunctions->insert_into_students(
                $student_id, $first_name, $last_name, $date_of_birth, $class, $mum_name, $dad_name,
                $previous_school, $school_awareness_mode, $years_expected, $admition_date, $today, $sponsor,
                $religion, $tribe, $home_adress, $current_adress, $previous_agregate, $previous_class, $house
            );

            if ($flag) {
//                $util_obj->redirect_to("../students.php?message='success'");
                echo "Success";
            } else {
//                $util_obj->redirect_to("../addStudents.php?message=failed");
                echo "failed";
            }

        } else {
            //redirect back to original page
//            $util_obj->redirect_to("../addStudents.php?message=blankfields");
            echo "fill in required fields";
        }
}

?>