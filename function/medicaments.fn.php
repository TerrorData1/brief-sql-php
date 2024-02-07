<?php
// fonction étoile
function getStar($rating) {
$starRating = round($rating);
// 9/2 -> 4.5
$note =  $starRating / 2;
// 4.5 -> [4, 5]
// [0] -> 4
// [1] -> 5
$starSplit = explode('.', $note);
$starNbr = 0;

for ($i=0;  $i < $starSplit[0]  ; $i++) {
  echo  '<i class="bi bi-star-fill text-warning"></i>';
  $starNbr++; 
}
if (isset($starSplit[1])){
    echo  '<i class="bi bi-star-half text-warning"></i>';
    $starNbr++;
  }

for ($i=0; $i < 5 - $starNbr ; $i++) { 
  echo'<i class="bi bi-star text-warning"></i>';
  }
}

//fonction affichage meilleur medicaments par ordre de prix croissant ou decroissant et par note
// isset — Détermine si une variable est déclarée
function order ($db, $choice){
if (!isset($_POST['selection'])) {
  $sql = "SELECT * FROM liste_medicaments
  INNER JOIN picture ON liste_medicaments.ID = picture.medicamentId;";
  $result = $db-> query($sql);
  $medicaments = $result->fetchAll();
  
  }else{
      $choice = $_POST['selection'];
      $sql = "SELECT * FROM liste_medicaments
      INNER JOIN picture ON liste_medicaments.ID = picture.medicamentId
      ORDER BY $choice;";
      $result = $db-> query($sql);
      $medicaments = $result->fetchAll();
  }
  return $medicaments;
}
