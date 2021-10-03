<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Jornal dos Amiguinhos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contato</a>
                </li>
                <? if(!$_SESSION) { ?>
                <li class="nav-item">
                    <a class="nav-link active" href="login.php">Login</a>
                </li>
                <?} else { ?>
                <li class="nav-item">
                    <a class="nav-link active" href="login.php">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="posts.php">Postar</a>
                </li>
                <?} ?>
            </ul>
        </div>
    </div>
</nav>