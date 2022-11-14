<html>
 <head>
    <title>PHP Test</title>
     <style>
        .ball {
          width: 100px;
          height: 100px;
          border-radius: 50px;
          background: radial-gradient(circle at  50 % 120%,  #5555FF, #0a0a0a 80%, #AAAAFF 100%);
        }
        .ball-content {
          width: 50px;
          height: 50px;
          border-radius: 25px;
          background: radial-gradient(circle at  50 % 120%,  #FFFFFF, #EFEFEF 60%, #AEAEAE 100%);
          text-align: center;
          position: relative;
          top: 10px;
          left: 25px;
          font-size: 40px;
        }
      </style>
    </head>
    <body>
      <h1>Numéros gagnants de  notre grand loto :</h1>
      <?php
        $winningNumbers = [5, 14, 6, 9, 7];
        foreach ($winningNumbers as $winningNumber) {
          echo '<div class="ball"><div class="ball-content">'.$winningNumber.'</div></div>';
        }
      ?>
    </body>
</html>