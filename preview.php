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
<div class="container">  
<form>
        
<table bgcolor='tan' align='center' width='768px'>
<tr><td colspan="7" style="text-align:center;"><h2>Kano Capital Primary School <br>Yandutse Road P.O. Box 1058, Kano <br> Terminal Report <hr></h2></td></tr>      
<tr>
<td colspan="7"><label for="">Name:</label> <?php echo $firstname;?> &nbsp;&nbsp; <?php echo $middlename;?>&nbsp;&nbsp; <?php echo $lastname;?></td>
</tr>     

<tr>
<td colspan="4"><label for="">Class:</label> <?php echo $class;?></td><td colspan="3"><label for="">No. in Class:</label> <?php echo $no_in_class;?></td>
</tr>

<tr>
<td colspan="4"><label for="">Term:</label> <?php echo $term;?></td><td colspan="3"><label for="">Position:</label>  <?php echo $position_in_class;?></td>
</tr>

<tr>
<td colspan="4"><label for="">Average Age:</label><?php echo $average_age;?></td><td colspan="3"><label for="">Age of Child:</label> <?php echo $age;?></td>
</tr>


<tr>
<td colspan="4"><label for="">No.of Times School Opened:</label> <?php echo $times_sch_opened;?></td><td colspan="3"><label for="">Times Absent:</label> <?php echo $times_absent;?></td>
</tr>

<tr>
<td colspan="4"><label for="">Last Term's Position:</label> <?php echo $last_term_position;?></td><td colspan="3"><label for="">Last Term's Average:</label><?php echo $last_term_average;?></td>
</tr>
<tr>
<td colspan="7"><hr></td>
</tr>


<tr>
<td>Subject</td><td>H/Work</td><td>Test</td><td>Exam</td><td>Total</td><td>Position</td><td>Remark</td>
</tr>

<tr>
<td><label>Mathematics:</label></td><td><?php echo $math_hwork;?></td><td> <?php echo $math_test;?> </td><td> <?php echo $math_exam;?> </td><td> <?php echo $math_total;?> </td><td> <?php echo $math_position;?> </td><td><?php echo $math_remark;?> </td>
</tr>

<tr>
<td><label>English:</label></td><td><?php echo $english_hwork;?></td><td><?php echo $english_test;?> </td><td> <?php echo $english_exam;?> </td><td> <?php echo $english_total;?></td><td><?php echo $english_position;?></td><td> <?php echo $english_remark;?> </td>
</tr>

<tr>
<td><labe>Science:</label></td><td><?php echo $sci_hwork;?></td><td> <?php echo $sci_test;?></td><td><?php echo $sci_exam;?> </td><td> <?php echo $sci_total;?> </td><td> <?php echo $sci_position;?> </td><td> <?php echo $sci_remark;?></td>
</tr>

<tr>
<td><label>Social Studies:</label></td><td><?php echo $social_hwork;?></td><td> <?php echo $social_test;?> </td><td> <?php echo $social_exam;?></td><td> <?php echo $social_total;?> </td><td> <?php echo $social_position;?> </td><td> <?php echo $social_remark;?></td>
</tr>

<tr>
<td><label>H/Education:</label></td><td><?php echo $health_hwork;?></td><td> <?php echo $health_test;?> </td><td><?php echo $health_exam;?></td><td> <?php echo $health_total;?> </td><td> <?php echo $health_position;?></td><td><?php echo $health_remark;?> </td>
</tr>

<tr>
<td><label>C/Education:</label></td><td><?php echo $civic_hwork;?></td><td><?php echo $civic_test;?></td><td><?php echo $civic_exam;?> </td><td> <?php echo $civic_total;?></td><td><?php echo $civic_position;?></td><td><?php echo $civic_remark; ?> </td>
</tr>

<tr>
<td><label>Q/Reasoning:</label></td><td><?php echo $quantitative_hwork;?></td><td><?php echo $quantitative_test;?> </td><td><?php echo $quantitative_exam;?> </td><td> <?php echo $quantitative_total;?> </td><td><?php echo $quantitative_position;?> </td><td><?php echo $quantitative_remark;?> </td>
</tr>

