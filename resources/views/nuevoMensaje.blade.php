<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Mensaje</title>
</head>
<body>
    <h1>Nuevo Mensaje</h1>
    <form id="formulario">
        Destinatario: <select name="destinatarios" id="selectDestinatarios"></select>
        Descripcion: <input type="text" name="assumpte" id="assumpte">
        Missatge: <textarea name="missatge" id="missatge"></textarea>
        <button type="submit" id="boton">Enviar</button>
    </form>
    <a href="/dashboard">Dashboard</a>
    <script src="/js/nuevoMensaje.js"></script>
</body>
</html>