<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ch12 Project</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
   
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $email = trim($_POST['email']);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

  
    $conn = mysqli_connect("localhost", "root", "mysql", "taus_data");
    

    if (!$conn) {
        echo "<div class='message'>Connection failed: " . mysqli_connect_error() . "</div>";
        exit;
    }

    
    $sql = "SELECT full_name, email FROM tbl_student WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

  
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        echo "<div class='message'>
                <strong>Student Found:</strong><br>
                Name: {$row['full_name']}<br>
                Email: {$row['email']}
              </div>";
    } else {
        echo "<div class='message'>Email not found.</div>";
    }

    mysqli_close($conn);
}
?>

<br><a href="index.php">Return to Home</a>

</body>
</html>
