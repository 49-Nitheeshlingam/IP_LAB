<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Grade Converter</title>
</head>
<body>
<h2>Grade Converter</h2>

<?php
if (isset($_REQUEST['grade'])) {
    $numerical_grade = $_REQUEST['grade'];

    function convertGrade($grade) {
        if ($grade >= 90) {
            return 'A';
        } elseif ($grade >= 80) {
            return 'B';
        } elseif ($grade >= 70) {
            return 'C';
        } elseif ($grade >= 60) {
            return 'D';
        } else {
            return 'F';
        }
    }

    $letter_grade = convertGrade($numerical_grade);

    echo "<p>Numerical Grade: $numerical_grade</p>";
    echo "<p>Letter Grade: $letter_grade</p>";
} else {
    echo "<form method='post'>";
    echo "<label for='grade'>Enter numerical grade (0-100):</label>";
    echo "<input type='number' id='grade' name='grade' min='0' max='100' required>";
    echo "<button type='submit'>Convert</button>";
    echo "</form>";
}
?>
</body>
</html>
