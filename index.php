<!DOCTYPE html>
<html>
<head>
    <title>Docker Compose</title>
</head>
<body>
    <h1>En esta practica veremos como utilizar Docker Compose</h1>
    <h4>Harold Aquino 2021-1965</h4>
    <?php
        echo "<h2><bold>Hola Mundo desde Docker Compose</bold></h2>";
        $servername = getenv("MYSQL_HOST");
        $username = getenv("MYSQL_USER");
        $password = getenv("MYSQL_PASSWORD");
        $database = getenv("MYSQL_DATABASE");

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Conexión a MySQL fallida: " . $conn->connect_error);
        } else {
            echo "Conexión a MySQL exitosa!";
        }
    ?>
</body>
</html>