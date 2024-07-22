<?php include_once base_path('views/partials/header.php'); ?>

<main class="container my-3 d-flex flex-column flex-grow-1 vh-100">
    <h1>Dodaj novog člana</h1>
    <hr>
    <?php showNotification(); ?>

    <form class="row g-3 mt-3" action="/members/create" method="POST">
        <div class="col-2">
            <label for="ime" class="mt-1">Ime</label>
        </div>
        <div class="col-10">
            <input type="text" class="form-control" id="ime" name="ime" required>
        </div>
        <div class="col-2">
            <label for="prezime" class="mt-1">Prezime</label>
        </div>
        <div class="col-10">
            <input type="text" class="form-control" id="prezime" name="prezime" required>
        </div>
        <div class="col-2">
            <label for="adresa" class="mt-1">Adresa</label>
        </div>
        <div class="col-10">
            <input type="text" class="form-control" id="adresa" name="adresa" required>
        </div>
        <div class="col-2">
            <label for="telefon" class="mt-1">Telefon</label>
        </div>
        <div class="col-10">
            <input type="text" class="form-control" id="telefon" name="telefon" required>
        </div>
        <div class="col-2">
            <label for="email" class="mt-1">Email</label>
        </div>
        <div class="col-10">
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-2">
            <button type="submit" class="btn btn-primary mb-3">Spremi</button>
        </div>
    </form>

</main>

<?php include_once base_path('views/partials/footer.php'); ?>