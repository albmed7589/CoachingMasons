<?php 
  session_start();
  ob_start();
  include("../dbconnect.php");
  include("../_mysql.php");
  
	if(isset($_POST['candidate_delete'])){

		if(isset($_POST['delete'])){
			foreach($_POST['delete'] as $deleteid){

      $deleteUser = "DELETE from `candidates` WHERE `CandidateID`=".$deleteid;
      mysqli_query($db,$deleteUser);
	  
	 
	  echo "query = " . $deleteUser . "<br>";
    }
  }
 
}
?>