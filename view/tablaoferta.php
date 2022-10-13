<div class="card w-100">
    <div class="card-header">
        <h1>Ofertas</h1>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Total</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($descuento as $descuento) { ?>

                <tr>
                    <th scope="row"><?php echo $descuento['id_oferta'] ?></th>
                    <td><?php echo $descuento['nombre'] ?></td>
                    <td><?php echo $descuento['precio'] ?></td>
                    <td><?php echo $descuento['descuento'] ?></td>
                    <td>
                        <form action="index.php" method="post">
                            <button name="borrarOferta" value="<?php echo $descuento['id_oferta'] ?>" type="submit" class="btn btn-sm btn-outline-danger">Borrar</button>
                        </form>
                    </td>
                </tr>

            <?php } ?>

        </tbody>
    </table>
</div>