<?php 

require './config.php';
require './mailsender.php';

if(isset($_POST['password-reset-token']) && $_POST['email']){
  $email = $_POST['email'];
  $result = mysqli_query($conn, "SELECT * FROM utenti WHERE email='$email'");
  $row = mysqli_fetch_array($result);

  if($row){
    
    $msg = "<a href='resetpass.php'>Click To Reset Password</a>";
    $res = send_mail($email, 'Link Reset Password', $msg, null);
  } else{
    echo "Invalid Email Address. Go back";
  }
}


include_once './partials/head.php'
?>

  
<form action="" method="post">

<p>Hai Dimenticato la tua password? Inserisci l'email</p>
<label for="email">Inserisci l'e-mail</label>
<input type="email" id="email" name="email" placeholder="name@example.com" required value="">
<p>Riceverai un link per il reset</p>
<!-- <a href="sendreset.php">CLICCA QUI</a> -->
<button type="submit" name="password-reset-token">Invia Link</button>
</form>


</body>
</html>