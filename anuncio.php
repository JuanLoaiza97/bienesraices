<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="imagen/webp">
            <source srcset="build/img/destacada.jpg" type="imagen/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>1</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p>4</p>
                </li>

            </ul>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet cumque harum obcaecati fugiat facere ex, hic velit natus excepturi sequi distinctio cupiditate unde error illo sit totam dicta ipsa autem.
            Nam culpa, maiores expedita corporis facilis adipisci! Nulla, dolore accusamus ipsa cupiditate nostrum quibusdam esse tempore amet, repellendus odit, corporis rem facere? Officia officiis nobis assumenda eum dicta? Cumque, et! Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur est magnam ratione amet a saepe doloribus sapiente commodi ab eos, eius tempora repudiandae beatae quidem, neque quod dolores quos velit.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, sint? Perspiciatis reprehenderit dolorem repudiandae magnam minus praesentium recusandae maxime, consequatur assumenda vero veniam ipsum velit delectus numquam blanditiis illum fuga.
            Repellat accusamus fugiat, nulla culpa incidunt perspiciatis consequuntur et rem. Ea consequuntur architecto earum recusandae assumenda perferendis molestiae repudiandae modi. Hic, quidem esse. Voluptas veritatis officiis a esse amet quo?</p>
        </div>
    </main>

    <?php
    incluirTemplate('footer');
?>