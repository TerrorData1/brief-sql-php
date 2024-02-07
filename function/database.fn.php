<?php
function getPDOlink($config) {
    // DSN de connexion :
  $dsn = 'mysql:dbname=' . $config['dbname'] . ';host=' . $config['dbhost'] . ';port=' . $config['dbport'];
  // On tenter de se connecter à la base de données :
try {
    // On instancie l'objet PDO :
    $db = new PDO("mysql:host=localhost;dbname=db_gonzo;charset=utf8", "root", "root",);
    // On envoi nos requetes en utf8 :
    // On definit le mode de fetch par defaut :
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    //on utilise vardump pour afficher sur la page et verifier si nous somme bien connecté à la database
    // var_dump($db);
return $db;
  } catch (PDOException $e) {
    exit('BDD Erreur de connexion : ' . $e->getMessage());     
  }
}
?>
