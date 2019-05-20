

<?php
$rst->result="Record updated Sucessfully";
$mjson=json_encode($rst);
$output = array($mjson);
echo $output;

$math_total=75;
$math_remark = remark($math_total);
echo $math_remark;

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

if($_SERVER["REQUEST_METHOD"]=="POST"){

$lw=$_POST["lower_limit"];
$ul=$_POST["upper_limit"];

require_once 'config.php';
    $sql = "SELECT * FROM report LIMIT $lw,$ul";
    
    if($result = mysqli_query($link, $sql)){

    if(mysqli_num_rows($result) > 0){

        echo "<table align='center' bgcolor='tan' border='2' class='table table-bordered table-striped'>";

            echo "<thead>";

                echo "<tr>";

                    echo "<th>#</th>";

                    echo "<th>First Name</th>";

                    echo "<th>Middle Name</th>";

                    echo "<th>Last Name</th>";

                    echo "<th>Section</th>";

                    echo "<th>Class</th>";

                    echo "<th>Sex</th>";

                    echo "<th>Term</th>";

                 //  echo "<th>Salary

                    echo "<th colspan='3'>Action</th>";

                echo "</tr>";

            echo "</thead>";

            echo "<tbody>";

            while($row = mysqli_fetch_array($result)){

                echo "<tr>";

                    echo "<td>" . $row['id'] . "</td>";

                    echo "<td>" . $row['firstname'] . "</td>";

                    echo "<td>" . $row['middlename'] . "</td>";

                    echo "<td>" . $row['lastname'] . "</td>";

                    echo "<td>" . $row['section'] . "</td>";

                    echo "<td>" . $row['class'] . "</td>";

                    echo "<td>" . $row['sex'] . "</td>";

                    echo "<td>" . $row['term'] . "</td>";

                   // echo "<td>" . $row['salary'] . "</td>";

                    echo "<td>";

                        echo "<button><a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'>View</span></a></button></td>";

                        echo "<td><button><a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'>Edit</span></a></button></td>";

                        echo "<td><button><a href='scores.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'>Enter Score</span></a></button>";

                    echo "</td>";

                echo "</tr>";

            }

            echo "</tbody>";                            

        echo "</table>";

        // Free result set

        mysqli_free_result($result);

    } else{

        echo "<p class='lead'><em>No records were found.</em></p>";

    }

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
 
}
$thankyou="'result':'Thank You <br> We will get back to you soon.<br>Back to the ebizebiz.com or visit ebizebiz.com forward slash blog'";

$mjson=json_encode($thankyou);

 echo $mjson;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <input type="hidden" name="lower_limit" value="5"><input type="hidden" name="upper_limit" value="10">
    <input type="submit" value="Next">
    </form>
</body>
</html>