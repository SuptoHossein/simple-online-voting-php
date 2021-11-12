<?php 
session_start();
include_once($connect.php);

$number = $_POST['number'];
$password = $_POST['password'];
$role = $_POST['role'];

$check = mysqli_query($connect, "SELECT * FROM user WHERE number='$number' && password='$password', && role='$role'");

if (mysqli_num_rows($check) > 0) {
	$userData = mysqli_fetch_array($check);
	$groups = mysqli_query($connect, "SELECT * FROM user WHERE role=2");
	$groupsData = mysqli_fetch_all($groups, MYSQLI_ASSOC);

	$_SESSION['userdata'] = $userData;
	$_SESSION['groupsdata'] = $groupsData;

	echo "
		<script>
			window.location = 'routes/dashboard.php';
		</script>
	";

} else {
	echo "
		<script>
			alert('Invalid Credentials or User not found!');
			window.location = '../';
		</script>
	";
}

?>