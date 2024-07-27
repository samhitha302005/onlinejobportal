<?php

// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "jobs";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and display previously applied jobs
$sql = "SELECT * FROM applied_jobs";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posted Jobs</title>
    <!-- Custom CSS -->
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>
<body>
    
<!-- Header section starts -->
<header class="header">
    <section class="flex">
        <!-- Other header content -->
        <a href="home.html" class="logo"><i class="fas fa-briefcase"></i>Job Hunt.</a>
    </section>
</header>
<!-- Header ends -->

<!-- Posted jobs section -->
<div class="container">
    <h2>Posted Jobs</h2>
    <?php
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<p><strong>Company:</strong> " . $row["companyName"]. "</p>";
            echo "<p><strong>Job Title:</strong> " . $row["jobTitle"]. "</p>";
            echo "<p><strong>Location:</strong> " . $row["location"]. "</p>";
            echo "<p><strong>Salary:</strong> " . $row["salary"]. "</p>";
            echo "<p><strong>Employment Type:</strong> " . $row["employmentType"]. "</p>";
            echo "<p><strong>Shift:</strong> " . $row["shift"]. "</p>";
            echo "<hr>";
        }
    } else {
        echo "No posted jobs yet.";
    }
    ?>
</div>
<!-- Posted jobs section -->

<!-- Footer -->
<footer class="footer">
    <!-- Add your footer content here -->
</footer>
<!-- Footer -->

</body>
</html>

<?php
// Close database connection
$conn->close();
?>
