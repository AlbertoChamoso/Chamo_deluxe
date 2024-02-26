<?php 
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>

<main class="contenedor seccion">
    <h1> Más Sobre Nosotros</h1>

    <div class="iconos-nosotros">
        <div class="icono">
            <h3>Nuestro propio taller</h3>
            <p> En nuestro concesionario contamos con nuestro propio taller para tener con seguridad una buena puesta a punto de nuestros vehiculos en venta.</p>
            
        </div>
        
        <div class="icono">
            <h3>Atención al cliente</h3>
            <p> Disponemos de los mejores asesores para cada uno de nuestros clientes para que se sientan seguros de la compra </p>
            
        </div>
        <div class="icono">
            <h3>Precios</h3>
            <p> Estamos al día en los precios, seguramente no encuentres ningún precio tan competitivo como el nuestro.</p>
        </div>
    </div>
</main>

<section class="seccion contenedor">
    <h2>Coches en venta y alquiler</h2>

    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="build/img/gt3rs.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/gt3rs.jpg" class="imagen-reducida">
            </picture>

            <div class="contenico-anuncio">
                <h3> Porsche GT3RS 2023 </h3>
                <p>Los 525 CV (386 kW) lo catapultan de 0 a 100 km/h en 3,2 segundos 
                    y le permiten disfrutar de una velocidad máxima de hasta 296 km/h sin descanso, tecnología alemana, nunca falla, 525cv de porsche son muchos cv que si es alemán tiene más caracter</p>
                <p class="precio">€210.000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono icono_estacionamiento">
                        <p>23000km</p>
                    </li>

                </ul>

                <a href="anuncios.php" class="boton-amarillo-block">
                    Ver Vehiculo
                </a>
            </div> <!--este es el contenido de los anuncios-->
            
        </div><!--el anuncio--> 
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/ferrari458-1.jpeg" type="image/jpge">
                    <img loading="lazy" src="build/img/ferrari458-1.jpg" class="imagen-reducida">
                </picture>
    
                <div class="contenido-anuncio">
                    <h3> Ferrari 458 2023 </h3>
                    <p>El Ferrari 458 Italia es más que un digno sucesor del Ferrari F430,
                         un biplaza con tracción trasera y motor central atmosférico de 8 cilindros en V y 578 CV. Tan solo tienes que probarlo una vez y te darás cuenta de que lo quieres de inmediato</p>
                    <p class="precio">€280.000</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono icono_estacionamiento">
                            <p>5000km</p>
                        </li>
    
                    </ul>
    
                    <a href="anuncios.php" class="boton-amarillo-block">
                        Ver Vehiculo
                    </a>
                </div> <!--este es el contenido de los anuncios-->
                
            </div><!--este va a ser el anuncio-->

            
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/gpower.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/gpower.jpg" class="imagen-reducida">
                    </picture>
        
                    <div class="contenido-anuncio">
                        <h3> Porsche Turbo  2023 </h3>
                        <p>Cifras espectaculares, que ha optado por instalar un sistema de refrigeración mejorado y un sistema de escape deportivo específico.
                             ¿El resultado? Un aumento de potencia hasta los 800 CV y del par máximo hasta los 950 Nm.</p>
                        <p class="precio">€310.000</p>
                        <ul class="iconos-caracteristicas">
                            <li>
                                <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono icono_estacionamiento">
                                <p>14000km</p>
                            </li>
        
                        </ul>
        
                        <a href="anuncios.php" class="boton-amarillo-block">
                            Ver Vehiculo
                        </a>
                    </div> <!--este es el contenido de los anuncios-->
                    
                </div><!--este va a ser el anuncio-->
                
                    <div class="anuncio">
                        <picture>
                            <source srcset="build/img/mclarensenna.webp" type="image/webp">
                            <img loading="lazy" src="build/img/mclarensenna.webp" class="imagen-reducida">
                        </picture>
            
                        <div class="contenido-anuncio">
                            <h3> Mclaren Senna </h3>
                            <p>Es natural sentirse atraído por las estadísticas de rendimiento del Senna, porque cualquier auto que pueda alcanzar 100kmh desde parado en sólo 2,8 segundos tiende a preocupar la mente. Dado su peso (en seco) de 1.198 kg 
                                y su potencia máxima de 789 CV</p>
                            <p class="precio">Por determinar</p>
                            <ul class="iconos-caracteristicas">
                                <li>
                                    <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono icono_estacionamiento">
                                    <p>0km</p>
                                </li>
            
                            </ul>
            
                            <a href="anuncios.php" class="boton-amarillo-block">
                                Ver Vehiculo
                            </a>
                        </div> <!--este es el contenido de los anuncios-->
                        
                    </div><!--este va a ser el anuncio-->
    </div><!--.contenedor-anuncios-->

    
</section>

<section class="imagen-contacto contacto">
    <h2>Elige el coche de tus sueños</h2>
    <p>Rellena el formulario para que nuestros asesores contacte con usted lo mas breve posible </p>
    <a href="contacto.php" class="boton-amarillo">Contactános</a>
    
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/modificaciones.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/modificaciones.jpg" alt="texto entrada blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Modificaciones a tu gusto</h4>
                    <p>Publicado el: <span>14/02/2024</span>  por :<span>Alberto</span> </p>
                    <p>
                        Disponemos de los mejores modificadores del mercado, para que adoptes tu coche a tu gusto
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nurbur.webp" type="image/webp">
                    <img loading="lazy" src="build/img/nurbur.webp" alt="texto entrada blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Consejos y cursos para pilotar en circuito</h4>
                    <p>Publicado el: <span>14/02/2024</span>  por :<span>Alberto</span> </p>
                    <p>
                        Clases personalizadas en nuestro propio circuito, al igual que clases en nuestros simuladores en diferentes circuitos,
                         siente el potencial que llevas dentro.
                    </p>
                </a>
            </div>
        </article>
    </section>

    <section class="comentarios">
        <h3>Comentarios</h3>
        
        <div class="comentarios">
            <blockquote>
                Increible experiencia, tanto el alquiler como la compra del vehiculo de mis sueños, recomiendo totalmente este concesionario
            </blockquote>
            <p>-Roberto-</p>
        </div>
    </section>
</div>

<?php

    include './includes/templates/footer.php';
?>