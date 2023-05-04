<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="../style/main.css"
    />
    <title>Database Records</title>
    <style>
        table{
            width: 70%;
            margin: auto;
            color:cornflowerblue;
            font-size: 2em;
        }
        table, tr, th, td{
            border: 1px solid #d4d4d4;
            border-collapse: collapse;
            padding: 12px;
            
        }
        th, td{
            text-align: left;
            vertical-align: top;
        }
        tr:nth-child(even){
            background-color: #e7e9eb;
        }
        th,td{
          text-align: center;
        }
    </style>
<body>
<?php

//storing database details in variables.
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bacSport";

    //creating connection to database
    $con = mysqli_connect($hostname, $username, $password, $dbname);
    //checking if connection is working or not
    if(!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    
    //Output Form Entries from the Database
    $sql = "SELECT * FROM eleve";
    //fire query
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0)
    { 
      echo '<table> <tr> <th> Cin </th> <th> Name </th> <th> Note </th> </tr>';
      while($row = mysqli_fetch_assoc($result)){
        echo 
          '<tr > <td>' . $row["cin"] . '</td>
          <td>' . $row["name"] . '</td>
          <td> ' . $row["note"] . '</td> </tr>';
      }
      
    }
    else
    {
      echo "0 results";
    }
?>
</body>
</html>