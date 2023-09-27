<?php
require_once 'functions.php';

$conn = dbConnect();

// prepare and bind statement
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?,?,?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set the parameters using the bound variables
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

// execute the statement
$stmt->execute();

// gran the id value of the last inserted field
$lastId = $conn->insert_id;

echo "Successfully Inserted ID: $lastId<br/>\n";

$stmt->close();
$conn->close();
