<?php 
$list = scandir('./database');
$i = 2;
while($i < count($list)) {
  echo "<li><a href=\"database.php?id=$list[$i]\">$list[$i]</a></li>";
    $i = $i + 1;
}
?>

<?php
if(isset($_GET['id'])) {
  echo $_GET['id'];
} else{
  echo "Welcome";
}
?>

<?php
if(isset($_GET['id'])) {
  echo file_get_contents("./database/".$_GET['id']);
} else {
  echo "Hello";
}
?>

