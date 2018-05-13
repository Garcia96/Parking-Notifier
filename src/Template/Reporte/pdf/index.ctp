<div align="center">
	<h1>Reporte de empleados</h1>
</div>
<table border="1" width="100%" cellspacing="0">
<thead>
<tr">
	<th style="color: red;"> <?= 'Codigo' ?></th>
	<th style="color: red;"> <?= 'Nombre' ?></th>
	<th style="color: red;"> <?= 'Apellido' ?></th>
	<th style="color: red;"> <?= 'email' ?></th>
	<th style="color: red;"> <?= 'Telefono' ?></th>
	<th style="color: red;"> <?= 'Activo' ?></th>
	<th style="color: red;"> <?= 'Rol'?></th>
</tr>
</thead>
<tbody align="center">
<?php
foreach ($reporte as $noti):
 ?>	    				
<tr>
  <td><?= $noti->codigo ?></td>
  <td><?= $noti->name?></td>
  <td><?= $noti->lastName ?></td>
  <td><?= $noti->email ?></td>
  <td><?= $noti->phone ?></td>
  <?php if($noti->active = true): ?>
  <td><?= "SI" ?></td>
  <?php else: ?>
  <td><?= "NO" ?></td>
  <?php endif; ?>
  <td><?= $noti->role ?></td>
</tr>
<?php 
endforeach; ?>
</tbody>
</table>
