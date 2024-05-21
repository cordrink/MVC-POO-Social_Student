<?php

function post($input) :void
{
    if (isset($_POST['post'])) {
        if (!empty($input)) {
            $post = new Post($input);

            $postRepo = new  PostRepository(new DatabaseConnection());

            $succes = $postRepo->addPost($post->getTitle(),$post->getDescription(), $post->getLink(), $post->getType());

            if (!$succes) {
                throw new Exception('Enregistrement Echoué');
            } else {
                header('location:index.php');;
            }
        }
    }



    require 'templates/user/post.php';
}
