<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Contactanos</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="imagen/webp">
            <source srcset="build/img/destacada3.jpg" type="imagen/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="imagen contacto">
        </picture>
        <h2>LLena el siguiente formulario</h2>
        <form action="" class="formulario">
            <fieldset>
                <legend>Información Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu nombre" id="nombre">

                <label for="email">Correo</label>
                <input type="email" placeholder="Tu Correo" id="email">

                <label for="telefono">Celular</label>
                <input type="tel" placeholder="Tu Numero" id="telefono">

                <label for="mensaje">Mensaje</label>
                <textarea name="" id="mensaje"></textarea>
                
            </fieldset>

            <fieldset>
                <legend>Informacón sobre la propiedad</legend>

                <label for="opciones">Vender o Comprar</label>
                <select name="" id="opciones">
                    <option value="" disabled selected>Seleccione</option>
                    <option value="Compra">Comprar</option>
                    <option value="Vende">Vender</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Tu Numero" id="presupuesto">

            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea que lo contactemos</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                    <label for="contactar-email">Correo</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>
                <p>Si elegió teléfono, que fecha y hora desea ser contactado?</p>

                <label for="fecha">Fecha</label>
                <input type="date"  id="fecha">

                <label for="hora">Hora</label>
                <input type="time"  id="hora" min="09:00" max="17:00">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-amarillo">
        </form>
    </main>

    <?php
    incluirTemplate('footer');
?>