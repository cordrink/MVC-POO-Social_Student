<?php


class StageRepository {

    private DatabaseConnection $_connection;

    public function __construct(DatabaseConnection $cnx)
    {
        $this->_connection = $cnx;
    }

    public function insert(): bool
    {
        $stmt = $this->_connection->getConnection()->prepare('INSERT INTO stage (idEntreprise, titre, description, date) VALUES (:idEntreprise, :titre, :description, now())');

        $stmt->bindValue(':idEntreprise', $this->getIdEntreprise(), PDO::PARAM_INT);
        $stmt->bindValue(':titre', $this->getTitre(), PDO::PARAM_STR);
        $stmt->bindValue(':description', $this->getDescription(), PDO::PARAM_STR);

        return $stmt->execute();
    }
}