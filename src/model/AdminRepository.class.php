<?php

class AdminRepository {
    private DatabaseConnection $_connection;

    public function __construct(DatabaseConnection $cnx)
    {
        $this->_connection = $cnx;
    }

    public function connexion(string $nomAdmin,  string $motPass, string $departement): array
    {
        $query = $this->_connection->getConnection()->prepare('SELECT * FROM admin WHERE  nomAdmin = :nom');
        $query->bindValue(':nom', $nomAdmin);
        $query->execute();

        $result = $query->fetch();
        $passhash = $result['passAdmin'];
        if ($result) {
            if ($result['departement'] === $departement) {
                if ($motPass === $passhash){
                    return $result;
                } else {
                    throw new  Exception('Identifiant incorrect');
                }
            } else {
                throw new  Exception('Identifiant incorrect');
            }
        } else {
            throw new  Exception('Identifiant incorrect');
        }
    }
}