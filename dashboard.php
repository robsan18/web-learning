<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
include 'db.php';
$user = $_SESSION['username'];
?>

<h1>Welcome <?php echo $user; ?></h1>
<a href="logout.php">Logout</a>

<h2>Modules</h2>
<ul>
<li><a href="modules/module1/unit1.php">Module 1 - Unit 1</a></li>
<li><a href="modules/module2/unit1.php">Module 2 - Unit 1</a></li>
<!-- Continue all modules -->
</ul>