<?php
    include './includes/templates/header.php';
?>
<main class="contenedor seccion">
    <section class="seccion contenedor">
        <h2>Coches en venta y alquiler</h2>
    
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/gt3rs.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/gt3rs.jpg" class="imagen-reducida">
                </picture>
    
                <div class="contenido-anuncio">
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
</main>

<?php

    include './includes/templates/footer.php';
?>