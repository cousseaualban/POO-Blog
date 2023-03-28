<?php

$post = $db->prepare('SELECT * FROM articles WHERE id = ?', [$_GET['id']], 'App\table\article', true); 
?>

<h1><?= $post->titre; ?></h1>

<p><?= $post->contenu; ?></p>