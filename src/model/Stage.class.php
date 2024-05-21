<?php

class Stage {
    private int $id;
    private int $idEntreprise;
    private string $titre;
    private string $description;
    private string $date;

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


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getIdEntreprise(): int
    {
        return $this->idEntreprise;
    }

    /**
     * @param int $idEntreprise
     */
    public function setIdEntreprise(int $idEntreprise): void
    {
        $this->idEntreprise = $idEntreprise;
    }

}