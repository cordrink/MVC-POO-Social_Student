<?php

class Post {
    private int $_id;
    private string $_title;
    private string $_description;
    private string $_link;
    private string $_type;
    private string $_date;

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
        return $this->_id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->_id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->_title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->_title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->_description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->_description = $description;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->_link;
    }

    /**
     * @param string $link
     */
    public function setLink(string $link): void
    {
        $this->_link = $link;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->_type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->_type = $type;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->_date;
    }
    
}