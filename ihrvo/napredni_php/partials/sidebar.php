<aside class="d-flex flex-column p-3 text-bg-dark vh-100-min" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">Videoteka Admin</span>
    </a>

    <hr>

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/" class="nav-link text-white link-primary <?= $_SERVER['REQUEST_URI'] === '/' ? 'active' : '' ?>" aria-current="page"><i class="bi bi-house me-2"></i>Home</a>
        </li>
        <li class="nav-item">
            <!-- koristi se funkcija postaviAktivnuKlasu koja je definirana u inc/postaviAktivnuKlasu.php - dodana je u header php pomoću include -->
            <a href="members.php" <?= postaviAktivnuKlasu('members.php') ?>><i class="bi bi-person-circle me-2"></i>Clanovi</a> 
        </li>
        <li class="nav-item">
            <a href="genres.php" <?= postaviAktivnuKlasu('genres.php') ?>><i class="bi bi-camera-reels me-2"></i>Zanrovi</a>
        </li>
        <li class="nav-item">
            <a href="movies.php" <?= postaviAktivnuKlasu('movies.php') ?>><i class="bi bi-film me-2"></i>Filmovi</a>
        </li>
        <li class="nav-item">
            <a href="prices.php" <?= postaviAktivnuKlasu('prices.php') ?>><i class="bi bi-film me-2"></i>Cijene</a>
        </li>
        <li class="nav-item">
            <a href="media.php" <?= postaviAktivnuKlasu('media.php') ?>><i class="bi bi-film me-2"></i>Mediji</a>
        </li>
        <li class="nav-item">
            <a href="posudbe.php" <?= postaviAktivnuKlasu('posudbe.php') ?>><i class="bi bi-film me-2"></i>Posudbe</a>
        </li>
    </ul>

    <hr>

    <div class="dropdown">
        <a href="#" class="d-flex p-1 align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Korisnik</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</aside>