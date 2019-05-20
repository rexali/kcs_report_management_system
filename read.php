<?php
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){

// Get URL parameter

$id =  trim($_GET["id"]);

require_once 'config.php';

// Prepare a select statement

$sql = "SELECT * FROM report WHERE id ='$id'";

$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) == 1) {

/* Fetch result row as an associative array. Since the result set

contains only one row, we don't need to use while loop */

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

// Retrieve individual field value

$firstname=$row["firstname"];
$lastname=$row["lastname"];
$middlename=$row["middlename"];
//$section=$row["section"];
$class=$row["class"];
//$sex=$row["sex"];
$no_in_class=$row["no_in_class"];
$position_in_class=position('totl',$id); //$row["position_in_class"];
$term=$row["term"];
$average_age=$row["average_age"];
$age=$row["age"];

$times_absent=$row["times_absent"];
$last_term_position=$row["last_term_position"];
$last_term_average=$row["last_term_average"];
$times_sch_opened=$row["times_sch_opened"];

$academic_performance=$row["academic_performance"];
$general_behaviour=$row["general_behaviour"];
$neatness=$row["neatness"];

$teacher_name=$row["teacher_name"];
$teacher_sign=$row["teacher_sign"];
$teacher_date=$row["teacher_date"];

$next_term_begin=$row["next_term_begin"];
$next_term_fee=$row["next_term_fee"];
$fee_owing=$row["fee_owing"];

$principal_name=$row["principal_name"];
$principal_sign=$row["principal_sign"];
$principal_date=$row["principal_date"];
$parent_sign=$row["parent_sign"];
$parent_date=$row["parent_date"];

$math_hwork=$row["math_hwork"];
$math_test=$row["math_test"];
$math_exam=$row["math_exam"];
$math_total=$row["math_total"];
//$psn=position('math_total',$id);

$math_position=position('math_total',$id); //$row["math_position"];
$math_remark=$row["math_remark"];

$english_hwork=$row["english_hwork"];
$english_test=$row["english_test"];
$english_exam=$row["english_exam"];
$english_total=$row["english_total"];
$english_position=position('english_total',$id);//$row["english_position"];
$english_remark=$row["english_remark"];

$social_hwork=$row["social_hwork"];
$social_test=$row["social_test"];
$social_exam=$row["social_exam"];
$social_total=$row["social_total"];
$social_position=position('social_total',$id);//$row["social_position"];
$social_remark=$row["social_remark"];

$sci_hwork=$row["sci_hwork"];
$sci_test=$row["sci_test"];
$sci_exam=$row["sci_exam"];
$sci_total=$row["sci_total"];
$sci_position=position('sci_total',$id);//$row["sci_position"];
$sci_remark=$row["sci_remark"];

$irk_hwork=$row["irk_hwork"];
$irk_test=$row["irk_test"];
$irk_exam=$row["irk_exam"];
$irk_total=$row["irk_total"];
$irk_position=position('irk_total',$id);//$row["irk_position"];
$irk_remark=$row["irk_remark"];

$hausa_hwork=$row["hausa_hwork"];
$hausa_test=$row["hausa_test"];
$hausa_exam=$row["hausa_exam"];
$hausa_total=$row["hausa_total"];
$hausa_position=position('hausa_total',$id);//$row["hausa_position"];
$hausa_remark=$row["hausa_remark"];

$civic_hwork=$row["civic_hwork"];
$civic_test=$row["civic_test"];
$civic_exam=$row["civic_exam"];
$civic_total=$row["civic_total"];
$civic_position=position('civic_total',$id);//$row["civic_position"];
$civic_remark=$row["civic_remark"];

$health_hwork=$row["health_hwork"];
$health_test=$row["health_test"];
$health_exam=$row["health_exam"];
$health_total=$row["health_total"];
$health_position=position('health_total',$id);//$row["health_position"];
$health_remark=$row["health_remark"];

$quantitative_hwork=$row["quantitative_hwork"];
$quantitative_test=$row["quantitative_test"];
$quantitative_exam=$row["quantitative_exam"];
$quantitative_total=$row["quantitative_total"];
$quantitative_position=position('quantitative_total',$id);//$row["quantitative_position"];
$quantitative_remark=$row["quantitative_remark"];

$verbal_hwork=$row["verbal_hwork"];
$verbal_test=$row["verbal_test"];
$verbal_exam=$row["verbal_exam"];
$verbal_total=$row["verbal_total"];
$verbal_position=position('verbal_total',$id);//$row["verbal_position"];
$verbal_remark=$row["verbal_remark"];

$computer_hwork=$row["computer_hwork"];
$computer_test=$row["computer_test"];
$computer_exam=$row["computer_exam"];
$computer_total=$row["computer_total"];
$computer_position=position('computer_total',$id);//$row["computer_position"];
$computer_remark=$row["computer_remark"];

$arabic_hwork=$row["arabic_hwork"];
$arabic_test=$row["arabic_test"];
$arabic_exam=$row["arabic_exam"];
$arabic_total=$row["arabic_total"];
$arabic_position=position('arabic_total',$id);//$row["arabic_position"];
$arabic_remark=$row["arabic_remark"];

$totl= $math_total+$english_total+$social_total+$sci_total+$irk_total+$hausa_total+$civic_total+$health_total+$quantitative_total+$verbal_total+
$computer_total+$arabic_total; //$row["totl"];

$totals= array($math_total,$english_total,$social_total,$sci_total,$irk_total,$hausa_total,$civic_total,$health_total,$quantitative_total,$verbal_total,$computer_total,$arabic_total);

for ($i=0; $i <count($totals); $i++) { 

if ($totals[$i]==null || $totals[$i]==0) {

    continue;

}
$n=$i+1;

}

$averag= $totl/$n;      //$row["averag"];


$class_averag=classAverage();   //$row["class_averag"];
/*
$agric_hwork=$row["agric_hwork"];
$agric_test=$row["agric_hwork"];
$agric_exam=$row["agric_exam"];
$agric_total=$row["agric_total"];
$agric_position=$row["agric_position"];
$agric_remark=$row["agric_remark"];

$art_hwork=$row["art_hwork"];
$art_test=$row["art_test"];
$art_exam=$row["art_exam"];
$art_total=$row["art_total"];
$art_position=$row["art_position"];
$art_remark=$row["art_remark"];
*/        
} 



}else {
header("location:error.php");
exit();
}


