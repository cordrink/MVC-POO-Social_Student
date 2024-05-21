<?php

class Entreprise
{
    private int $_id;
    private string $_nomStructure;
    private string $_nomUser;
    private string $_pass;

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

    public function getIdEntreprise(): int {return $this->_id;}
    public function getNomStructure(): string {return $this->_nomStructure;}
    public function getNomUtilisateur(): string {return $this->_nomUser;}
    public function getPassEntreprise(): string {return $this->_pass;}
    public function isUserValid(): bool {return !(empty($this->_nomStructure) and empty($this->_nomUser) and empty($this->_pass));}

    public function setIdEntreprise($id): void
    {
        if(!empty($id) and $id > 0) {
            $this->_id = (int) $id;
        }
    }

    public function setNomStructure($nomstruc): void {
        if (is_string($nomstruc) and !empty($nomstruc)) {
            $this->_nomStructure = $nomstruc;
        }
    }

    public function setNomUtilisateur($nom): void {
        if (is_string($nom) and !empty($nom)) {
            $this->_nomUser = $nom;
        }
    }

    public function setPassEntreprise($pass): void {
        if (is_string($pass) and !empty($pass)) {
            $this->_pass = $pass;
        }
    }
}