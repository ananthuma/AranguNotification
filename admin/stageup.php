<?php
require 'processor.php';

// Create connection
$conn =  db_connect();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "update events set event='".$_POST["event"]."' where now_next='".$_POST["nownext"]."' and stage='".$_POST["stage"]."'" ;


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <a href=\"form.html\" class=\"btn btn-success btn-rounded no-border\">Go Back!</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>