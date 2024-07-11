<?php include_once './../partials/header.php' ?>

<main class="container my-3 d-flex flex-column flex-grow-1">
    <h1>Posudbe</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Datum posudbe</th>
                <th>Datum povrata</th>
                <th>Ime člana</th>
                <th>Naslov</th>
                <th>Medij</th>
                <th>Žanr</th>
                <th>Tip filma</th>
                <th>Cijena</th>
                <th>Zakasnina</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posudbe as $posudba): ?>
                <tr>
                    <td><?= $posudba['datum_posudbe'] ?></td>
                    <td><?= $posudba['datum_povrata'] ?></td>
                    <td><?= $posudba['ime'] ?></td>
                    <td><?= $posudba['naslov'] ?></td>
                    <td><?= $posudba['tip'] ?></td>
                    <td><?= $posudba['zanr'] ?></td>
                    <td><?= $posudba['tip_filma'] ?></td>
                    <td><?= $posudba['cijena'] ?></td>
                    <td><?= $posudba['zakasnina'] ?></td>

                    <td>
                        <a href="#" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Member"><i class="bi bi-pencil"></i></a>
                        <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete Member"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>

<?php include_once './../partials/footer.php' ?>