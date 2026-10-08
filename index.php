<?php
$notes_file = "notes.txt";
$notes = [];

if (file_exists($notes_file)) {
  $notes = file($notes_file, FILE_IGNORE_NEW_LINES);
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <title>دفترچه یادداشت ساده</title>
  <style>
    body { font-family: sans-serif; background: #f7f7f7; padding: 20px; }
    .note { background: #fff; margin: 10px 0; padding: 10px; border-radius: 6px; }
    a { color: #007bff; text-decoration: none; }
    a:hover { text-decoration: underline; }
  </style>
</head>
<body>
  <h2>📔 دفترچه یادداشت من (بدون دیتابیس)</h2>
  <a href="add.php">➕ افزودن یادداشت جدید</a>
  <hr>

  <?php if(empty($notes)): ?>
    <p>هیچ یادداشتی موجود نیست.</p>
  <?php else: ?>
    <?php foreach($notes as $key => $note): ?>
      <div class="note">
        <?= htmlspecialchars($note) ?>
        <br>
        <a href="delete.php?id=<;?= $key ?>" onclick="return confirm('پاک شود؟')">🗑 حذف</a>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</body>
</html>