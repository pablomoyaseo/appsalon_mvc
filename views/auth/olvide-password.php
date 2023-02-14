<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Restablece tu Password, escribiendo tu email a continuacion</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form method="post" action="/olvide" class="formulario">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="tu email">
    </div>

    <input type="submit" class="boton" value="Enviar Instrucciones">

</form>

<div class="acciones">
    <a href="/">¿Ya tiene una Cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no Tienes una cuenta? Crear una</a>
</div>