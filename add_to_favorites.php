<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_id = $_POST['job_id'];
    // You would need to replace USER_ID with the actual user ID (if you have a user authentication system)
    $user_id = "USER_ID";

    $sql = "INSERT INTO favorites (user_id, job_id) VALUES ('$user_id', '$job_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Job added to favorites successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid request";
}
$conn->close();
?>
