<?php
    include 'mycon.php';
	
	$conn = OpenCon();

	$fn = filter_input(INPUT_POST, 'fname');
	$ln = filter_input(INPUT_POST, 'lname');
	$email = filter_input(INPUT_POST, 'email');
	$pass = filter_input(INPUT_POST, 'pw');
		
	$sql ="INSERT INTO user(email,fname,lname,password) values('$email','$fn','$ln','$pass')";

	if($conn->query($sql)){
		
		echo "<script>
		alert('Registration Successful');
		window.location.href='home.html';
		</script>";
	}
	else{
		echo "Error :".$sql."<br>".$conn->error;
	}
	CloseCon($conn);
	
?>