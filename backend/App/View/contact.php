<!-- 
  Integrantes do grupo:
  
  Uéslei Bervanger
  Laura Caroline
  Luan Pereira
Raphael Barbosa
 -->
<?php
    require_once 'session.php';
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
                    <h1>Entre em contado conosco!</h1>
                </div>
            </div>

            <form>
                <div class="mb-3 form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="sample@sample.com">
                    <small id="emailHelp" class="form-text text-muted">Nós não compartilharemos essas
                        informações.</small>
                </div>
                <div class="mb-3 form-group">
                    <label for="exampleFormControlTextarea1">Deixe sua mensagem</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Notificar-me</label>
                </div>
                <div class="mb-3 row">
                    <button type="submit" class="btn btn-primary">Submeter</button>
                </div>
            </form>
    </main>


    <footer id="footer" class="fixed-bottom">
        <? include_once 'Components/CopyRight.php'; ?>
    </footer>


    <script src="assets/js/main.js"></script>

</body>

</html>