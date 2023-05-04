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

    $sql = "INSERT INTO eleve (cin, name, note)
    VALUES ('$cin', '$name', '$note')";

    if (mysqli_query($conn, $sql)) {
    echo "<h1 style='font-size:3em;width:100%;text-align:center;color: cornflowerblue;'>Saved Successfully</h1>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
