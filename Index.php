<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_bouake";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['valider'])){ 
  $Nom=$_POST['Nom'];
  $Prenoms=$_POST['Prenoms'];
  $Fonction=$_POST['Fonction'];
  $Sexe=$_POST['Sexe'];

$sql = "INSERT INTO personne (Nom, Prenoms, Fonction, Sexe)
VALUES ('$Nom', '$Prenoms', '$Fonction', '$Sexe')";

if (mysqli_query($conn, $sql)) {
  echo "Enregistrement réussi";
  header('location:Bienvenue.php'); 
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Style.css">
<title>ONG Initiative Village Vert et Solidarite-Bureau local de Bouake</title>
</head>
<body>
<center>
<h1>Informations generales</h1>
<form action="index.php" method="POST">
    <label for="fname">Nom:</label><br>
    <input type="text" id="fname" name="Nom" placeholder="" ><br><br>

    <label for="lname">Prenoms:</label><br>
    <input type="text" id="lname" name="Prenoms" placeholder=""><br><br>

    <label for="fonct">Fonction:</label><br>
    <input type="text" id="fonct" name="Fonction" placeholder=""><br><br>

    <input type="radio" id="male" name="Sexe" value="male">
    <label for="male">Masculin</label><br>

    <input type="radio" id="female" name="Sexe" value="female">
    <label for="female">Feminin,</label><br>

    <input type="radio" id="other" name="Sexe" value="other">
    <label for="other">Autre</label><br><br>

    <input type="Submit" value="Valider">
  </form>
  </center>
</body>
</html>