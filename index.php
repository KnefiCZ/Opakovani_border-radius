<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>:)</title>
  </head>
  <body>
    <?php
      for ($i= 0; $i < 10; $i++) {
          $r = rand(1,5) * 100;
          $S = pi()*$r*$r;
          $o = pi()*$r;
          $red = rand(0,255);
          $green = rand(0,255);
          $blue = rand(0,255);
         ?>
        <div style="
        width: <?php echo $r; ?>px;
        height: <?php echo $r; ?>px;
        border-radius: <?php echo $r/2; ?>px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background-color: rgb(<?php echo $red . ',' . $green . ',' . $blue;?>);
        color: rgb(<?php echo (255-$red) . ',' . (255-$green) . ',' . (255-$blue);?>);">
            <p style="font-family: arial;"> <?php echo "Obsah: " .   round($S, 2) . " <br> Obvod:  " . round($o, 2)  . " <br> Průměr:  " . $r; ?> </p>
        </div>
         <?php
      }
     ?>
  </body>
</html>
