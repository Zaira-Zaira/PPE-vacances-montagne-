<?php
    try{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=vacances', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
    

    $reponse = $bdd->query('SELECT * FROM `guides` WHERE 1');
    while ($donnee = $reponse->fetch()){
        echo '<figure>
           <img src="'.$donnee['photo'].'" alt="photo">
            <figcaption>
                    <h3>'.$donnee['titre'].'</h3>
                    <p>'.$donnee['description'].'</p>
            </figcaption>
        </figure>';
             
           }
        $reponse->closeCursor(); 
    
        }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
        }
?>
