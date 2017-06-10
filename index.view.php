<!DOCTYPE html>
<html>
<head>
  <title> Document </title>
  <style>
     header{
       background: #e3e3e3;
       padding: 2em;
       text-align: center;
     }
  </style>
</head>
<body>


<header>
<h1><?= $task->title . " " . $task->description?> </h1>
</br>

  <ul>
    <?php
       foreach ($task->arrayOfNames as $itemName) {
          echo "<li> $itemName  </li>";
       }
      ?>
</ul>
<?php foreach ($task->arrayOfPersons as $key => $value) :?>

      <li><strong><?=$key; ?>:</strong> <?=$value; ?>  </li>
  <?php endforeach?>
<ul>

</ul>

</header>
</body>

</html>
