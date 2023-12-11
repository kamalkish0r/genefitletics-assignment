<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "testdb"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Define ranges
define("LOW", 0);
define("MEDIUM", 50);
define("HIGH", 90);

// Calculate mean values for variable A (x)
$sqlA = "SELECT AVG(value) AS meanA FROM A";
$resultA = $conn->query($sqlA);
$rowA = $resultA->fetch_assoc();
$x = $rowA["meanA"];

echo "Mean A: " . $x . "\n";

// Categorize mean of A
if ($x < LOW) {
    $cat_a = "LOW";
} elseif ($x < MEDIUM) {
    $cat_a = "Medium";
} else {
    $cat_a = "HIGH";
}

echo "Category A: " . $cat_a . "\n";

// Calculate mean values for variable B (y)
$sqlB = "SELECT AVG(value) AS meanB FROM B";
$resultB = $conn->query($sqlB);
$rowB = $resultB->fetch_assoc();
$y = $rowB["meanB"];

echo "Mean B: " . $y . "\n";

// Categorize mean of B
if ($y < LOW) {
    $cat_b = "LOW";
} elseif ($y < MEDIUM) {
    $cat_b = "Medium";
} else {
    $cat_b = "HIGH";
}

echo "Category B: " . $cat_b ."\n";

// Apply formula
if ($cat_a == "LOW" && $cat_b == "LOW") {
    $result = "LOW";
} elseif ($cat_a == "LOW" && $cat_b == "Medium") {
    $result = "low";
} elseif ($cat_a == "Medium" && $cat_b == "LOW") {
    $result = "medium";
} elseif ($cat_a == "Medium" && $cat_b == "Medium") {
    $result = "Medium";
} elseif ($cat_a == "Medium" && $cat_b == "HIGH") {
    $result = "medium";
} elseif ($cat_a == "HIGH" && $cat_b == "Medium") {
    $result = "medium";
} elseif ($cat_a == "HIGH" && $cat_b == "HIGH") {
    $result = "medium";
} elseif ($cat_a == "LOW" && $cat_b == "HIGH") {
    $result = "low";
} elseif ($cat_a == "HIGH" && $cat_b == "LOW") {
    $result = "high";
}

echo "\nResult: " . $result . "\n";

$conn->close();
?>
