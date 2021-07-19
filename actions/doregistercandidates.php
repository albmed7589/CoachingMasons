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

	}else if(isset($_POST['hid2'])){
				
		      $contactUser = "INSERT INTO candidates (CandidateName, Email, Phone, Address, Coach, LastContactedBy, LastContactedDate) VALUES ('".$_POST['CandidateName']. "', '" . $_POST['Email'] . "', '" . 
													  $_POST['Phone'] . "', '" . $_POST['Address'] . "', '" . $_POST['Coach'] ."', '". $_POST['Coach'] ."', '". date("Y-m-d") . "')";
			  mysqli_query($db,$contactUser);
			  
		      $contactUser2 = "INSERT INTO candidates (CandidateName, Email, Phone, Address, Coach, LastContactedBy, LastContactedDate) VALUES ('".$_POST['CandidateName2']. "', '" . $_POST['Email2'] . "', '" . 
													  $_POST['Phone2'] . "', '" . $_POST['Address2'] . "', '" . $_POST['Coach2'] ."', '". $_POST['Coach2'] ."', '". date("Y-m-d") . "')";
			  mysqli_query($db,$contactUser2);
			  
			  header("Location: ../candidates.php");
		
	}else if(isset($_POST['hid3'])) {
		
		      $contactUser = "INSERT INTO candidates (CandidateName, Email, Phone, Address, Coach, LastContactedBy, LastContactedDate) VALUES ('".$_POST['CandidateName']. "', '" . $_POST['Email'] . "', '" . 
													  $_POST['Phone'] . "', '" . $_POST['Address'] . "', '" . $_POST['Coach'] ."', '". $_POST['Coach'] ."', '". date("Y-m-d") . "')";
			  mysqli_query($db,$contactUser);
			  
		      $contactUser2 = "INSERT INTO candidates (CandidateName, Email, Phone, Address, Coach, LastContactedBy, LastContactedDate) VALUES ('".$_POST['CandidateName2']. "', '" . $_POST['Email2'] . "', '" . 
													  $_POST['Phone2'] . "', '" . $_POST['Address2'] . "', '" . $_POST['Coach2'] ."', '". $_POST['Coach2'] ."', '". date("Y-m-d") . "')";
			  mysqli_query($db,$contactUser2);
			
		      $contactUser3 = "INSERT INTO candidates (CandidateName, Email, Phone, Address, Coach, LastContactedBy, LastContactedDate) VALUES ('".$_POST['CandidateName3']. "', '" . $_POST['Email3'] . "', '" . 
													  $_POST['Phone3'] . "', '" . $_POST['Address3'] . "', '" . $_POST['Coach3'] ."', '". $_POST['Coach3'] ."', '". date("Y-m-d") . "')";
			  mysqli_query($db,$contactUser3);
			  
			  header("Location: ../candidates.php");
		
	}else if(isset($_POST['hid4'])) {
		
		      $contactUser = "INSERT INTO candidates (CandidateName, Email, Phone, Address, Coach, LastContactedBy, LastContactedDate) VALUES ('".$_POST['CandidateName']. "', '" . $_POST['Email'] . "', '" . 
													  $_POST['Phone'] . "', '" . $_POST['Address'] . "', '" . $_POST['Coach'] ."', '". $_POST['Coach'] ."', '". date("Y-m-d") . "')";
			  mysqli_query($db,$contactUser);
			  
		      $contactUser2 = "INSERT INTO candidates (CandidateName, Email, Phone, Address, Coach, LastContactedBy, LastContactedDate) VALUES ('".$_POST['CandidateName2']. "', '" . $_POST['Email2'] . "', '" . 
													  $_POST['Phone2'] . "', '" . $_POST['Address2'] . "', '" . $_POST['Coach2'] ."', '". $_POST['Coach2'] ."', '". date("Y-m-d") . "')";
			  mysqli_query($db,$contactUser2);
			
		      $contactUser3 = "INSERT INTO candidates (CandidateName, Email, Phone, Address, Coach, LastContactedBy, LastContactedDate) VALUES ('".$_POST['CandidateName3']. "', '" . $_POST['Email3'] . "', '" . 
													  $_POST['Phone3'] . "', '" . $_POST['Address3'] . "', '" . $_POST['Coach3'] ."', '". $_POST['Coach3'] ."', '". date("Y-m-d") . "')";
			  mysqli_query($db,$contactUser3);
													  
		      $contactUser4 = "INSERT INTO candidates (CandidateName, Email, Phone, Address, Coach, LastContactedBy, LastContactedDate) VALUES ('".$_POST['CandidateName4']. "', '" . $_POST['Email4'] . "', '" . 
													  $_POST['Phone4'] . "', '" . $_POST['Address4'] . "', '" . $_POST['Coach4'] ."', '". $_POST['Coach4'] ."', '". date("Y-m-d") . "')";
			  mysqli_query($db,$contactUser4);
			  
			  header("Location: ../candidates.php");
		
	}else if(isset($_POST['hid5'])) {
		
		      $contactUser = "INSERT INTO candidates (CandidateName, Email, Phone, Address, Coach, LastContactedBy, LastContactedDate) VALUES ('".$_POST['CandidateName']. "', '" . $_POST['Email'] . "', '" . 
													  $_POST['Phone'] . "', '" . $_POST['Address'] . "', '" . $_POST['Coach'] ."', '". $_POST['Coach'] ."', '". date("Y-m-d") . "')";
			  mysqli_query($db,$contactUser);
			  
		      $contactUser2 = "INSERT INTO candidates (CandidateName, Email, Phone, Address, Coach, LastContactedBy, LastContactedDate) VALUES ('".$_POST['CandidateName2']. "', '" . $_POST['Email2'] . "', '" . 
													  $_POST['Phone2'] . "', '" . $_POST['Address2'] . "', '" . $_POST['Coach2'] ."', '". $_POST['Coach2'] ."', '". date("Y-m-d") . "')";
			  mysqli_query($db,$contactUser2);
			
		      $contactUser3 = "INSERT INTO candidates (CandidateName, Email, Phone, Address, Coach, LastContactedBy, LastContactedDate) VALUES ('".$_POST['CandidateName3']. "', '" . $_POST['Email3'] . "', '" . 
													  $_POST['Phone3'] . "', '" . $_POST['Address3'] . "', '" . $_POST['Coach3'] ."', '". $_POST['Coach3'] ."', '". date("Y-m-d") . "')";
			  mysqli_query($db,$contactUser3);
													  
		      $contactUser4 = "INSERT INTO candidates (CandidateName, Email, Phone, Address, Coach, LastContactedBy, LastContactedDate) VALUES ('".$_POST['CandidateName4']. "', '" . $_POST['Email4'] . "', '" . 
													  $_POST['Phone4'] . "', '" . $_POST['Address4'] . "', '" . $_POST['Coach4'] ."', '". $_POST['Coach4'] ."', '". date("Y-m-d") . "')";
			  mysqli_query($db,$contactUser4);
			  
		      $contactUser5 = "INSERT INTO candidates (CandidateName, Email, Phone, Address, Coach, LastContactedBy, LastContactedDate) VALUES ('".$_POST['CandidateName5']. "', '" . $_POST['Email5'] . "', '" . 
													  $_POST['Phone5'] . "', '" . $_POST['Address5'] . "', '" . $_POST['Coach5'] ."', '". $_POST['Coach5'] ."', '". date("Y-m-d") . "')";
			  mysqli_query($db,$contactUser5);
			  
			  header("Location: ../candidates.php");
	}
  
?>