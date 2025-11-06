<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Catatan Harian</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Catatan Harian</h2>
  <a href="tambah.php" class="btn">+ Tambah Catatan</a>
  <br><br>

  <table>
    <thead>
      <tr>
        <th>Judul</th>
        <th>Isi</th>
        <th>Tanggal</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php
    
    $result = $conn->query("SELECT * FROM entries ORDER BY tanggal DESC");

    if ($result && $result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td data-label='Judul'>" . htmlspecialchars($row['judul']) . "</td>";
        echo "<td data-label='Isi'>" . nl2br(htmlspecialchars($row['isi'])) . "</td>";
        echo "<td data-label='Tanggal'>" . $row['tanggal'] . "</td>";
        echo "<td data-label='Aksi'>
                <a href='edit.php?id=" . $row['id'] . "' class='action-link edit'>Edit</a>
                <a href='delete.php?id=" . $row['id'] . "' class='action-link delete' onclick='return confirm(\"Yakin ingin menghapus catatan ini?\")'>Hapus</a>
              </td>";
        echo "</tr>";
      }
    } else {
      echo "<tr class='empty-row'><td colspan='4'>Belum ada catatan.</td></tr>";
    }
    ?>
    </tbody>
  </table>
</body>
</html>
