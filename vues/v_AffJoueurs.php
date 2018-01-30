<?php
$idConnexion = connecterServeurBD();
$resultat = $idConnexion->query("select * from Joueur");
$ligne=0;
while( $row = $resultat->fetch()) {
    $rows[$ligne++] = $row;
}
    echo '<table bgcolor="grey" width="100%" border="1">';
            foreach( array('NO_JOUEUR') as $champ ){
            ?><tr><?php
                        echo "<th>No du joueur</th>";
            foreach( $rows as $row )
            echo "<td>".$row[$champ]."</td>";
            ?></tr><?php
            }
            foreach( array('NOM_JOUEUR') as $champ ){
            ?><tr><?php
                        echo "<th>Nom du joueur</th>";
            foreach( $rows as $row )
            echo "<td>".$row[$champ]."</td>";
            ?></tr><?php
            }
            foreach( array('PRENOM_JOUEUR') as $champ ){
            ?><tr><?php
                        echo "<th>prenom du joueur</th>";
            foreach( $rows as $row )
            echo "<td>".$row[$champ]."</td>";
            ?></tr><?php
            }
            foreach( array('PAYS') as $champ ){
            ?><tr><?php
                        echo "<th>pays du joueur</th>";
            foreach( $rows as $row )
            echo "<td>".$row[$champ]."</td>";
            ?></tr><?php
            }
    echo "</table>";
            ?>
<form class="retour" method="post" action="index.php" border="1">
    <input class="val" type ="submit" value="retour à l'acceuil"/>
</form>
<form class="modif" method="post" action="v_NvJoueurs.php" border="1">
    <input class="val" type ="submit" value="Ajouter un joueur"/>
</form>
<form class="suppr" method="post" action="v_ModifJoueursAsk.php" border="1">
    <input class="val" type ="submit" value="Modifier un joueur"/>
</form>
<form class="suppr" method="post" action="v_SupprJoueursAsk.php" border="1">
    <input class="val" type ="submit" value="Supprimer un joueur"/>
</form>