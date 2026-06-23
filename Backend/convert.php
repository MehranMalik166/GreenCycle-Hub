<?php
include "../Backend/configure/data_base.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $user_token = $_POST['user_token'];
    $input_type = $_POST['input_type'];
    $input_weight = $_POST['input_weight'];
    $output_type = $_POST['output_type'];
    $result = $_POST['result'];

    $sql = "INSERT INTO conversions 
    (user_token, input_type, input_weight, output_type, result)
    VALUES 
    ('$user_token', '$input_type', '$input_weight', '$output_type', '$result')";

    if ($conn->query($sql)) {
        echo "success";
    } else {
        echo "SQL Error: " . $conn->error;
    }
}
?>