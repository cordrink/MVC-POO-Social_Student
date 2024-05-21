<?php

class EntrepriseRepository
{
    private DatabaseConnection $_connection;

    public function __construct(DatabaseConnection $cnx)
    {
        $this->_connection = $cnx;
    }

    public function addStucture(string $nomstruc, string $nomUser, string $motPass) :bool
    {
        $query = $this->_connection->getConnection()->prepare('SELECT nomStructure FROM entreprise WHERE nomStructure = :nomStructure');

        $query->bindValue(':nomStructure', $nomstruc);
        $query->execute();

        $result = $query->fetch();
        if (!$result) {
            $passHash = password_hash($motPass, PASSWORD_DEFAULT);

            $statement = $this->_connection->getConnection()->prepare('INSERT INTO entreprise(nomStructure, nomUtilisateur, passEntreprise, date) VALUE(UPPER(:nomStruc), :nomUser, :pass, now())');

            $statement->bindValue(':nomStruc', $nomstruc);
            $statement->bindValue(':nomUser', $nomUser);
            $statement->bindValue(':pass', $passHash);

            $affectedLine = $statement->execute();
            return ($affectedLine > 0);
        } else {
            throw new Exception('Une Structure possede ce nom');
        }
    }

    public function connexion(string $nomstruc,  string $motPass): array
    {
        $query = $this->_connection->getConnection()->prepare('SELECT * FROM entreprise WHERE  nomStructure = :nom');
        $query->bindValue(':nom', $nomstruc);
        $query->execute();

        $result = $query->fetch();
        $passhash = $result['passEntreprise'];
        if ($result) {
            if (password_verify($motPass, $passhash)){
                return $result;
            } else {
                throw new  Exception('Identifiant incorrect');
            }
        } else {
            throw new  Exception('Identifiant incorrect');
        }
    }
}