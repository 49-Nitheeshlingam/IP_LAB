<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sum of Digit Converter</title>
</head>
<body>
<h2>Sum of Digit Converter</h2>

<?php
if (isset($_REQUEST['digit'])) {
    $num_digit = $_REQUEST['digit'];
    $num=$num_digit;
    $sum=0;
    while($num_digit>0){
        $rem=$num_digit % 10;
        $sum+=$rem;
        $num_digit=$num_digit/10;
    }

    echo "<p>Given Number: $num</p>";
    echo "<p>Sum of Digits: $sum</p>";
} else {
    echo "<form method='post'>";
    echo "<label for='digit'>Enter the Number:</label>";
    echo "<input type='number' id='digit' name='digit' required>";
    echo "<button type='submit'>sum</button>";
    echo "</form>";
}
?>
</body>
</html>
