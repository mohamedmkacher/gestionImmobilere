<?php
require_once "immobilier.php";
class Appartement extends Immobilier
{
    private int $surfaceEspaceCommun;
    
    function __construct( $reference,string $proprietaire, string $localite, int $surface, int $nbPieces, string $domaineUsage, int $surfaceEspaceCommun)
    {
        parent::__construct($reference, $proprietaire, $localite, $surface, $nbPieces, $domaineUsage);
        $this->surfaceEspaceCommun = $surfaceEspaceCommun;
    }



    public function getSurfaceEspaceCommun(): int
    {
        return $this->surfaceEspaceCommun;
    }


    public function setSurfaceEspaceCommun(int $surfaceEspaceCommun): self
    {
        $this->surfaceEspaceCommun = $surfaceEspaceCommun;
        return $this;
    }
}
