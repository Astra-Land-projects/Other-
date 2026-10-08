<?php
$notes_file = "notes.txt";

if (isset($_GET['id'])) {
  $id = (int) $_GET['id'];
  $notes = file($notes_file, FILE_IGNORE_NEW_LINES);
  if (isset($notes[$id])) {
    unset($notes[$id]);
    file_put_contents($notes_file, implode(PHP_EOL, $notes) . PHP_EOL);
  }
}
header("Location: index.php");
exit();
?>