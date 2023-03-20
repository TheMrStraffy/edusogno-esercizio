<?php 

require './config.php';
require './mailsender.php';

if(isset($_POST['send'])){
  $msg = 'Questo e un messaggio';
  $res = send_mail($_POST['email'], 'Link Reset Password', $msg, null);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<form action="" method="post">

<p>Hai Dimenticato la tua password? Inserisci l'email</p>
<label for="email">Inserisci l'e-mail</label>
<input type="email" id="email" name="email" placeholder="name@example.com" required value="">
<p>Riceverai un link per il reset</p>
<!-- <a href="sendreset.php">CLICCA QUI</a> -->
<button type="submit" name="send">Invia Link</button>
</form>
</div>

</body>
</html>