<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<?php

function item($x,$y) {

/* Database credentials. Assuming you are running MySQL

server with default setting (user 'root' with no password) 

 Attempt to connect to MySQL database */

$link = mysqli_connect('localhost', 'root', '' , 'ebizebiz');

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

// Attempt select query execution

$sql = "SELECT * FROM report WHERE section = '$x' AND class = '$y'";

if($result = mysqli_query($link, $sql)){

    if(mysqli_num_rows($result) > 0){

        echo "<table align='center' bgcolor='tan' border='1' class='table table-bordered table-striped'>";

            echo "<thead>";

                echo "<tr>";

                   // echo "<th>#</th>";

                    echo "<th>First Name</th>";

                    echo "<th>Middle Name</th>";

                    echo "<th>Last Name</th>";

                   // echo "<th>Section</th>";

                    //echo "<th>Class</th>";

                   // echo "<th>Sex</th>";

                   // echo "<th>Term</th>";

                 //  echo "<th>Salary</th>";

                    echo "<th colspan='3'>Action</th>";

                echo "</tr>";

            echo "</thead>";

            echo "<tbody>";

            while($row = mysqli_fetch_array($result)){

                echo "<tr>";

                    //echo "<td>" . $row['id'] . "</td>";

                    echo "<td>" . $row['firstname'] . "</td>";

                    echo "<td>" . $row['middlename'] . "</td>";

                    echo "<td>" . $row['lastname'] . "</td>";

                   // echo "<td>" . $row['section'] . "</td>";

                   // echo "<td>" . $row['class'] . "</td>";

                    //echo "<td>" . $row['sex'] . "</td>";

                   //echo "<td>" . $row['term'] . "</td>";

                   // echo "<td>" . $row['salary'] . "</td>";

                    echo "<td>";

                        echo "<button><a href='preview.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'>View</span></a></button></td>";

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

        echo "<p class='lead' style='color:white;'><em>No records were found.</em></p>";

    }

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}



// Close connection

mysqli_close($link);

}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Class Records</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body style="background-color:blue;">
    
<h1 style='color:white;'><marquee behavior="" direction="">Welcome to Kano Capital School's Terminal Report Dashboard</marquee></h1>
<h1 style='text-align:center;color:white;'>Kano Capital School's Terminal Report Dashboard</h1> 
<h1 style="text-align:center; color:white;"> <?php echo ucfirst( $_SESSION['section']); ?> <?php echo ucfirst($_SESSION['class']); ?></h1>

<p align="right"><a href="logout.php" class="btn btn-danger" style='background-color:white;'>Sign Out of Your Account</a></p>

<?php item($_SESSION['section'], $_SESSION['class']); ?>

</body>
</html>