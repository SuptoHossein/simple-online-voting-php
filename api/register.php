<?php 

include_once('connect.php');

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$address = $_POST['address'];
$image = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$role = $_POST['role'];

if ($password == $cpassword) {
	move_uploaded_file($tmp_name, "../uploads/$image");
	$insert = mysqli_query($connect, "INSERT INTO voting.user (name, mobile, password, address, photo, role) VALUES('$name', '$mobile', '$password', '$address', '$image', '$role')");

	if ($insert) {
		echo "
			<script>
				alert('Registration successfull!');
				window.location = '../';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Some error occures!');
				window.location = '../routes/registration.html';
			</script>
		";
	}
} else {
	echo "
		<script>
			alert('Password and Confirm Password does not match');
			window.location = '../routes/register.html';
		</script>
	";
}

?>