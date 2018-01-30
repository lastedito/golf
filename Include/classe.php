<?php
//--------------------------------------------------------------------------JOUEUR-----------------------------------------------------------------------------------------------------------
class Joueur
{
    private $No_joueur;
    private $nom_joueur;
    private $prenom_joueur;
    private $pays;
    
    public function init($unJoueur, $unNom, $unPrenom, $unPays)
    {
        $this->No_joueur=$unJoueur;
        $this->nom_joueur=$unNom;
        $this->prenom_joueur=$unPrenom;
        $this->pays=$unPays;
    }
    public function affDetails()
    {
        print($this->No_joueur.' '.$this->nom_joueur.' '.$this->prenom_joueur.' '.$this->pays);
    }
    public function getNo()
    {
        return $this->No_joueur;
    }
        public function getNom()
    {
        return $this->nom_joueur;
    }
        public function getPrenom()
    {
        return $this->prenom_joueur;
    }
        public function getPays()
    {
        return $this->pays;
    }
}
//--------------------------------------------------------------------------TROUS-------------------------------------------------------------------------------------------------------------
class Trous
{
    private $NumeroTrous;
    private $Identifiant;
    private $Distance_noir;
    private $Distance_jaune;
    private $Distance_bleu;    
    private $Distance_rouge;
    private $Distance_blanc;
    private $PAR;
    private $HCP;
    
    public function init($unTrous, $unIdentifiant, $uneDisNoir, $uneDisJaune, $uneDisBleu, $uneDisRouge, $uneDisBlanc, $lePAR, $unHandicap)           
    {
        $this->NumeroTrous=$unTrous;
        $this->Identifiant=$unIdentifiant;
        $this->Distance_noir=$uneDisNoir;
        $this->Distance_jaune=$uneDisJaune;
        $this->Distance_bleu=$uneDisBleu;
        $this->Distance_rouge=$uneDisRouge;
        $this->Distance_blanc=$uneDisBlanc;
        $this->PAR=$lePAR;
        $this->HCP=$unHandicap;
    }
    
        public function getNum()
    {
        return $this->NumeroTrous;
    }
        public function getDistNoir()
    {
        return $this->Distance_noir;
    }
        public function getDistJaune()
    {
        return $this->Distance_jaune;
    }
        public function getDistBleu()
    {
        return $this->Distance_bleu;
    }
        public function getDistRouge()
    {
        return $this->Distance_rouge;
    }
        public function getDistBlanc()
    {
        return $this->Distance_blanc;
    }
        public function getPar()
    {
        return $this->PAR;
    }
        public function getHCP()
    {
        return $this->HCP;
    }
        public function getId()
    {
        return $this->Identifiant;
    }
    //merci
}
//--------------------------------------------------------------------------PARCOURS--------------------------------------------------------------------------------------------------------
class Parcours
{
    private $Identifiant;
    private $NomParcours;
    
    public function init($unId, $unParcours)
    {
        $this->Identifiant=$unId;
        $this->NomParcours=$unParcours;
    }
        public function getIdentifiant()
    {
        return $this->Identifiant;
    }
            public function getNom()
    {
        return $this->NomParcours;
    }
}
//--------------------------------------------------------------------------TOURNOI-----------------------------------------------------------------------------------------------------------
class Tournoi
{
    private $NumeroTournoi;
    private $La_Date;
    private $La_Date_Fin;
    private $Identifiant;
    private $NomTournoi;
    
    public function init($unNumTournoi, $unTournoi, $uneD, $uneDatedeFin, $unIdentifiant)
    {
        $this->NumeroTournoi=$unNumTournoi;
        $this->NomTournoi=$unTournoi;
        $this->La_Date=$uneD;
        $this->La_Date_Fin=$uneDatedeFin;
        $this->Identifiant=$unIdentifiant;
    }
    public function affDetails()
    {
        print($this->NumeroTournoi.' '.$this->NomTournoi.' '.$this->La_Date.' '.$this->La_Date_Fin);
    }
        public function getNoT()
    {
        return $this->NumeroTournoi;
    }
        public function getNom()
    {
        return $this->NomTournoi;
    }
        public function getDate()
    {
        return $this->La_Date;
    }
        public function getDateFin()
    {
        return $this->La_Date_Fin;
    }
        public function getIdentifiant()
    {
        return $this->Identifiant;
    }
}
//--------------------------------------------------------------------------JOUER---------------------------------------------------------------------------------------------------------------
class Jouer
{
    private $La_Date;
    private $No_Joueur;
    private $NumeroTrous;
    private $Score_Joueur;
    
    public function init($unScore, $aTime, $numJ, $aHole)
    {
        $this->Score_Joueur=$unScore;
        $this->La_Date=$aTime;
        $this->No_Joueur=$numJ;
        $this->NumeroTrous=$aHole;
    }
    

        public function getScore()
    {
        return $this->Score_Joueur;
    }
            public function getNumTrous()
    {
        return $this->NumeroTrous;
    }
            public function getDate()
    {
        return $this->La_Date;
    }
            public function getJoueur()
    {
        return $this->No_Joueur;
    }
    }