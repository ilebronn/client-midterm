<?php
session_start();
if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit;
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="margin: 0; padding: 0; display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh; background-image: url('img/motor2.jpg'); background-size: cover; color: black; font-size: 1rem;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Welcome to your Dashboard, <?php echo $username; ?></h2>
                        <p>Embrace the essence of Thailand's vibrant motor culture. Experience the thrill of riding through bustling streets, picturesque landscapes, and exotic locales. Our dashboard brings you closer to the heart of Thailand's motor enthusiasts, where every ride is an adventure and every destination a discovery.</p>
                        <a href="index.php" class="btn btn-dark btn-block">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
