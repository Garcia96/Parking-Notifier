<title>
	Parking Notifier - Admin - Reportes
</title>
<div class="col-sm-8 col-sm-offset-2">
	<div class="table-responsive">
	  <table class="table table-hover table-bordered table-striped">
	  	<div class="page-header">
	  		
	  	<?php echo $this->Html->link(__('Export to PDF'), ['action' => 'index', '_ext' => 'pdf'], ['class' => 'btn btn-danger pull-right', 'target' => '_blanck']); ?>
	  		<h2>Reporte de empleados</h2>
	  	</div>
	  	<thead>
	    	<tr>
	    		<th> <?= $this->Paginator->sort('codigo',['label' => 'codigo']) ?></th>
	    		<th> <?= $this->Paginator->sort('name',['label' => 'Nombre']) ?></th>
	    		<th> <?= $this->Paginator->sort('lastName',['label' => 'Apellido']) ?></th>
	    		<th> <?= $this->Paginator->sort('email', ['label' => 'email']) ?></th>
	    		<th> <?= $this->Paginator->sort('phone', ['label' => 'telefono']) ?></th>
	    		<th> <?= $this->Paginator->sort('active', ['label' => 'Activo']) ?></th>
	    		<th> <?= $this->Paginator->sort('role', ['label' => 'Rol']) ?></th>
	    	</tr>
	  	</thead>
	  	<tbody>
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
	</div>
</div>