<tr>
<td><label>V/Reasoning:</label></td><td><?php echo $verbal_hwork;?></td><td> <?php echo $verbal_test;?></td><td> <?php echo $verbal_exam;?></td><td> <?php echo $verbal_total;?> </td><td> <?php echo $verbal_position;?></td><td><?php echo $verbal_remark;?> </td>
</tr>

<tr>
<td><label>I.R.K:</label></td><td><?php echo $irk_hwork;?></td><td> <?php echo $irk_test;?> </td><td> <?php echo $irk_exam;?> </td><td> <?php echo $irk_total;?> </td><td><?php echo $irk_position;?></td><td> <?php echo $irk_remark;?> </td>
</tr>

<tr>
<td><label>Hausa: </label></td><td><?php echo $hausa_hwork;?></td><td><?php echo $hausa_test;?> </td><td><?php echo $hausa_exam;?> </td><td><?php echo $hausa_total;?></td><td><?php echo $hausa_position;?> </td><td><?php echo $hausa_remark;?> </td>
</tr>

<tr>
<td><label>Arabic:</label></td><td><?php echo $arabic_hwork;?></td><td> <?php echo $arabic_test;?></td><td><?php echo $arabic_exam;?> </td><td><?php echo $arabic_total;?> </td><td> <?php echo $arabic_position;?></td><td> <?php echo $arabic_remark;?> </td>
</tr>

<tr>
<td><label>Computer:</label></td><td><?php echo $computer_hwork;?></td><td> <?php echo $computer_test;?> </td><td> <?php echo $computer_exam;?></td><td><?php echo $computer_total;?> </td><td><?php echo $computer_position;?> </td><td><?php echo $computer_remark;?></td>
</tr>

<tr>
<td><label>Total:</label></td><td></td><td></td><td> </td><td><?php echo $totl;?></td><td> </td><td> </td>
</tr>

<tr>
<td><label>Average:</label></td><td></td><td> </td><td> </td><td><?php echo $averag;?> </td><td> </td><td> </td>
</tr>
<tr>
<td><label>Class Average:</label></td><td></td><td> </td><td> </td><td><?php echo $class_averag;?> </td><td></td><td> </td>

</tr>

<tr>
<td colspan="7" align="center"><hr> GENERAL REMARKS</td>
</tr>

<tr>
<td colspan="7"><label for=""> Academic Performance:</label><?php echo $academic_performance;?></td>
</tr>

<tr>
<td colspan="7"><label for="">General Behaviour:</label><?php echo $general_behaviour;?><hr></td>
</tr> 


<tr>
<td colspan="4"><label for="">Neatness:</label> <?php echo $neatness;?></td>
</tr>
   
<tr>
<td colspan="3"><label for=""> Class Teacher's Name:</label><?php echo $teacher_name;?></td><td colspan="2"><label for="">Signature:</label><?php echo $teacher_sign;?></td> <td><label for=""> Date:</label><?php echo $teacher_date;?></td>
</tr>
   
<tr>
<td colspan="3"><label for=""> Next Term Begins:</label><?php echo $next_term_begin;?></td><td colspan="2"><label for="">Next Term Fees:</label><?php echo $next_term_fee;?></td><td colspan="2"><label for="">Fees Owing:</label><?php echo $fee_owing;?></td>

</tr>
<tr>
   <td colspan="3"><label for=""> Principal:</label><?php echo $principal_name;?></td><td colspan="2"> <label for="">Signature:</label><?php echo $principal_sign;?></td><td colspan="2"><label for="">Date:</label><?php echo $principal_date;?></td>
</tr>
   
<tr>
   <td colspan="3"><label for="">Parent's Signature:</label><?php echo $parent_sign;?></td><td colspan="3"><label for="">Date :</label><?php echo $parent_date;?></td>

</tr>

</table>
</form>
<hr>
</div>
</div>
</body>
</html>


