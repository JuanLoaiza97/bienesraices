<?php
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>

    <main class="contenedor seccion">
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
    </main>

    <section class="seccion contenedor">
        <h2>Casas y apartamentos en ventas</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="img/webp">
                    <source srcset="build/img/anuncio1.jpeg" type="img/jpeg">
                    <img src="build/img/anuncio1.jpg" alt="anuncio" loading="lazy">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa del lago</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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

                    <a href="anuncio.html" class="boton-amarillo-block">Conócela</a>
                </div> <!-- contenido-anuncio -->
            </div> <!-- anuncio -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="img/webp">
                    <source srcset="build/img/anuncio2.jpeg" type="img/jpeg">
                    <img src="build/img/anuncio2.jpg" alt="anuncio" loading="lazy">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa de lujo minimalista</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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

                    <a href="anuncio.html" class="boton-amarillo-block">Conócela</a>
                </div> <!-- contenido-anuncio -->
            </div> <!-- anuncio -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="img/webp">
                    <source srcset="build/img/anuncio3.jpeg" type="img/jpeg">
                    <img src="build/img/anuncio3.jpg" alt="anuncio" loading="lazy">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa con piscina</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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

                    <a href="anuncio.html" class="boton-amarillo-block">Conócela</a>
                </div> <!-- contenido-anuncio -->
            </div> <!-- anuncio -->


        </div> <!-- contenedor de anuncio --> 
        <div class="ver-todas">
            <a class="boton-verde-block" href="anuncios.html">Ver todas</a>
        </div>
        
    </section>


    <section class="imagen-contacto">
        <h2>Encuentra la casa que siempre haz soñado</h2>
        <p>Llena el formulario y un asesor pronto se pondrá en contacto contigo!</p>
        <a href="contacto.html" class="boton-amarillo">¡Contáctanos!</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">escrito el: <span>20/10/2024</span> por: <span>Admin</span> </p>
                        <p>
                            Consejos para construir una terraza en el techo de tu casa
                        </p>
                    </a>
                </div>
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Como decorar tu hogar de la mejor forma</h4>
                        <p class="informacion-meta">escrito el: <span>20/10/2024</span> por: <span>Admin</span> </p>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, 
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut officia ut, ipsam harum corporis enim officiis minus est maxime mollitia pariatur, ducimus dolorum molestias rem voluptatum dicta tenetur nostrum facilis.
                </blockquote>
                <p>Anonimo</p>
            </div>
        </section>
    </div>

    <?php
    incluirTemplate('footer');
?>