<?php 
require'./config.php';

if(!empty($_SESSION["id"])){
    header("Location: dashboard.php");
}
if(isset($_POST['submit'])){
  $nome = $_POST["nome"];
  $cognome = $_POST["cognome"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $duplicate = mysqli_query($conn, "SELECT * FROM utenti WHERE nome = '$nome' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
  echo "<script> alert('Nome o Cognome o Email esiste'); </script>";
  } else {
    $query = "INSERT INTO utenti (nome, cognome, email, password) VALUES('$nome', '$cognome','$email','$password' )";
    mysqli_query($conn, $query); 
    header("Location: dashboard.php");
  }
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
        <h2>Crea il tuo account</h2>
        <div class="form-container">
            <form action="" method="post">

              <label for="nome">Inserisci il nome</label>
              <input type="text" id="nome" name="nome" placeholder="Mario" required value="">

              <label for="cognome">Inserisci il cognome</label>
              <input type="text" id="cognome" name="cognome" placeholder="Rossi" required value="">

              <label for="email">Inserisci l'e-mail</label>
              <input type="email" id="email" name="email" placeholder="name@example.com" required value="">

              <label for="password">Inserisci la password</label>

              <div class="container-pass">
                <input type="password" id="password" name="password" placeholder="scrivila qui" required value="">
                <i onclick="showPassword()" class="fa-solid fa-eye" id="togglePassword"></i>
              </div>

                <button type="submit" name="submit">REGISTRATI</button>
            </form>

            <p>Hai gia un account? Accedi <a href="login.php">Accedi</a></p>
            
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

<script>
    const psw = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');
    togglePassword.addEventListener('click', function(e){
        let type = psw.getAttribute('type') === 'password' ? 'text' : 'password';
        psw.setAttribute('type', type);
        if (psw.getAttribute('type') === 'password'){

            this.classList.toggle('fa-eye');
            this.classList.remove('fa-eye-slash');
        } else{
        
            this.classList.remove('fa-eye');
            this.classList.toggle('fa-eye-slash');
        }
    });

</script>


</html>