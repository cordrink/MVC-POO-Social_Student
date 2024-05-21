<?php

function accueill(): void
{
    $id = $_SESSION['id'];

    $repository = new PostRepository(new DatabaseConnection());


    $posts = $repository->getPosts($id);

    require 'templates/user/accueil.php';
}