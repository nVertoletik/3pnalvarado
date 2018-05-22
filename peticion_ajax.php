
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-grid.css" >
		<link rel="stylesheet" href="css/bootstrap-grid.min.css" >
		<link rel="stylesheet" href="css/bootstrap-reboot.css" >
		<link rel="stylesheet" href="css/bootstrap-reboot.min.css" >
		<link rel="stylesheet" href="css/bootstrap.css" >
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/estilos.css">
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

include_once("conexion.php");
$result = consulta("SELECT nombre, apaterno, amaterno, telefono, correo, usuario FROM usuarios order by apaterno");
echo '<table><tr>
    <th>Nombre</th>
    <th>Apellido Paterno</th>
    <th>Apellido Materno</th>
    <th>Telefono</th>
    <th>Correo</th>
    <th>Usuario</th>
</tr>';
for ($i=0; $i < sizeof($result); $i++) { 
    echo '<tr>';
    echo '<td>'.$result[$i]['nombre'].'</td>';
    echo '<td>'.$result[$i]['apaterno'].'</td>';
    echo '<td>'.$result[$i]['amaterno'].'</td>';
    echo '<td>'.$result[$i]['telefono'].'</td>';
    echo '<td>'.$result[$i]['correo'].'</td>';
    echo '<td>'.$result[$i]['usuario'].'</td>';
    echo '</tr>';
}
echo '</table>';
?>

<footer>
          <div class="container-fluid espacio creditos">
          <a class="ligacreditos" href="index.php">Inicio</a>
                           <a class="ligacreditos" href="contacto.php">Contacto</a>
               
               <a class="ligacreditos" href="creditos.php">Creditos</a>
               </div>
            
</footer>
</body>
</html> 