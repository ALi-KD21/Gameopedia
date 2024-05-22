<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $game = $_POST['game'];

    // Create connection
    $con = new mysqli('localhost', 'root', '', 'form');

    // Check connection
    if($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    }

    // Prepare SQL statement using prepared statement
    $sql = "INSERT INTO data (name, email, game) VALUES (?, ?, ?)";
    $stmt = $con->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("sss", $name, $email, $game);
    if($stmt->execute()){
        // Data inserted successfully, redirect to home.html with game parameter
        header("Location: home.html?game=" . urlencode($game));
        exit(); // Ensure no further output is sent after redirection
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $con->close();
} else {
    echo "Form not submitted.";
}
?>
