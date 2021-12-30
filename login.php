<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hospital Login</title>
</head>
<body>
	<?php
		//session_start();
	    require 'connect.php';
		$user = $_POST['full-name'];
		$pass = $_POST['password'];
	    //$user = 'hospital1';
	    //$pass = '12345678';
		$record = $collection1->find( [ 'hname' => $user] );
		foreach($record as $int){
			$tre = $int['hname'];
			$tpass = $int['pas'];
		}

		if($user==$tre and $pass==$tpass){
			//echo "Hospital login";
			header('Location: hospital.php');
			$_SESSION['full-name'] = $user;
		}
		else{
			//echo "Wronge username or pass";
			echo "<SCRIPT LANGUAGE='JavaScript'>
				    window.alert('Invalid Email or Password')
				    window.location.href='javascript:history.go(-1)';
				    </SCRIPT>";
		
		}


		$record2 = $collection2->find( [ 'name' => $user] );
		foreach($record2 as $int){
			$_SESSION['nbed'] = $int['nbed'];
			$_SESSION['nocbed'] = $int['nocbed'];
			$_SESSION['ncyn'] = $int['ncyn'];
		}

	?>
</body>
</html>