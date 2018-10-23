<!DOCTYPE html>
<html>
<head>
    <title>Input Data Siswa</title>
</head>

<body>
    <header>
        <h3>Input Baru</h3>
    </header>

    <form action="proses-daftar.php" method="POST">

        <fieldset>

        <p>
            <label for="username">Username: </label>
            <input type="text" name="username" placeholder="Username" />
        </p>
        <p>
            <label for="password">Password: </label>
            <input type="text" name="password" placeholder="Password">
        </p>
        <p>
            <label for="Level">Level: </label>
            <select name="Level">
                <option>Admin</option>
                <option>User</option>
                <option>Guest</option>
            </select>
        </p>
        <p>
            <label for="fullname">Fullname: </label>
            <input type="text" name="fullname" placeholder="Fullname" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>
