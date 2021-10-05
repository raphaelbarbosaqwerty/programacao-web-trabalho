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
	use App\Controllers\NewsController;

    if($_SESSION == null) {
        header('location:login.php');
    }
    
    if($_POST) {
        $controller = new NewsController();
        $response = $controller->post($_POST);
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
                    <h1>Nova postagem </h1>
                </div>
            </div>
            <br>
            <form method="POST">
                <div class="mb-3">
                    <label class="col-sm-2 col-form-label">Título</label>
                    <input type="text" class="form-control" id="title" name="title" value="">
                </div>
                <div class="mb-3 form-group">
                    <label for="postText">Escreva o texto</label>
                    <textarea class="form-control" id="body" name="body" rows="3" value=""></textarea>
                </div>
                <? if(isset($response) && $response) { ?>
                <div class="alert alert-success" role="alert">
                    Post inserido com sucesso!
                </div>
                <? } ?>
                <div class="mb-3 row">
                    <input type="submit" class="btn btn-primary mb-3" value="Postar">
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