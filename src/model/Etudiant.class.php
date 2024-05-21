<?php


class Etudiant
{
    private int $_idEtudiant;
    private string $_nom;
    private string $_pseudo;
    private string $_matricule;
    private string $_filiere;
    private string $_pass;
    private string $_email;
    private string $_ville;
    private int $_sexe;
    private string $_bio;
    private string $_git;
    private array $_contacts;
    private string $_dateInscription;
    private string $_competences;
    private array $_erreurs;

    const NOM_INVALIDE = 1;
    const MOT_DE_PASSE_INVALIDE = 2;
    const MATRICULE_INVALIDE = 3;


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

    public function getIdEtudiant() :int {return $this->_idEtudiant;}
    public function getNom() :string {return $this->_nom;}
    public function getPseudo() :string {return $this->_pseudo;}
    public function getMatricule() :string {return $this->_matricule;}
    public function getPassEtudiant() :string {return $this->_pass;}
    public function getContacts() :array {return $this->_contacts;}
    public function getDateInscription() :string {return $this->_dateInscription;}
    public function getErreurs() : array {return $this->_erreurs;}
    public function isUserValide() :bool { return !(empty($this->_nom) || empty($this->_matricule) || empty($this->_pass));}

    public function setIdEtudiant($id) :void
    {
        if(!empty($id) and $id > 0) {
            $this->_idEtudiant = (int) $id;
        }
    }

    public function setNom($nom) :void
    {
        if (!is_string($nom) || empty($nom)) {
            $this->_erreurs[] = self::NOM_INVALIDE;
        } else {
            $this->_nom = $nom;
        }
    }

    public function setPseudo($pseudo) :void
    {
        if (is_string($pseudo) || !empty($pseudo)) {
            $this->_pseudo = $pseudo;
        }
    }

    public function setMatricule($matricule) :void
    {
        if (!is_string($matricule) || empty($matricule)) {
            $this->_erreurs[] = self::MATRICULE_INVALIDE;
        } else {
            $this->_matricule = $matricule;
        }
    }

    public function setPassEtudiant($pass) :void
    {
        if (!is_string($pass) || empty($pass)) {
            $this->_erreurs[] = self::MOT_DE_PASSE_INVALIDE;
        } else {
            $this->_pass = $pass;
        }
    }

    public function setDateInscription($dateInscription) :void
    {
        if (is_string($dateInscription) || !empty($dateInscription)) {
            $this->_dateInscription = $dateInscription;
        }
    }

    /**
     * @param string $filiere
     */
    public function setFiliere(string $filiere): void
    {
        $this->_filiere = $filiere;
    }

    /**
     * @param array $contacts
     */
    public function setContacts(array $contacts): void
    {
        $this->_contacts = $contacts;
    }

    /**
     * @param string $competences
     */
    public function setCompetences(string $competences): void
    {
        $this->_competences = $competences;
    }

    /**
     * @return string
     */
    public function getFiliere(): string
    {
        return $this->_filiere;
    }

    /**
     * @return string
     */
    public function getGit(): string
    {
        return $this->_git;
    }

    /**
     * @param string $git
     */
    public function setGit(string $git): void
    {
        $this->_git = $git;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->_email = $email;
    }

    /**
     * @param int $sexe
     */
    public function setSexe(int $sexe): void
    {
        $this->_sexe = $sexe;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->_ville = $ville;
    }


    /**
     * @return string
     */
    public function getPass(): string
    {
        return $this->_pass;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->_email;
    }

    /**
     * @return int
     */
    public function getSexe(): int
    {
        return $this->_sexe;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->_ville;
    }

    /**
     * @return string
     */
    public function getCompetences(): string
    {
        return $this->_competences;
    }

    /**
     * @return string
     */
    public function getBio(): string
    {
        return $this->_bio;
    }

    /**
     * @param string $bio
     */
    public function setBio(string $bio): void
    {
        $this->_bio = $bio;
    }

}