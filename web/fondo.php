<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./estilos.css">
</head>

<body>
    <div class="context">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ip = $_POST["ip"];
            $startPort = $_POST["start_port"];
            $endPort = $_POST["end_port"];
    
            // Ejecutar el comando Nmap
            $command = "nmap -p $startPort-$endPort $ip";
            $output = shell_exec($command);
        ?>
            <div id="console"></div>
            <script>
                displayOutput();
            </script>
        <?php } ?>
    </div>


    <div class="area">
        <ul class="circles">
            <li class="anim"></li>
            <li class="anim"></li>
            <li class="anim"></li>
            <li class="anim"></li>
            <li class="anim"></li>
            <li class="anim"></li>
            <li class="anim"></li>
            <li class="anim"></li>
            <li class="anim"></li>
            <li class="anim"></li>
        </ul>
    </div>



</body>

</html>