function position($col,$id) {

//require_once 'config.php';
    
$sql = "SELECT id, firstname, '$col', FIND_IN_SET('$col',( SELECT GROUP_CONCAT( '$col' ORDER BY '$col' DESC) FROM report)) AS rank FROM report WHERE id ='$id'";
global $link;
$rst = mysqli_query($link, $sql);

if (mysqli_num_rows($rst) == 1) {

/* Fetch result row as an associative array. Since the result set

contains only one row, we don't need to use while loop */

$rw = mysqli_fetch_array($rst, MYSQLI_ASSOC);

$psn = $rw["rank"];

switch ($psn) {
    
    case 1:
    case 21:
    case 31:
    case 41:
    case 51:
    case 61:
    case 71:
    case 81:
    case 91:
    $psn =$psn.'st';
    return $psn;
        break;
    case 2:
    case 22:
    case 32:
    case 42:
    case 52:
    case 62:
    case 72:
    case 82:
    case 92:
    $psn=$psn.'nd';
    return $psn;
        break;
    case 3:
    case 23:
    case 33:
    case 43:
    case 53:
    case 63:
    case 73:
    case 83:
    case 93:
    $psn=$psn.'rd';
    return $psn;
        break;

    default:
    $psn=$psn.'th';
    return $psn;
}


}



}

function classAverage() {
        
$sql ="SELECT AVG(class_averag) AS class_average FROM report"; //"SELECT id, firstname, '$col', FIND_IN_SET('$col',( SELECT GROUP_CONCAT( '$col' ORDER BY '$col' DESC) FROM report)) AS rank FROM report WHERE id ='$id'";
global $link;
$rst = mysqli_query($link, $sql);

if (mysqli_num_rows($rst) == 1) {

// Fetch result row as an associative array. Since the result set

//contains only one row, we don't need to use while loop.

$rw = mysqli_fetch_array($rst, MYSQLI_ASSOC);

$class_averag = $rw["class_average"];

return $class_averag;

}

}



/*
function insertAverage() {
    $sql="INSERT INTO report (class_averag) VALUE('$average') WHERE id='$id'";

}

*/

