<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Search</title>
   
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Include any necessary CSS or JavaScript libraries -->
</head>
<body>

<header class="header">

    <section class="flex">

<div id="#menu-btn" class="fas fa-bars-staggered"></div>

        <a href="home.html" class="logo"><i class="fas fa-briefcase"></i>Job Hunt.</a>

        <nav class="navbar">
            <a href="home.html">home</a>
            <a href="about.html">about us</a>
            <a href="jobs.php">all jobss</a>
            <a href="contact.html">contact us</a><a href="internship.html">internship</a>
            <a href="search.php">search</a>
        </nav>

        <a href="#" class="btn" style="margin-top: 0;">post job</a>

    </section>
   
</header>
<?php
// Define the array of jobs

$jobs = [
    [
        "companyName" => "Google",
        "jobTitle" => "senior web developer",
        "location" => "mumbai, india",
        "salary" => "1 lakh - 2 lakh",
        "employmentType" => "full time",
        "shift" => "day shift",
        "image" => "https://blog.hubspot.com/hs-fs/hubfs/image8-2.jpg?width=600&name=image8-2.jpg"
    ],
    [
        "companyName" => "Infosys.co",
        "jobTitle" => "manager",
        "location" => "hyderabad, india",
        "salary" => "50k - 60k",
        "employmentType" => "full time",
        "shift" => "day shift",
        "image" => "https://www.shutterstock.com/image-photo/indianapolis-circa-july-2022-infosys-260nw-2174412835.jpg"
    ],
    [
        "companyName" => "srm university",
        "jobTitle" => "professor",
        "location" => "amaravati, india",
        "salary" => "2 lakh - 3 lakh",
        "employmentType" => "full time",
        "shift" => "day shift",
        "image" => "https://images.shiksha.com/mediadata/images/1539754369phpsr75fV.jpeg"
    ],
    [
        "companyName" => "vit university",
        "jobTitle" => "assistant professor for cse",
        "location" => "amaravati, india",
        "salary" => "1.5 lakh - 2 lakh",
        "employmentType" => "full time",
        "shift" => "day shift",
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTLvX3lmjl25xJJMtVhUPhDkGxfCEd7kzHU_X49bcaDw&s"
    ],
    [
        "companyName" => "Kia",
        "jobTitle" => "automobile engineer",
        "location" => "andhra pradesh, india",
        "salary" => "10k - 25k",
        "employmentType" => "full time",
        "shift" => "day shift",
        "image" => "https://images.hindustantimes.com/auto/img/2021/05/24/600x338/Kia_India_Anantapur_manufacturing_plant_1621854956903_1621854960839.jpg"
    ],
    [
        "companyName" => "Dell",
        "jobTitle" => "Marketing manager",
        "location" => "mumbai, india",
        "salary" => "10 lakh - 25 lakh",
        "employmentType" => "full time",
        "shift" => "day shift",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Dell_logo_2016.svg/1200px-Dell_logo_2016.svg.png"
      ],
    [
        "companyName" => "Amazon",
        "jobTitle" => "customer service",
        "location" => "hyderabad, india",
        "salary" => "10k - 25k",
        "employmentType" => "part time",
        "shift" => "day shift",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg"
    ],
    [
        "companyName" => "Aqualogica",
        "jobTitle" => "finance",
        "location" => "mumbai, india",
        "salary" => "1 lakh - 2.5 lakh",
        "employmentType" => "full time",
        "shift" => "day shift",
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTRTdBTeJNUUcWxbJxADC6pDRh33OhJtWwPZbg6ldcAQ&s"
    ],
    [
        "companyName" => "Puma",
        "jobTitle" => "marketing",
        "location" => "mumbai, india",
        "salary" => "10k - 25k",
        "employmentType" => "part time",
        "shift" => "day shift",
        "image" => "https://1000logos.net/wp-content/uploads/2017/05/PUMA-logo.jpg"
    ],
    [
        "companyName" => "Microsoft",
        "jobTitle" => "software engineer",
        "location" => "Bangalore, India",
        "salary" => "2 lakh - 3 lakh",
        "employmentType" => "full time",
        "shift" => "day shift",
        "image" => "https://blogs.microsoft.com/wp-content/uploads/prod/2012/08/8867.Microsoft_5F00_Logo_2D00_for_2D00_screen.jpg"
    ],
    [
        "companyName" => "Apple",
        "jobTitle" => "iOS developer",
        "location" => "California, USA",
        "salary" => "150k - 200k",
        "employmentType" => "full time",
        "shift" => "day shift",
        "image" => "https://1000logos.net/wp-content/uploads/2016/10/Apple-Logo.png"
    ],
    [
        "companyName" => "Tesla",
        "jobTitle" => "mechanical engineer",
        "location" => "California, USA",
        "salary" => "80k - 100k",
        "employmentType" => "full time",
        "shift" => "night shift",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/e/e8/Tesla_logo.png"
    ],
    [
        "companyName" => "Facebook",
        "jobTitle" => "data scientist",
        "location" => "New York, USA",
        "salary" => "120k - 150k",
        "employmentType" => "full time",
        "shift" => "day shift",
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhqhCE1ZItBk2eXdpda7hUVibZjDbg_iVhUzQ1_xvmjQ&s"
    ],
    [
        "companyName" => "IBM",
        "jobTitle" => "cloud architect",
        "location" => "New York, USA",
        "salary" => "130k - 160k",
        "employmentType" => "full time",
        "shift" => "night shift",
        "image" => "https://www.ibm.com/brand/experience-guides/developer/b1db1ae501d522a1a4b49613fe07c9f1/01_8-bar-positive.svg"
    ],
];

