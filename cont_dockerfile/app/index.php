<html>

<body>
<?php
$enlace = mysqli_connect("host.docker.internal", "root", "23!idsidh2838ewu", "Store","3333");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sqlQuery = "SELECT * from Products ORDER by id ASC";
$ob = mysqli_query($enlace,$sqlQuery);

#echo "Total de perritos: ".mysqli_num_rows($ob)."<br><br>";
for($i=0;$i<mysqli_num_rows($ob);$i++){
    echo "STORE: <br>";
    echo "ID del producto: ". $data["ID"]."<br> Nombre: (".$data["Name"].") <br> Costo: (".$data["Value"].")  <br>";
}

?>

</body>
</html>