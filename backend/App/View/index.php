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
    ini_set('default_charset','UTF-8');

    if($_POST && $_POST['delete']) {
        $controller = new NewsController();
        $controller->delete($_POST['id']);
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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

    <header>
        <? include_once 'Components/NavBar.php'; ?>
    </header>

    <main id="main">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <br>
                    <h1>Notícias de hoje</h1>
                </div>
            </div>

            <div style="margin-bottom : 1rem;"></div>
            <div class="row">
                <? 
                    $response = NewsController::get();
                    foreach ($response as $value) {
                ?>
                <div class="card col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" style="width: 15rem;">
                    <img src="img/logo_unipampa.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <? echo $value['title'];?>
                        </h5>
                        <p class="card-text">
                            <? echo $value['body'];?>
                        </p>
                        <input type="button" class="btn btn-primary mb-1" value="Saiba mais"
                            onclick="routeToPost(<? echo $value['id']; ?>)">
                        <? if($_SESSION != null) { ?>
                        <form method="POST">
                            <input type="text" class="form-control" id="id" name="id" value="<? echo $value['id'];?>"
                                hidden>

                            <input type="submit" class="btn btn-danger mb-1" value="Apagar" name="delete">
                        </form>
                        <form method="GET" action="posts.php?id=<? echo $value['id']; ?>">
                            <input type="text" class="form-control" id="id" name="id" value="<? echo $value['id'];?>"
                                hidden>
                            <input type="text" class="form-control" id="title" name="title"
                                value="<? echo $value['title'];?>" hidden>
                            <input type="text" class="form-control" id="body" name="body"
                                value="<? echo $value['body'];?>" hidden>

                            <input type="submit" class="btn btn-secondary" value="Atualizar" name="update">
                        </form>
                        <?} ?>
                    </div>
                </div>
                <div style="width: 3rem;"></div>
                <? 
                    }
                    
                ?>
            </div>
        </div>
    </main>


    <footer id="footer" class="fixed-bottom">
        <? include_once 'Components/CopyRight.php'; ?>
    </footer>


    <script src="js/main.js"></script>

</body>

</html>