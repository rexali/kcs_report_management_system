

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Edit Report</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
</head>
<body>
<form>
<fieldset>
<legend>Students' Report: </legend>
<table style="max-width:100%; margin:auto" width ="">

<tr>
<td colspan="2">Name:<input type="text" name="firstname" value="<?php echo $firstname;?>" > <td colspan="2">Middle Name:<input type="text" name="middlename" value="<?php echo $middlename;?>"></td><td colspan="2">Last Name: <input type="text" name="lastname" value="<?php echo $lastname;?>"></td>
</tr>     

<tr>
<td colspan="4">Class:<input type="text" name="no_in_class"></td><td colspan="3">No. in Class: <input type="text" name="no_in_class"></td>
</tr>

<tr>
<td colspan="4">Term: <input type="text" name="term"></td><td colspan="3">Position: <input type="text" name="position_in_class"></td>
</tr>

<tr>
 <td colspan="4">Average Age: <input type="text" name="avg_age"></td><td colspan="3">Age of Child: <input type="text" name="age"></td>
</tr>


<tr>
 <td colspan="4">No.of Times School Opened <input type="text" name="times_sch_opened"></td><td colspan="3">Times Absent: <input type="text" name="times_absent"></td>
</tr>
        
 <tr>
 <td colspan="4">Last Term's Position: <input type="text" name="last_term_position"></td><td colspan="3">Last Term's Average: <input type="text" name="last_term_avg"></td>
 </tr>
 <tr>
        <td colspan="7"><hr></td>
</tr>
       

<tr>
<td>Subject</td><td>H/Work</td><td>Test</td><td>Exam</td><td>Total</td><td>Position</td><td>Remark</td>
</tr>

<tr>
<td><label>Mathematics:</label></td><td><input type="text" name="maths_hw" placeholder = "home work here"/></td><td> <input type="text" name="math_test" placeholder = "test here"/> </td><td> <input type="text" name="math_exam" placeholder = "exams here"/> </td><td> <input type="text" name="math_total" placeholder = "total here"/> </td><td> <input type="text" name="math_position" placeholder = "position here"/> </td><td> <input type="text" name="math_remark" placeholder = "remarks here"/> </td>
</tr>

<tr>
<td><label>English:</label></td><td><input type="text" name="english_hw" placeholder = "home work here"/></td><td> <input type="text" name="english_test" placeholder = "test here"/> </td><td> <input type="text" name="english_exam" placeholder = "exams here"/> </td><td> <input type="text" name="english_total" placeholder = "total here"/> </td><td> <input type="text" name="english_position" placeholder = "position here"/> </td><td> <input type="text" name="english_remark" placeholder = "remarks here"/> </td>
</tr>

<tr>
<td><labe>Science:</label></td><td><input type="text" name="sci_hw" placeholder = "home work here"/></td><td> <input type="text" name="sci_test" placeholder = "test here"/> </td><td> <input type="text" name="sci_exam" placeholder = "exams here"/> </td><td> <input type="text" name="sci_total" placeholder = "total here"/> </td><td> <input type="text" name="sci_position" placeholder = "position here"/> </td><td> <input type="text" name="sci_remark" placeholder = "remarks here"/> </td>
</tr>

<tr>
<td><label>Social Studies:</label></td><td><input type="text" name="social_hw" placeholder = "home work here"/></td><td> <input type="text" name="social_test" placeholder = "test here"/> </td><td> <input type="text" name="social_exam" placeholder = "exams here"/> </td><td> <input type="text" name="social_total" placeholder = "total here"/> </td><td> <input type="text" name="social_position" placeholder = "position here"/> </td><td> <input type="text" name="social_remark" placeholder = "remarks here"/> </td>
</tr>

<tr>
<td><label>H/Education:</label></td><td><input type="text" name="health_hw" placeholder = "home work here"/></td><td> <input type="text" name="health_test" placeholder = "test here"/> </td><td> <input type="text" name="health_exam" placeholder = "exams here"/> </td><td> <input type="text" name="health_total" placeholder = "total here"/> </td><td> <input type="text" name="health_position" placeholder = "position here"/> </td><td> <input type="text" name="health_remark" placeholder = "remarks here"/> </td>
</tr>

<tr>
<td><label>C/Education:</label></td><td><input type="text" name="civic_hw" placeholder = "home work here"/></td><td> <input type="text" name="civic_test" placeholder = "test here"/> </td><td> <input type="text" name="civic_exam" placeholder = "exams here"/> </td><td> <input type="text" name="civic_total" placeholder = "total here"/> </td><td> <input type="text" name="civic_position" placeholder = "position here"/> </td><td> <input type="text" name="civic_remark" placeholder = "remarks here"/> </td>
</tr>

<tr>
<td><label>Q/Reasoning:</label></td><td><input type="text" name="quantitative_hw" placeholder = "home work here"/></td><td> <input type="text" name="quantitative_test" placeholder = "test here"/> </td><td> <input type="text" name="quantitative_exam" placeholder = "exams here"/> </td><td> <input type="text" name="quantitative_total" placeholder = "total here"/> </td><td> <input type="text" name="quantitative_position" placeholder = "position here"/> </td><td> <input type="text" name="quantitative_remark" placeholder = "remarks here"/> </td>
</tr>

