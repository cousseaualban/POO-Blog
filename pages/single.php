<?php
use App\App;
use App\Table\Category;
use App\Table\Article;

$post = Article::find($_GET['id']);

if ($post === false) {
    App::notFound();
}

App::setTitle($post->titre);

$category = Category::find($post->category_id);
?>

<h1>
    <?= $post->titre; ?>
</h1>

<p><em>
        <?= $category->titre ?>
    </em></p>

<p>
    <?= $post->contenu; ?>
</p>