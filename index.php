<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

    <script src="main.js"></script>

    
 
    <style type="text/css">

    .lead{color:white; font-size:15px; text-align:center;}
    
    .tabcontent {
    display: none;
    padding: 6px 12px;
    /*border: 1px solid #ccc;*/
    border-top: 10px;
    height: auto;
    width:100%;
    }

    img{
        display:block;
        margin:0 auto;
        
    }

    h1{
        text-align:center;
        color:white;
    }

    col{
        width:100%;
    }

    
    .addnr {
        float:right;
        color:green;
        font-size:15px;
    }
    
    .table{
        text-align:;
        width:auto;
        margin:auto;
    }

    </style>

</head>
<body bgcolor="blue">
<div><img src="kc.jpg" alt=""></div>

<p align="right"><a href="logout.php" class="btn btn-danger" style='background-color:white;'>Sign Out of Your Account</a></p>

<h1 style='color:white;'><marquee behavior="" direction="">Welcome to Kano Capital School's Terminal Report Dashboard</marquee></h1>
  
<h1>Kano Capital School's Terminal Report Dashboard</h1>



<div style='display:flex; flex-direction:row; justify-content:space-around; margin:20px'>
<button class="tablink" onclick="displayTab(event, 'nursery1a')">Nursery 1A</button><button class="tablink" onclick="displayTab(event, 'nursery1b')">Nursery 1B</button><button class="tablink" onclick="displayTab(event, 'nursery1c')"> Nursery 1C</button><button class="tablink" onclick="displayTab(event, 'nursery1d')">Nursery 1D</button><button class="tablink" onclick="displayTab(event, 'nursery1e')">Nursery 1E</button>
</div>

<div style='display:flex; flex-direction:row; justify-content:space-around; margin:20px'>
<button class="tablink" onclick="displayTab(event, 'nursery2a')">Nursery 2A</button><button class="tablink" onclick="displayTab(event, 'nursery2b')">Nursery 2B</button><button class="tablink" onclick="displayTab(event, 'nursery2c')"> Nursery 2C</button><button class="tablink" onclick="displayTab(event, 'nursery2d')">Nursery 2D</button><button class="tablink" onclick="displayTab(event, 'nursery2e')">Nursery 2E</button>
</div>

<div style='display:flex; flex-direction:row; justify-content:space-around;margin:20px'>
<button class="tablink" onclick="displayTab(event, 'receptiona')">Reception A</button><button class="tablink" onclick="displayTab(event, 'receptionb')">Reception B</button><button class="tablink" onclick="displayTab(event, 'receptionc')">Reception C</button><button class="tablink" onclick="displayTab(event, 'receptiond')">Reception D</button><button class="tablink" onclick="displayTab(event, 'receptione')">Reception E</button>
</div>

<div style='display:flex; flex-direction:row; justify-content:space-around; margin:20px'>
<button class="tablink" onclick="displayTab(event, 'primary1a')">Primary 1A</button><button class="tablink" onclick="displayTab(event, 'primary1b')">Primary 1B</button><button class="tablink" onclick="displayTab(event, 'primary1c')">Primary 1C</button><button class="tablink" onclick="displayTab(event, 'primary1d')">Primary 1D</button><button class="tablink" onclick="displayTab(event, 'primary1e')">Primary 1E</button>
</div>

<div style='display:flex; flex-direction:row; justify-content:space-around; margin:20px'>
<button class="tablink" onclick="displayTab(event, 'primary2a')">Primary 2A</button><button class="tablink" onclick="displayTab(event, 'primary2b')">Primary 2B</button><button class="tablink" onclick="displayTab(event, 'primary2c')">Primary 2C</button><button class="tablink" onclick="displayTab(event, 'primary2d')">Primary 2D</button><button class="tablink" onclick="displayTab(event, 'primary2e')">Primary 2E</button>
</div>

<div style='display:flex; flex-direction:row; justify-content:space-around; margin:20px'>
<button  class="tablink" onclick="displayTab(event, 'primary3a')">Primary 3A</button><button class="tablink" onclick="displayTab(event, 'primary3b')">Primary 3B</button><button class="tablink" onclick="displayTab(event, 'primary3c')">Primary 3C</button><button class="tablink" onclick="displayTab(event, 'primary3d')">Primary 3D</button><button class="tablink" onclick="displayTab(event, 'primary3e')">Primary 3E</button>
</div>

<div style='display:flex; flex-direction:row; justify-content:space-around; margin:20px'>
<button class="tablink" onclick="displayTab(event, 'primary4a')">Primary 4A</button><button class="tablink" onclick="displayTab(event, 'primary4b')">Primary 4B</button><button class="tablink" onclick="displayTab(event, 'primary4c')">Primary 4C</button><button class="tablink" onclick="displayTab(event, 'primary4d')">Primary 4D</button><button class="tablink" onclick="displayTab(event, 'primary4e')"> Primary 4E</button>
</div>

<div style='display:flex; flex-direction:row; justify-content:space-around; margin:20px'>
<button class="tablink" onclick="displayTab(event, 'primary5a')">Primary 5A</button><button class="tablink" onclick="displayTab(event, 'primary5b')">Primary 5B</button><button class="tablink" onclick="displayTab(event, 'primary5c')">Primary 5C</button><button class="tablink" onclick="displayTab(event, 'primary5d')">Primary 5D</button><button class="tablink" onclick="displayTab(event, 'primary5e')">Primary 5E</button>
</div>


<div id="nursery1a" class="tabcontent">

<h1>Nursery 1A</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Nursery','1A'); ?>
          
</div>

<div id="nursery1b" class="tabcontent">

