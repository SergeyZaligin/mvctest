<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php if($this->articles) : ?>
    <?php foreach($this->data['articles'] as $article) : ?>
      <article class="article">
        <h2><?=$article->title?></h2>
        <p><?=$article->content?></p>
      </article>
      <hr>
    <?php endforeach; ?>
  <?php endif; ?>
</body>
</html>
