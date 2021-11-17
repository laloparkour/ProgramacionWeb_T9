<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 9</title>
</head>
<body>
    <form method="POST" action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <label for="nombre">Ingresa tu nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>