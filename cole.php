<?php

     include 'config.inc.php';
	 
	 // Check whether username or password is set from android	
     if(isset($_POST['slot']))
     {
		 
		 
		 
		  // Innitialize Variable
		  $result='';
	   	  $slot = $_POST['slot'];
	   	    $iparr = explode("/", $slot) ;
	   	    $id=(int)$iparr[3];

   		 
}

		  

		 
	

	if ($slot!="")	
	{	  	$req = $conn->prepare("UPDATE `slots` SET `id`='$id',`status`='$iparr[0]',`user`='$iparr[1]',`parking`='$iparr[2]' WHERE `id`='$id'" );
            $req->execute(array());
			$result="SUCCES";}
		
	        
	 
	 
else{
	$result="failed";
	
}
echo $result;
		  
	
?>