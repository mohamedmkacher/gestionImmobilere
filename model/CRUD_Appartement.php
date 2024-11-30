<?php
require_once "appartement.php";
require_once "CRUD.php";
class CRUD_Appartement extends CRUD
{

    function __construct()
    {
        parent::__construct();
    }
    public function ajouter($appartement)
    {
        $proprietaire = $appartement->getProprietaire();
        $localite = $appartement->getLocalite();
        $surface = $appartement->getSurface();
        $nbPieces = $appartement->getNbPieces();
        $domaineUsage = $appartement->getDomaineUsage();
        $surfaceEspaceCommun = $appartement->getSurfaceEspaceCommun();

        $sql = "insert into Immobilier values (null,'$proprietaire','$localite',$surface,$nbPieces,'$domaineUsage','A',null,$surfaceEspaceCommun)";
        $res = $this->connexion->exec($sql);
        return $res;
    }


    public function modifier($appartement)
    {
        $reference = $appartement->getReference();
        $proprietaire = $appartement->getProprietaire();
        $localite = $appartement->getLocalite();
        $surface = $appartement->getSurface();
        $nbPieces = $appartement->getNbPieces();
        $domaineUsage = $appartement->getDomaineUsage();
        $surfaceEspaceCommun = $appartement->getSurfaceEspaceCommun();
        $sql = "update Immobilier set  proprietaire='$proprietaire',localite='$localite',surface=$surface,nbPieces=$nbPieces,domaineUsage='$domaineUsage',surfaceEspaceCommun=$surfaceEspaceCommun where reference=$reference";
        $res = $this->connexion->exec($sql);
        return $res;
    }
    public function lister()
    {
        $sql = "select * from Immobilier where type='A'";
        $res = $this->connexion->query($sql);
        $lesApparts = $res->fetchAll(pdo::FETCH_ASSOC);
        return $lesApparts;
    }
}
