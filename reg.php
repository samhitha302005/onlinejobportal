-- Active: 1714385873815@@localhost@3306@register
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST['email'];
    $password = $_POST["password"];

    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $database = "register";
    $conn = mysqli_connect($servername, $db_username, $db_password, $database);
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {
        //Insert data into database
        $sql = "INSERT INTO registrations (username, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        header("Location:index.html");
        echo "success";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

#account {
    width: 400px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2#register {
    text-align: center;
    margin-bottom: 20px;
    position: relative;
}

#icon {
    position: absolute;
    top: 6px;
    right: -25px;
}

form {
    text-align: left;
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: calc(100% - 30px);
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.password-container {
    position: relative;
}

.password-toggle {
    position: absolute;
    top: 50%;
    right: 5px;
    transform: translateY(-50%);
    cursor: pointer;
}

button[type="submit"] {
    width: 100%;
    background-color: #4caf50;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #45a049;
}

p#register {
    text-align: center;
    margin-top: 15px;
}

p#register a {
    color: #4caf50;
    text-decoration: none;
}

p#register a:hover {
    text-decoration: underline;
}
</style>

    <title>Registration Page</title>
    <script>
   document.getElementById("registrationForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission behavior

    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+}{:;'?/>.<,])(?=.*[A-Za-z]).{8,}$/;

    if (!passwordRegex.test(password)) {
        alert("Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one digit, and one special character.");
        return;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match. Please check and try again.");
    } else {
        alert("Registration Successful!");
        window.location.href = "index.html"; // Redirect to index.html
    }
});
function togglePasswordVisibility(inputId) {
    var passwordInput = document.getElementById(inputId);
    var passwordToggle = document.querySelector(`[onclick="togglePasswordVisibility('${inputId}')]`);

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
         passwordToggle.src = "https://cdn-icons-png.flaticon.com/128/747/747375.png";
    } else {
        passwordInput.type = "password";
        passwordToggle.src = "https://cdn-icons-png.flaticon.com/128/747/747376.png";
    }
}

</script>
</head>
<body>
    <div id="account">
        <h2 id="register">Register an Account..</h2><br><br>
        <form action="" method="POST" id="registrationForm">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Password:</label>
            <div class="password-container">
                <input type="password" id="password" name="password" required>
                  </div><br><br>

            <label for="confirmPassword">Confirm Password:</label>
            <div class="password-container">
                <input type="password" id="confirmPassword" name="confirmPassword" required>
                 </div><br><br>
             
            <button type="submit" name="register" onsubmit="register(event)" >Register</button>
            <br><br>
        </form>
    
        <p id="register"><br>Already have an account? <a href="index.html">Login here</a>.</p>
    </div>
</body>
</html>

