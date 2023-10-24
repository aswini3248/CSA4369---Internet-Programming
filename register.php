<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
     $db_host = "localhost"; 
    $db_user = "root";     
    $db_password = "";
    $db_name = "signup";    
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $name = $conn->real_escape_string($_POST["name"]);
    $email=$conn->real_escape_string($_POST["email"]);
  $password=$conn->real_escape_string($_POST["password"]);
    $sql = "INSERT INTO registration(name,email,password) VALUES ('$name','$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Thanks for contacting us. We will contact you shortly.";
    } else {
        // Error handling
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
