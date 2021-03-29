<?php  
session_start(); 
$_SESSION['number'] = $_SESSION['number'] ?? 0;
$_SESSION['number']++;
$visit = $_SESSION['number'] ?? 0;
if ($_SESSION['number'] === 5) {
	$visit = $_SESSION['number'];
	echo 'Thank you for visiting'.'<br>';
}
elseif ($_SESSION['number'] === 10) {
	header("Location:congratulations.php");
	session_unset();
	session_destroy();
}
?>
<h1>Hello</h1>
<p>You have visited this page <?php echo $visit?> times</p>
<p><a href="?reset=true">Reset</a></p>
