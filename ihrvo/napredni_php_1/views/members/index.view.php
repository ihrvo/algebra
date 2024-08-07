<?php include_once base_path('views/partials/header.php'); 
$uri = urldecode(ltrim(parse_url($_SERVER['REQUEST_URI'])["path"], '/'));
$uri = explode('/',$uri);
echo $uri[0];
?>

<main class="container my-3 d-flex flex-column flex-grow-1">
    <div class="title flex-between">
        <h1>Članovi</h1>
        <div class="action-buttons">
            <a href="/members/create" type="submit" class="btn btn-primary">+ Novi član</a>
        </div>
    </div>

    <hr>
    <?php showNotification(); ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Ime</th>
                <th>Adresa</th>
                <th>Telefon</th>
                <th>Email</th>
                <th>Clanski broj</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($members as $member): ?>
                <tr>
                    <td><?= $member['id'] ?></td>
                    <td><?= $member['ime'] ?></td>
                    <td><?= $member['adresa'] ?></td>
                    <td><?= $member['telefon'] ?></td>
                    <td><?= $member['email'] ?></td>
                    <td><?= $member['clanski_broj'] ?></td>
                    <td>
                        <a href="#" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Member"><i class="bi bi-pencil"></i></a>
                        <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete Member"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>

<?php include_once base_path('views/partials/footer.php'); ?>