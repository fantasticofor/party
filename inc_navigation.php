<nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">CEDAP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if($active_menu == 'Home') echo 'active' ?>">
            <a class="nav-link" href="index.php">Home
            </a>
            </li>
            <li class="nav-item <?php if($active_menu == 'Ricerca') echo 'active' ?>">
            <a class="nav-link" href="ricerca.php">Ricerca</a>
            </li>
            <li class="nav-item <?php if($active_menu == 'Inserimento') echo 'active' ?>">
            <a class="nav-link" href="madre.php">Inserimento</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">How To</a>
            </li>
        </ul>
        </div>
    </div>
</nav>