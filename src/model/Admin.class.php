<?php

class Admin {
    private int $_id;
    private string $_nomAdmin;
    private string $_passAdmin;
    private string $_departement;

    public function __construct($donnees = [])
    {
        if (!empty($donnees)) {
            $this->hydrate($donnees);
        }
    }

    public function hydrate($donnees) :void
    {
        foreach ($donnees as $attribut => $valeur) {
            $methodeSetters = 'set' . ucfirst($attribut);
            if (method_exists($this, $methodeSetters)) {
                $this->$methodeSetters($valeur);
            }
        }
    }

    public function getIdAdmin(): int {return $this->_id;}
    public function getNomAdmin(): string {return $this->_nomAdmin;}
    public function getPassAdmin(): string {return $this->_passAdmin;}
    public function getDepartement(): string {return $this->_departement;}
    public function isUserValid(): bool {return !(empty($this->_passAdmin) and empty($this->_nomAdmin) and empty($this->_departement));}

    public function setIdAdmin($id): void
    {
        if(!empty($id) and $id > 0) {
            $this->_id = (int) $id;
        }
    }

    public function setNomAdmin($nom): void
    {
        if (is_string($nom) and !empty($nom)) {
            $this->_nomAdmin = $nom;
        }
    }

    public function setPassAdmin($pass): void
    {
        if (is_string($pass) and !empty($pass)) {
            $this->_passAdmin = $pass;
        }
    }

    public function setDepartement($departement): void
    {
        if (is_string($departement) and !empty($departement)) {
            $this->_departement = $departement;
        }
    }
}