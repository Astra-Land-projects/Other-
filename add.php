<?php
$notes_file = "notes.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $note = trim($_POST['note']);
  if (!empty($note)) {
    file_put_contents($notes_file, $note . PHP_EOL, FILE_APPEND);
  }
  header("Location: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <title>افزودن یادداشت</title>
</head>
<body>
  <h2>افزودن یادداشت جدید</h2>
  <form method="post">
    <textarea name="note" rows="5" cols="40" placeholder="متن یادداشت را بنویس..." required></textarea><br><br>
    <button type="submit">ذخیره</button>
  </form>
  <br>
  <a href="index.php">⬅ بازگشت</a>
</body>
</html>