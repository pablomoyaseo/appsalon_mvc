<h1 class="nombre-pagina">login</h1>
<p class="descripcion-pagina">Inicia Sesión con tus Datos</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email:</label>
        <input type="email" id="email" placeholder="Tu Email"
        name="email"
        >
    </div>

    <div class="campo">
        <label for="password">Contraseña:</label>
        <input type="password" id="pasword" placeholder="Tu Contraseña"
        name="password"
        >
    </div>

    <input type="submit" class="boton" value="Iniciar Sesión">

</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no Tienes una cuenta? Crear una</a>
    <a href="/olvide">¿Olvidaste tu Password?</a>
</div>

