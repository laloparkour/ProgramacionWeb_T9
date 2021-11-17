<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 9</title>
</head>
<body>
    <form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <label for="edad">Ingresa tu edad:</label>
        <input type="text" name="edad" id="edad">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>