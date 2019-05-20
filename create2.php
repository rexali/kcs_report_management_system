<?php


if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){

require_once 'config.php';

$id=trim($_GET["id"]);

echo $id;

}else {

    echo "Id doesnt contain id parameter";
}

/*
$firstname=$lastname=$middlename=$section=$class=$sex=$no_in_class=$position_in_class=$term=$average_age=$age=$times_absent=$last_term_position="";

$last_term_average=$times_sch_opened=$academic_performance=$general_behaviour=$neatness=$teacher_name=$teacher_sign=$teacher_date="";

$next_term_begin=$next_term_fee=$fee_owing="";

$principal_name=$principal_sign=$principal_date=$parent_sign=$parent_date=$total=$average=$class_average=$math_hwork=$math_test="";

$math_exam=$math_total=$math_position=$math_remark=$english_hwork=$english_test=$english_exam=$english_total=$english_position=$english_remarks="";

$social_hwork=$social_test=$social_exam=$social_total=$social_position=$social_remark=$sci_hwork=$sci_test=$sci_exam=$sci_total="";

$sci_position=$sci_remark=$irk_hwork=$irk_test=$irk_exam=$irk_total=$irk_position=$irk_remarks=$hausa_hwork=$hausa_test=$hausa_exam="";

$hausa_total=$hausa_position=$hausa_remark=$civic_hwork=$civic_test=$civic_exam=$civic_total=$civic_position=$civc_remark=$health_hwork="";

$health_test=$health_exam=$health_total=$health_position=$health_remark=$quantitative_hwork=$quantitative_test=$quantitative_exam="";

$quantitative_total=$quantitative_position=$quantitative_remark=$verbal_hwork=$verbal_test=$verbal_exam=$verbal_total=$verbal_position="";

$verbal_remark=$computer_hwork=$computer_test=$computer_exam=$computer_total=$computer_position=$computer_remark=$arabic_hwork="";

$arabic_test=$arabic_exam=$arabic_total=$arabic_position=$arabic_remark=$agric_hwork=$agric_test=$agric_exam=$agric_total="";

$agric_position=$agric_remark=$art_hwork=$art_test=$art_exam=$art_total=$art_position=$art_remark="";
*/

//if(isset($_POST["id"]) && !empty($_POST["id"])){
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
   // $id =1; //$_POST["id"];
    $academic_performance=$_POST["academic_performance"];
    $general_behaviour=$_POST["general_behaviour"];
    $neatness=$_POST["neatness"];
    $teacher_name=$_POST["teacher_name"];
    $teacher_sign=$_POST["teacher_sign"];
    $teacher_date=$_POST["teacher_date"];
    $principal_name=$_POST["principal_name"];
    $principal_sign=$_POST["principal_sign"];
    $principal_date=$_POST["principal_date"];
    $parent_sign=$_POST["parent_sign"];
    $parent_date=$_POST["parent_date"];
    $next_term_begin=$_POST["next_term_begin"];
    $next_term_fee=$_POST["next_term_fee"];
    $fee_owing=$_POST["fee_owing"];


   $sql ="UPDATE report SET academic_performance='$academic_performance', general_behaviour='$general_behaviour', neatness='$neatness', teacher_name='$teacher_name', teacher_sign='$teacher_sign', teacher_date='$teacher_date', principal_name='$principal_name', principal_sign='$principal_sign', principal_date='$principal_date', parent_sign='$parent_sign', parent_date='$parent_date', next_term_begin='$next_term_begin', next_term_fee='$next_term_fee', fee_owing='$fee_owing'  WHERE id='$id'";
   
   if (mysqli_query($link, $sql)) {

    //$last_id = mysqli_insert_id($link);

    header("location: scores.php?id=".$id);
   
   }else {

    echo "Error updating record: " . mysqli_error($link);

    }

}

//mysqli_close($link);

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Record</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<Style type="text/css">
*{
    box-sizing:border-box;
}

.col1, .col2, .col3{
    width: 33.33%;
    float: left;
    padding: 15px;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}


@media screen and (max-width:600px){
  .col1,.col2,.col3{
    width:50%;
  } 
}


@media screen and (max-width:389px){
  .col1,.col2,.col3{
    width:100%;
  } 
}
</Style>
<body style="background:blue;">
   <center><label for="progress">Progress: <progress value='100' max="100"></progress>100%</label></center>
  <form style=" background:tan; max-width:700px; margin:auto;" name ="myForm" action = "<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI']));?>" method="POST" autocomplete = "on">
    
   <fieldset>
   <legend>Step 3 :</legend>

    <div class="container" >
       
        <div class="row">
            <div class="col1"><label>Academic Performance :</label><br><textarea name="academic_performance" cols="20" rows="5"></textarea></div>
            
            <div class="col2"><label>General Behaviour :</label><br><textarea name="general_behaviour"  cols="20" rows="5"></textarea></div>
            
            <div class="col3"><label>Neatness :</label><br><input type="text" name="neatness"></div>
        </div>  
        
        <div class="row">
                <div class="col1"><label>Class Teacher's Name :</label><br><input type="text" name="teacher_name" ></div>
                
                <div class="col2"><label>Signature:</label><br><input type="text" name="teacher_sign"></div>
                
                <div class="col3"><label>Date :</label><br><input type="date" name=teacher_date></div>
                 
        </div>

        <div class="row">
                    <div class="col1"><label>Next Term's Begins :</label><br><input type="date" name="next_term_begin"></div>
                    
                    <div class="col2"><label>Next Term's Fees :</label><br><input type="text" name="next_term_fee"></div>
                    
                    <div class="col3"><label>Fees Owing :</label><br><input type="text" name="fee_owing"></div>
                     
        </div>

        <div class="row">
                    <div class="col1"><label>Principal :</label><br><input type="text" name="principal_name"></div>
                        
                    <div class="col2"><label>Signature :</label><br><input type="text" name="principal_sign"></div>
                        
                    <div class="col3"><label>Date:</label><br><input type="date" name="principal_date"></div>
                         
        </div>

         <div class="row">
                    <div class="col1"><label for="">Parent's Signature :</label><br><input type="text" name="parent_sign"></div>
                    
                    <div class="col2"><label>Date :</label><br><input type="date" name="parent_date"></div>
                    <!--<div class="col3"><label></label><input type="text"></div>-->
                   <!-- <input type="hidden" name="id" value="<?php //echo $id;?>"/>-->
        </div><br><br>
                
        <div class="row" style="text-align:center;"><input type="submit" value="Save and Continue" style="text-align:center; font-size:25px;">&nbsp;&nbsp;<input type="reset" value="Reset"> </div>

        
    </div>

   </fieldset>
  </form>
</body>
</html>