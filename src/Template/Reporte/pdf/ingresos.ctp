<div align="center">
	<h1>Reporte de Ingresos</h1>
</div>
<?php $a = null;
foreach ($ingresos as $noti) {
  $a+= count($noti->id);
} 
foreach ($fecha as $f) {
  $mes = $f;
}
?>
<h4>Reporte: Mes: <?php echo " ".$mes." "; ?>Año: 2018</h4>
<?php if ($validador == 0): ?>
<h4>Total Ingresos completados:<?php echo " ".$a; ?></h4>
<?php else: ?>
<h4>Total Ingresos no completados:<?php echo " ".$a; ?></h4>
<?php endif ?>
<table border="1" width="100%" cellspacing="0">
<thead>
<tr">
	<th style="color: red;"> <?= 'Entrada' ?></th>
	<th style="color: red;"> <?= 'Salida' ?></th>
	<th style="color: red;"> <?= 'Sucursal' ?></th>
</tr>
</thead>
<tbody align="center">
<?php
$i = 0;
foreach ($ingresos as $noti):
 ?>	    				
<tr>
  <td><?= $noti->entrada?></td>
  <td><?= $noti->salida?></td>
  <td><?= $noti->sucursal->name?></td>
</tr>
<?php 
$i++;
endforeach; ?>
</tbody>
</table>
