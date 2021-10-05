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
	use App\Controllers\ContactController;

    if($_SESSION == null) {
        header('location:login.php');
    }
    
    if($_POST) {
        $controller = new ContactController();
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

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mensagem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <? 
                    $response = ContactController::get();
                    foreach ($response as $value) {
                    ?>
                        <tr>
                            <th scope="row">
                                <? echo $value['id']?>
                            </th>
                            <td>
                                <? echo $value['email']?>
                            </td>
                            <td>
                                <? echo $value['message']?>
                            </td>
                        </tr>
                        <? 
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>


    <footer id="footer" class="fixed-bottom">
        <? include_once 'Components/CopyRight.php'; ?>
    </footer>


    <script src="assets/js/main.js"></script>

</body>

</html>