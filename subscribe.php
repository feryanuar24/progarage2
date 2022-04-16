<?php 

include 'config.php';

$email2 = $_POST["email2"];

$return = mysqli_query($conn, "INSERT INTO subscribe VALUES ('$email2')");

if (!$return) {
    echo "Error.";
}
else{
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil Berlangganan</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <?php echo "<h1>Berhasil berlangganan</h1>"; ?>
             
            <div class="input-group">
            <a href="logout.php" class="btn">Home</a>
            </div>
        </form>
    </div>
</body>
</html>

<?php
}
?>