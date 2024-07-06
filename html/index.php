<?php
# El servername "db" es el nombre que tiene el servicio de mysql en el
# docker-compose.yml
# También puede colocarse la ip que genera el comando:
# 
# docker inspect -f '{{.Name}} - {{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' $(docker ps -aq)
# 
$servername = "db:3306";
$username = "root";
$password = "root123";

try {
  $conn = new PDO("mysql:host=$servername;dbname=recetario", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>HOLA MUNDO</p>
</body>
</html>