<?php
include('../Include/include.php');
include('../Include/classe.php');
$idConnexion =connecterServeurBD();
$resultat=$idConnexion->query("select * from Joueur");
$resultat2=$idConnexion->query("select * from Jouer");
$ligne=0;
$ligne2=0;
while( $row = $resultat->fetch()) {
    $rows[$ligne++] = $row;
}
while( $row2 = $resultat2->fetch()) {
    $rows2[$ligne2++] = $row2;
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
            foreach( array('PAYS') as $champ ){
            ?><tr><?php
                        echo "<th>Pays</th>";
            foreach( $rows as $row )
            echo "<td>".$row[$champ]."</td>";
            ?></tr><?php
            }
            foreach( array('SCORE_JOUEUR') as $champ ){
            ?><tr><?php
                        echo "<th>Tour1</th>";
            foreach( $rows2 as $row )
                if($rows[0][0]==$rows2[0][0])
            echo "<td>".$row[$champ]."</td>";
            ?></tr><?php
            }
            foreach( array('SCORE_JOUEUR2') as $champ ){
            ?><tr><?php
                        echo "<th>Tour2</th>";
            foreach( $rows2 as $row )
                if($rows[0][0]==$rows2[0][0])
            echo "<td>".$row[$champ]."</td>";
            ?></tr><?php
            }
            foreach( array('SCORE_JOUEUR3') as $champ ){
            ?><tr><?php
                        echo "<th>Tour3</th>";
            foreach( $rows2 as $row )
                if($rows[0][0]==$rows2[0][0])
            echo "<td>".$row[$champ]."</td>";
            ?></tr><?php
            }
            foreach( array('SCORE_JOUEUR4') as $champ ){
            ?><tr><?php
                        echo "<th>Tour4</th>";
            foreach( $rows2 as $row )
                if($rows[0][0]==$rows2[0][0])
            echo "<td>".$row[$champ]."</td>";
            ?></tr><?php
            }
            //total à faire
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css">

<form class="retour" method="post" action="index.php" border="1">
    <input class="val" type ="submit" value="retour à l'acceuil"/>
</form>