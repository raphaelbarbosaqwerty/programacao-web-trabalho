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
                    <h1>Sobre Nós</h1>
                </div>
            </div>


        </div>
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <p class="px-2"> Nosso jornal foi uma ideia para divulgar informações sobre a universidade, os assuntos
                podem ser
                os mais diversos, de
                curiosidades a eventos e projetos disponíveis. Por exemplo, temos o projeto História da Computação e o
                programa
                de
                extensão Programa C com o projeto Unipampa Retrogether. O evento interativo em com jogos do tipo
                Adventure Games
                e uma
                live na plataforma Discord, onde pode ser escolhido em conjunto quais ações serão tomadas durante o
                jogo. Também
                há A
                primeira Jornada de Extensão em Computação é uma iniciativa do Programa C, juntamente com o Gurias na
                Computação, com o
                intuito de divulgar os cursos de Computação do campus Alegrete, promovendo oficinas com as escolas e
                atividades
                para a
                comunidade em geral.</p>

            <div class="mb-3 row">
                <input type="button" class="btn btn-primary" value="Contate-nos" onclick="goToContact()">
            </div>
        </div>
    </main>


    <footer id="footer" class="fixed-bottom">
        <? include_once 'Components/CopyRight.php'; ?>
    </footer>

    <script src="/js/main.js"></script>
</body>

</html>