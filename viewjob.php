<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_hunt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $jobId = $_GET['id'];
    $sql = "SELECT * FROM jobs WHERE id = $jobId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $job = $result->fetch_assoc();
    } else {
        echo "Job not found.";
        exit;
    }
} else {
    echo "No job ID specified.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <a href="home.php" class="logo"><i class="fas fa-briefcase"></i>Job Hunt.</a>
    </header>

    <section class="job-details">
        <h1><?php echo $job['jobTitle']; ?></h1>
        <img src="<?php echo $job['image']; ?>" alt="company image">
        <p>Company: <?php echo $job['companyName']; ?></p>
        <p>Location: <?php echo $job['location']; ?></p>
        <p>Salary: <?php echo $job['salary']; ?></p>
        <p>Employment Type: <?php echo $job['employmentType']; ?></p>
        <p>Shift: <?php echo $job['shift']; ?></p>
        <p>Posted At: <?php echo $job['posted_at']; ?></p>
    </section>

    <section class="post-job">
        <a href="postjob.php" class="btn">Post a Job</a>
    </section>
</body>
</html>

