<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="img/schoenreus logo.png" type="image/x-icon">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Contact</title>
</head>
<body>
<?php include 'navbar.php'; ?>

<form method="post" action="">
<div class="contact">
  <div class="contact-box">
    <div class="left"></div>
      <div class="right">
        <h2 id="contacth2">Contact</h2>
          <input type="text" class="field" name="naam" id="naam" placeholder="Naam en achternaam">
          <input type="email" class="field" name="email" id="email" placeholder="Email">
          <input type="number" class="field" name="telefoonnummer" id="telefoonnummer" placeholder="Telefoonnummer">
          <input type="text" class="field" name="onderwerp" id="onderwerp" placeholder="Onderwerp">
          <textarea class="field" name="bericht" id="bericht" placeholder="Uw bericht"></textarea>
          <input type="submit" class="contactbtn" name="knop" 
          id="knop" onclick="alert('Je gegevens zijn toegevoegd.')"></input>
    </div>
  </div>
</div>
</form>

<?php include 'contact_actionpage.php'?>

<?php include 'footer.php'; ?>
</body>
</html>