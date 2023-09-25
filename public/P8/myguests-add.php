<?php
// enter your own values here
$servername = "127.0.0.1";
$username = "homestead";
$dbname = "c2p8_database";
$password = "secret";

$conn = new mysqli();

$conn->__construct();

// create connection
$conn->real_connect($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
    echo "Connected successfully<br>";
}

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
