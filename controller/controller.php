<?php
 $error = [];
 $regexint = "/^\d{10}$/";
$regex = "/^([a-zA-ZàâáçéèèêëìîíïôòóùûüÂÊÎÔúÛÄËÏÖÜÀÆæÇÉÈŒœÙñý' ]+)$/";
if(isset($_POST['submit'])){
   
        if (empty($_POST['title'])){
            $error['title'] = 'Veuillez saisir un titre';
        } elseif (!preg_match($regex, $_POST['title'])){
          $error['title'] = "Veuillez saisir un titre valide";                     
        }
        if (empty($_POST['description'])){
          $error['description'] = 'Veuillez saisir votre description';
      } elseif (!preg_match($regex, $_POST['description'])){
        $error['description'] = "Veuillez saisir une description valide";                     
      }
        if (empty($_POST['city'])){
        $error['city'] = 'Veuillez saisir votre ville';
    }   elseif (!preg_match($regex, $_POST['city'])){
        $error['city'] = "Veuillez saisir une ville valide";                     
    }   

}


?>