<tr>
<td><label>V/Reasoning:</label></td><td><input type="text" name="verbal_hw" placeholder = "home work here"/></td><td> <input type="text" name="verbal_test" placeholder = "test here"/> </td><td> <input type="text" name="verbal_exam" placeholder = "exams here"/> </td><td> <input type="text" name="verbal_total" placeholder = "total here"/> </td><td> <input type="text" name="verbal_position" placeholder = "position here"/> </td><td> <input type="text" name="verbal_remark" placeholder = "remarks here"/> </td>
</tr>

<tr>
<td><label>I.R.K:</label></td><td><input type="text" name="irk_hw" placeholder = "home work here"/></td><td> <input type="text" name="irk_test" placeholder = "test here"/> </td><td> <input type="text" name="irk_exam" placeholder = "exams here"/> </td><td> <input type="text" name="irk_total" placeholder = "total here"/> </td><td> <input type="text" name="irk_position" placeholder = "position here"/> </td><td> <input type="text" name="irk_remark" placeholder = "remarks here"/> </td>
</tr>

<tr>
<td><label>Hausa: </label></td><td><input type="text" name="hausa_hw" placeholder = "home work here"/></td><td> <input type="text" name="hausa_test" placeholder = "test here"/> </td><td> <input type="text" name="hausa_exam" placeholder = "exams here"/> </td><td> <input type="text" name="hausa_total" placeholder = "total here"/> </td><td> <input type="text" name="hausa_position" placeholder = "position here"/> </td><td> <input type="text" name="hausa_remark" placeholder = "remarks here"/> </td>
</tr>

<tr>
<td><label>Arabic:</label></td><td><input type="text" name="arabic_hw" placeholder = "home work here"/></td><td> <input type="text" name="arabic_test" placeholder = "test here"/> </td><td> <input type="text" name="arabic_exam" placeholder = "exams here"/> </td><td> <input type="text" name="arabic_total" placeholder = "total here"/> </td><td> <input type="text" name="arabic_position" placeholder = "position here"/> </td><td> <input type="text" name="arabic_remark" placeholder = "remarks here"/> </td>
</tr>

<tr>
<td><label>Computer:</label></td><td><input type="text" name="computer_hw" placeholder = "home work here"/></td><td> <input type="text" name="computer_test" placeholder = "test here"/> </td><td> <input type="text" name="computer_exam" placeholder = "exams here"/> </td><td> <input type="text" name="computer_total" placeholder = "total here"/> </td><td> <input type="text" name="computer_position" placeholder = "position here"/> </td><td> <input type="text" name="computer_remark" placeholder = "remarks here"/> </td>
</tr>

<tr>
<td><label>Total:</label></td><td><input type="text" name="total" placeholder = ""/></td><td> <input type="text" name="test" placeholder = ""/> </td><td> <input type="text" name="exams" placeholder = ""/> </td><td> <input type="text" name="total" placeholder = "total here"/> </td><td> <input type="text" name="position" placeholder = ""/> </td><td> <input type="text" name="remark" placeholder = ""/> </td>
</tr>

<tr>
<td><label>Average:</label></td><td><input type="text" name="average" placeholder = ""/></td><td> <input type="text" name="test" placeholder = ""/> </td><td> <input type="text" name="exams" placeholder = ""/> </td><td> <input type="text" name="average" placeholder = "average  here"/> </td><td> <input type="text" name="position" placeholder = ""/> </td><td> <input type="text" name="remark" placeholder = ""/> </td>
</tr>

<tr>
<td><label>Class Average:</label></td><td><input type="text" name="caverage" placeholder = ""/></td><td> <input type="text" name="test" placeholder = ""/> </td><td> <input type="text" name="exams" placeholder = ""/> </td><td> <input type="text" name="class_average" placeholder = "class average here"/> </td><td> <input type="text" name="position" placeholder = ""/> </td><td> <input type="text" name="remark" placeholder = ""/> </td>

</tr>

<tr>
        <td colspan="7" align="center">GENERAL REMARKS</td>
</tr>
        
 <tr>
         <td colspan="7">Academic Performance <textarea name="acdm_performance" id="" cols="100" rows="1"></textarea></td>
</tr>

<tr>
        <td colspan="7">General Behaviour <textarea name="gen_behaviour" id="" cols="100" rows="1"></textarea> <hr></td>
</tr>
        
        
<tr>
         <td colspan="4">Neatness <input type="text" name="neatness"></td>
</tr>
                
         <tr>
         <td colspan="3">Class Teacher's Name <input type="text" name="teacher_name"></td><td colspan="2">Signature <input type="text" name="teacher_sign"></td> <td> Date <input type="text" name="teacher_date"></td>
         </tr>
                
         <tr>
        <td colspan="3">Next Term Begins <input type="text" name="next_term_begin"></td><td colspan="2">Next Term Fees <input type="text" name="next_term_fee"></td><td colspan="2">Fees Owing <input type="text" name="fee_owing"></td>

        </tr>
        <tr>
                <td colspan="3">Principal <input type="text" name="principal"></td><td colspan="2">Signature <input type="text" name="principal_sign"></td><td colspan="2">Date <input type="text" name="principal_date"></td>
        </tr>
                
        <tr>
                <td colspan="3">Parent's Signature <input type="text" name="parent_sign"></td><td colspan="3">Date <input type="text" name="parent_date"></td>
        </tr>
        <tr><td colspan="7" style="text-align:center;"><br><br><br><input type="submit" value="Submit Report" style ="color:green;"></td></tr>

</fieldset>

</form>



</body>
</html>