mysqli_close($link);
?>





<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Edit Report</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
<script src="main.js"></script>
<style>

</style>
</head>
<body bgcolor="blue">
<div class ='wrapper'>
<form style="" name="myForm" action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="POST" autocomplete="on" >
<fieldset disabled=''>
<legend>Students' Report: </legend>
<div class="container">
<table bgcolor='tan' align='center' width='650px'>

<tr>
<td colspan="2">Name:<input type="text" name="firstname" value="<?php echo $firstname;?>" > <td colspan="2">Middle Name:<input type="text" name="middlename" value="<?php echo $middlename;?>"></td><td colspan="2">Last Name: <input type="text" name="lastname" value="<?php echo $lastname;?>"></td>
</tr>     

<tr>
<td colspan="4">Class:<input type="text" name="class" value="<?php echo $class;?>"></td><td colspan="3">No. in Class: <input type="text" name="no_in_class" value="<?php echo $no_in_class;?>"></td>
</tr>

<tr>
<td colspan="4">Term: <input type="text" name="term" value="<?php echo $term;?>"></td><td colspan="3">Position: <input type="text" name="position_in_class" value="<?php echo $position_in_class;?>"></td>
</tr>

<tr>
<td colspan="4">Average Age: <input type="text" name="average_age" value="<?php echo $average_age;?>"></td><td colspan="3">Age of Child: <input type="text" name="age" value="<?php echo $age;?>"></td>
</tr>


<tr>
<td colspan="4">No.of Times School Opened <input type="text" name="times_sch_opened" value="<?php echo $times_sch_opened;?>"></td><td colspan="3">Times Absent: <input type="text" name="times_absent" value="<?php echo $times_absent;?>"></td>
</tr>

<tr>
<td colspan="4">Last Term's Position: <input type="text" name="last_term_position" value="<?php echo $last_term_position;?>"></td><td colspan="3">Last Term's Average: <input type="text" name="last_term_average" value="<?php echo $last_term_average;?>"></td>
</tr>
<tr>
<td colspan="7"><hr></td>
</tr>


<tr>
<td>Subject</td><td>H/Work</td><td>Test</td><td>Exam</td><td>Total</td><td>Position</td><td>Remark</td>
</tr>

<tr>
<td><label>Mathematics:</label></td><td><input type="text" name="math_hwork" value="<?php echo $math_hwork;?>"/></td><td> <input type="text" name="math_test" value="<?php echo $math_test;?>"/> </td><td> <input type="text" name="math_exam" value="<?php echo $math_exam;?>"/> </td><td> <input type="text" name="math_total" value="<?php echo $math_total;?>"/> </td><td> <input type="text" name="math_position" value="<?php echo $math_position;?>"/> </td><td> <input type="text" name="math_remark" value="<?php echo $math_remark;?>"/> </td>
</tr>

<tr>
<td><label>English:</label></td><td><input type="text" name="english_hwork" value="<?php echo $english_hwork;?>"/></td><td> <input type="text" name="english_test" value="<?php echo $english_test;?>"/> </td><td> <input type="text" name="english_exam" value="<?php echo $english_exam;?>"/> </td><td> <input type="text" name="english_total" value="<?php echo $english_total;?>"/> </td><td> <input type="text" name="english_position" value="<?php echo $english_position;?>"/> </td><td> <input type="text" name="english_remark" value="<?php echo $english_remark;?>"/> </td>
</tr>

<tr>
<td><labe>Science:</label></td><td><input type="text" name="sci_hwork" value="<?php echo $sci_hwork;?>"/></td><td> <input type="text" name="sci_test" value="<?php echo $sci_test;?>"/> </td><td> <input type="text" name="sci_exam" value="<?php echo $sci_exam;?>"/> </td><td> <input type="text" name="sci_total" value="<?php echo $sci_total;?>"/> </td><td> <input type="text" name="sci_position" value="<?php echo $sci_position;?>"/> </td><td> <input type="text" name="sci_remark" value="<?php echo $sci_remark;?>"/> </td>
</tr>

