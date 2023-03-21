<?php 
require './config.php';

if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM utenti WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
  $userEmail = $row['email'];
  $getEvents = mysqli_query($conn, "SELECT * FROM eventi WHERE attendees LIKE '%{$userEmail}%'");
  $eventsResult = mysqli_fetch_all($getEvents);

  

} else {
  header("Location: login.php");
}

include_once './partials/head.php';
include_once './partials/header.php';
?>




<main>

  <div class="dashboard-container">
    <?php if(!empty($eventsResult)) : ?>
    <h2 class="welcome">Ciao <?php echo $row["nome"]; ?> ecco i tuoi eventi </h2>
    <?php else : ?>
      <h2 class="welcome">Ciao <?php echo $row["nome"]; ?> Non ci sono eventi per ora. </h2>
    <?php endif ?>
    <div class="card-container">
    <?php foreach ($eventsResult as $event): ?>
     
      <div class="card">
        <h3><?php echo $event[2] ?></h3>
        <p><?php echo $event[3] ?> </p>
        
        <button>JOIN</button>
      </div>
     <? endforeach ?>
    </div>

      <a href="logout.php">Logout</a>
  </div>
</main>
</body>

<style scoped>
  .dashboard-container{
    width: 80%;
    padding-top: 40px;
    margin: 0 auto;
  }
  
  .card-container{
    display: flex;
    justify-content: space-between;

  }
.card{
  width: 390px;
  height: 245px;
border: 1px solid rgb(19, 64, 119);
border-radius: 15px;
padding: 15px 15px;
background-color: white;
color: #231F20;
display: flex;
flex-direction: column;
justify-content: center;
}
.card p {
  color: #D9E5F3;
  margin: 10px 0;
}
.card h2{
font-size: 1.8rem;
}

</style>

</html>