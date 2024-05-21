<?php

class PostRepository {
    private DatabaseConnection $_connection;

    public function __construct(DatabaseConnection $cnx)
    {
        $this->_connection = $cnx;
    }

    public function addPost(string $titre, string $description, string $lien, string $type) :bool
    {
        $id =  $_SESSION['id'];

        $query = $this->_connection->getConnection()->prepare('SELECT title FROM post WHERE title = :title');

        $query->bindValue(':title', $titre);
        $query->execute();

        $result = $query->fetchAll();
        if (!$result) {
            $statement = $this->_connection->getConnection()->prepare('INSERT INTO post(id_uilisateur,title, description, link, type, date) VALUE(' . $id . ',:title, :description, :link, :type, now())');

            $statement->bindValue(':title', $titre);
            $statement->bindValue(':description', $description);
            $statement->bindValue(':link', $lien);
            $statement->bindValue(':type', $type);

            $affectedLine = $statement->execute();
            return ($affectedLine > 0);
        } else {
            throw new Exception('Vous avez deja posté ce projet');
        }
    }

    public function getPosts(int $id): array
    {
        $statement = $this->_connection->getConnection()->prepare('SELECT *  FROM post WHERE id_uilisateur = :id');

        $statement->bindValue(':id', $id);
        $statement->execute();

        $posts = [];

        while (($row = $statement->fetch())) {
            $post = new Post();
            $post->setTitle($row['title']);
            $post->setLink($row['link']);
            $post->setType($row['type']);
            $post->setDescription($row['description']);
            $post->setId($row['id']);

            $posts[] = $post;
        }

        return $posts;

    }

}