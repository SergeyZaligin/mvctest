<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php if($this->article) : ?>
    <article class="article">
      <h1>
        <?=$this->article->title?>
      </h1>
      <p><?=$this->article->content?></p>
    </article>
  <?php endif; ?>
</body>
</html>
