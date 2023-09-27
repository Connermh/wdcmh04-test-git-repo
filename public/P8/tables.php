<?php
// php will see if this file has already been included and if so, will not include it again
require_once 'functions.php';

// utilizes dbConnect() to open a connection to the database
$conn = dbConnect();

// defines the SQL query and assigns the result to a variable
$sql = "SHOW TABLES";
$result = $conn->query($sql);

// Print and format the result as rows
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()) // fetch_assoc() fetches a result row as an associative array
    {
        var_dump($row);
    }
}
else
{
    echo "No Tables";
}