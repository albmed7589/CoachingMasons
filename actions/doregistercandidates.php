<?php

  session_start();
  ob_start();
  include("../dbconnect.php");
  include("../_mysql.php");
  
	if(isset($_POST['hid1'])){
		
		      $contactUser = "INSERT INTO candidates (CandidateName, Email, Phone, Address, Coach, LastContactedBy, LastContactedDate) VALUES ('".$_POST['CandidateName']. "', '" . $_POST['Email'] . "', '" . 
													  $_POST['Phone'] . "', '" . $_POST['Address'] . "', '" . $_POST['Coach'] ."', '". $_POST['Coach'] ."', '". date("Y-m-d") . "')";
			  mysqli_query($db,$contactUser);
			  
			  header("Location: ../candidates.php");
		
		
		#echo "hid1 = ".$_POST['hid1']."<br>";
		#echo "contactUser = ".$contactUser;
	}
  
?>