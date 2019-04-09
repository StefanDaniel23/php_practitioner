<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>tutorial 12</title>
</head>
<body>

  <ul>
    <?php foreach ($tasks as $task) : ?>
      <li><?= $task->description; ?></li>
    <?php endforeach; ?>
  </ul>

      <ul>
        <?php foreach ($tasks as $task) : ?>
          <li>
            <?php if ($task->completed) : ?>
              <strike>
            <?php endif;?>

            <?= $task->description; ?>

            <?php if($task->completed) : ?>
              </strike>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>


      <ul>
        <?php foreach ($tasks as $task) : ?>
          <li>
            <?php if ($task->completed) : ?>
              <strike><?= $task->description; ?></strike>
            <?php else : ?>

            <?= $task->description; ?>
            
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>


</body>
</html>
