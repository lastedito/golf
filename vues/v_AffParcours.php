<?php

include('../Include/include.php');
include('../Include/classe.php');
$idConnexion = connecterServeurBD();
$resultat = $idConnexion->query("select * from Parcours");
$ligne=0;
while( $row = $resultat->fetch()) $rows[$ligne++] = $row;
    echo '<table bgcolor="grey" width="100%" border="1">';
            foreach( array('IDENTIFIANT') as $champ ){
            ?><tr><?php
                        echo "<th>Identifiant</th>";
            foreach( $rows as $row )
            echo "<td>".$row[$champ]."</td>";
            ?></tr><?php
            }
            foreach( array('NOMPARCOURS') as $champ ){
            ?><tr><?php
                        echo "<th>Nom du parcour</th>";
            foreach( $rows as $row )
            echo "<td>".$row[$champ]."</td>";
            ?></tr><?php
            }
    echo "</table>";
            ?>
<form class="retour" method="post" action="index.php" border="1">
    <input class="val" type ="submit" value="retour à l'acceuil"/>
</form>
<form class="retour" method="post" action="v_NvParcours.php" border="1">
    <input class="val" type ="submit" value="Nouveau parcours"/>
</form>
<form class="modif" method="post" action="v_ModifParcoursAsk.php" border="1">
    <input class="val" type ="submit" value="Modification de parcours"/>
</form>
<form class="suppr" method="post" action="v_SupprParcoursAsk.php" border="1">
    <input class="val" type ="submit" value="Supprimer un parcours"/>
</form>