<?php
include "../Backend/configure/data_base.php";


/* =========================================================
   1️⃣ INSERT CONVERSION (POST)
========================================================= */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_token    = $_POST['user_token'];
    $input_type    = $_POST['input_type'];
    $display_value = $_POST['display_value'];
    $display_unit  = $_POST['display_unit'];
    $value_in_kg   = $_POST['value_in_kg'];
    $input_weight  = $_POST['input_weight'];
    $output_type   = $_POST['output_type'];
    $result        = $_POST['result'];

    $sql = "INSERT INTO conversions 
    (user_token, input_type, display_value, display_unit, value_in_kg, input_weight, output_type, result)
    VALUES 
    ('$user_token', '$input_type', '$display_value', '$display_unit', '$value_in_kg', '$input_weight', '$output_type', '$result')";

    if ($conn->query($sql)) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error", "msg" => $conn->error]);
    }
    exit;
}

/* =========================================================
   2️⃣ ANALYTICS (GET REQUEST)
========================================================= */
header('Content-Type: application/json');

$totalUsers = mysqli_fetch_assoc(mysqli_query($conn,
"SELECT COUNT(DISTINCT user_token) as c FROM conversions"
))['c'] ?? 0;

$totalPlastic = mysqli_fetch_assoc(mysqli_query($conn,
"SELECT SUM(value_in_kg) as s FROM conversions"
))['s'] ?? 0;

$totalMethods = mysqli_fetch_assoc(mysqli_query($conn,
"SELECT COUNT(DISTINCT input_type) as m FROM conversions"
))['m'] ?? 0;

echo json_encode([
    "users" => (int)$totalUsers,
    "plastic" => (float)$totalPlastic,
    "methods" => (int)$totalMethods,
    "pollution" => round($totalPlastic/1000,2)
]);




?>