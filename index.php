<?php include __DIR__ . '/database.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <!-- STYLE -->
    <link rel="stylesheet" href="dist/app.css">
    <title>php-ajax-dischi</title>
  </head>
  <body>

    <header>
      <div class="container">

          <img src="logo.png" alt="logo">

          <nav></nav>

      </div>
    </header>

    <div class="cds-container container">

      <?php foreach ($database as $i => $album) { ?>

        <div class="cd">

            <img src=<?php echo $album['poster'] ?> alt="poster">
            <h3><?php echo $album['title'] ?></h3>
            <span class="author"><?php echo $album['author'] ?></span>
            <span class="year"><?php echo $album['year'] ?></span>

        </div>

      <?php } ?>

    </div>

  </body>
</html>
