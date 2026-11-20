<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 7a Q3</title>
</head>
<body>
<h2>Rectangle Area</h2>
<?php
    function calculateArea($width, $length) {
        return $width * $length;
    }

    $width = 4;
    $length = 2;

    $area = calculateArea($width, $length);

    echo "<p>The area of a rectangle with a width of "
        . $width
        . " and a length of "
        . $length
        . " is "
        . $area
        . ".</p>";
?>
</body>
</html>