<?php 
require './config.php';
if(!empty($_SESSION["id"])){
    header("Location: dashboard.php");
}
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM utenti WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: dashboard.php");
        } else{
            echo "<script> alert('Wrong Password'); </script>";
        }

    } else{
        echo "<script> alert('User not registered'); </script>";
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
        <h2>Hai gia un account?</h2>
        <div class="form-container">
            <form action="" method="post">

                <label for="email">Inserisci l'e-mail</label>
                <input type="email" id="email" name="email" placeholder="name@example.com" required value="">

                <label for="password">Inserisci la password</label>
                <div class="container-pass">
                <input type="password" id="password" name="password" placeholder="scrivila qui" required value="">
                <i onclick="showPassword()" class="fa-solid fa-eye" id="togglePassword"></i>
              </div>

                <button type="submit" name="submit">ACCEDI</button>
            </form>

            <p>Non hai ancora un profilo? <a href="register.php">Registrati</a></p>
            
            
            

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