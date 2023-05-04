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
    $name = $_POST['name'];
    $note = $_POST['note'];

    $sql = "SELECT * FROM eleve WHERE cin = '$cin'";
    $res = mysqli_query($conn,$sql);

    if ($res) {
        if (mysqli_num_rows($res) > 0) {
            echo empty($name);
            if(empty($name)){
                $sql = "UPDATE eleve SET  note = '$note' WHERE cin = '$cin'";
                $res = mysqli_query($conn,$sql);
            }elseif (empty($note)) {
                $sql = "UPDATE eleve SET  name = '$name' WHERE cin = '$cin'";
                $res = mysqli_query($conn,$sql);
            }else {
                $sql = "UPDATE eleve SET  name = '$name',note = '$note' WHERE cin = '$cin'";
                $res = mysqli_query($conn,$sql);
            }
            
            if( mysqli_affected_rows($conn)>0){
                echo "<h1 style='font-size:3em;width:100%;text-align:center;color: cornflowerblue;'>Updated Successfully</h1>";
            }
        } else {
            echo "<h1 style='font-size:3em;width:100%;text-align:center;color: cornflowerblue;'>Eleve Not Found !</h1>";
        }
    }
    mysqli_close($conn);
?>