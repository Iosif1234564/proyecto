<!DOCTYPE html>
<html>
<head>
    <title>Escaneo de puertos</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h2>Escaneo de puertos</h2>
    <form method="POST" action="fondo.php">
        <label for="ip">IP:</label>
        <input type="text" id="ip" name="ip" required><br><br>
        <label for="start_port">Puerto inicial:</label>
        <input type="text" id="start_port" name="start_port" required><br><br>
        <label for="end_port">Puerto final:</label>
        <input type="text" id="end_port" name="end_port" required><br><br>
        <input type="submit" value="Escanear">
    </form>
</body>
</html>
