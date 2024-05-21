<?php

class EtudiantRepository
{
    private DatabaseConnection $_connection;

    public function __construct(DatabaseConnection $cnx)
    {
        $this->_connection = $cnx;
    }

    //fonction d'ajout d'un etudiant
    public function addStudent(string $nom, string $matricule, string $motPass, string $filiere) :bool
    {
        $query = $this->_connection->getConnection()->prepare('SELECT matricule FROM etudiant WHERE matricule = :matricule');

        $query->bindValue(':matricule', $matricule);
        $query->execute();

        $result = $query->fetchAll();
        if (!$result) {
            $passHash = password_hash($motPass, PASSWORD_DEFAULT);

            $statement = $this->_connection->getConnection()->prepare('INSERT INTO etudiant(nom, matricule, passEtudiant,filiere, dateInscription) VALUE(:nom, UPPER(:matricule), :pass, :filiere, now())');

            $statement->bindValue(':nom', $nom);
            $statement->bindValue(':matricule', $matricule);
            $statement->bindValue(':filiere', $filiere);
            $statement->bindValue(':pass', $passHash);

            $affectedLine = $statement->execute();
            return ($affectedLine > 0);
        } else {
            throw new Exception('Un etudiant possede ce matricule');
        }
    }

    public function updateEtudiant(string $ville, string $email, int $sexe, string $bio, string $git, string $competence) : bool
    {
        $idup = $_SESSION['id'];

        $statement = $this->_connection->getConnection()->prepare("UPDATE `etudiant` SET ville = :ville, email = :mail, sexe = :sexe, bio = :bio, git = :git, competences = :compt WHERE idEtudiant = $idup");
        $statement->bindValue(':ville', $ville);
        $statement->bindValue(':mail', $email);
        $statement->bindValue(':sexe', $sexe);
        $statement->bindValue(':bio', $bio);
        $statement->bindValue(':git', $git);
        $statement->bindValue(':compt', $competence);

        $affectedLine = $statement->execute();
        return ($affectedLine > 0);
    }

    public function connexion(string $nom, string $matricule, string $pass): array
    {
        $query = $this->_connection->getConnection()->prepare('SELECT * FROM etudiant WHERE matricule = :mat');
        $query->bindValue(':mat', $matricule);
        $query->execute();

        $result = $query->fetch();
        $passhash = $result['passEtudiant'];

        if ($result) {
            if ($nom === $result['nom']) {

                if (password_verify($pass, $passhash)){
                    return $result;
                } else {
                    throw new  Exception('Identifiant incorrect');
                }
            }else {
                throw new  Exception('Identifiant incorrect');
            }
        } else {
            throw new  Exception('Identifiant incorrect');
        }

    }

    public function recupererEtudiant(int $id) {
        $query = $this->_connection->getConnection()->query('SELECT * FROM etudiant WHERE idEtudiant = ' . $id);
        $result = $query->fetch();
        return  ($result);
    }

    public function getEtudiants($categorie): array
    {
        $statement = $this->_connection->getConnection()->prepare('SELECT *  FROM etudiant WHERE competences = :categorie');

        $statement->bindValue(':categorie', $categorie);
        $statement->execute();

        $etudiants = [];

        while (($row = $statement->fetch())) {
            $etudiant = new Etudiant();
            $etudiant->setNom($row['nom']);
            $etudiant->setCompetences($row['competences']);
            $etudiant->setIdEtudiant($row['idEtudiant']);

            $etudiants[] = $etudiant;
        }

        return $etudiants;
    }

    public function nbEtudiant(): int
    {
        $query = $this->_connection->getConnection()->query('SELECT * FROM etudiant');

        return  ($query->rowCount());
    }

}