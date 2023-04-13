<?php

    session_start();
    require "./files/database.php";
    require "./files/functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="public/images/enset.png" rel="icon">

  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link href="public/vendor/simple-datatables/style.css" rel="stylesheet">

  <link href="public/css/styles.css" rel="stylesheet">
  <link href="public/css/template.css" rel="stylesheet">

</head>

<body>

  <main id="mainLogin">
    <div class="container">
      
      <section class="section register min-vh-10 py-4">
      
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4 logoConnectionDiv">
                <a href="index.php" class="logo d-flex align-items-center w-100">
                  <img src="public/images/enset.png" alt="">
                </a>
              </div>

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Connectez-vous à votre compte</h5>
                    <p class="text-center small">Enter votre nom d'utilisateur et votre mot de passe</p>
                  </div>

                  <form class="row g-3" action="login.php" method="post" autocomplete="off">
                    <?php
                      if(isset($_SESSION["message"])){
                    ?>
                      <div class="card-body d-flex justify-content-center errorsDiv">
                        <span><?=$_SESSION["message"]?><span>
                      </div>
                    <?php } ?>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <?php $username = (isset($_GET['errorLogin']))?"{$_GET['errorLogin']}":""; ?>
                        <input type="text" name="username" value="<?=$username?>" class="form-control" required>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="connexion">Se connecter</button>
                    </div>

                  </form>
                  <div>
                  <a href="index.php" class="comebackHome"><i class="bi bi-arrow-return-left"></i></a>
                  <a href="signup.php" class="linkInscription">Inscription</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>

    <!-- footer of the connexion page  -->
    <!-- <?php require_once "footer.php" ?> -->
  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>


  <script src="public/js/main.js"></script>


</body>

</html>
