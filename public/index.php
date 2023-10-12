<!DOCTYPE html>
<html>
    <head>
        <title>Address Book</title>
    </head>
    <body>
        <?php
        // gets the functions page to connect to the database
        require_once 'functions.php';

        $conn = dbConnect();

        $test = "SELECT * FROM person";
        $result = $conn->query($test);

        ?>
        <center>
            <?php
                /* This is a typical combination of printing all elements of a SQL query combined with implementing the
                different elements of the query to an HTML table */
                if ($result->num_rows > 0){
                    echo "<table><tr><th>Name</th><th>Email</th><th>Phone</th></tr>";
                    while ($row = $result->fetch_assoc()){
                        echo "<tr><td><a href='https://wdcmh04.test/detail.php'>".$row["lastname"].", ".$row["firstname"]."
                                <a/></td><td><a href='mailto:".$row["email"]."'>".$row["email"]."</td><td><a href='tel:".$row["phone"]."'>".$row["phone"]."</td>";
                    }
                    echo "</table>";
                }
                else{
                    echo "No rows";
                }
            ?>
        </center>
    </body>
    <?php
        echo "[<a href='http://wdcmh04.test/editadd.php'> +Add Record </a>]";
    ?>

</html>
