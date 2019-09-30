<?php 

$SeatNo = filter_input(INPUT_POST, 'seats');
$from = filter_input(INPUT_POST, 'from');
$to = filter_input(INPUT_POST, 'to');
$class_type = filter_input(INPUT_POST, 'first');
$date = filter_input(INPUT_POST, 'date');
$month = filter_input(INPUT_POST, 'Month');
$year = filter_input(INPUT_POST, 'Year');



$host = "localhost";
$dbusername ="root";
$dbpassword ="";
$dbname ="reservations";


//connection    ..............

$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);


if (mysqli_connect_error()) {
	# code...
	die('connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
	$sql ="INSERT INTO book_seats(no_seats,from_station,where_to,class,booking_date	,booking_month,booking_yeat) values('$SeatNo','$from','$to','$class_type','$date','$month','$year')";


if($conn->query($sql)){

	echo "<br>"."Your massege was submitted. Thanks for your cooperation reservation";
}
else{
	echo "Error :".$sql."<br>".$conn->error;
}
$conn->close();

}


 ?>