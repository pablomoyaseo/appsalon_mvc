<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">Coloca Tu Nuevo Password a Continuación</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>
<!-- ELIMINAMOS EL ACTION PARA QUE NO RECARGUE -->
<?php if($error ) return; ?>
<form method="POST" class="formulario">
    <div class="campo">
        <label for="password">Contraseña:</label>
        <input type="password" id="pasword" placeholder="Tu NuevaContraseña"
        name="password"
        >
    </div>
    <input type="submit" class="boton" value="Guardar Nueva Contraseña">
</form>

<div class="acciones">
    <a href="/">Ya tienes cuenta. Iniciar Sesión</a>
    <a href="/crear-cuenta">¿Aún No Tienes Cuenta?. Registrate. </a>
</div>