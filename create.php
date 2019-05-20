
<?php
require_once 'config.php';

$firstname=$lastname=$middlename=$section=$class=$sex=$no_in_class=$position_in_class=$term=$average_age=$age=$times_absent=$last_term_position="";

$last_term_average=$times_sch_opened=$academic_performance=$general_behaviour=$neatness=$teacher_name=$teacher_sign=$teacher_date="";

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



if($_SERVER["REQUEST_METHOD"]=="POST"){

    $firstname=$_POST["firstname"];

    $lastname=$_POST["lastname"];

    $middlename=$_POST["middlename"];

    $section=$_POST["section"];

    $class=$_POST["class"];

    $sex=$_POST["sex"];

    $no_in_class=$_POST["no_in_class"];

    $position_in_class=$_POST["position_in_class"];

    $term=$_POST["term"];

    $average_age=$_POST["average_age"];

    $age=$_POST["age"];

    $times_absent=$_POST["times_absent"];

    $last_term_position=$_POST["last_term_position"];

    $last_term_average=$_POST["last_term_average"];

    $times_sch_opened=$_POST["times_sch_opened"];

    
    $sql = "INSERT INTO report (firstname,lastname,middlename,section,class,sex,no_in_class,position_in_class,term,average_age,age,times_absent,last_term_position,last_term_average,times_sch_opened) VALUES ('$firstname','$lastname','$middlename','$section','$class','$sex','$no_in_class','$position_in_class','$term','$average_age','$age','$times_absent','$last_term_position','$last_term_average','$times_sch_opened')";

    if(mysqli_query($link, $sql)){  

    $last_id = mysqli_insert_id($link);

    header("location: create2.php?id=".$last_id);

    } else{

    echo "Error: could not execute ".$sql. "<br>" . mysqli_error($link);

    }
    mysqli_close($link);
}

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
<body style="background:blue">
    <form style="background:tan; max-width:700px; margin:auto;" name ="myForm " action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="formData()" method= "post" autocomplete = "on" align = "">
    <div class="container">
       <center><label for="progress">Progress: <progress value='40' max="100"></progress>40%</label></center>
        <br><br>
       <form action="" >
           <fieldset>
               <legend>Step 1 :</legend>
        <div class="row">
            <div class="col1"><label>First Name :</label><br><input type="text" name="firstname" required></div>
            
            <div class="col2"><label>Middle Name :</label><br><input type="text" name="middlename" required></div>
            
            <div class="col3"><label>Last Name :</label><br><input type="text" name="lastname" required></div>
        </div> 

        <div class="col2"><label>Section :</label><br>
            <select name="section" id="" required>
            <option value="">Select Section</option>
            <option value="Nursery">Nursery</option>
            <option value="Reception">Reception</option>
            <option value="Primary">Primary</option>
            <option value="Secondary">Secondary</option>  
            </select>
            </div>

        <div class="row">
                <div class="col1"><label>Class :</label><br><select name="class" id="" required>
                <option value="">Select Class</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="1A">1A</option>
                    <option value="1B">1B</option>
                    <option value="1C">1C</option>
                    <option value="1D">1D</option>
                    <option value="1E">1E</option>
                    <option value="2A">2A</option>
                    <option value="2B">2B</option>
                    <option value="2C">2C</option>
                    <option value="2D">2D</option>
                    <option value="2E">2E</option>
                    <option value="3A">3A</option>
                    <option value="3B">3B</option>
                    <option value="3C">3C</option>
                    <option value="3D">3D</option>
                    <option value="3E">3E</option>
                    <option value="4A">4A</option>
                    <option value="4B">4B</option>
                    <option value="4C">4C</option>
                    <option value="4D">4D</option>
                    <option value="4E">4E</option>
                    <option value="5A">5A</option>
                    <option value="5B">5B</option>
                    <option value="5C">5C</option>
                    <option value="5D">5D</option>
                    <option value="5E">5E</option>
                    <option value="JSS1A">JSS1A</option>
                    <option value="JSS1B">JSS1B</option>
                    <option value="JSS1C">JSS1C</option>
                    <option value="JSS2A">JSS2A</option>
                    <option value="JSS2B">JSS2B</option>
                    <option value="JSS2C">JSS2C</option>
                    <option value="JSS3A">JSS3A</option>
                    <option value="JSS3B">JSS3B</option>
                    <option value="JSS3C">JSS3C</option>
                    <option value="SS1A">SS1A</option>
                    <option value="SS1B">SS1B</option>
                    <option value="SS1C">SS1C</option>
                    <option value="SS2A">SS2A</option>
                    <option value="SS2B">SSBB</option>
                    <option value="SS2C">SS2C</option>
                    <option value="SS3A">SS3A</option>
                    <option value="SS3B">SS3B</option>
                    <option value="SS3C">SS3C</option>
                   
                </select><!--<input type="text" name="class">--></div>
                
                <div class="col2"><label>Sex :</label><br><select name="sex" id="" required><!--<input type="text" name="sex">-->
                    <option value="">Select Sex</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select></div>
                
                
                 
            </div>

            <div class="row">
                    <div class="col1"><label>Report for Period Ending :</label><br><input type="text" name="term" required></div>
                    
                    <div class="col2"><label>Position in Class :</label><br><input type="text" name="position_in_class"></div>
                    
                    <div class="col3"><label>Average Age :</label><br><input type="text" name="average_age"></div>
                     
                </div>

            <div class="row">
                    <div class="col1"><label>Age of Child :</label><br><input type="text" name="age"></div>
                        
                    <div class="col2"><label>No.of Times School Opened :</label><br><input type="text" name="times_sch_opened"></div>
                        
                    <div class="col3"><label>Time Absent:</label><br><input type="text" name="times_absent"></div>
                         
             </div>

             <div class="row">
                    <div class="col1"><label>Last Term's Position :</label><br><input type="text" name="last_term_position"></div>
                    
                    <div class="col2"><label>Last Term's Average :</label><br><input type="text" name="last_term_average"></div>
                    
                    <div class="col3"><label>No in Calss :</label><br><input type="text" name="no_in_class"></div>

             </div><br>
                    
                   
                 <div class="row" style="text-align:center;"><input type="submit" id="sub" value="Save and Continue">&nbsp;&nbsp;<input type="reset" value="Reset"><span id="input" style="color:green"></span></div>            
         </fieldset>
      </form>
    </div>
</body>
</html>
