<?php 
require './config.php';
$msgError = '';
  if(isset($_GET['email'])){
    $userEmail = $_GET['email'];
    $getUserData = mysqli_query($conn, "SELECT email,password FROM utenti WHERE email='$userEmail'");
    $result = mysqli_fetch_array($getUserData);
    if(isset($_POST['password-reset']) && isset($_POST['new-password'])){
        $new_password = $_POST['new-password'];
        mysqli_query($conn, "UPDATE utenti set password='$new_password' WHERE email='$userEmail'");
        header("Location: login.php?message=success");
    } 
  } else {
      $msgError = "<p> Something went wrong </p>";

  }

include_once './partials/head.php';
include_once './partials/header.php';
?>



<main>
<?php include './partials/shapes.php' ?> 
<div class="container">

  <div class="form-container">
    <?php if(isset($_GET['email'])) : ?>
    <form action="" method="post">
    
    <p>Hai Dimenticato la tua password? Inserisci l'email</p>
    <label for="email">Change password for this Email</label>
    <input type="email" id="email" name="email"   disabled value="<?php echo $result['email'] ?>">
    
    <label for="password">Change your pass</label>
    <input type="password" name="new-password" value="">
    
    
    <button type="submit" name="password-reset">Invia Link</button>
    </form>
  </div>
  <?php else : ?>
    <h1>No Email found</h1>
  <?php endif ?>
  <?php if(isset($msgError)) : ?>
    <?php echo $msgError ?>
    <?php endif ?> 
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