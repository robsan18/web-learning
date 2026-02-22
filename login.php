<?php
session_start();
include 'db.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        if(password_verify($password, $row['password'])){
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Wrong password";
        }
    } else {
        echo "User not found";
    }
}
?>

<form method="POST">
<input type="text" name="username" placeholder="Username" required><br>
<input type="password" name="password" placeholder="Password" required><br>
<button name="submit">Login</button>
</form>