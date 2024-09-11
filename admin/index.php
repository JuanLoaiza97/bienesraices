<?php
    //importar conexion
    require '../includes/config/database.php';
    $db = conectarBD();
    //escribir query
    $query = "SELECT * FROM propiedades";

    //consultar db
    $resultadoConsulta = mysqli_query($db, $query);

    //muetsra mensaje condicional
    $resultado = $_GET['resultado'] ?? null;

    if($_SERVER['REQUEST_METHOD']==='POST'){
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if($id){
            //eliminar archivo
            $query = "SELECT imagen FROM propiedades WHERE id=$id";
            $resultado = mysqli_query($db, $query);
            $propiedad =mysqli_fetch_assoc($resultado);
            unlink('../imagenes'. $propiedad['imagen']);
            //eliminar propiedad
            $query = "DELETE FROM propiedades WHERE id = $id ";
            $resultado = mysqli_query($db, $query);
            if ($resultado){
                //redireccionar uruario
                header("location: /admin");
            }
        }

    };

    //consulta template
    require '../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>
        <?php if( intval($resultado) === 1): ?>
            <p class="alerta exito">Anuncio creado correctamente</p>
        <?php elseif( intval($resultado) === 2): ?>
            <p class="alerta exito">Anuncio actualizado correctamente</p>
        <?php endif ?>

        <a class="boton boton-verde" href="/admin/propiedades/crear.php">Nueva propiedad</a>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody> <!-- mostrar resultados -->
                <?php while( $propiedad = mysqli_fetch_assoc($resultadoConsulta) ) : ?>
                <tr>
                    <?php ?>
                    <td><?php echo $propiedad['id'] ?></td>
                    <td><?php echo $propiedad['titulo'] ?></td>
                    <td> <img src="/imagenes/<?php echo $propiedad['imagen'] ?>" class="imagen-tabla"> </td>
                    <td>$ <?php echo $propiedad['precio'] ?></td>
                    <td>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id'] ?>  " >
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="./propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </main>

    <?php

    //cerrar coinexion
    mysqli_close(($db));
    incluirTemplate('footer');
?>