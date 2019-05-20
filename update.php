<?php

require_once 'config.php';

if (isset($_POST["id"]) && !empty($_POST["id"])) {

    $id = $_POST["id"];
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $middlename=$_POST["middlename"];
    $class=$_POST["class"];
    $no_in_class=$_POST["no_in_class"];
    $position_in_class=$_POST["position_in_class"];
    $term=$_POST["term"];
    $average_age=$_POST["average_age"];
    $age=$_POST["age"];
    $times_absent=$_POST["times_absent"];

    $last_term_position=$_POST["last_term_position"];
    $last_term_average=$_POST["last_term_average"];
    $times_sch_opened=$_POST["times_sch_opened"];
    $academic_performance=$_POST["academic_performance"];
    $general_behaviour=$_POST["general_behaviour"];
    $neatness=$_POST["neatness"];
    
    $teacher_name=$_POST["teacher_name"];
    $teacher_sign=$_POST["teacher_sign"];
    $teacher_date=$_POST["teacher_date"];
    
    $next_term_begin=$_POST["next_term_begin"];
    $next_term_fee=$_POST["next_term_fee"];
    $fee_owing=$_POST["fee_owing"];
    

    $principal_name=$_POST["principal_name"];
    $principal_sign=$_POST["principal_sign"];
    $principal_date=$_POST["principal_date"];
    $parent_sign=$_POST["parent_sign"];
    $parent_date=$_POST["parent_date"];

    $math_hwork=$_POST["math_hwork"];
    $math_test=$_POST["math_test"];
    $math_exam=$_POST["math_exam"];
    $math_total= $math_total=$math_hwork+$math_test+$math_exam;//$_POST["math_total"];
    $math_position=$_POST["math_position"];
    $math_remark=remark($math_total);//$_POST["math_remark"];

    $english_hwork=$_POST["english_hwork"];
    $english_test=$_POST["english_test"];
    $english_exam=$_POST["english_exam"];
    $english_total=$english_hwork+$english_test+$english_exam;//$_POST["english_total"];
    $english_position=$_POST["english_position"];
    $english_remark=remark($english_total);//$_POST["english_remark"];
    
    $social_hwork=$_POST["social_hwork"];
    $social_test=$_POST["social_test"];
    $social_exam=$_POST["social_exam"];
    $social_total=$social_hwork+$social_test+$social_exam;//$_POST["social_total"];
    $social_position=$_POST["social_position"];
    $social_remark=remark($social_total);//$_POST["social_remark"];

    $sci_hwork=$_POST["sci_hwork"];
    $sci_test=$_POST["sci_test"];
    $sci_exam=$_POST["sci_exam"];
    $sci_total=$sci_hwork+$sci_test+$sci_exam;//$_POST["sci_total"];
    $sci_position=$_POST["sci_position"];
    $sci_remark=remark($sci_total);//$_POST["sci_remark"];

    $irk_hwork=$_POST["irk_hwork"];
    $irk_test=$_POST["irk_test"];
    $irk_exam=$_POST["irk_exam"];
    $irk_total=$irk_hwork+$irk_test+$irk_exam;//$_POST["irk_total"];
    $irk_position=$_POST["irk_position"];
    $irk_remark=remark($irk_total);//$_POST["irk_remark"];

    $hausa_hwork=$_POST["hausa_hwork"];
    $hausa_test=$_POST["hausa_test"];
    $hausa_exam=$_POST["hausa_exam"];
    $hausa_total=$hausa_hwork+$hausa_test+$hausa_exam;//$_POST["hausa_total"];
    $hausa_position=$_POST["hausa_position"];
    $hausa_remark=remark($hausa_total);//$_POST["hausa_remark"];

    $civic_hwork=$_POST["civic_hwork"];
    $civic_test=$_POST["civic_test"];
    $civic_exam=$_POST["civic_exam"];
    $civic_total=$civic_hwork+$civic_test+$civic_exam; //$_POST["civic_total"];
    $civic_position=$_POST["civic_position"];
    $civic_remark=remark($civic_total);//$_POST["civic_remark"];

    $health_hwork=$_POST["health_hwork"];
    $health_test=$_POST["health_test"];
    $health_exam=$_POST["health_exam"];
    $health_total=$health_hwork+$health_test+$health_exam;//$_POST["health_total"];
    $health_position=$_POST["health_position"];
    $health_remark=remark($health_total);//$_POST["health_remark"];

    $quantitative_hwork=$_POST["quantitative_hwork"];
    $quantitative_test=$_POST["quantitative_test"];
    $quantitative_exam=$_POST["quantitative_exam"];
    $quantitative_total=$quantitative_hwork+$quantitative_test+$quantitative_exam;//$_POST["quantitative_total"];
    $quantitative_position=$_POST["quantitative_position"];
    $quantitative_remark=remark($quantitative_total);//$_POST["quantitative_remark"];

    $verbal_hwork=$_POST["verbal_hwork"];
    $verbal_test=$_POST["verbal_test"];
    $verbal_exam=$_POST["verbal_exam"];
    $verbal_total=$verbal_hwork+$verbal_test+$verbal_exam;//$_POST["verbal_total"];
    $verbal_position=$_POST["verbal_position"];
    $verbal_remark=remark($verbal_total);//$_POST["verbal_remark"];

    $computer_hwork=$_POST["computer_hwork"];
    $computer_test=$_POST["computer_test"];
    $computer_exam=$_POST["computer_exam"];
    $computer_total=$computer_hwork+$computer_test+$computer_exam;//$_POST["computer_total"];
    $computer_position=$_POST["computer_position"];
    $computer_remark=remark($computer_total);//$_POST["computer_remark"];

    $arabic_hwork=$_POST["arabic_hwork"];
    $arabic_test=$_POST["arabic_test"];
    $arabic_exam=$_POST["arabic_exam"];
    $arabic_total=$arabic_hworkt+$arabic_test+$arabic_exam;//$_POST["arabic_total"];
    $arabic_position=$_POST["arabic_position"];
    $arabic_remark=remark($arabic_total);//$_POST["arabic_remark"];


    $totl= $math_total+$english_total+$social_total+$sci_total+$irk_total+$hausa_total+$civic_total+$health_total+$quantitative_total+$verbal_total+$computer_total+$arabic_total;
    
    $totals= array($math_total,$english_total,$social_total,$sci_total,$irk_total,$hausa_total,$civic_total,$health_total,$quantitative_total,$verbal_total,$computer_total,$arabic_total);

    for ($i=0; $i <count($totals); $i++) { 

        if ($totals[$i]==null || $totals[$i]==0) {

           continue;

        }
        $n=$i+1;

    }

    $averag= $totl/$n;

    $class_averag=classAverage();  //$_POST["class_averag"];

    //$totl=$_POST["totl"];
    //$averag=$_POST["averag"];
    

/*

    $agric_hwork=$_POST["agric_hwork"];
    $agric_test=$_POST["agric_test"];
    $agric_exam=$_POST["agric_exam"];
    $agric_total=$_POST["agric_total"];
    $agric_position=$_POST["agric_position"];
    $agric_remark=$_POST["agric_remark"];

    $art_hwork=$_POST["art_hwork"];
    $art_test=$_POST["art_test"];
    $art_exam=$_POST["art_exam"];
    $art_total=$_POST["art_total"];
    $art_position=$_POST["art_position"];
    $art_remark=$_POST["art_remark"];

    for update
 --   agric_hwork='$agric_hwork',
 --   agric_test='$agric_hwork',
 --   agric_exam='$agric_exam',
 --   agric_total='$agric_total',
 --  agric_position='$agric_position',
 --   agric_remark='$agric_remark',

 --   art_hwork='$art_hwork',
 --   art_test='$art_test',
 --   art_exam='$art_exam',
 --   art_total='$art_total',
 --   art_position='$art_position',
 --   art_remark='$art_remark'
*/



        



    

    

    
    $sql ="UPDATE report SET 
    firstname='$firstname', 
    lastname='$lastname', 
    middlename='$middlename',
    class='$class',
    no_in_class='$no_in_class',
    position_in_class='$position_in_class',
    term='$term',
    average_age='$average_age',
    age='$age',
    times_absent='$times_absent',
    
    last_term_position='$last_term_position',
    last_term_average='$last_term_average',
    times_sch_opened='$times_sch_opened',

    academic_performance='$academic_performance',
    general_behaviour='$general_behaviour',
    neatness='$neatness',

    teacher_name='$teacher_name',
    teacher_sign='$teacher_sign',
    teacher_date='$teacher_date',
           
    next_term_begin='$next_term_begin',
    next_term_fee='$next_term_fee',
    fee_owing='$fee_owing',
           
    principal_name='$principal_name',
    principal_sign='$principal_sign',
    principal_date='$principal_date',
          
    parent_sign='$parent_sign',
    parent_date='$parent_date',

    totl='$totl',
    averag='$averag',
    class_averag='$class_averag',

    math_hwork='$math_hwork',
    math_test='$math_test',
    math_exam='$math_exam',
    math_total='$math_total',
    math_position='$math_position',
    math_remark='$math_remark',

    english_hwork='$english_hwork',
    english_test='$english_test',
    english_exam='$english_exam',
    english_total='$english_total',
    english_position='$english_position',
    english_remark='$english_remark',
           
    social_hwork='$social_hwork',
    social_test='$social_test',
    social_exam='$social_exam',
    social_total='$social_total',
    social_position='$social_position',
    social_remark='$social_remark',

    sci_hwork='$sci_hwork',
    sci_test='$sci_test',
    sci_exam='$sci_exam',
    sci_total='$sci_total',
    sci_position='$sci_position',
    sci_remark='$sci_remark',

    irk_hwork='$irk_hwork',
    irk_test='$irk_test',
    irk_exam='$irk_exam',
    irk_total='$irk_total',
    irk_position='$irk_position',
    irk_remark='$irk_remark',

    hausa_hwork='$hausa_hwork',
    hausa_test='$hausa_test',
    hausa_exam='$hausa_exam',
    hausa_total='$hausa_total',
    hausa_position='$hausa_position',
    hausa_remark='$hausa_remark',

    civic_hwork='$civic_hwork',
    civic_test='$civic_test',
    civic_exam='$civic_exam',
    civic_total='$civic_total',
    civic_position='$civic_position',
    civic_remark='$civic_remark',
          
    health_hwork='$health_hwork',
    health_test='$health_test',
    health_exam='$health_exam',
    health_total='$health_total',
    health_position='$health_position',
    health_remark='$health_remark',

    quantitative_hwork='$quantitative_hwork',
    quantitative_test='$quantitative_test',
    quantitative_exam='$quantitative_exam',
    quantitative_total='$quantitative_total',
    quantitative_position='$quantitative_position',
    quantitative_remark='$quantitative_remark',

    verbal_hwork='$verbal_hwork',
    verbal_test='$verbal_test',
    verbal_exam='$verbal_exam',
    verbal_total='$verbal_total',
    verbal_position='$verbal_position',
    verbal_remark='$verbal_remark',
           
    computer_hwork='$computer_hwork',
    computer_test='$computer_test',
    computer_exam='$computer_exam',
    computer_total='$computer_total',
    computer_position='$computer_position',
    computer_remark='$computer_remark',

    arabic_hwork='$arabic_hwork',
    arabic_test='$arabic_test',
    arabic_exam='$arabic_exam',
    arabic_total='$arabic_total',
    arabic_position='$arabic_position',
    arabic_remark='$arabic_remark'
    WHERE id='$id'";
           
   
   if (mysqli_query($link, $sql)) {
    
    //echo "Record updated successfully";
    header("location:index.php");

    exit();
   
   }else {

    echo "Error updating record: " . mysqli_error($link);

    }


    mysqli_close($link);

   
}else {

        if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){

             // Get URL parameter

             $id =  trim($_GET["id"]);

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
           $position_in_class=position('totl',$id);//$row["position_in_class"];
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
           //$math_position=$row["math_position"];
           $math_position=position('math_total',$id);
           $math_remark=$row["math_remark"];

           $english_hwork=$row["english_hwork"];
           $english_test=$row["english_test"];
           $english_exam=$row["english_exam"];
           $english_total=$row["english_total"];
           //$english_position=$row["english_position"];
           $english_position=position('english_total',$id);
           $english_remark=$row["english_remark"];
           
           $social_hwork=$row["social_hwork"];
           $social_test=$row["social_test"];
           $social_exam=$row["social_exam"];
           $social_total=$row["social_total"];
           //$social_position=$row["social_position"];
           $social_position=position('social_total',$id);
           $social_remark=$row["social_remark"];

           $sci_hwork=$row["sci_hwork"];
           $sci_test=$row["sci_test"];
           $sci_exam=$row["sci_exam"];
           $sci_total=$row["sci_total"];
           //$sci_position=$row["sci_position"];
           $sci_position=position('sci_total',$id);
           $sci_remark=$row["sci_remark"];

           $irk_hwork=$row["irk_hwork"];
           $irk_test=$row["irk_test"];
           $irk_exam=$row["irk_exam"];
           $irk_total=$row["irk_total"];
          // $irk_position=$row["irk_position"];
           $irk_position=position('irk_total',$id);
           $irk_remark=$row["irk_remark"];

           $hausa_hwork=$row["hausa_hwork"];
           $hausa_test=$row["hausa_test"];
           $hausa_exam=$row["hausa_exam"];
           $hausa_total=$row["hausa_total"];
           //$hausa_position=$row["hausa_position"];
           $hausa_position=position('hausa_total',$id);
           $hausa_remark=$row["hausa_remark"];

           $civic_hwork=$row["civic_hwork"];
           $civic_test=$row["civic_test"];
           $civic_exam=$row["civic_exam"];
           $civic_total=$row["civic_total"];
           //$civic_position=$row["civic_position"];
           $civic_position=position('civic_total',$id);
           $civic_remark=$row["civic_remark"];
          
           $health_hwork=$row["health_hwork"];
           $health_test=$row["health_test"];
           $health_exam=$row["health_exam"];
           $health_total=$row["health_total"];
           //$health_position=$row["health_position"];
           $health_position=position('health_total',$id);
           $health_remark=$row["health_remark"];

           $quantitative_hwork=$row["quantitative_hwork"];
           $quantitative_test=$row["quantitative_test"];
           $quantitative_exam=$row["quantitative_exam"];
           $quantitative_total=$row["quantitative_total"];
           //$quantitative_position=$row["quantitative_position"];
           $quantitative_position=position('quantitative_total',$id);
           $quantitative_remark=$row["quantitative_remark"];

           $verbal_hwork=$row["verbal_hwork"];
           $verbal_test=$row["verbal_test"];
           $verbal_exam=$row["verbal_exam"];
           $verbal_total=$row["verbal_total"];
           //$verbal_position=$row["verbal_position"];
           $verbal_position=position('verbal_total',$id);
           $verbal_remark=$row["verbal_remark"];
           
           $computer_hwork=$row["computer_hwork"];
           $computer_test=$row["computer_test"];
           $computer_exam=$row["computer_exam"];
           $computer_total=$row["computer_total"];
           //$computer_position=$row["computer_position"];
           $computer_position=position('computer_total',$id);
           $computer_remark=$row["computer_remark"];

           $arabic_hwork=$row["arabic_hwork"];
           $arabic_test=$row["arabic_test"];
           $arabic_exam=$row["arabic_exam"];
           $arabic_total=$row["arabic_total"];
           //$arabic_position=$row["arabic_position"];
           $arabic_position=position('arabic_total',$id);
           $arabic_remark=$row["arabic_remark"];


           $totl= $math_total+$english_total+$social_total+$sci_total+$irk_total+$hausa_total+$civic_total+$health_total+$quantitative_total+$verbal_total+$computer_total+$arabic_total;
    
           $totals= array($math_total,$english_total,$social_total,$sci_total,$irk_total,$hausa_total,$civic_total,$health_total,$quantitative_total,$verbal_total,$computer_total,$arabic_total);

           for ($i=0; $i <count($totals); $i++) { 

               if ($totals[$i]==null || $totals[$i]==0) {

                 continue;

               }

               $n=$i+1;

           }

          $averag= $totl/$n;

           //$totl= $row["totl"];
           //$averag= $row["averag"];

          $class_averag=classAverage(); //$row["class_averag"];


           //$agric_hwork=$row["agric_hwork"];
           //$agric_test=$row["agric_hwork"];
           //$agric_exam=$row["agric_exam"];
           //$agric_total=$row["agric_total"];
           //$agric_position=$row["agric_position"];
           //$agric_remark=$row["agric_remark"];

           //$art_hwork=$row["art_hwork"];
           //$art_test=$row["art_test"];
           //$art_exam=$row["art_exam"];
           //$art_total=$row["art_total"];
           //$art_position=$row["art_position"];
           //$art_remark=$row["art_remark"];
      
            }
        
          
   
            

        }else {
           header("location:error.php");
           exit();
        }







mysqli_close($link);
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


function remark($x) {

                if ($x<40) {
                    $y="Poor";
                    return $y;
                } elseif($x<50) {
                    $y="Below Average";
                    return $y;
                } elseif ($x<60) {
                    $y="Average";
                    return $y;
                } elseif ($x<70) {
                    $y="Above Average";
                    return $y;
                } elseif ($x<80) {
                    $y="Good";
                    return $y;
                } elseif ($x<90) {
                    $y="Very Good";
                    return $y;
                } elseif ($x<=100) {
                    $y="Excellent";
                    return $y;
                } else {
                    return $y="Error:Total>100";
                }       
                
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
    input{
        width:100px;
    }
</style>
</head>
<body style="background:blue;">
<form  name="myForm" action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="POST" autocomplete="on" >
<fieldset>
<legend>Students' Report: </legend>
<table style=" background:tan; max-width:100px; margin:auto;">
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
        <tr><td><input type="hidden" name="id" value="<?php echo $id; ?>"</td></tr>
        <tr><td colspan="7" style="text-align:center;"><br><input type="submit" value="Submit" style ="color:green; font-size:25px;"></td></tr>
</table>
</fieldset>

</form>
</body>
</html>