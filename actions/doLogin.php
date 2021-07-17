<?php
  session_start();
  ob_start();
  include("../dbconnect.php");
  include("../_mysql.php");

  $Username=$_POST['Username'];
  $Password=$_POST['Password'];
  
  #echo 'User Name: '.$Username.'<br /> Password: '.$Password.'<br />';

  $stmt = $db->prepare("SELECT `Password` FROM `admins` WHERE `Username`=?");
  $stmt->bind_param("s", $Username);
  $stmt->execute();
  $stmt->bind_result($StoredPass);
  $stmt->fetch();
  $stmt->close();
  
  if(password_verify($Password, $StoredPass)){

    $stmt = $db->prepare("SELECT `AdminID`, `Email`, `Username`, `AdminName`, `UserRights` FROM `admins` WHERE `Username`=?");
    $stmt->bind_param("s", $Username);
    $stmt->execute();
    $stmt->bind_result($AdminID, $Email, $Username, $AdminName, $UserRights);
    $stmt->fetch();
    $stmt->close();

	$_SESSION['LoggedIn'] = true;
    $_SESSION["AdminID"] = $AdminID;
    $_SESSION["Email"] = $Email;
	$_SESSION["Username"] = $Username;
    $_SESSION["AdminName"] = $AdminName;
	$_SESSION["UserRights"] = $UserRights;
    header("Location: ../candidates.php");
	
	#echo "<br /> UserRights: ".$_SESSION["UserRights"];
	#echo "<br />";
	

	
	    echo "Verified";
	
	}else {
    header("Location: ../candidates.php");
  }

  ?>
