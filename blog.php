<?php
    include './includes/templates/header.php';
?>
<main class="contenedor seccion contenido-centrado">
    <h1>Blog</h1>

    <div class="contenedor seccion ">
        
            <h3>Nuestro Blog</h3>
    
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/modificaciones.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/modificaciones.jpg" alt="texto entrada blog">
                    </picture>
                </div>
    
                <div class="texto-entrada">
                    <a href="entrada.html">
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
                    <a href="entrada.html">
                        <h4>Consejos y cursos para pilotar en circuito</h4>
                        <p>Publicado el: <span>14/02/2024</span>  por :<span>Alberto</span> </p>
                        <p>
                            Clases personalizadas en nuestro propio circuito, al igual que clases en nuestros simuladores en diferentes circuitos,
                             siente el potencial que llevas dentro.
                        </p>
                    </a>
                </div>
            </article>
       
</main>

<?php

    include './includes/templates/footer.php';
?>