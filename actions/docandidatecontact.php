<?php 

  session_start();
  ob_start();
  include("../dbconnect.php");
  include("../_mysql.php");
  
	if(isset($_POST['candidate_contact'])){

		if(isset($_POST['Contact'])){
			foreach($_POST['Contact'] as $contactid){

      $contactUser = "UPDATE candidates SET LastContactedDate = '" . date("Y-m-d") ."' WHERE CandidateID= '".$contactid."'";
      mysqli_query($db,$contactUser);
	  
	 
	  echo "query = " . $contactUser . "<br>";
	  header("Location: ../candidates.php");
    }
  }else{ echo "fail"; }
 
}


?>