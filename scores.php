<?php

if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){


require_once 'config.php';

$id=trim($_GET["id"]);

echo $id;

}else {

    echo "Id doesnt contain id parameter";
}

    
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        
    $math_hwork=$_POST["math_hwork"];
    $math_test=$_POST["math_test"];
    $math_exam=$_POST["math_exam"];
    $math_total=$math_hwork+$math_test+$math_exam;//$_POST["math_total"];

    if ($math_total<40) {
        $math_remark="Poor";
    } elseif($math_total<50) {
        $math_remark="Below Average";
    } elseif ($math_total<60) {
        $math_remark="Average";
    } elseif ($math_total<70) {
        $math_remark="Above Average";
    } elseif ($math_total<80) {
        $math_remark="Good";
    } elseif ($math_total<90) {
        $math_remark="Very Good";
    } elseif ($math_total<=100) {
        $math_remark="Excellent";
    } else {
        $math_remark="Error: Total>100";
    }

    $math_position=$_POST["math_position"];
    //$math_remark=$_POST["math_remark"];

    $english_hwork=$_POST["english_hwork"];
    $english_test=$_POST["english_test"];
    $english_exam=$_POST["english_exam"];
    $english_total=$english_hwork+$english_test+$english_exam; //$_POST["english_total"];

    if ($english_total<40) {
        $english_remark="Poor";
    } elseif($english_total<50) {
        $english_remark="Below Average";
    } elseif ($english_total<60) {
        $english_remark="Average";
    } elseif ($english_total<70) {
        $english_remark="Above Average";
    } elseif ($english_total<80) {
        $english_remark="Good";
    } elseif ($english_total<90) {
        $english_remark="Very Good";
    } elseif ($english_total<=100) {
        $english_remark="Excellent";
    } else {
        $english_remark="Error:Total>100";
    }

    $english_position=$_POST["english_position"];
    //$english_remark=$_POST["english_remark"];
    
    $social_hwork=$_POST["social_hwork"];
    $social_test=$_POST["social_test"];
    $social_exam=$_POST["social_exam"];
    $social_total=$social_hwork+$social_test+$social_exam; //$_POST["social_total"];

    if ($social_total<40) {
        $social_remark="Poor";
    } elseif($social_total<50) {
        $social_remark="Below Average";
    } elseif ($social_total<60) {
        $social_remark="Average";
    } elseif ($social_total<70) {
        $social_remark="Above Average";
    } elseif ($social_total<80) {
        $social_remark="Good";
    } elseif ($social_total<90) {
        $social_remark="Very Good";
    } elseif ($social_total<=100) {
        $social_remark="Excellent";
    } else {
        $social_remark="Error:Check CA & Exam";
    }

    $social_position=$_POST["social_position"];
   // $social_remark=$_POST["social_remark"];

    $sci_hwork=$_POST["sci_hwork"];
    $sci_test=$_POST["sci_test"];
    $sci_exam=$_POST["sci_exam"];
    $sci_total=$sci_hwork+$sci_test+$sci_exam;
    
    if ($sci_total<40) {
        $sci_remark="Poor";
    } elseif($sci_total<50) {
        $sci_remark="Below Average";
    } elseif ($sci_total<60) {
        $sci_remark="Average";
    } elseif ($sci_total<70) {
        $sci_remark="Above Average";
    } elseif ($sci_total<80) {
        $sci_remark="Good";
    } elseif ($sci_total<90) {
        $sci_remark="Very Good";
    } elseif ($sci_total<=100) {
        $sci_remark="Excellent";
    } else {
        $sci_remark="Error:Check CA & Exam";
    }

    $sci_position=$_POST["sci_position"];
    //$sci_remark=$_POST["sci_remark"];

    $irk_hwork=$_POST["irk_hwork"];
    $irk_test=$_POST["irk_test"];
    $irk_exam=$_POST["irk_exam"];
    $irk_total=$irk_hwork+$irk_test+$irk_exam;//$_POST["irk_total"];
     
    if ($irk_total<40) {
        $irk_remark="Poor";
    } elseif($irk_total<50) {
        $irk_remark="Below Average";
    } elseif ($irk_total<60) {
        $irk_remark="Average";
    } elseif ($irk_total<70) {
        $irk_remark="Above Average";
    } elseif ($irk_total<80) {
        $irk_remark="Good";
    } elseif ($irk_total<90) {
        $irk_remark="Very Good";
    } elseif ($irk_total<=100) {
        $irk_remark="Excellent";
    } else {
        $irk_remark="Error:Check CA & Exam";
    }

    $irk_position=$_POST["irk_position"];
    //$irk_remark=$_POST["irk_remark"];

    $hausa_hwork=$_POST["hausa_hwork"];
    $hausa_test=$_POST["hausa_test"];
    $hausa_exam=$_POST["hausa_exam"];
    $hausa_total=$hausa_hwork+$hausa_test+$hausa_exam;//$_POST["hausa_total"];

    if ($hausa_total<40) {
        $hausa_remark="Poor";
    } elseif($hausa_total<50) {
        $hausa_remark="Below Average";
    } elseif ($hausa_total<60) {
        $hausa_remark="Average";
    } elseif ($hausa_total<70) {
        $hausa_remark="Above Average";
    } elseif ($hausa_total<80) {
        $hausa_remark="Good";
    } elseif ($hausa_total<90) {
        $hausa_remark="Very Good";
    } elseif ($hausa_total<=100) {
        $hausa_remark="Excellent";
    } else {
        $hausa_remark="Error:Check CA & Exam";
    }

    $hausa_position=$_POST["hausa_position"];
    //$hausa_remark=$_POST["hausa_remark"];

    $civic_hwork=$_POST["civic_hwork"];
    $civic_test=$_POST["civic_test"];
    $civic_exam=$_POST["civic_exam"];
    $civic_total=$civic_hwork+$civic_test+$civic_exam;      //$_POST["civic_total"];

    if ($civic_total<40) {
        $civic_remark="Poor";
    } elseif($civic_total<50) {
        $civic_remark="Below Average";
    } elseif ($civic_total<60) {
        $civic_remark="Average";
    } elseif ($civic_total<70) {
        $civic_remark="Above Average";
    } elseif ($civic_total<80) {
        $civic_remark="Good";
    } elseif ($civic_total<90) {
        $civic_remark="Very Good";
    } elseif ($civic_total<=100) {
        $civic_remark="Excellent";
    } else {
        $civic_remark="Error:Check CA & Exam";
    }

    $civic_position=$_POST["civic_position"];
    //$civic_remark=$_POST["civic_remark"];

    $health_hwork=$_POST["health_hwork"];
    $health_test=$_POST["health_test"];
    $health_exam=$_POST["health_exam"];
    $health_total=$health_hwork+$health_test+$health_exam;//$_POST["health_total"];
    
    if ($health_total<40) {
        $health_remark="Poor";
    } elseif($health_total<50) {
        $health_remark="Below Average";
    } elseif ($health_total<60) {
        $health_remark="Average";
    } elseif ($health_total<70) {
        $health_remark="Above Average";
    } elseif ($hausa_total<80) {
        $health_remark="Good";
    } elseif ($health_total<90) {
        $health_remark="Very Good";
    } elseif ($health_total<=100) {
        $health_remark="Excellent";
    } else {
        $health_remark="Error:Check CA & Exam";
    }
    
    $health_position=$_POST["health_position"];
    //$health_remark=$_POST["health_remark"];

    $quantitative_hwork=$_POST["quantitative_hwork"];
    $quantitative_test=$_POST["quantitative_test"];
    $quantitative_exam=$_POST["quantitative_exam"];
    $quantitative_total=$quantitative_hwork+$quantitative_test+$quantitative_exam;//$_POST["quantitative_total"];

    if ($quantitative_total<40) {
        $quantitative_remark="Poor";
    } elseif($quantitative_total<50) {
        $quantitative_remark="Below Average";
    } elseif ($quantitative_total<60) {
        $quantitative_remark="Average";
    } elseif ($quantitative_total<70) {
        $quantitative_remark="Above Average";
    } elseif ($quantitative_total<80) {
        $quantitative_remark="Good";
    } elseif ($quantitative_total<90) {
        $quantitative_remark="Very Good";
    } elseif ($quantitative_total<=100) {
        $quantitative_remark="Excellent";
    } else {
        $quantitative_remark="Error:Check CA & Exam";
    }

    $quantitative_position=$_POST["quantitative_position"];
   // $quantitative_remark=$_POST["quantitative_remark"];

    $verbal_hwork=$_POST["verbal_hwork"];
    $verbal_test=$_POST["verbal_test"];
    $verbal_exam=$_POST["verbal_exam"];
    $verbal_total=$verbal_hwork+$verbal_test+$verbal_exam;  //$_POST["verbal_total"];

    if ($verbal_total<40) {
        $verbal_remark="Poor";
    } elseif($verbal_total<50) {
        $verbal_remark="Below Average";
    } elseif ($verbal_total<60) {
        $verbal_remark="Average";
    } elseif ($verbal_total<70) {
        $verbal_remark="Above Average";
    } elseif ($verbal_total<80) {
        $verbal_remark="Good";
    } elseif ($verbal_total<90) {
        $verbal_remark="Very Good";
    } elseif ($verbal_total<=100) {
        $verbal_remark="Excellent";
    } else {
        $verbal_remark="Error:Check CA & Exam";
    }

    $verbal_position=$_POST["verbal_position"];
    //$verbal_remark=$_POST["verbal_remark"];

    $computer_hwork=$_POST["computer_hwork"];
    $computer_test=$_POST["computer_test"];
    $computer_exam=$_POST["computer_exam"];
    $computer_total= $computer_hwork+$computer_test+$computer_exam; //$_POST["computer_total"];

    if ($computer_total<40) {
        $computer_remark="Poor";
    } elseif($computer_total<50) {
        $computer_remark="Below Average";
    } elseif ($computer_total<60) {
        $computer_remark="Average";
    } elseif ($computer_total<70) {
        $computer_remark="Above Average";
    } elseif ($computer_total<80) {
        $computer_remark="Good";
    } elseif ($computer_total<90) {
        $computer_remark="Very Good";
    } elseif ($computer_total<=100) {
        $computer_remark="Excellent";
    } else {
        $computer_remark="Error:Check CA & Exam";
    }


    $computer_position=$_POST["computer_position"];
    //$computer_remark=$_POST["computer_remark"];

    $arabic_hwork=$_POST["arabic_hwork"];
    $arabic_test=$_POST["arabic_test"];
    $arabic_exam=$_POST["arabic_exam"];
    $arabic_total=$arabic_hworkt+$arabic_test+$arabic_exam; //$_POST["arabic_total"];

    if ($arabic_total<40) {
        $arabic_remark="Poor";
    } elseif($arabic_total<50) {
        $arabic_remark="Below Average";
    } elseif ($arabic_total<60) {
        $arabic_remark="Average";
    } elseif ($arabic_total<70) {
        $arabic_remark="Above Average";
    } elseif ($arabic_total<80) {
        $arabic_remark="Good";
    } elseif ($arabic_total<90) {
        $arabic_remark="Very Good";
    } elseif ($arabic_total<=100) {
        $arabic_remark="Excellent";
    } else {
        $arabic_remark="Error:Check CA & Exam";
    }

    $arabic_position=$_POST["arabic_position"];
   // $arabic_remark=$_POST["arabic_remark"];


   $sql ="UPDATE report SET
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

    header("location:index.php");

    exit();
   
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
    <title>Add Scores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body style="background:blue;">
