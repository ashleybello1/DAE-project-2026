<?php
include "functions.php";

// variables
$studentName = "Alex";
$grades = [85, 92, 76, 88];
$isPassing = false;

// function call
$average = calculateAverage($grades);

// decision structure
if ($average >= 70) {
    $status = "Passing";
} else {
    $status = "Failing";
}

// output
echo "Student Name: $studentName <br>";
echo "Average: $average <br>";
echo "Status: $status <br>";

?>