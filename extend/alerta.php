<?php 
include '../config/conexion.php';
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link  href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.css" rel="stylesheet" >  
	<title>Proyecto</title>
</head>
<body>
<?php 
$mensaje=htmlentities($_GET['msj']);
$c=htmlentities($_GET['c']);
$p=htmlentities($_GET['p']);
$t=htmlentities($_GET['t']);
switch ($c) {
	case 'us':
		$carpeta='../usuarios/';
		break;
	case 'home':
		$carpeta='../inicio/';
		break;
	case 'salir':
		$carpeta='../';
		break;
	case 'pe':
		$carpeta='../perfil/';
		break;
	
	
}
switch ($p) {
	case 'in':
		$pagina='index.php';
		break;
	case 'home':
		$pagina='index.php';
		break;
	case 'salir':
		$pagina='';
		break;
	
}
$dir=$carpeta.$pagina;
if ($t=="error") {
	$titulo="Oppss....";
}else  {
	$titulo="Operacion exitosa";
}
?>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous">
  </script>
 <script  src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.js"> </script>	

<script>
	swal({
  title: '<?php echo $titulo; ?>',
  text: "<?php echo $mensaje; ?>",
  type: '<?php echo $t; ?>',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'Ok'
}).then(function () {
  location.href='<?php echo $dir; ?>';
});

$(document).click(function(){
	location.href='<?php echo $dir; ?>';
});

$(document).keyup(function(e){
if (e.which==27) {
location.href='<?php echo $dir; ?>';
}
});
</script>
</body>
</html>