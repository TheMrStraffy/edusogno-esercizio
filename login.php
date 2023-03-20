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
include_once './partials/head.php';
include_once './partials/header.php';
?>

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

            <p class="one-option">Non hai ancora un profilo? <a href="register.php">Registrati</a></p>
            
            
            

    </div>
</main>
</body>

<style scoped>
    
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