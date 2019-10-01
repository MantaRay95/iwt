
<?php 


	$host = "localhost";
			$dbusername ="root";
			$dbpassword = "";
			$dbname = "train_reservation";




			$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);




	
	$Email = filter_input(INPUT_POST, 'name');
	$password = filter_input(INPUT_POST, 'psw');

	$sql = "select * from user where email = '$Email'";

$result = mysqli_query($conn,$sql);


$row=mysqli_fetch_assoc($result);



if ($row['email']== $Email && $row['password'] == $password){
	# code...

//	echo "login success".$row['email'];
			header("location:index -user.html");

}



else
{


echo "login failed";
		header("location:pro.php");

}




 ?>