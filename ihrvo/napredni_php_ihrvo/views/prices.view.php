<?php include_once './../partials/header.php' ?>

<main class="container my-3 d-flex flex-column flex-grow-1">
    <h1>Cjenik</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Ime</th>
                <th>Cijena</th>
                <th>Zakasnina po danu</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prices as $price): ?>
                <tr>
                    <td><?= $price['id'] ?></td>
                    <td><?= $price['tip_filma'] ?></td>
                    <td><?= $price['cijena'] ?></td>
                    <td><?= $price['zakasnina_po_danu'] ?></td>
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