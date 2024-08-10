<!-- OPIS -->
<!-- Registracija i podaci su upisuju u bazu sa svim proverama -->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="center">
        <form action="session.php" method="POST">
            <input type="text" name="name" placeholder="Name:"><br>
            <input type="text" name="nachname" placeholder="Nachname:"><br>
            <input type="email" name="email" placeholder="Email:"><br>
            <input type="password" name="kennwort" placeholder="Kennwort:"><br>
            <input type="password" name="kennwort2" placeholder="Kennwort wiederholen:"><br>
            <input type="submit" value="registration">
        </form>
    </div>


</body>
</html>