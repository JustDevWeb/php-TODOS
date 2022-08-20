<nav class="navbar navbar-dark navbar-expand-lg bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="?controller=security">Authorization</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=!isset($_SESSION['user']) ? "disabled" : ''?>" href="?controller=tasks">Tasks </a>
                </li>
            </ul>
            <a class="btn btn-secondary me-3" href="?controller=registration">Registration</a>
                <?php if (isset($_SESSION['user'])) : ?>
            <a class="btn btn-outline-light" href="?controller=security&action=logout">Log out</a>
                <?php else : ?>
            <a class="btn btn-outline-light" href="?controller=security">Log in</a>
                <?php endif;?>

        </div>
    </div>
</nav>