<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tambah Catatan</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Tambah Catatan Baru</h2>

  <form method="POST" action="">
    <label>Judul:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Isi Catatan:</label><br>
    <textarea name="content" rows="5" cols="50" required></textarea><br><br>

    <input type="submit" name="save" value="Simpan">
  </form>

  <br>
  <a href="index.php" class="btn">⬅ Kembali</a>

  <?php
  if (isset($_POST['save'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Siapkan query agar aman dari SQL injection
    $stmt = $conn->prepare("INSERT INTO entries (judul, isi, tanggal) VALUES (?, ?, CURDATE())");
    $stmt->bind_param("ss", $title, $content);

    if ($stmt->execute()) {
      echo "<p style='color:green;'>✅ Catatan berhasil disimpan!</p>";
    } else {
      echo "<p style='color:red;'>❌ Gagal menyimpan catatan: " . $stmt->error . "</p>";
    }

    $stmt->close();
  }

  $conn->close();
  ?>
</body>
</html>
