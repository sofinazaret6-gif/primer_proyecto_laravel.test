<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>

</head>
<body>

<div class="container mt-5">
    <h2>Formulario de contacto</h2>

    <form action="{{ url('/contacto') }}" method="POST">
        @csrf
        <div class="mb-3">
           <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre">
         </div>
         <div class="mb-3">
             <label class="form-label">Apellido</label>
             <input type="text" class="form-control" name="apellido">
            </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="check">
            <label class="form-check-label">Check me out</label>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

</body>
</html>