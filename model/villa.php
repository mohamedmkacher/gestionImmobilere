<?php
require_once "immobilier.php";
class Villa extends Immobilier
{
    private int $nbEtages;
    function __construct( $reference, string $proprietaire, string $localite, int $surface, int $nbPieces, string $domaineUsage, int $nbEtages)
    {
        parent::__construct($reference,  $proprietaire, $localite, $surface, $nbPieces, $domaineUsage);
        $this->nbEtages = $nbEtages;
    }



    public function getNbEtages(): int
    {
        return $this->nbEtages;
    }


    public function setNbEtages(int $nbEtages): self
    {
        $this->nbEtages = $nbEtages;
        return $this;
    }
}
