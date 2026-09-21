<?php
session_start();
if(!isset($_SESSION["name"])){
    header("Location: login.php");
}
?>
<h2>Student <?php echo $_SESSION["name"]; ?></h2>
<p>Attendance <?php echo $_SESSION["attendance"]; ?>%</p>

<?php
if($_SESSION["attendance"]>=75)
    echo "eligible for Exam";
else
    echo "not Eligible for Exam";
?>
<br><br>
<a href="logout.php">Logout</a>


