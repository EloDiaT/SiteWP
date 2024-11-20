<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/static/css/style.css?v=18">
  <title><?= the_field('title'); ?></title>
  <meta name="description" content="<?php the_field('description'); ?>">
  <? if(get_field('keywords')) {?>
    <meta name="keywords" content="<?php the_field('keywords'); ?>">
    <?
  }?>

  <link rel="apple-touch-icon" sizes="180x180" href="<?= get_stylesheet_directory_uri(); ?>/favicon/apple-touch-icon.png?v=1">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_stylesheet_directory_uri(); ?>/favicon/favicon-32x32.png?v=1">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_stylesheet_directory_uri(); ?>/favicon/favicon-16x16.png?v=1">
  <link rel="manifest" href="<?= get_stylesheet_directory_uri(); ?>/favicon/site.webmanifest?v=1">
  <link rel="mask-icon" href="<?= get_stylesheet_directory_uri(); ?>/favicon/safari-pinned-tab.svg?v=1" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#2d89ef">
  <meta name="theme-color" content="#ffffff">

  <?php wp_head(); ?>

  <script src="<?= get_stylesheet_directory_uri() . '/static/js/script.min.js?v=18'; ?>"></script>



</head>
<body>

  <main class="page_404">
    <div class="logo">
      <img src="<?= get_field('contact_info', 'options')['main_logo']['url']?>" alt="<?= get_field('contact_info', 'options')['main_logo']['a']?>">
    </div>
    <h1>404</h1>
    <p class="text_b">ошибка</p>
    <p class="text">страница не найдена</p>
    <a href="/" class="btn btn--blue ff_exo text_size_m"><span>Вернуться на главную</span></a>
  </main>

</body>
</html>
