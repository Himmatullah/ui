<?php
    require_once("connection.php");

    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

       $result =  mysqli_query($conn,"SELECT * FROM login WHERE username='$username' AND password='$password'");
       $rows_login = mysqli_fetch_assoc($result);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Login Form</title>
    <!-- Bootstrap CSS -->
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
      rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
    <style>
      
        .center-container {
            height: 100vh;
        }
        .form-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <!-- Login Form -->
    <div class="container d-flex justify-content-center align-items-center center-container">
        <div class="col-md-6">
            <div class="form-container">
                <h3 class="text-center mb-4">Login</h3>
                <form method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" 
                               placeholder="Enter your username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" 
                               placeholder="Enter your password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    </script>
</body>
</html>
