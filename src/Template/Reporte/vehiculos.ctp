<title>
	Parking Notifier - Admin - Reportes
</title>
<div class="col-sm-8 col-sm-offset-2">
  	<div class="page-header">
  		
  	<?php echo $this->Html->link(__('Export to PDF'), ['action' => 'vehiculos', '_ext' => 'pdf'], ['class' => 'btn btn-danger pull-right', 'target' => '_blanck']); ?>
  		<h2>Reporte de vehículos</h2>
  	</div>
	<?php $a =null; ?>
	<?php foreach ($carros as $carro): ?>
		<?php $a += count($carro->id) ?>
	<?php endforeach ?>
	<h3>Carros</h3>
	<?php if ($a != 0): ?>
		
	<div class="table-responsive">
	  <table class="table table-hover table-bordered table-striped">
	  	<thead>
	    	<tr>
	    		<th> <?= $this->Paginator->sort('id',['label' => 'Id']) ?></th>
	    		<th> <?= $this->Paginator->sort('placa',['label' => 'Placa']) ?></th>
	    		<th> <?= $this->Paginator->sort('marca',['label' => 'Marca']) ?></th>
	    		<th> <?= $this->Paginator->sort('user_id', ['label' => 'Empleado']) ?></th>
	    	</tr>
	  	</thead>
	  	<tbody>
	    	<?php
	    	foreach ($carros as $noti):
	    	 ?>	    				
			<tr>
			  <td><?= $noti->id ?></td>
			  <td><?= $noti->placa?></td>
			  <td><?= $noti->marca ?></td>
			  <td><?= $noti->user->name." ".$noti->user->lastName ?></td>
			</tr>
	    	<?php 
	    	endforeach; ?>
	  	</tbody>
	  </table>
	</div>
	<?php else: ?>
		<h4>No hay carros registrados</h4>
	<?php endif ?>

	<?php $e =null; ?>
	<?php foreach ($motos as $moto): ?>
		<?php $e += count($moto->id) ?>
	<?php endforeach ?>
	<h3>Motos</h3>
	<?php if ($e != 0): ?>
		
	<div class="table-responsive">
	  <table class="table table-hover table-bordered table-striped">
	  	<thead>
	    	<tr>
	    		<th> <?= $this->Paginator->sort('id',['label' => 'Id']) ?></th>
	    		<th> <?= $this->Paginator->sort('placa',['label' => 'Placa']) ?></th>
	    		<th> <?= $this->Paginator->sort('marca',['label' => 'Marca']) ?></th>
	    		<th> <?= $this->Paginator->sort('user_id', ['label' => 'Usuario']) ?></th>
	    	</tr>
	  	</thead>
	  	<tbody>
	    	<?php
	    	foreach ($motos as $noti):
	    	 ?>	    				
			<tr>
			  <td><?= $noti->id ?></td>
			  <td><?= $noti->placa?></td>
			  <td><?= $noti->marca ?></td>
			  <td><?= $noti->user->name." ".$noti->user->lastName ?></td>
			</tr>
	    	<?php 
	    	endforeach; ?>
	  	</tbody>
	  </table>
	</div>
	<?php else: ?>
		<h4>No hay motos registrados</h4>
	<?php endif ?>

</div>