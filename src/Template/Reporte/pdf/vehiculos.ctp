<div align="center">
	<h1>Reporte de vehículos</h1>
</div>
<?php 
$a =  null;
foreach ($carros as $carro) {
  $a += count($carro->id);
}
?>
<h3>Carros: <?php echo $a ?></h3>
<?php if ($a != 0): ?>
  
<table border="1" width="100%" cellspacing="0">
<thead>
<tr">
  <th style="color: red;"> <?= 'Placa' ?></th>
  <th style="color: red;"> <?= 'Marca' ?></th>
  <th style="color: red;"> <?= 'Empleado' ?></th>
</tr>
</thead>
<tbody align="center">
<?php
foreach ($carros as $noti):
 ?>             
<tr>
  <td><?= $noti->placa?></td>
  <td><?= $noti->marca ?></td>
  <td><?= $noti->user->name." ".$noti->user->lastName ?></td
</tr>
<?php 
endforeach; ?>
</tbody>
</table>
<?php else: ?>
<h4>No hay carros registrados</h4>
<?php endif ?>

<br>

<?php 
$e =  null;
foreach ($motos as $moto) {
  $e += count($moto->id);
}
?>
<h3>Motos: <?php echo $e ?></h3>
<?php if ($e != 0): ?>
  
<table border="1" width="100%" cellspacing="0">
<thead>
<tr">
  <th style="color: red;"> <?= 'Placa' ?></th>
  <th style="color: red;"> <?= 'Marca' ?></th>
  <th style="color: red;"> <?= 'Empleado' ?></th>
</tr>
</thead>
<tbody align="center">
<?php
foreach ($motos as $noti):
 ?>             
<tr>
  <td><?= $noti->placa?></td>
  <td><?= $noti->marca ?></td>
  <td><?= $noti->user->name." ".$noti->user->lastName ?></td>
</tr>
<?php 
endforeach; ?>
</tbody>
</table>
<?php else: ?>
<h4>No hay carros registrados</h4>
<?php endif ?>
