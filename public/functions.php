<?php

// declare a function to do database connections instead of writing all these lines all the time
function dbConnect()
{
    // database login parameters
    $serverName = "127.0.0.1";
    $userName = "homestead";
    $dbName = "addressbook_database";
    $password = "secret";

    //variable $conn which is defined as a new class object instance of the database
    $conn = new mysqli();

    // __construct() allows you to initialize an object's properties upon the creation of the object
    // use this when you create an object from a class
    $conn->__construct();

    // using $conn, connect to the database using the login parameters
    // the -> is php syntax for objects
    $conn->real_connect($serverName, $userName, $password, $dbName);

    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}