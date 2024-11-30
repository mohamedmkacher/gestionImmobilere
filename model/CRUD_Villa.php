<?php
require_once "villa.php";
require_once "CRUD.php";
class CRUD_Villa extends CRUD
{
    function __construct()
    {
        parent::__construct();
    }

    public function ajouter($villa)
    {
        $proprietaire = $villa->getProprietaire();
        $localite = $villa->getLocalite();
        $surface = $villa->getSurface();
        $nbPieces = $villa->getNbPieces();
        $domaineUsage = $villa->getDomaineUsage();
        $nbEtages = $villa->getNbEtages();
        $sql = "insert into Immobilier values (null,'$proprietaire','$localite',$surface,$nbPieces,'$domaineUsage','V',$nbEtages,null)";
        $res = $this->connexion->exec($sql);
        return $res;
    }


    public function modifier($villa)
    {
        $reference = $villa->getReference();
        $proprietaire = $villa->getProprietaire();
        $localite = $villa->getLocalite();
        $surface = $villa->getSurface();
        $nbPieces = $villa->getNbPieces();
        $domaineUsage = $villa->getDomaineUsage();
        $nbEtages = $villa->getNbEtages();
        $sql = "update Immobilier set  proprietaire='$proprietaire',localite='$localite',surface=$surface,nbPieces=$nbPieces,domaineUsage='$domaineUsage',nbEtages=$nbEtages where reference=$reference";
        $res = $this->connexion->exec($sql);
        return $res;
    }
    public function lister()
    {
        $sql = "select * from Immobilier where type='V'";
        $res = $this->connexion->query($sql);
        return $res;
    }
}
