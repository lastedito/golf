<?php
//Connection à la BDD
function connecterServeurBD() {
    $bdd = new PDO('mysql:host=localhost;dbname=golf', 'root', '');
    return $bdd;
}

//Permet d'afficher les erreurs liées au SQL
function verifierErreurMySql($result,$idCnx){
    if (!$result) {
    printf("Error: %s\n", $idCnx->errorInfo());
    exit();
}
}
?>