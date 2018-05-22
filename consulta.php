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
<script src="js/jquery-3.3.1.js"></script>
<script>
$(document).ready(function() {
	$('#switcher').on('click', function() {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","peticion_ajax.php",true);
        xmlhttp.send();
	});
});

</script>
</head>
<body>
<form action="peticion_ajax.php" method="post" id="switcher">
<input type="submit" value="Enviar">
</form>


<div id="txtHint"></div>
<footer>
          <div class="container-fluid espacio creditos">
          <a class="ligacreditos" href="index.php">Inicio</a>
                           <a class="ligacreditos" href="contacto.php">Contacto</a>
               
               <a class="ligacreditos" href="creditos.php">Creditos</a>
               </div>
            
</footer>

</body>
</html> 