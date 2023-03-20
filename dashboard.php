<?php 
require './config.php';
var_dump($_SESSION["id"]);
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM utenti WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

} else {
  // header("Location: login.php");
}

include_once './partials/head.php';
include_once './partials/header.php';
?>




<main>

  <div class="dashboard-container">

    <h2 class="welcome">Welcome <?php echo $row["nome"]; ?> </h2>
    
    <div class="card-container">
    
        <div class="card">
          <h3>Nome evento</h3>
          <p>15-10-2022 15:00</p>
  
          <button>JOIN</button>
        </div>
        <div class="card">
          <h3>Nome evento</h3>
          <p>15-10-2022 15:00</p>
  
          <button>JOIN</button>
        </div>
        <div class="card">
          <h3>Nome evento</h3>
          <p>15-10-2022 15:00</p>
  
          <button>JOIN</button>
        </div>
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