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
            <form action="">

                <label for="email">Inserisci l'e-mail</label>
                <input type="email" id="email" name="email" placeholder="name@example.com">

                <label for="password">Inserisci la password</label>
                <input type="password" id="password" name="password" placeholder="scrivila qui">
                <i onclick="showPassword()" class="fa-solid fa-eye" id="togglePassword"></i>

                <button type="submit">ACCEDI</button>
            </form>

            <p>Non hai ancora un profilo? <a href="#">Registrati</a></p>
            
        </div>
    </div>
</main>
</body>

<style>
    #togglePassword{
        margin-left: -30px;
        cursor: pointer;
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