<tr>
<td><label>Social Studies:</label></td><td><input type="text" name="social_hwork" value="<?php echo $social_hwork;?>"/></td><td> <input type="text" name="social_test" value="<?php echo $social_test;?>"/> </td><td> <input type="text" name="social_exam" value="<?php echo $social_exam;?>"/> </td><td> <input type="text" name="social_total" value="<?php echo $social_total;?>"/> </td><td> <input type="text" name="social_position" value="<?php echo $social_position;?>"/> </td><td> <input type="text" name="social_remark" value="<?php echo $social_remark;?>"/> </td>
</tr>

<tr>
<td><label>H/Education:</label></td><td><input type="text" name="health_hwork" value="<?php echo $health_hwork;?>"/></td><td> <input type="text" name="health_test" value="<?php echo $health_test;?>"/> </td><td> <input type="text" name="health_exam" value="<?php echo $health_exam;?>"/> </td><td> <input type="text" name="health_total" value="<?php echo $health_total;?>"/> </td><td> <input type="text" name="health_position" value="<?php echo $health_position;?>"/> </td><td> <input type="text" name="health_remark" value="<?php echo $health_remark;?>"/> </td>
</tr>

<tr>
<td><label>C/Education:</label></td><td><input type="number" name="civic_hwork" value="<?php echo $civic_hwork;?>"/></td><td> <input type="text" name="civic_test" value="<?php echo $civic_test;?>"/> </td><td> <input type="text" name="civic_exam" value="<?php echo $civic_exam;?>"/> </td><td> <input type="text" name="civic_total" value="<?php echo $civic_total;?>"/> </td><td> <input type="text" name="civic_position" value="<?php echo $civic_position;?>"/> </td><td> <input type="text" name="civic_remark" value="<?php echo $civic_remark; ?>"/> </td>
</tr>

<tr>
<td><label>Q/Reasoning:</label></td><td><input type="text" name="quantitative_hwork" value="<?php echo $quantitative_hwork;?>"/></td><td> <input type="text" name="quantitative_test" value="<?php echo $quantitative_test;?>"/> </td><td> <input type="text" name="quantitative_exam" value="<?php echo $quantitative_exam;?>"/> </td><td> <input type="text" name="quantitative_total" value="<?php echo $quantitative_total;?>"/> </td><td> <input type="text" name="quantitative_position" value="<?php echo $quantitative_position;?>"/> </td><td> <input type="text" name="quantitative_remark" value="<?php echo $quantitative_remark;?>"/> </td>
</tr>

<tr>
<td><label>V/Reasoning:</label></td><td><input type="text" name="verbal_hwork" value="<?php echo $verbal_hwork;?>"/></td><td> <input type="text" name="verbal_test" value="<?php echo $verbal_test;?>"/> </td><td> <input type="text" name="verbal_exam" value="<?php echo $verbal_exam;?>"/> </td><td> <input type="text" name="verbal_total" value="<?php echo $verbal_total;?>"/> </td><td> <input type="text" name="verbal_position" value="<?php echo $verbal_position;?>"/> </td><td> <input type="text" name="verbal_remark" value="<?php echo $verbal_remark;?>"/> </td>
</tr>

<tr>
<td><label>I.R.K:</label></td><td><input type="text" name="irk_hwork" value="<?php echo $irk_hwork;?>"/></td><td> <input type="text" name="irk_test" value="<?php echo $irk_test;?>"/> </td><td> <input type="text" name="irk_exam" value="<?php echo $irk_exam;?>"/> </td><td> <input type="text" name="irk_total" value="<?php echo $irk_total;?>"/> </td><td> <input type="text" name="irk_position" value="<?php echo $irk_position;?>"/> </td><td> <input type="text" name="irk_remark" value="<?php echo $irk_remark;?>"/> </td>
</tr>

<tr>
<td><label>Hausa: </label></td><td><input type="text" name="hausa_hwork" value="<?php echo $hausa_hwork;?>"/></td><td> <input type="text" name="hausa_test" value="<?php echo $hausa_test;?>"/> </td><td> <input type="text" name="hausa_exam" value="<?php echo $hausa_exam;?>"/> </td><td> <input type="text" name="hausa_total" value="<?php echo $hausa_total;?>"/> </td><td> <input type="text" name="hausa_position" value="<?php echo $hausa_position;?>"/> </td><td> <input type="text" name="hausa_remark" value="<?php echo $hausa_remark;?>"/> </td>
</tr>

