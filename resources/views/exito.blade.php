<!DOCTYPE html>
<html lang="es">
<head>
    <title> Exito! </title> 
    </head>
<body>
    <div class="container mt-5"> <!-- Es un contenedor de Bootstrap container → centra el contenido y le da márgenes mt-5 → significa margin-top (margen arriba) grande -->
     <div class="alert alert-success text-center">   <!-- Es un mensaje con estilo de Bootstrap -->
    <!-- alert: crea una caja tipo aviso -->
    <!-- alert-success: la pone verde -->
    <!-- text-center: centra el texto -->

   <p class="lead"> 
Hola <strong>{{ $nombre }}</strong> <strong>{{ $apellido }}</strong> qué bueno recibir tu mensaje. Un miembro 
del equipo de ventas se pondrá en contacto con vos al correo: <strong>{{ $email 
}}</strong> ¡Muchas gracias! 
</p>   
 </div>
</div>

</body>
</html>