<form style=" background:tan; max-width:700px; margin:auto;" action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI']));?>" method="post" style=" background:tan; max-width:700px; margin:auto;">
<fieldset>
<legend>Add the Student/pupil's Scores</legend>
<table align="center">
<thead><th>Subject</th><th>Home Work</th><th>Test</th><th>Exam</th></thead>
<tbody>         
<tr>
<td><label>Mathematics:</label></td><td><input type="text" name="math_hwork" /></td><td> <input type="text" name="math_test" /> </td><td> <input type="text" name="math_exam"/> </td>
</tr>

<tr>
<td><label>English:</label></td><td><input type="text" name="english_hwork" /></td><td> <input type="text" name="english_test"/> </td><td> <input type="text" name="english_exam"/> </td>
</tr>

<tr>
<td><labe>Science:</label></td><td><input type="text" name="sci_hwork"/></td><td> <input type="text" name="sci_test" /> </td><td> <input type="text" name="sci_exam"/> </td>
</tr>

<tr>
<td><label>Social Studies:</label></td><td><input type="text" name="social_hwork" /></td><td> <input type="text" name="social_test"/> </td><td> <input type="text" name="social_exam"/> </td>
</tr>

<tr>
<td><label>H/Education:</label></td><td><input type="text" name="health_hwork" /></td><td> <input type="text" name="health_test" /> </td><td> <input type="text" name="health_exam" /> </td>
</tr>

