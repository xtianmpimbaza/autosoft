<?php
#includes
require_once dirname(dirname(__FILE__)) . "/php_lib/user_functions/json_models_class.php";
require_once dirname(dirname(__FILE__)) . "/php_lib/user_functions/crud_functions_class.php";
require_once dirname(dirname(__FILE__)) . "/php_lib/lib_functions/database_query_processor_class.php";
require_once dirname(dirname(__FILE__)) . "/php_lib/lib_functions/utility_class.php";

$mCrudFunctions = new CrudFunctions();
$json_model_obj = new JSONModel();
$util_obj = new Utilties();

switch ($_POST["token"]) {

    //----------------------------retrieve student from students table --------------------------------
    case  "all_students" :
        session_start();
        $rows = $mCrudFunctions->fetch_rows("students", "*", "1");

        echo " <table class='display table table-striped table-bordered table-hover' id='dataTables-example'> 
                    <thead class='bg bg-primary'><th>#</th><th>Student ID</th> <th>Name</th> <th>Class</th><th>House</th> <th>Age</th><th>Admission date</th> <th>Action</th></thead>";

        foreach ($rows as $row) {
            $id = $row['id'];
            $student_id = $row['student_id'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];

            $name = $first_name . " " . $last_name;
            $date_of_birth = $row['date_of_birth'];

            $class = $row['class'];
            $mum_name = $row['mum_name'];
            $dad_name = $row['dad_name'];
            $prev_sch = $row['previous_school'];
            $aware = $row['school_awareness_mode'];
            $exp = $row['years_expected'];
            $admition_date = $row['admition_date'];
            $today = $row['today'];
            $sponsor = $row['sponsor'];
            $religion = $row['religion'];
            $tribe = $row['tribe'];
            $home_adress = $row['home_adress'];
            $current_adress = $row['current_adress'];
            $prev_agg = $row['previous_agregate'];
            $prev_class = $row['previous_class'];
            $house = $row['house'];
            $birth_yr = explode("-", $date_of_birth);
            $age = date('Y') - $birth_yr[2];

//              $name = $util_obj->capitalizeName($coop['farmer_name']);
            echo "<tr><td>" . $id . "</td><td>" . $student_id . "</td><td>" . $name . " </td><td>" . $class . " </td><td>" . $house . " </td><td>" . $age . " </td> <td>" . $admition_date . " </td> 
<td>
<a href=\"user_details.php\"> <button class='btn  btn-success'> 
<i class='fa fa-search-plus'></i> </button> </a> 
<span><button class='btn  btn-danger'> <i class='fa fa-trash-o'></i> </button></span>
<span><button class='btn  btn-info'> <i class='fa fa-edit'></i> </button></span>
 <span><button href=\"#\" class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#donateModal\" onclick='setjson(\"$id\",\"$name\")'>Add marks</button></span></td>
</tr>";

        }

        echo " </table> ";
        break;
//----------------------------subjects table --------------------------------
    case  "all_subjects" :
        session_start();
        $rows = $mCrudFunctions->fetch_rows("subjects", "*", "1");

        echo " <table class='display table table-striped table-bordered table-hover' id='dataTables-example'> 
                    <thead class='bg bg-primary'><th>Subject ID</th> <th>Name</th> <th>Type</th> <th>Priority</th> <th>Action</th></thead>";

        foreach ($rows as $row) {
            $sub_id = $row['subject_id'];
            $sub_name = $row['subject_name'];
            $sub_type = $row['subject_type'];
            $sub_priority = $row['subject_priority'];


//              $name = $util_obj->capitalizeName($coop['farmer_name']);
            echo "<tr><td>" . $sub_id . "</td><td>" . $sub_name . " </td><td>" . $sub_type . " </td><td>" . $sub_priority . " </td><td>
<a href=\"user_details.php\"> <button class='btn  btn-success'> 
<i class='fa fa-search-plus'></i> </button> </a> 
<span><button class='btn  btn-danger'> <i class='fa fa-trash-o'></i> </button></span>
<span><button class='btn  btn-info'> <i class='fa fa-edit'></i> </button></span> </td>
</tr>";

        }

        echo " </table> ";
        break;

//----------------------------subjects grading --------------------------------
    case  "all_grades" :
        session_start();
        $rows = $mCrudFunctions->fetch_rows("grades", "*", " 1 ORDER BY min_value DESC");


        echo " <table class='display table table-striped table-bordered table-hover' id='dataTables-example'> 
                    <thead class='bg bg-primary'><th>Grade</th> <th>Min</th> <th>Max</th>  <th>Action</th></thead>";

        foreach ($rows as $row) {
            $grade_id = $row['grade_id'];
            $min_value = $row['min_value'];
            $max_value = $row['max_value'];
//            $sub_priority = $row['subject_priority'];


//              $name = $util_obj->capitalizeName($coop['farmer_name']);
            echo "<tr><td>" . $grade_id . "</td><td>" . $min_value . " </td><td>" . $max_value . " </td><td>
<a href=\"user_details.php\"> <button class='btn  btn-success'> 
<i class='fa fa-search-plus'></i> </button> </a> 
<span><button class='btn  btn-danger'> <i class='fa fa-trash-o'></i> </button></span>
<span><button class='btn  btn-info'> <i class='fa fa-edit'></i> </button></span> </td>
</tr>";


        }

        echo " </table> ";
        break;


}


?>