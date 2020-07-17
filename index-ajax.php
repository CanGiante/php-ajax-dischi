<?php include __DIR__ . '/database.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <!-- STYLE -->
    <link rel="stylesheet" href="dist/app.css">
    <title>php-ajax-dischi-2</title>
  </head>
  <body>

    <header>
      <div class="container">

          <img src="logo.png" alt="logo">

          <nav></nav>

      </div>
    </header>


    <div class="cds-container container"></div>


    <script id="entry-template" type="text/x-handlebars-template">
      <div class="cd">
        <img src={{{poster}}} alt="poster">
        <h3>{{{title}}}</h3>
        <span class="author">{{{author}}}</span>
        <span class="year">{{{year}}}</span>
      </div>
    </script>

    <script type="text/javascript" src"dist/app.js"></script>
  </body>
</html>
