<?php
// provera ako podaci nisu uneti u polja za registraciju, da li se lozinke podudaraju?
// konekcija sa bazom, provera da li postoji isto ime u bazi, kriptovanje lozinke,
// upis podataka u bazu, 
$name = $_POST["name"];
$nachname = $_POST["nachname"];
$email = $_POST["email"];
$kennwort = $_POST["kennwort"];
$kennwort2 = $_POST["kennwort2"];

if("$name" == "" || "$nachname" == "" || "$email" == "" || "$kennwort" == "" || "$kennwort2" == "") {
    die("Bitte geben Sie alle notwendigen Informationen ein");
} 

if("$kennwort" !== "$kennwort2") {
    die("Die Kennwörter sind nicht gleich");
    echo "<br>";
}
    $base = mysqli_connect("localhost","root","","vezba_1");

    if(mysqli_connect_errno()) {
        echo "Faild to connect to mysql". mysqli_connect_error();
        exit();
    }

    $doubleName = mysqli_query( $base, "SELECT * FROM korisnici WHERE ime = '$name' ");

    $matches = mysqli_num_rows($doubleName);

    if($matches > 0) {
        die("Der gleiche Name existiert in der Datenbank");
    }

    $kennwort = password_hash($kennwort, PASSWORD_BCRYPT);

    mysqli_query($base, "INSERT INTO korisnici(ime, prezime, email, lozinka) 
    VALUES('$name', '$nachname', '$email', '$kennwort') ");
    echo "Registrierung erfolgreich";
     
    


 









?>