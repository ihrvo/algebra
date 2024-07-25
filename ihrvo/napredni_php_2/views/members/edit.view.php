<?php include_once base_path('views/partials/header.php'); ?>

<main class="container my-3 d-flex flex-column flex-grow-1 vh-100">
    <h1><?= $member['ime'] .' '. $member['prezime']?></h1>
    <hr>
    <form class="row g-3 mt-3" action="/members/update" method="POST">
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="id" value="<?= $member['id'] ?>">
        <div class="row mt-3">
            <div class="col-2">
                <label for="member_ime" class="mt-1">Ime:</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" id="member_ime" name="ime" value="<?= $member['ime'] ?>" > 
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <label for="member_prezime" class="mt-1">Prezime:</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" id="member_prezime" name="prezime" value="<?= $member['prezime'] ?>" > 
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <label for="member_adresa" class="mt-1">Adresa:</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" id="member_adresa" name="adresa" value="<?= $member['adresa'] ?>" >
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <label for="member_email" class="mt-1">Email:</label>
            </div>
            <div class="col-6">
                <input type="email" class="form-control" id="member_email" name="email" value="<?= $member['email'] ?>" >
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Spremi</button>
            </div>
        </div>
    </form>
</main>

<?php include_once base_path('views/partials/footer.php'); ?>