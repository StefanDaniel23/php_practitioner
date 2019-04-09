<!DOCTYPE html>
<html>
  <head>
    <title>Tema pas 6</title>
      <style>
        header {
          background: coral;
          text-align: center;
          font-size: 40px;
        }
      </style>
  </head>
<body>
  <header>
    arrays = matrice
  </header>

  <ul>
    <?php foreach ($animale as $orice) : ?>
      <li><?php  echo $orice; ?> </li>
<?php endforeach; ?>
  </ul>

    <ul>
      <?php
        foreach ($animale as $orice) {
          echo "<li>$orice</li>";
        }
      ?>
    </ul>

    <ul>
      <?php foreach ($defacut as $key => $value): ?>
      <li>
        <strong><?= ucwords($key); ?>:</strong>
        <?= $value; ?>
      </li>
      <?php endforeach; ?>
    </ul>

    <h1>Am folosit booleans (adevarat sau fals)</h1>
      <ul>
          <li>
            <strong>Sarcina: </strong><?= $defacut['denumire']; ?>
          </li>

          <li>
            <strong>Numele persoanei: </strong><?= $defacut['nume']; ?>
          </li>

          <li>
            <strong>Data de efectuare: </strong><?= $defacut['data limita']; ?>
          </li>

          <li>
              <strong>Sarcina inceputa: </strong><?= $defacut['obiectiv inceput'] ? 'DA' : 'NU'; ?>
          </li>

          <li>
              <strong>Sarcina completa: </strong>
                <?php
                    if ($defacut['obiectiv atins']) {
                    echo 'DA';
                  } else {
                    echo 'NU';
                  }
                ?>
          </li>
      </ul>

</body>
</html>
