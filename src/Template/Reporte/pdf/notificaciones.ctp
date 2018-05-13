<div align="center">
	<h1>Reporte de Notificaciones</h1>
</div>
<?php $a = null;
foreach ($notificacion as $noti) {
  $a+= count($noti->id);
} 
foreach ($fecha as $f) {
  $mes = $f;
}
?>
<h4>Reporte: Mes: <?php echo " ".$mes." "; ?>Año: 2018</h4>
<h4>Total Notificaciones:<?php echo " ".$a; ?></h4>
<table border="1" width="100%" cellspacing="0">
<thead>
<tr">
	<th style="color: red;"> <?= 'Fecha' ?></th>
	<th style="color: red;"> <?= 'Usuario Origen' ?></th>
	<th style="color: red;"> <?= 'Usuario Destino' ?></th>
</tr>
</thead>
<tbody align="center">
<?php
foreach ($user1 as $holi) {
  $nombre1[]=$holi->name." ".$holi->lastName;
}foreach ($user2 as $holi2) {
  $nombre2[]=$holi2->name." ".$holi2->lastName;
}
$i = 0;
foreach ($notificacion as $noti):
 ?>	    				
<tr>
  <td><?= $noti->fecha?></td>
  <td><?= $nombre1[$i] ?></td>
  <td><?= $nombre2[$i] ?></td>
</tr>
<?php 
$i++;
endforeach; ?>
</tbody>
</table>
