<?php 
require './config.php';
var_dump($_SESSION);
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM utenti WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

} else {
  // header("Location: login.php");
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

    Profile Dashboard


    <h1>Welcome <?php echo $row["nome"]; ?> </h1>
    <a href="logout.php">Logout</a>
</main>
</body>



</html>