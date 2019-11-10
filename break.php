<?php

     include 'config.inc.php';
     
     $date= date( "H:i:s");
     $iparr = explode(":", $date) ; 
     /*echo $iparr[0]." ".$iparr[1]." ".$iparr[2];*/
     $user = array();

	   	   

     
   

    if(isset($_POST['login']))
     {
		 
		 $id=$_POST['login'];


		  	$req = $conn->prepare("UPDATE `bonds` SET `time_break`='$date' WHERE `id`='$id'" );
            $req->execute(array());
                 $req1 = $conn->prepare("SELECT time_bond FROM bonds WHERE  user='$id'");
			 $req1->execute(array());
 			$donnees1 = $req1->fetch();
 			  
 			         $iparr2 = explode(":", $donnees1['time_bond']) ; 


            $hours_sec=abs(((int)$iparr[0] - (int)$iparr2[0])*3600);
            $hours_draj=abs(((int)$iparr[1] - (int)$iparr2[1])*60);
            $sec=abs((int)$iparr[2] - (int)$iparr2[2]);
            $time=$hours_draj+$hours_draj+$sec;
            	$cost=$time*30;
            	$cost=(string)$time;
            	echo $cost;


		}
	        
	 
	 
else{
	$result="no account";
echo $result;}
	


		 
	
?>