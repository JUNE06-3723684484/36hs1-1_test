<<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>database</title>
    <link rel="stylesheet" href="./datastyle.css">
  </head>
  <body>
    <h1><a href="database.php">DATABASE</a></h1>
    <div id="grid">
      <ul><?php
      $list = scandir('./database');
      $i = 2;
      while($i < count($list)) {
        echo "<li><a href=\"database.php?id=$list[$i]\">$list[$i]</a></li>";
          $i = $i + 1;
        }
        ?></ul>
      <div id="article">
        <h2>
        <?php
        if(isset($_GET['id'])) {
          echo $_GET['id'];
        } else{
          echo "Welcome, administor.";
        }
        ?>
      </h2>
        
        <h4>
        <?php
        if(isset($_GET['id'])) {
          echo file_get_contents("./database/".$_GET['id']);
        } else {
          echo "This is DATABASE.";
        }
        ?>
      </h4>
      </div>
    </div>
  </body>
</html>
