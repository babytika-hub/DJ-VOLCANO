<?php

    $host='localhost';
    $port='3306';
    $dbname='database';
    $user='root';
    $password='';

    try{
        $newBD= new PDO("mysql:host=localhost;dbname=database",$user,$password);
        echo "Connexion établie";
    }catch(PDOException $e){

        die('Erreur : ' .$e->getMessage());
    }

    if ( 
        !empty($_POST['nom'])&&
        !empty($_POST['prenom'])&&
        !empty($_POST['email'])&&
        !empty($_POST['texte'])
     ) {


            echo "Test Réussi";
            $insertion=$newBD->prepare ('INSERT INTO profil (nom, prenom, email, texte) VALUES(:nom, :prenom, :email, :texte)');
            $verification = $insertion->execute([
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'email' => $_POST['email'],
                'texte' => $_POST['texte']
            ]);
            if ($verification) {
                echo "Insertion réussie";
            }else{
                echo  "Echec d'insertion";
            }


        }else{
            echo "Une variable n'est pas déclarée ou est null";
        } 
?>