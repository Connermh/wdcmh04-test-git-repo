<?php
$foo = $_GET['foo'];

if (is_array($foo) && (array_keys($foo) === range(0, count($foo) - 1)))
{
    for ($index = 0; $index < count($foo); $index++)
    {
        echo "FOO: $index contains: $foo[$index]<br/>\n";
    }
}

$bar = $_GET['bar'];

if (is_array($bar))
{
    foreach ($bar as $key => $value)
    {
        echo "BAR: $key contains: $value<br/>\n";
    }
}