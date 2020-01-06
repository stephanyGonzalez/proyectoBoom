<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">

    <title>Calculadora</title>
</head>
<body>
    <div class="resultado">
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
                <option value="suma">Sumar</option>
                <option value="resta">Restar</option>
                <option value="division">Dividir</option>
                <option value="multiplicacion">Multiplicar</option>

            </select>
            <p></p>
            <button>Calcular</button>

        </form>

    </div>

   
</body>
</html>