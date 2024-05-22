<?php include "services/database.php";

session_start();

// if (isset($_SESSION["is_login"])) {
//     header("Location: dashboard.php")
// }

if (isset($_POST["signup"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

    if ($db->query($sql)) {
        echo
            '<script>
            alert("Data Berhasil direkamm")
            </script>';            
    } else {
        echo 
        '<script>
        alert("data tidak berhasil")
        </script>';
    }
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <?php include "layout/header.html" ?>

    <h3>Sign Up</h3>
    <form action="register.php" method="POST">
        <input type="text" placeholder="Username" name="username">

        <input type="password" placeholder="Password" name="password">
        <button type="submit" name="signup">Sign Up</button>
    </form>

    <?php include "layout/footer.html" ?>
</body>
</html>