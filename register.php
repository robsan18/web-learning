<?php
include 'db.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if($conn->query($sql) === TRUE){
        echo "Registered successfully. <a href='login.php'>Login now</a>";
    } else {
        echo "Error: ".$conn->error;
    }
}
?>

<form method="POST">
<input type="text" name="username" placeholder="Username" required><br>
<input type="password" name="password" placeholder="Password" required><br>
<button name="submit">Register</button>
</form>