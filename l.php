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

// Handle form submission when Apply button is clicked
if(isset($_POST['apply'])) {
    $jobID = $_POST['jobID'];
    // Retrieve job details from $jobs array
    $job = $jobs[$jobID];
    $companyName = $job['companyName'];
    $jobTitle = $job['jobTitle'];
    $location = $job['location'];
    $salary = $job['salary'];
    $employmentType = $job['employmentType'];
    $shift = $job['shift'];

    // Store job details in database
    $sql = "INSERT INTO applied_jobs (companyName, jobTitle, location, salary, employmentType, shift) 
            VALUES ('$companyName', '$jobTitle', '$location', '$salary', '$employmentType', '$shift')";
    if ($conn->query($sql) === TRUE) {
        echo "Job application submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Retrieve and display previously applied jobs when "post job" link is clicked
if(isset($_GET['action']) && $_GET['action'] == 'posted_jobs') {
    $sql = "SELECT * FROM applied_jobs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Previously Applied Jobs</h2>";
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
        echo "No previously applied jobs.";
    }
}

$conn->close();

?>

