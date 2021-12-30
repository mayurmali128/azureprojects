<?php
session_start();
?>

<?php


	
	require 'connect.php';
	$nbed = $_POST['cyn'];

	//echo $nbed;
	//echo $_SESSION['full-name'];
	$result = $collection2->updateOne(
	[ 'name' => $_SESSION['full-name'] ],
	[ '$set' => [ 'ncyn' => $nbed ]]
	);
	$record = $collection2->find( [ 'name' => $_SESSION['full-name']] );

	$_SESSION['ncyn'] = $nbed;
	foreach ($record as $var) {
    	$ch = $var['ncyn'];
	}

	if ($ch==$nbed) {
		echo "<SCRIPT LANGUAGE='JavaScript'>
				    window.alert('Data Saved Successfully...')
				    window.location.href='javascript:history.go(-1)';
				    </SCRIPT>";
	}

	else{
		echo "<SCRIPT LANGUAGE='JavaScript'>
				    window.alert('Sorry! Some error has occured...')
				    window.location.href='javascript:history.go(-1)';
				    </SCRIPT>";
	}
    

 ?>