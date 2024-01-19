<h1 class="nombre-pagina">Crea un nuevo servicios</h1>
<p class="descripcion-pagina">Llena los campos del formulario</p>

<?php  include_once __DIR__ . '/../templates/barra.php'; ?>
<?php include_once __DIR__ . "/../templates/alertas.php"?>


<form action="/servicios/crear" method="POST" class="formulario">

    <?php include_once __DIR__ . '/formulario.php' ?> 
    <input type="submit" class="boton" value="Crear Servicio">
</form>