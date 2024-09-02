<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conocenos!</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="imagen/webp">
                    <source srcset="build/img/nosotros.jpg" type="imagen/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="nosotros">
                </picture>
                
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    15 años de experiencia en el mercado inmobiliario
                </blockquote>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, suscipit! Dolorum sapiente, aspernatur et excepturi aliquam sit est aut dicta numquam id quibusdam voluptas deleniti necessitatibus nemo rerum repellat nesciunt.
                    Aliquid enim adipisci dolor recusandae? Iste tempore optio recusandae repellendus eveniet magni, vel fugit ea facere similique expedita enim suscipit quo molestiae quibusdam ratione repudiandae amet doloribus voluptates, consequuntur corrupti!
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique amet quaerat fugiat, omnis eos atque accusamus beatae adipisci ducimus ipsam nulla harum, id delectus odio numquam quis ipsa neque hic?
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae eligendi porro omnis in cupiditate quo est provident nulla non perspiciatis, ducimus ea voluptatem doloribus saepe commodi accusamus dicta debitis nihil.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae eligendi porro omnis in cupiditate quo est provident nulla non perspiciatis, ducimus ea voluptatem doloribus saepe commodi accusamus dicta debitis nihil.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae eligendi porro omnis in cupiditate quo est provident nulla non perspiciatis, ducimus ea voluptatem doloribus saepe commodi accusamus dicta debitis nihil.</p>
            </div>
        </div>
    </section>

<?php
    incluirTemplate('footer');
?>