<tr>
<td><label>Arabic:</label></td><td><input type="text" name="arabic_hwork" value="<?php echo $arabic_hwork;?>"/></td><td> <input type="text" name="arabic_test" value="<?php echo $arabic_test;?>"/> </td><td> <input type="text" name="arabic_exam" value="<?php echo $arabic_exam;?>"/> </td><td> <input type="text" name="arabic_total" value="<?php echo $arabic_total;?>"/> </td><td> <input type="text" name="arabic_position" value="<?php echo $arabic_position;?>"/> </td><td> <input type="text" name="arabic_remark" value="<?php echo $arabic_remark;?>"/> </td>
</tr>

<tr>
<td><label>Computer:</label></td><td><input type="text" name="computer_hwork" value="<?php echo $computer_hwork;?>"/></td><td> <input type="text" name="computer_test" value="<?php echo $computer_test;?>"/> </td><td> <input type="text" name="computer_exam" value="<?php echo $computer_exam;?>"/> </td><td> <input type="text" name="computer_total" value="<?php echo $computer_total;?>"/> </td><td> <input type="text" name="computer_position" value="<?php echo $computer_position;?>"/> </td><td> <input type="text" name="computer_remark" value="<?php echo $computer_remark;?>"/> </td>
</tr>

<tr>
<td><label>Total:</label></td><td><input /></td><td> <input /> </td><td> <input /> </td><td> <input type="text" name="totl" value="<?php echo $totl;?>"/> </td><td> <input /> </td><td> <input /> </td>
</tr>

<tr>
<td><label>Average:</label></td><td><input /></td><td> <input /> </td><td> <input /> </td><td> <input type="text" name="averag" value="<?php echo $averag;?>"/> </td><td> <input/> </td><td> <input /> </td>
</tr>
<tr>
<td><label>Class Average:</label></td><td><input /></td><td> <input /> </td><td> <input /> </td><td> <input type="text" name="class_averag" value="<?php echo $class_averag;?>"/> </td><td> <input /> </td><td> <input /> </td>

</tr>

<tr>
<td colspan="7" align="center">GENERAL REMARKS</td>
</tr>

<tr>
<td colspan="7">Academic Performance <textarea name="academic_performance" cols="150" rows="1"><?php echo $academic_performance;?></textarea></td>
</tr>

<tr>
<td colspan="7">General Behaviour <textarea name="general_behaviour" cols="150" rows="1"><?php echo $general_behaviour;?></textarea> <hr></td>
</tr>


<tr>
<td colspan="4">Neatness <input type="text" name="neatness" value="<?php echo $neatness;?>"></td>
</tr>
   
<tr>
<td colspan="3">Class Teacher's Name <input type="text" name="teacher_name" value="<?php echo $teacher_name;?>"></td><td colspan="2">Signature <input type="text" name="teacher_sign" value="<?php echo $teacher_sign;?>"></td> <td> Date <input type="text" name="teacher_date" value="<?php echo $teacher_date;?>"></td>
</tr>
   
<tr>
<td colspan="3">Next Term Begins <input type="text" name="next_term_begin" value="<?php echo $next_term_begin;?>"></td><td colspan="2">Next Term Fees <input type="text" name="next_term_fee" value="<?php echo $next_term_fee;?>"></td><td colspan="2">Fees Owing <input type="text" name="fee_owing" value="<?php echo $fee_owing;?>"></td>

</tr>
<tr>
   <td colspan="3">Principal <input type="text" name="principal_name" value="<?php echo $principal_name;?>"></td><td colspan="2">Signature <input type="text" name="principal_sign" value="<?php echo $principal_sign;?>"></td><td colspan="2">Date <input type="text" name="principal_date" value="<?php echo $principal_date;?>"></td>
</tr>
   
<tr>
   <td colspan="3">Parent's Signature <input type="text" name="parent_sign" value="<?php echo $parent_sign;?>"></td><td colspan="3">Date <input type="text" name="parent_date" value="<?php echo $parent_date;?>"></td>
</tr>
<!--
<tr><td><input type="hidden" name="id" value="<?php //echo $id; ?>"</td></tr>
<tr><td colspan="7" style="text-align:center;"><br><br><br><input type="submit" value="Submit Report" style ="color:green;"></td></tr>
-->
</table>
</div>
</fieldset>

</form>
</div>
</body>
</html>