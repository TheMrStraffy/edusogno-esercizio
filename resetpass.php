<?php 
require './config.php';
$email = $_POST["email"];

if(!empty($email)){
  $email = $_POST["email"];
  $password = mysqli_query($conn, "SELECT password FROM utenti WHERE email = '$email'");
  $row = mysqli_fetch_assoc($password);
  $msg = "Hello , this is your forgotten password from our website! ---->" . $row['password'];
  mail($email,'Forgotten Password', $msg);
  var_dump($row['password']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css' integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==' crossorigin='anonymous'/>
    <title>Edusogno</title>
</head>

<body>
<header>
<div class="logo">
    Edu<br>
    sogno
</div>
</header>

<main>

    <div class="container">
        <h2>Hai gia un account?</h2>
        <div class="form-container">
          <p>Scrivi la tua email e manderemo il link con la password associata al tuo account</p>
            <form action="" method="post">

                <label for="email">Inserisci l'e-mail</label>
                <input type="email" id="email" name="email" placeholder="name@example.com" required value="">


                <button type="submit" name="submit">Invia Il Link</button>
            </form>

        </div>
            

    </div>
</main>
</body>

<style>
    #togglePassword{
        margin-left: -30px;
        cursor: pointer;
    }
    .container-pass input{
      width: 97%;
    }
</style>




</html>