<!DOCTYPE html>
<html>
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    function calculateArea($length, $width) {
        return $length * $width;
    }

    // Call the function with sample values
    $length = 10;
    $width = 5;
    $area = calculateArea($length, $width);
    ?>

    <p>The area of the rectangle with length <?php echo $length; ?> and width <?php echo $width; ?> is: <?php echo $area; ?></p>
</body>
</html>
