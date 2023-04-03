<?php
use App\App;
use App\Table\Article;
use App\Table\Category;

    $category = Category::find($_GET['id']);

    if($category === false){
        App::notFound();
    }

    $articles = Article::lastByCategory($_GET['id']);
    $categories = Category::getAll();
?>

<h1><?= $category->titre ?></h1>

<div class="row">
  <div class="col-sm-8">
    <?php foreach ($articles as $post): ?>

      <h2><a href="<?= $post->url ?>"><?= $post->titre; ?></a></h2>

      <p><em>
          <?= $post->category ?>
        </em></p>

      <p>
        <?= $post->extrait; ?>
      </p>

    <?php endforeach; ?>

  </div>

  <div class="col-sm-4">
    <ul>
    <?php foreach(\App\Table\Category::getAll() as $category) : ?>
      <li><a href="<?= $category->url; ?>"><?= $category->titre ?></a></li>
      <?php endforeach ?>
    </ul>
  </div>
</div>