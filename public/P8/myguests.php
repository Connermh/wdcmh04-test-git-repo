<?php
// the username, password, database name, and server for the database
$servername = "127.0.0.1";
$username = "homestead";
$dbname = "c2p8_database";
$password = "secret";

$conn = new mysqli();

// The object-oriented style mysqli::init() method has been deprecated in PHP 8.1. Replace calls to parent::init() with parent::__construct().
// $conn->init();
$conn->__construct();

// secure the connection - only necessary on vwh servers, remove or comment out for Laravel Homestead local development sites
/*
$conn->ssl_set(
    NULL,
    NULL,
    "/etc/ssl/isu-its-mysql-ca-trust/ca-cert.pem",
    NULL,
    NULL
);
*/

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

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    // output data of each row
    while($row = $result->fetch_assoc()){
        echo "id: " . $row["id"] . " - name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
}
else {
    echo "0 results";
}

// close the connection
$conn->close();