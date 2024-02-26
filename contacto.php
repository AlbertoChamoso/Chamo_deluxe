<?php
    include './includes/templates/header.php';
?>
<main class="contenedor seccion">
    <h1> Contacto</h1>
   
  
    <h2>Rellene el formulario para el contacto</h2>

    <form class="formulario">
        <fieldset>
            <legend>Información personal</legend>

            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu nombre" id="nombre">

            <label for="email">Email</label>
            <input type="email" placeholder="Tu email" id="email">

            <label for="telefono">Teléfono</label>
            <input type="tel" placeholder="Tu teléfono" id="teléfono">

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje"></textarea>

        </fieldset>

        <fieldset>
            <legend>Información sobre los vehículos</legend>

            <p>Elíge la manera de ser contactado</p>

            <div class="forma-contacto">
                <label for="contactar-telefono">Teléfono</label>
                <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                <label for="contactar-email">E-mail</label>
                <input name="contacto" type="radio" value="email" id="contactar-email">
            </div>
            <p>Contacto por teléfono</p>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha">

            <label for="hora">Hora:</label>
            <input type="time" id="hora" min="09:00" max="20:00">         
        </fieldset>

        <input type="submit" value="enviar" class="boton-verde">
    </form>
</main>


<?php

    include './includes/templates/footer.php';
?>