<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoenreus";


// Connectie maken met de PDO.
$connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


try {
    // INSERT query uitvoeren.
    $stmt = $connection->prepare("INSERT INTO retour (naam_achternaam, telefoonnummer, ordernummer, reden, datum)
    VALUES (:naam_achternaam, :telefoonnummer, :ordernummer, :reden, :datum) ");
    $stmt->bindParam(':naam_achternaam', $naam);
    $stmt->bindParam(':telefoonnummer', $telefoonnummer);
    $stmt->bindParam(':ordernummer', $ordernummer);
    $stmt->bindParam(':reden', $reden);
    $stmt->bindParam(':datum', $datumtijd);
    
    
    // INSERT rij.
    if (isset($_REQUEST['naam']) ) {
        $naam = $_POST['naam'];
        $telefoonnummer = $_POST['telefoonnummer'];
        $ordernummer = $_POST['ordernummer'];
        $reden = $_POST['reden'];
        $datumtijd = Date('d-m-Y');
        $stmt->execute();

        header('Location: retour.php');

    }
}


catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}


$sql_select = "SELECT * FROM retour";
$data = $connection->query($sql_select);


$connection = null;




// Delete functies.


if (isset($_GET['id']) ) {
    $id = $_GET['id'];
    echo "$id";

    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
        // Set the PDO error mode to exception.
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // SQL to delete a record.
        $sql = "DELETE FROM retour WHERE id = '$id'";

        // Use exec() because no results are returned.
        $connection->exec($sql);
        echo "Record deleted successfully";
        
        // Terugsturen naar de hoofdpagina.
        header('Location: retour_actionpage.php');
    }

    catch(PDOException $e) {
        // echo $sql . "<br>" . $e->getMessage();
    }
}

$connection = null;

?>