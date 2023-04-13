<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <link rel="icon" href="img/schoenreus logo.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over ons</title>
</head>
<body>
<?php include 'navbar.php'; ?>
    <main class="OverOnsMain">
        <article class="OverOnsArticle">
            <div class="retour_info">
            <h2 class="OverOnsH">SchoenReus Retourservice</h2>
                <p class="retour_p">De bol.com retourservice biedt je een geautomatiseerd retourproces met
                lagere retourkosten per pakket.</p> </br> <br>
            <h2>SchoenReus vergoedt deels de retourkosten</h2>
            <div>
                <p class="retour_p">Klanten kunnen de artikelen die ze kopen via bol.com altijd gratis 
                retourneren. Echter zitten hier voor jou wel kosten aan verbonden en daarin willen we je graag tegemoet komen. Daarom bieden we een retourlabelservice aan, waarmee we de retourkosten deels vergoeden. Je schaft met deze service namelijk retourlabels aan voor brievenbuspakjes en pakketten tegen een voordelig tarief.
                Let op! Gebruik maken van de bol.com retourservice is alleen mogelijk als de artikelen 
                voldoen aan de afmetingen van de verzenddienst. Bij artikelen die te groot of te zwaar 
                zijn, kan er geen bol.com retourlabel aangemaakt worden. Je dient dan zelf een label 
                aan de klant te geven.</p>
                </div> </br>
            </div>
        </article>
        <div class="retour_box">
            <form method="post" action="">
                <div class="right, retourneren">
                <h2 id="retourh2">Retourneren</h2>
                    <input type="text" class="field" name="naam" id="naam" placeholder="Naam en achternaam">
                    <input type="email" class="field" name="email" id="email" placeholder="Email">
                    <input type="number" class="field" name="telefoonnummer" id="telefoonnummer" placeholder="Telefoonnummer">
                    <input type="number" class="field" name="ordernummer" id="ordernummer" placeholder="Order Nummer">
                    <textarea class="field" name="reden" id="reden" placeholder="Reden voor retourneren"></textarea>
                    <input type="submit" class="contactbtn" name="knop"
                    id="knop" onclick="alert('Bedankt voor je feedback.')"></input>
                </div>
            </form>
        </div>
    </main>

<?php include 'retour_actionpage.php'?>

<?php include 'footer.php'; ?>
</body>
</html>