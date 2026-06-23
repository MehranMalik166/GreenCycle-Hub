<?php
// ============================================================
// BACKEND API - history.php
// Fetches conversion history from database
// ============================================================

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set header for JSON response
header('Content-Type: application/json');

// Include database connection
include "../Backend/configure/data_base.php";

// Get token from GET request
$user_token = isset($_GET['user_token']) ? $_GET['user_token'] : '';

// If no token provided, return empty array
if(empty($user_token)) {
    echo json_encode([]);
    exit;
}

// ============================================================
// OPTION 1: IF YOU HAVE user_token COLUMN IN DATABASE
// ============================================================
// $sql = "SELECT * FROM conversions 
//         WHERE user_token = '$user_token' 
//         ORDER BY id DESC";

// ============================================================
// OPTION 2: IF YOU DON'T HAVE user_token COLUMN - SHOW ALL DATA
// ============================================================
// $sql = "SELECT * FROM conversions ORDER BY id DESC";

// ============================================================
// OPTION 3: RECOMMENDED - CHECK IF COLUMN EXISTS
// ============================================================

// First check if user_token column exists
$checkColumn = "SHOW COLUMNS FROM conversions LIKE 'user_token'";
$columnResult = $conn->query($checkColumn);

if($columnResult->num_rows > 0) {
    // Column exists - filter by token
    $sql = "SELECT * FROM conversions 
            WHERE user_token = '$user_token' 
            ORDER BY id DESC";
} else {
    // Column doesn't exist - show all data
    $sql = "SELECT * FROM conversions ORDER BY id DESC";
}

$result = $conn->query($sql);

$data = [];

if($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Return JSON response
echo json_encode($data);

// Close connection
$conn->close();
?>