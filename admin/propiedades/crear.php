<?php

    //base de datos

    require '../../includes/config/database.php';
    $db = conectarBD();

    //consultar vendedores

    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    //arreglo de error
    $errores = [];


    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones =  '';
    $wc = '';
    $estacionamiento = '';
    $vendedores_id = '';

    //ejecutar codigo despues de que usuario envia form

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";
        // echo "<pre>";
        // var_dump($_FILES);
        // echo "</pre>";
        
        
        $titulo = mysqli_real_escape_string( $db, $_POST['titulo']);
        $precio = mysqli_real_escape_string( $db, $_POST['precio']);
        $descripcion = mysqli_real_escape_string( $db, $_POST['descripcion']);
        $habitaciones = mysqli_real_escape_string( $db, $_POST['habitaciones']);
        $wc = mysqli_real_escape_string( $db, $_POST['wc']);
        $estacionamiento = mysqli_real_escape_string( $db, $_POST['estacionamiento']);
        $vendedores_id = mysqli_real_escape_string( $db, $_POST['vendedor']);
        $creado = date('Y/m/d');
        
        // asignar files a variable
        
        $imagen = $_FILES['imagen'];
        var_dump($imagen['name']);



        if(!$titulo) {
            $errores[] = "Debes escribir el titulo";
        };

        if(!$precio) {
            $errores[] = "Debes escribir el precio";
        };

        if(strlen($descripcion)<50) {
            $errores[] = "Debes escribir la descripcion del inmubele y minomo debe de tener 50 caracteres";
        };

        if(!$habitaciones) {
            $errores[] = "Debes escribir el numero de habitaciones";
        };

        if(!$wc) {
            $errores[] = "Debes escribir el numero de wc";
        };

        if(!$estacionamiento) {
            $errores[] = "Debes escribir el numero de estacionamientos";
        };

        if(!$vendedores_id) {
            $errores[] = "Debes de elegir un vendedor";
        };

        if(!$imagen['name'] || $imagen['error']) {
            $errores[] = "la imagen es obligatoria";
        };


        //validar por tamaño

        $medida = 1000 * 100;

        if ($imagen['size']>$medida) {
            $errores[] = "la imagen es muy pesada";
        };

        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        //revisar si $errores esta vacio
        if(empty($errores)) {
            // insert bd
    
            $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_id) VALUES ( '$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedores_id')";
    
            $resultado = mysqli_query($db, $query);
    
            if ($resultado){
                //redireccionar uruario
                header("location: /admin");
            }
        }

    };


    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a class="boton boton-verde" href="/admin/">volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">

                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form action="" class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Informacion general de la propiedad</legend>
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="titulo pripiedad" value="<?php echo $titulo; ?>">

                <label for="precio">PRECIO:</label>
                <input type="number" id="precio" name="precio" placeholder="precio de la propiedad" value="<?php echo $precio; ?>">

                <label for="imagen">IMAGEN:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">
                
                <label for="descripcion">DESCRIPCION:</label>
                <textarea name="descripcion" id=""><?php echo $descripcion; ?></textarea>

            </fieldset>

            <fieldset>
                <legend>Informacion de la propiedad</legend>
                <label for="habitaciones">HABITACIONES:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="EJ:3" min="0" value="<?php echo $habitaciones; ?>">

                <label for="wc">BAÑOS:</label>
                <input type="number" id="wc" name="wc" placeholder="EJ:3" min="0" value="<?php echo $wc; ?>">

                <label for="estacionamiento">PARQUEADERS:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="EJ:3" min="0" value="<?php echo $estacionamiento; ?>">


            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor" id="">
                    <option value="">Seleccione</option>
                    <?php while($vendedor = mysqli_fetch_assoc($resultado)): ?>  
                        <option <?php echo $vendedores_id === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"><?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>
                    <?php endwhile ?>  
                </select>
            </fieldset>

            <input type="submit" value="Crear propiedad" class="boton boton-verde">
        </form>
    </main>

<?php
    incluirTemplate('footer');
?>