<!DOCTYPE html>
<html>
<head>
    <title>Hello World</title>
</head>
<body>

<h1>Welcome to the basics page of the website!</h1>
<p>This is where I am practicing the basics of PHP.</p>

<?php

$test = "concatenation";
echo "<br>";
echo "<p><strong>Hello world!</strong></p>"; // Assuming the strong tag means 'bold'

echo "This is a statement used to test ". $test . "!"; // These echo statements are
echo "<p>This is a statement used to test $test!</p>"; // functionally identical

echo "The word " . $test . " is " . strlen($test) . " caracters long!";
echo "The word " . $test . " is " . strrev($test) . " backwards!";

echo "<br><br>";

for ($i = 1; $i<=10; $i++){
    printStuff();
    echo "<p>: $i.</p>";
}

function printStuff(){
    print "<p>Stuff</p>";
}
?>

</body>
</html>