
<?php


// connexion a la base du donnée 
 include 'config.inc.php';
 
 

 
 //initiation des variables 
$user = array();


// recherche des etablissements selon le type 
 // creation du requette 
 $req1 = $conn->prepare('SELECT status FROM slots WHERE id= 1  ');
 
 // execution de requette 
  $req1->execute(array());
  $donnees1 = $req1->fetch();
   $req2 = $conn->prepare('SELECT status FROM slots WHERE id= 2  ');
 
 // execution de requette 
  $req2->execute(array());
  $donnees2 = $req2->fetch(); 
  $req3 = $conn->prepare('SELECT status FROM slots WHERE id= 3  ');
 
 // execution de requette 
  $req3->execute(array());
  $donnees3 = $req3->fetch();
  $req4 = $conn->prepare('SELECT status FROM slots WHERE id= 4  ');
 
 // execution de requette 
  $req4->execute(array());
  $donnees4 = $req4->fetch();
  $temp1['slot1']=$donnees1['status'];
    $temp1['slot2']=$donnees2['status'];
      $temp1['slot3']=$donnees3['status'];
            $temp1['slot4']=$donnees4['status'];
array_push($user,$temp1);
echo json_encode(array("slots"=>$user),JSON_UNESCAPED_UNICODE);





	
?>