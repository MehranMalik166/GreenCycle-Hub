<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');

include "../Backend/configure/data_base.php";

$user_token = $_GET['user_token'] ?? '';

// escape input (IMPORTANT)
$user_token = mysqli_real_escape_string($conn, $user_token);

/* =========================
   QUERY (simple + fast)
========================= */
if(!empty($user_token)){
    $sql = "SELECT * FROM conversions 
            WHERE user_token = '$user_token' 
            ORDER BY id DESC";
} else {
    $sql = "SELECT * FROM conversions ORDER BY id DESC";
}

$result = mysqli_query($conn, $sql);

$data = [];

if($result){
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
}

echo json_encode($data);
$conn->close();
?>