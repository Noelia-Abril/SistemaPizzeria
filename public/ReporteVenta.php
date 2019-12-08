<?php
  require_once('conexion/conexion.php');	
  $ventas = 'SELECT * FROM detalle ORDER BY IdDetalle ASC';	
	$venta=$mysqli->query($ventas);
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
            <th>Id</th>
            <th>Nº Pedido</th>
            <th>Cliente</th>
            <th>Pizza</th>
            <th>Ingrediente</th>
            <th>Cantidad</th>
            <th>Descuento</th>
            <th>SubTotal</th>
            <th>Fecha</th>
            <th>Total</th>
          </tr>
        </thead>
	';
	while ($v=$venta->fetch_assoc()) { 
	$content .= '
		<tr bgcolor="'.$color.'">
            <td>'.$v['IdDetalle'].'</td>
            <td>'.$v['Pedido_NumPedido'].'</td>
            <td>'.$v['NombreCliente'].'</td>
            <td>'.$v['NombrePizza'].'</td>
            <td>'.$v['NombreIngrediente'].'</td>
            <td>'.$v['Cant'].'</td>
            <td>'.$v['Descuento'].'</td>
            <td>'.$v['SubTotal'].'</td>
            <td>'.$v['Fecha'].'</td>
            <td>'.$v['Total'].'</td>
        </tr>
	';
	}
	$content .= '</table>';
	
	$pdf->writeHTML($content, true, 0, true, 0);
	$pdf->lastPage();
//output
$pdf->Output('RVentas.pdf','I'); 
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
            	<?php $h1 = "REPORTE DE VENTAS";  
            	 echo '<h1>'.$h1.'</h1>'
				?>
            </div>
        </div>
    	<div class="row">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nº Pedido</th>
            <th>Cliente</th>
            <th>Pizza</th>
            <th>Ingrediente</th>
            <th>Cantidad</th>
            <th>Descuento</th>
            <th>SubTotal</th>
            <th>Fecha</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
        <?php 
			while ($v=$venta->fetch_assoc()) {   ?>
          <tr>
            <td><?php echo $v['IdDetalle']; ?></td>
            <td><?php echo $v['Pedido_NumPedido']; ?></td>
            <td><?php echo $v['NombreCliente']; ?></td>
            <td><?php echo $v['NombrePizza']; ?></td>
            <td><?php echo $v['NombreINgrediente']; ?></td>
            <td><?php echo $v['Cant']; ?></td>
            <td><?php echo $v['Descuento']; ?></td>
            <td><?php echo $v['SubTotal']; ?></td>
            <td><?php echo $v['Fecha']; ?></td>
            <td><?php echo $v['Total']; ?></td>
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