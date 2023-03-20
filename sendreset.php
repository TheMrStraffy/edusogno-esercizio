<?php 

require './config.php';
require './mailsender.php';

if(isset($_POST['password-reset-token']) && $_POST['email']){
  $email = $_POST['email'];
  $result = mysqli_query($conn, "SELECT * FROM utenti WHERE email='$email'");
  $row = mysqli_fetch_array($result);

  if($row){
    
    $msg = "<a href=http://localhost/edusogno-esercizio/resetpass.php?email=". $email .">Click To Reset Password</a>";
    $res = send_mail($email, 'Link Reset Password', $msg, null);
  } else{
    echo "Invalid Email Address. Go back";
  }
}


include_once './partials/head.php';
include_once './partials/header.php';
?>

<main>
  <div class="container">
  <div class="form-container">

    <form action="" method="post">
    
    <p>Hai Dimenticato la tua password? Inserisci l'email</p>
    <label for="email">Inserisci l'e-mail</label>
    <input type="email" id="email" name="email" placeholder="name@example.com" required value="">
    <p>Riceverai un link per il reset</p>
    <button type="submit" name="password-reset-token">Invia Link</button>
    </form>
  <div class="back">

    <a href="login.php">Torna a Log In</a>
  </div>
  </div>
  </div>
 </main>


</body>

<style scoped>
  p{
    margin-bottom: 20px;
  }
  .back{
  margin: 20px 0;
  }
</style>
</html>