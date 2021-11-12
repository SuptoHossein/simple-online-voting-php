<?php 
session_start();
include_once('connect.php');

$number = $_POST['mobile'];
$password = $_POST['password'];
$role = $_POST['role'];

// echo $role; die();
// select * from user where mobile='01735245153';
$check = mysqli_query($connect, "SELECT * FROM user WHERE mobile='$number' && password='$password' && role='$role'");
// $data =mysqli_fetch_all($check, MYSQLI_ASSOC);


// var_dump($data); die();
// $data = mysqli_fetch_array($check);
// var_dump($data);


if (mysqli_num_rows($check) > 0) {
	$userData = mysqli_fetch_array($check);
	$groups = mysqli_query($connect, "SELECT * FROM user WHERE role=2");
	$groupsData = mysqli_fetch_all($groups, MYSQLI_ASSOC);

	$_SESSION['userdata'] = $userData;
	$_SESSION['groupsdata'] = $groupsData;

	echo "
		<script>
			window.location = '../routes/dashboard.php';
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