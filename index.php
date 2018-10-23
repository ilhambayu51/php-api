<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
</head>

<body>
    <header>
        <h3>Daftar Siswa</h3>
    </header>

    <nav>
        <a href="form_input.php">[+] Tambah Siswa Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Userame</th>
            <th>Password</th>
            <th>Level</th>
            <th>Fullname</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM kk4";
        $query = mysqli_query($db, $sql) or die(mysqli_error($db));

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['username']."</td>";
            echo "<td>".$siswa['password']."</td>";
            echo "<td>".$siswa['level']."</td>";
            echo "<td>".$siswa['fullname']."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>