<h1>Nursery 1B</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Nursery','1B'); ?>

</div>

<div id="nursery1c" class="tabcontent">

<h1>Nursery 1C</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Nursery','1C'); ?>

</div>

<div id="nursery1d" class="tabcontent">

<h1>Nursery 1D</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Nursery','1D'); ?>

</div>

<div id="nursery1e" class="tabcontent">

<h1>Nursery 1E</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Nursery','1E'); ?>

</div>

<div id="nursery2a" class="tabcontent">

<h1>Nursery 2A</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Nursery','2A'); ?>

</div>

<div id="nursery2b" class="tabcontent">

<h1>Nursery 2B</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Nursery','2B'); ?>

</div>

<div id="nursery2c" class="tabcontent">

<h1>Nursery 2C</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Nursery','2C'); ?>

</div>

<div id="nursery2d" class="tabcontent">

<h1>Nursery 2D</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Nursery','2D'); ?>

</div>

<div id="nursery2e" class="tabcontent">

<h1>Nursery 2E</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Nursery','2E'); ?>

</div>

<div id="receptiona" class="tabcontent">

<h1>Reception A</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Reception','A'); ?>

</div>

<div id="receptionb" class="tabcontent">

<h1>Reception B</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Reception','B'); ?>

</div>

<div id="receptionc" class="tabcontent">

<h1>Reception C</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Reception','C'); ?>

</div>

<div id="receptiond" class="tabcontent">

<h1>Reception D</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Reception','D'); ?>

</div>

<div id="receptione" class="tabcontent">

<h1>Reception E</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Reception','E'); ?>

</div>

<div id="primary1a" class="tabcontent">

<h1>Primary 1A</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','1A'); ?>

</div>

<div id="primary1b" class="tabcontent">

<h1>Primary 1B</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','1B'); ?>

</div>

<div id="primary1c" class="tabcontent">

<h1>Primary 1C</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','1C'); ?>

</div>

<div id="primary1d" class="tabcontent">

<h1>Primary 1D</h1>
            
<button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','1D'); ?>

</div>

<div id="primary1e" class="tabcontent">

<h1>Primary 1E</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','1E'); ?>

</div>

<div id="primary2a" class="tabcontent">

<h1>Primary 2A</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','2A'); ?>

</div>

<div id="primary2b" class="tabcontent">

<h1>Primary 2B</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','2B'); ?>

</div>

<div id="primary2c" class="tabcontent">

<h1>Primary 2C</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','2C'); ?>

</div>

<div id="primary2d" class="tabcontent">

<h1>Primary 2D</h1>
            
<button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','2D'); ?>

</div>

<div id="primary2e" class="tabcontent">

<h1>Primary 2E</h1>
            
<button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','2E'); ?>

</div>

<div id="primary3a" class="tabcontent">

<h1>Primary 3A</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','3A'); ?>

</div>

<div id="primary3b" class="tabcontent">

<h1>Primary 3B</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','3B'); ?>

</div>

<div id="primary3c" class="tabcontent">

<h1>Primary 3C</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','3C'); ?>

</div>

<div id="primary3d" class="tabcontent">

<h1>Primary 3D</h1>
            
<button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','3D'); ?>

</div>

<div id="primary3e" class="tabcontent">

<h1>Primary 3E</h1>
            
<button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','3E'); ?>

</div>

<div id="primary4a" class="tabcontent">

<h1>Primary 4A</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','4A'); ?>

</div>

<div id="primary4b" class="tabcontent">

<h1>Primary 4B</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','4B'); ?>

</div>

<div id="primary4c" class="tabcontent">

<h1>Primary 4C</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','4C'); ?>

</div>

<div id="primary4d" class="tabcontent">

<h1>Primary 4D</h1>
            
<button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','4D'); ?>

</div>

<div id="primary4e" class="tabcontent">

<h1>Primary 4E</h1>
            
<button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','4E'); ?>

</div>


<div id="primary5a" class="tabcontent">

<h1>Primary 5A</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','5A'); ?>

</div>

<div id="primary5b" class="tabcontent">

<h1>Primary 5B</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','5B'); ?>

</div>

<div id="primary5c" class="tabcontent">

<h1>Primary 5C</h1>
            
 <button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','5C'); ?>

</div>

<div id="primary5d" class="tabcontent">

<h1>Primary 5D</h1>
            
<button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','5D'); ?>

</div>

<div id="primary5e" class="tabcontent">

<h1>Primary 5E</h1>
            
<button class='addnr'><a href="create.php">Add New Record</a></button>

<?php item('Primary','5E'); ?>

</div>





<script>
            function displayTab(evt,tabname) {
    
                var i,tablinks,tabcontents;
    
                tabcontents = document.getElementsByClassName("tabcontent");
    
                for (i = 0; i < tabcontents.length; i++) {
    
                tabcontents[i].style.display = "none";
    
                }   
    
                tablinks = document.getElementsByClassName("tablinks");
    
                for (i = 0; i < tablinks.length; i++) {
    
                tablinks[i].className = tablinks[i].className.replace("active", "");
    
                }
                //var pass = prompt('Enter your PASSWORD: ');

               // if ( pass=='ali') {

                    document.getElementById(tabname).style.display = "block";
    
                    evt.currentTarget.className += " active";
                    
                //} else {

                   // alert('Wrong PASSWORD: Enter the CORRECT one.');
               // }
                
                
            }
</script>


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

        echo "<table style='' bgcolor='tan' border='1' class='table table-bordered table-striped'>";

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

        echo "<p class='lead'><em>No records were found.</em></p>";

    }

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}



// Close connection

mysqli_close($link);

}

?>

</body>
</html>