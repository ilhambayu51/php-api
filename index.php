<h2>Daftar Peserta</h2>
<table border="1">
<tr>
	<th>id</th>
	<th>Username</th>
	<th>Password</th>
	<th>Level</th>
	<th>Fullname</th>
</tr>
<?php
include 'koneksi.php';
$data = mysqli_query($link, "SELECT * FROM kk4 order by id");
if ($data ===FALSE) {
	die (mysql_error());
}
$no=1;
while ($hasil=mysqli_fetch_array($data)){

	echo "<tr>
	<td>$hasil[id]</td>
	<td>$hasil[username]</td>
	<td>$hasil[password]</td>
	<td>$hasil[level]</td>
	<td>$hasil[fullname]</td>
	</tr>";
	$no++;
	}
	?>
</table>