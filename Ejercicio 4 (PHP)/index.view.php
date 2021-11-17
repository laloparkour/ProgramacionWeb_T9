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
        
        <label for="c1">Calificacion #1:</label>
        <input type="text" name="c1" id="c1">
        <br>
        
        <label for="c2">Calificacion #2:</label>
        <input type="text" name="c2" id="c2">
        <br>

        <label for="c3">Calificacion #3:</label>
        <input type="text" name="c3" id="c3">
        <br>

        <label for="c4">Calificacion #4:</label>
        <input type="text" name="c4" id="c4">
        <br>

        <label for="c5">Calificacion #5:</label>
        <input type="text" name="c5" id="c5">
        <br>

        <label for="c6">Calificacion #6:</label>
        <input type="text" name="c6" id="c6">
        <br>

        <label for="c7">Calificacion #7:</label>
        <input type="text" name="c7" id="c7">
        <br>

        <label for="c8">Calificacion #8:</label>
        <input type="text" name="c8" id="c8">
        <br>

        <label for="c9">Calificacion #9:</label>
        <input type="text" name="c9" id="c9">
        <br>

        <label for="c10">Calificacion #10:</label>
        <input type="text" name="c10" id="c10">
        <br>

        <button type="submit">Enviar</button>

    </form>
</body>
</html>