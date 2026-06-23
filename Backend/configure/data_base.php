<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "green_cylce_hub"
);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// echo "Database Connected Successfully";

?>