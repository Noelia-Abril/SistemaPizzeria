<?php
  require_once('conexion/conexion.php');	
  $pizzas = 'SELECT * FROM pizza ORDER BY PNombre ASC';	
	$pizza=$mysqli->query($pizzas);
  //include library
  if(isset($_POST['create_pdf']))
  {
      require_once('library/tcpdf.php');
      $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
	    $pdf->SetCreator(PDF_CREATOR);
      $pdf->SetAuthor('Divino Sapori');
      $pdf->SetTitle($_POST['reporte_name']);
      $pdf->setPrintHeader(false); 
      $pdf->setPrintFooter(false);
      $pdf->SetMargins(20, 20, 20, false); 
      $pdf->SetAutoPageBreak(true, 20); 
      $pdf->SetFont('Helvetica', '', 10,);
      //add page
      $pdf->AddPage();
//add content
$content = '';
	$content .= '
		<div class="row">
        	<div class="col-md-12">
            	<h1 style="text-align:center;">'.$_POST['reporte_name'].'</h1>
      <table border="1" cellpadding="5">
        <thead>
          <tr>
            <th>CÓDIGO</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>DESCRIPCIÓN</th>
            <th>EXISTENCIAS</th>
            <th>ESTADO</th>
          </tr>
        </thead>
	';
	while ($pz=$pizza->fetch_assoc()) { 
			if($pz['estado']=='Activo'){  $color= '#f5f5f5'; }else{ $color= '#fbb2b2'; }
	$content .= '
		<tr bgcolor="'.$color.'">
            <td>'.$pz['Cod_Pz'].'</td>
            <td>'.$pz['PNombre'].'</td>
            <td>'.$pz['Precio'].'</td>
            <td>'.$pz['Descripcion'].'</td>
            <td>'.$pz['Existencias'].'</td>
            <td>'.$pz['estado'].'</td>
        </tr>
	';
	}
	$content .= '</table>';
	
	$pdf->writeHTML($content, true, 0, true, 0);
	$pdf->lastPage();
//output
$pdf->Output('RPizzas.pdf','I'); 
}
?>

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Exportar a PDF - Pizzeria Divino Sapori</title>
<meta name="keywords" content="">
<meta name="description" content="">
<!-- Meta Mobil
================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid">
        <div class="row padding">
        	<div class="col-md-12">
            	<?php $h1 = "REPORTE DE PIZZAS";  
            	 echo '<h1>'.$h1.'</h1>'
				?>
            </div>
        </div>
    	<div class="row">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>CÓDIGO</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>DESCRIPCIÓN</th>
            <th>EXISTENCIAS</th>
            <th>ESTADO</th>
          </tr>
        </thead>
        <tbody>
        <?php 
			while ($pz=$pizza->fetch_assoc()) {   ?>
          <tr class="<?php if($pz['estado']=='Activo'){ echo 'active';}else{ echo 'danger';} ?>">
            <td><?php echo $pz['Cod_Pz']; ?></td>
            <td><?php echo $pz['PNombre']; ?></td>
            <td><?php echo $pz['Precio']; ?></td>
            <td><?php echo $pz['Descripcion']; ?></td>
            <td><?php echo $pz['Existencias']; ?></td>
            <td><?php echo $pz['estado']; ?></td>
          </tr>
         <?php } ?>
        </tbody>
      </table>
              <div class="col-md-12">
              	<form method="post">
                	<input type="hidden" name="reporte_name" value="<?php echo $h1; ?>">
                	<input type="submit" name="create_pdf" class="btn btn-danger pull-right" value="Generar PDF">
                </form>
              </div>
      	</div>
    </div>
</body>
</html>