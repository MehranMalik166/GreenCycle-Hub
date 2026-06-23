<?php
include "../Backend/configure/data_base.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

   $user_token = $_POST['user_token'];
    $name = $_POST['fullName'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contacts (user_token, name, email, subject, message)
            VALUES ('$user_token', '$name', '$email', '$subject', '$message')";

    if($conn->query($sql)){
        echo "<script>
            alert('Message Sent Successfully');
            window.location.href = '../Frontend/contact.php';
        </script>";
    } else {
        die("SQL Error: " . $conn->error);
    }
}
?>