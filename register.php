<?php 
require'./config.php';

if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
if(isset($_POST['submit'])){
  $nome = addslashes($_POST["nome"]);
  $cognome = addslashes($_POST["cognome"]);
  $email = addslashes($_POST["email"]);
  $password = addslashes($_POST["password"]);

  $duplicate = mysqli_query($conn, "SELECT * FROM utenti WHERE nome = '$nome' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
  echo "<script> alert('Nome o Cognome o Email esiste'); </script>";
  } else {
    $query = "INSERT INTO utenti (nome, cognome, email, password) VALUES('$nome', '$cognome','$email','$password' )";
    mysqli_query($conn, $query); 
    $new_user = mysqli_query($conn, "SELECT * FROM utenti WHERE email = '$email'");
    $userResult = mysqli_fetch_array($new_user);
    $_SESSION["login"] = true;
    $_SESSION["id"] = $userResult['id'];
    header("Location: index.php");
  }
}

include_once './partials/head.php'
?>


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

            <p class="one-option">Hai gia un account? <a href="login.php">Accedi</a></p>
            
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