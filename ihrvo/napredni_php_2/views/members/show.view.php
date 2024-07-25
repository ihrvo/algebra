<?php include_once base_path('views/partials/header.php'); ?>

<main class="container my-3 d-flex flex-column flex-grow-1 vh-100">
    <h1><?= $member['ime'] .' '. $member['prezime']?></h1>
    <hr>
    <form class="row g-3 mt-3" action="/member-create.php" method="POST">
        <div class="row">
            <div class="col-2">
                <label for="member_id" class="mt-1">Id člana:</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" id="member_id" name="id" value="<?= $member['id'] ?>" disabled>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <label for="member_ime" class="mt-1">Ime:</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" id="member_ime" name="ime" value="<?= $member['ime'] ?>" disabled> 
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <label for="member_prezime" class="mt-1">Prezime:</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" id="member_prezime" name="prezime" value="<?= $member['prezime'] ?>" disabled> 
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <label for="member_adresa" class="mt-1">Adresa:</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" id="member_adresa" name="adresa" value="<?= $member['adresa'] ?>" disabled>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <label for="member_email" class="mt-1">Email:</label>
            </div>
            <div class="col-6">
                <input type="email" class="form-control" id="member_email" name="email" value="<?= $member['email'] ?>" disabled>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <label for="member_cb" class="mt-1">Članski broj:</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" id="member_cb" name="clanski_broj" value="<?= $member['clanski_broj'] ?>" disabled>
            </div>
        </div>
    </form>
</main>

<?php include_once base_path('views/partials/footer.php'); ?>
