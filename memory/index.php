<?php require_once('php/includes/default.inc.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <h1>memory spel</h1>
    <?php

      if(isset($_GET['end'])) {
        $game = new Game(true);
      } else {
        $game = new Game(false);
      }

      if(isset($_GET['id'])){
        $game->turnCard($_GET['id']);
      } else {
        $game->check();
      }
      echo $game->getHtml();
      $game->save();

      if ($game->getFinished()) {
        echo "<h1 class=\"gewonnen\"> Gewonnen</h1>.";
      }
?>
     <br>
     <a  href="?end" ><button class="restart" name="button">Restart</button></a>
  </body>
</html>
