<?php
require_once "config.php";

abstract class CRUD
{
    protected $connexion;
    function __construct()
    {
        $config = new Config();
        $this->connexion = $config->getPdo();
    }
    public function recuperer(int $ref)
    {
        $sql = "select * from Immobilier where reference=$ref;";
        $res = $this->connexion->query($sql);
        
            return $res->fetch(pdo::FETCH_ASSOC);
        
    }
    public function supprimer(int $ref)
    {
        $sql = "delete from Immobilier where reference=$ref;";
        $res = $this->connexion->query($sql);
        return $res;
    }
}