// Function to search for a job based on job title or location
function searchJob($title, $location, $jobs) {
    $filteredJobs = [];
    foreach ($jobs as $job) {
        $titleMatch = stripos($job['jobTitle'], $title) !== false;
        $locationMatch = stripos($job['location'], $location) !== false;
        if ($titleMatch || $locationMatch) {
            $filteredJobs[] = $job;
        }
    }
    return $filteredJobs;
}

// Initialize search results with all jobs initially
$searchResults = $jobs;

// Check if form is submitted
if (isset($_POST['search'])) {
    // Get search input from form
    $searchedTitle = $_POST['title'];
    $searchedLocation = $_POST['location'];
    // Call searchJob function to filter jobs
    $searchResults = searchJob($searchedTitle, $searchedLocation, $jobs);
}
?>

<!-- Display search form -->
<div class="home-container">
    <section class="home">
        <form action="" method="post">
            <h3>Find Your Next Job</h3>
            <p>Job Title <span>*</span></p>
            <input type="text" name="title" placeholder="Keyword, category, or company" required maxlength="20" id="name" class="input">
            <p>Job Location</p>
            <input type="text" name="location" placeholder="City, state, or country" required maxlength="20" class="input"> 
            <input type="submit" value="Search Job" name="search" class="btn">
        </form>
    </section>
</div>

<!-- Display search results -->
<div class="jobs-container">
    <h1 class="heading">Search Results</h1>
    <div class="box-container">
        <?php if (!empty($searchResults)): ?>
            <?php foreach ($searchResults as $job): ?>
                <div class="box">
                    <div class="company">
                    <img src="<?php echo $job['image']; ?>" alt="company profile">
                        <h3><?php echo $job['companyName']; ?></h3>
                        <p><?php echo $job['location']; ?></p>
                    </div>
                    <h3 class="job-title"><?php echo $job['jobTitle']; ?></h3>
                    <div class="tags">
                        <p><span><?php echo $job['salary']; ?></span></p>
                        <p><span><?php echo $job['employmentType']; ?></span></p>
                        <p><span><?php echo $job['shift']; ?></span></p>
                    </div>
                    <div class="flex-btn">
                        <a href="viewjob.html" class="btn">View Details</a>
                        <button type="submit" class="fas fa-heart" name="save"></button>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No jobs found matching your search criteria.</p>
        <?php endif; ?>
    </div>
</div>

<!-- Footer or any additional content -->
        </body>
<!--footer-->

<!--footer-->
<footer class="footer">
    <section class="grid">
        <div class="box">
            <h3>quick link</h3>
            <a href="home.html"><i class="fas fa-angle-right"></i>home</a>
            <a href="about.html"><i class="fas fa-angle-right"></i>about</a>
            <a href="jobs.html"><i class="fas fa-angle-right"></i>all jobs</a>
            <a href="contact.html"><i class="fas fa-angle-right"></i>contactus</a>
            <a href="#"><i class="fas fa-angle-right"></i>filter search</a>
        </div>

        <div class="box">
            <h3>extra link</h3>
            <a href="#"><i class="fas fa-angle-right"></i>account</a>
            <a href="login.html"><i class="fas fa-angle-right"></i>login</a>
            <a href="register.html"><i class="fas fa-angle-right"></i>register</a>
            <a href="#"><i class="fas fa-angle-right"></i>post job</a>
            <a href="#"><i class="fas fa-angle-right"></i>dashboard</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
            <a href="#"><i class="fab fa-youtube"></i>youtube</a>
        </div>
    </section>

    <!-- <div class="credit">&copy; copyright @2024 by <span>mr.web</span></div> -->
</footer>
<!--footer-->




</html>
