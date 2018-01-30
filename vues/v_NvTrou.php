<?php
include('../Include/include.php');
include('../Include/classe.php');
$idConnexion =connecterServeurBD();
$resultat=$idConnexion->query("select max(NumeroTrous) as maximum from trous");
$tab=$resultat->fetch();
?>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="vues/css/style.css">
<!--Créer les gets dans la classe -->
<form class="form" method="post" action="../action/actionNvTrou.php">
	<h1 class="formulaire">Nouveau Trou</h1>
	<fieldset class="left">
            <label class="l1"><b>Numero du Trou</b></label><input name="NumeroTrous" type="text" size="6" value="<?php print $tab['maximum']+1; ?>" /><fieldset class="l2"><label>Identifiant du dernier Parcours</label>&nbsp;&nbsp;<input name="name" type="text" size="6" value="<?php echo $tab['maximum']; if($tab['maximum']==0){print 0;} ?>" /></fieldset></br>
            <label class="l1"><b>Identifiant</b></label><input name="Identifiant" type="text" size="10"/></br>
            <label class="l1"><b>Distance du noir</b></label><input name="DistNoir" type="text" size="10"/></br>
            <label class="l1"><b>Distance du jaune</b></label><input name="DistJaune" type="text" size="10"/></br>
            <label class="l1"><b>Distance du bleu</b></label><input name="DistBleu" type="text" size="10"/></br>
            <label class="l1"><b>Distance du rouge</b></label><input name="DistRouge" type="text" size="10"/></br>
            <label class="l1"><b>Distance du blanc</b></label><input name="DistBlanc" type="text" size="10"/></br>
            <label class="l1"><b>PAR</b></label><input name="PAR" type="text" size="10"/></br>
            <label class="l1"><b>HCP</b></label><input name="HCP" type="text" size="10"/></br>
                  </fieldset>
        <input type="submit" value="Valider">
</form>

<form class="retour" method="post" action="index.php" border="1">
    <input class="val" type ="submit" value="retour à l'acceuil"/>
</form>

