<?php 
require './config.php';
$userId= $_SESSION['id'];
$getUserData = mysqli_query($conn, "SELECT email,password FROM utenti WHERE id='$userId'");
$result = mysqli_fetch_array($getUserData);
var_dump($result['email']);

if(isset($_POST['password-reset'])){
$new_password = $_POST['new-password'];
$email = $result['email'];
mysqli_query($conn, "UPDATE utenti set password='$new_password' WHERE email='$email'");
echo "<p>Password Changed!</p>";
} else {
echo "<p> Something went wrong </p>";
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

<form action="" method="post">

<p>Hai Dimenticato la tua password? Inserisci l'email</p>
<label for="email">IChange password for this Email</label>
<input type="email" id="email" name="email"   disabled value="<?php echo $result['email'] ?>">

<label for="password">Change your pass</label>
<input type="password" name="new-password" value="">


<button type="submit" name="password-reset">Invia Link</button>
</form>

    
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