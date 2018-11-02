<?php require_once RUTA_APP.'/views/common/header.php'; ?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <div class="container">
            <?php foreach($data['users'] as $user) : ?>
                <tr>
                    <td><?php echo $user->id_user; ?></td>
                    <td><?php echo $user->name; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td><?php echo $user->phone; ?></td>
                    <td><a href="<?php echo RUTA_URL.'/pages/edit/'.$user->id_user; ?>">Editar</a></td>
                    <td><a href="<?php echo RUTA_URL.'/pages/delete/'.$user->id_user; ?>">Borrar</a></td>
                </tr>
            <?php endforeach; ?>
        </div>
    </tbody>
</table>

<?php require_once RUTA_APP.'/views/common/footer.php'; ?>