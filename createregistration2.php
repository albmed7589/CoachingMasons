<?php 
  session_start();
  ob_start();
  include("../dbconnect.php");
  include("../_mysql.php");
  
 
  
	if(isset($_GET['Add1'])){


      #$deleteUser = "DELETE from `candidates` WHERE `CandidateID`=".$deleteid;
      #mysqli_query($db,$deleteUser);
	  
	 
	    echo "Add1 is set";
    }else if(isset($_GET['Add2'])){
		echo "Add2 is set";
	}else if(isset($_GET['Add3'])){
		echo "Add3 is set";
	}else if(isset($_GET['Add4'])){
		echo "Add4 is set";
	}else if(isset($_GET['Add5'])){
		echo "Add5 is set";
	}else {
		echo "Nothing is set";	
	}
 
?>