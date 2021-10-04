<!-- 
  Integrantes do grupo:
  
  Uéslei Bervanger
  Laura Caroline
  Luan Pereira
  Raphael Barbosa
 -->

<?php
    require_once 'session.php';
    require '../../vendor/autoload.php';
	use App\Controllers\UserController;

    if($_POST) {
        $controller = new UserController();
        $responseLogin = $controller->login($_POST['inputEmail'], $_POST['inputPassword']);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jornal dos Amiguinhos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <header>
        <? include_once 'Components/NavBar.php'; ?>
    </header>

    <main>
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <br>
                    <h1>Login</h1>
                </div>
            </div>
            <br>
            <form method="POST">
                <div class="mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label" require>Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail">
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label" require>Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="inputPassword">
                </div>
                <? if(isset($responseLogin) && !$responseLogin) {?>
                <div class="alert alert-danger" role="alert">
                    Email ou Senha incorretos!
                </div>
                <?}?>
                <div class="mb-3 row">
                    <input type="submit" class="btn btn-primary mb-3" value="Acessar">
                </div>
            </form>
        </div>
    </main>

    <footer id="footer" class="fixed-bottom">
        <? include_once 'Components/CopyRight.php'; ?>
    </footer>

    <script src="assets/js/main.js"></script>
</body>

</html>