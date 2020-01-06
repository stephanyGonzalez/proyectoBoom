<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
</head>
<body>
    <form action="procesar.php" method="post">
        <label >valor 1</label>
        <p></p>
        <input type="text" name="valor1">
        <p></p>
        <label >valor 2</label>
        <p></p>
        <input type="text" name="valor2">
        <p></p>
        <select name="opcion" id="opcion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="divicion">Divicion</option>
            <option value="multiplicacion">Multiplicacion</option>

        </select>
        <p></p>
        <button>Calcular</button>

    </form>

   
</body>
</html>