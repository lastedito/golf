<?php

include('../Include/include.php');
include('../Include/classe.php');
$idConnexion = connecterServeurBD();
$resultat = $idConnexion->query("select * from Tournoi");
$ligne=0;
while( $row = $resultat->fetch()) $rows[$ligne++] = $row;
    echo '<table bgcolor="grey" width="100%" border="1">';
            foreach( array('NUMEROTOURNOI') as $champ ){
            ?><tr><?php
                        echo "<th>No du tournoi</th>";
            foreach( $rows as $row )
            echo "<td>".$row[$champ]."</td>";
            ?></tr><?php
            }
            foreach( array('IDENTIFIANT') as $champ ){
            ?><tr><?php
                        echo "<th>Identifiant du parcour</th>";
            foreach( $rows as $row )
            echo "<td>".$row[$champ]."</td>";
            ?></tr><?php
            }
            foreach( array('NOMTOURNOI') as $champ ){
            ?><tr><?php
                        echo "<th>Nom du tournoi</th>";
            foreach( $rows as $row )
            echo "<td>".$row[$champ]."</td>";
            ?></tr><?php
            }
            foreach( array('La_Date') as $champ ){
            ?><tr><?php
                        echo "<th>Date de début</th>";
            foreach( $rows as $row )
            echo "<td>".$row[$champ]."</td>";
            ?></tr><?php
            }
            foreach( array('La_Date_Fin') as $champ ){
            ?><tr><?php
                        echo "<th>Date de fin</th>";
            foreach( $rows as $row )
            echo "<td>".$row[$champ]."</td>";
            ?></tr><?php
            }
    echo "</table>";
            ?>
<form class="retour" method="post" action="index.php" border="1">
    <input class="val" type ="submit" value="retour à l'acceuil"/>
</form>
<form class="suppr" method="post" action="v_NvTournoi.php" border="1">
    <input class="val" type ="submit" value="Créer un Tournoi"/>
</form>
<form class="modif" method="post" action="v_ModifTournoiAsk.php" border="1">
    <input class="val" type ="submit" value="Modification de Tournoi"/>
</form>
<form class="suppr" method="post" action="v_SupprTournoiAsk.php" border="1">
    <input class="val" type ="submit" value="Supprimer un Tournoi"/>
</form>