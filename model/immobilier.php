<?php
abstract class Immobilier
{
    protected  $reference;
    protected string $proprietaire;
    protected string $localite;
    protected int $surface;
    protected int $nbPieces;
    protected string $domaineUsage;

    /*function __construct(string $proprietaire, string $localite, int $surface, int $nbPieces, string $domaineUsage)
    {
        
        $this->proprietaire = $proprietaire;
        $this->localite = $localite;
        $this->surface = $surface;
        $this->nbPieces = $nbPieces;
        $this->domaineUsage = $domaineUsage;
    }*/
    function __construct( $reference, string $proprietaire, string $localite, int $surface, int $nbPieces, string $domaineUsage)
    {
        $this->reference = $reference;
        $this->proprietaire = $proprietaire;
        $this->localite = $localite;
        $this->surface = $surface;
        $this->nbPieces = $nbPieces;
        $this->domaineUsage = $domaineUsage;
    }



    public function getReference(): int
    {
        return $this->reference;
    }


    public function getProprietaire(): string
    {
        return $this->proprietaire;
    }


    public function setProprietaire(string $proprietaire): self
    {
        $this->proprietaire = $proprietaire;
        return $this;
    }


    public function getLocalite(): string
    {
        return $this->localite;
    }


    public function setLocalite(string $localite): self
    {
        $this->localite = $localite;
        return $this;
    }


    public function getSurface(): int
    {
        return $this->surface;
    }


    public function setSurface(int $surface): self
    {
        $this->surface = $surface;
        return $this;
    }


    public function getNbPieces(): int
    {
        return $this->nbPieces;
    }


    public function setNbPieces(int $nbPieces): self
    {
        $this->nbPieces = $nbPieces;
        return $this;
    }


    public function getDomaineUsage(): string
    {
        return $this->domaineUsage;
    }


    public function setDomaineUsage(string $domaineUsage): self
    {
        $this->domaineUsage = $domaineUsage;
        return $this;
    }
}
