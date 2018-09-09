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
    <?php foreach($this->articles as $article) : ?>
      <article class="article">
        <h2>
          <a href="/?ctrl=Article&id=<?=$article->id?>">
            <?=$article->title?>
          </a>
        </h2>
        <p><?=$article->content?></p>
      </article>
      <hr>
    <?php endforeach; ?>
  <?php endif; ?>
</body>
</html>
