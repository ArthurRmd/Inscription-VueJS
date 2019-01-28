<?php

$json = file_get_contents('php://input');
$json = json_decode($json, true);




if (is_array($json) ) {
  if (!empty($json["pseudo"])  ){

        $pseudo = $json['pseudo'];

        $requeteSQL = false;
        
        /////////////// Fausse requete //////////////
        if ($pseudo == 'Arthur' || $pseudo == 'Remond' || $pseudo == 'iut' || $pseudo == 'web') {
           $requeteSQL = true;
        }
        /////////////////
        
            echo json_encode($requeteSQL);
        

        
          

  }
  else{
    echo json_encode(false);
}
  

 
  
}
else {
    echo json_encode(false); 
  }



