<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bacSport";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    $cin = $_POST['cin'];

    $sql = "SELECT * FROM eleve WHERE cin = '$cin'";
    $res = mysqli_query($conn,$sql);

    if ($res) {
        if (mysqli_num_rows($res) > 0) {
            $sql = "DELETE FROM eleve WHERE cin = '$cin'";
            $res = mysqli_query($conn,$sql);
            if( mysqli_affected_rows($conn)>0){
                echo "<h1 style='font-size:3em;width:100%;text-align:center;color: cornflowerblue;'>Deleted Successfully</h1>";
            }
        } else {
            echo "<h1 style='font-size:3em;width:100%;text-align:center;color: cornflowerblue;'>Eleve Not Found !</h1>";
        }
    }
    mysqli_close($conn);
?>