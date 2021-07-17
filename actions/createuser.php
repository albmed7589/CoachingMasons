<?php
  session_start();
  ob_start();
  include("../dbconnect.php");
  include("../_mysql.php");

  echo 'registration passed from Registraton page';

  $Email= $_POST['Email'];
  $AdminName = $_POST['AdminName'];
  $Username= $_POST['Username'];
  $Password= $_POST['Password'];

  echo "<p>";
  echo("Admin Name: ".$AdminName."<br />");
  echo("User Name: ".$Username."<br />");
  echo("Email: ".$Email."<br />");
  if(isset($Password)): echo("Pass: ".$Password."<br />"); endif;
  echo "</p>";


  if(isset($Password)): $cryptpass = (password_hash($Password,PASSWORD_DEFAULT, array( 'cost' => 9))); endif;

  if(isset($Password)): echo 'crypt: '.$cryptpass; endif;


  $stmt = $db->prepare("SELECT `Email` FROM `admins` WHERE `Email`=?");
  $stmt->bind_param("s", $Email);
  $stmt->execute();
  $stmt->bind_result($SelectedEmail);
  $stmt->fetch();
  $stmt->close();


    $stmt = $db->prepare("INSERT INTO admins (Email, AdminName, Username, Password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $Email, $AdminName, $Username, $cryptpass);
    $stmt->execute();
    $stmt->close();

    $stmt = $db->prepare("SELECT `AdminID` FROM `users` WHERE `Email`=?");
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $stmt->bind_result($AdminID);
    $stmt->fetch();
    $stmt->close();

    $_SESSION["AdminID"] = $AdminID;
    $_SESSION["Email"] = $Email;
    $_SESSION["AdminName"] = $AdminName;

    header("Location: ../LoggedCoach.php");


?>
