<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: ../../login.php");
    exit();
}
include '../../db.php';
$user = $_SESSION['username'];

$lesson = "module7_unit1";
$result = $conn->query("SELECT * FROM progress WHERE username='$user' AND lesson='$lesson'");
$done = $result->num_rows > 0;

if(isset($_POST['complete'])){
    $conn->query("INSERT INTO progress (username, lesson, status) VALUES ('$user','$lesson','done') ON DUPLICATE KEY UPDATE status='done'");
    $done = true;
}
?>

<h1>Module 7 — Kaizen Basics</h1>
<p>Kaizen means continuous improvement and efficiency. Apply small daily improvements.</p>

<?php if($done): ?>
<p>✅ Completed</p>
<?php else: ?>
<form method="POST">
<button name="complete">Mark as Complete</button>
</form>
<?php endif; ?>

<a href="../../dashboard.php">Back to Dashboard</a>