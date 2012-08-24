<?php
include_once './estructura/encabezado.inc.php';
?>
<script type="text/javascript" src="./rutinas/javaScripts/validar.js"></script>
<div id="content">
    <form class="formIngresar" method="post" action="administracion.php" onSubmit="return ValidarIngreso(this);">
        <div>
            <h1>Iniciar sesión</h1>
        </div>
        <br/>
        <div>
            <h2>Usuario</h2> 
            <input type="text" size="20" name="usuario" onblur="return ValidarUsuario(this);"/>
            <h2>Contraseña</h2> 
            <input	type="password" size="20" name="contrasenia" onblur="return ValidarPassword(this);"/> 
            <input type="submit" name="Ingresar" value="Ingresar" />
        </div>
    </form>
</div>
<?php
include_once './estructura/piedepagina.inc.php';
?>	
</html>