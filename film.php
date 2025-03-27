<?php
include "db_connection.php";
$result = mysqli_query($conn, "SELECT * FROM film");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
</head>
<body>
    <h2>Daftar Film</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $row['id_film']; ?></td>
            <td><?= $row['judul']; ?></td>
            <td><?= $row['sutradara']; ?></td>
            <td><?= $row['tahun_rilis']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>