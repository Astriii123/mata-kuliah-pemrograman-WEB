<?php
include 'db.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $result = $conn->query("SELECT * FROM entries WHERE id=$id");

  if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
  } else {
    echo "<p>⚠️ Data dengan ID $id tidak ditemukan.</p>";
    exit;
  }
} else {
  echo "<p>⚠️ ID tidak diberikan di URL.</p>";
  exit;
}

if (isset($_POST['update'])) {
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];

  $sql = "UPDATE entries SET judul='$judul', isi='$isi' WHERE id=$id";
  if ($conn->query($sql)) {
    header("Location: index.php");
    exit();
  } else {
    echo "<p>❌ Gagal memperbarui catatan: " . $conn->error . "</p>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Edit Catatan</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Edit Catatan</h2>

  <form method="POST" action="">
    <label>Judul:</label><br>
    <input type="text" name="judul" value="<?php echo htmlspecialchars($row['judul']); ?>" required><br><br>

    <label>Isi Catatan:</label><br>
    <textarea name="isi" rows="5" cols="50" required><?php echo htmlspecialchars($row['isi']); ?></textarea><br><br>

    <input type="submit" name="update" value="Perbarui">
  </form>

  <br>
  <a href="index.php" class="btn">⬅ Kembali</a>
</body>
</html>
