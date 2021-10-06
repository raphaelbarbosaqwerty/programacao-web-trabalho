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
                    $response = NewsController::get($_GET['id']);
                ?>
                <div class="mb-3 text-center">
                    <label class="col-sm-2 col-form-label">
                        <? echo $response['title'];?>
                    </label>
                </div>
                <div class="mb-3 form-group">
                    <label for="postText">
                        <? echo $response['body'];?>
                    </label>
                </div>
            </div>
        </div>
    </main>


    <footer id="footer" class="fixed-bottom">
        <? include_once 'Components/CopyRight.php'; ?>
    </footer>


    <script src="js/main.js"></script>

</body>

</html>