<?php

    $host='localhost';
    $port='3306';
    $dbname='database';
    $user='root';
    $password='';

    try{
        $newBD= new PDO("mysql:host=localhost;dbname=database",$user,$password);
        echo " Connexion établie <br>";
    }catch(PDOException $e){

        die('Erreur : ' .$e->getMessage());
    }

    if ( 
        !empty($_POST['nom'])&&
        !empty($_POST['prenom'])&&
        !empty($_POST['email'])&&
        !empty($_POST['texte'])
     ) {
            $insertion=$newBD->prepare ('INSERT INTO profil (nom, prenom, email, texte) VALUES(:nom, :prenom, :email, :texte)');
            $verification = $insertion->execute([
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'email' => $_POST['email'],
                'texte' => $_POST['texte']
            ]);
            if ($verification) {
                echo " Insertion réussie <br>";
            }else{
                echo  " Echec d'insertion <br>";
            }


        }else{ 
            echo "Une variable n'est pas déclarée ou est null";
        } 
?>