<tr>
<td><label>C/Education:</label></td><td><input type="number" name="civic_hwork" /></td><td> <input type="text" name="civic_test" /> </td><td> <input type="text" name="civic_exam"/> </td>
</tr>

<tr>
<td><label>Q/Reasoning:</label></td><td><input type="text" name="quantitative_hwork" /></td><td> <input type="text" name="quantitative_test"/> </td><td> <input type="text" name="quantitative_exam" /> </td>
</tr>

<tr>
<td><label>V/Reasoning:</label></td><td><input type="text" name="verbal_hwork" /></td><td> <input type="text" name="verbal_test" /> </td><td> <input type="text" name="verbal_exam" /> </td>
</tr>

<tr>
<td><label>I.R.K:</label></td><td><input type="text" name="irk_hwork" /></td><td> <input type="text" name="irk_test" /> </td><td> <input type="text" name="irk_exam" /> </td>
</tr>

<tr>
<td><label>Hausa: </label></td><td><input type="text" name="hausa_hwork" /></td><td> <input type="text" name="hausa_test" /> </td><td> <input type="text" name="hausa_exam"/> </td>
</tr>

<tr>
<td><label>Arabic:</label></td><td><input type="text" name="arabic_hwork" /></td><td> <input type="text" name="arabic_test" /> </td><td> <input type="text" name="arabic_exam" /> </td>
</tr>

<tr>
<td><label>Computer:</label></td><td><input type="text" name="computer_hwork" /></td><td> <input type="text" name="computer_test"/> </td><td> <input type="text" name="computer_exam" /> </td>
</tr>
<tr><td colspan="7" style="text-align:center;"><input type="submit" value="Submit Scores" style ="color:green; font-size:25px;"></td></tr>

</tbody>
        </table>
        </fieldset>
    </form>
</body>
</html>