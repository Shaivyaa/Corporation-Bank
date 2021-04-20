<?php


include 'config.php';
// database connection code
if(isset($_POST['name']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
// get the post records
$name = $_POST['name'];
$accountNo = $_POST['acc'];
$balance = $_POST['bal'];
// database insert SQL code
$sql = "INSERT INTO users(name, accountNo, balance) VALUES('$name', '$accountNo', '$balance')";
// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo '<script>
					alert("Contact Records Inserted");
					window.location = "../transfer_money.php";
				</script>';
} else {
	echo '<script>
					alert("ERROR! Unable to connect to database..");
					window.location = "../Registration.php";
				</script>';
}
}
else
{
	echo '<script>
					alert("Are you a genuine visitor?");
					window.location = "Registration.php";
				</script>';
	
}


?>