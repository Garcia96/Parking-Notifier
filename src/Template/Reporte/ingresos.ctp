<title>
	Parking Notifier - Admin - Reportes
</title>
<div class="row">
	<div class="col-sm-6 col-sm-offset-2">
		<div class="page-header">
	  		
	  		<h2>Reporte de Ingresos</h2>
	  	</div>
	</div>
</div>
<div class="row">
<div class="col-sm-3 col-sm-offset-2">
	<div class="">
		<h5><b>Criterio</b>: Fecha</h5>
	  			<?php
	  			echo $this->Form->create();
	  			echo $this->Form->date('registered', [
			        'minYear' => 2018,
			        'maxYear' => date('Y'),
			        'monthNames' => true,
			        'empty' => [
			            'year' => false,
			            'month' => false
			        ],
			        'day' => false,
			        'year' => [
			            'class' => 'cool-years',
			            'title' => 'Registration Year'
			        ],
			        'required'
			    ]);
		  		 ?>
	</div><br>
	<div class="">
		<h5><b>Criterio:</b> Estado del ingreso</h5>
		<div class="btn-group" data-toggle="buttons">
		  <label class="btn btn-success active">
		    <input type="radio" name="validador" value="0" autocomplete="off" checked> Completado
		  </label>
		  <label class="btn btn-primary">
		    <input type="radio" name="validador" value="1" autocomplete="off"> No Completado
		  </label>
		</div><br><br>
			    <?php echo $this->Form->button('Enviar', ['class' => 'btn btn-danger']); ?>
	  			<?php echo $this->Form->end(); ?>
	</div>
</div>

<?php if (isset($ingresos)): ?>
<?php $a = null;
foreach ($ingresos as $noti) {
	$a+= count($noti->id);
} ?>
<?php if($a!=0): ?>
<div class="col-sm-5">
	<div class="table-responsive">
	  	<div>
	  		<?php echo $this->Form->postLink('Expor to PDF', ['action' => 'ingresos', '_ext' => 'pdf'], ['class' => 'btn btn-danger pull-right', 'target' => '_blanck', 'data' => ['registered' => $fecha, 'validador' => $validador]]); ?>
	  	</div>
	  <table class="table table-hover table-bordered table-striped">
	  	<thead>
	    	<tr>
	    		<th> <?= $this->Paginator->sort('id',['label' => 'Id']) ?></th>
	    		<th> <?= $this->Paginator->sort('entrada',['label' => 'Entrada']) ?></th>
	    		<th> <?= $this->Paginator->sort('salida', ['label' => 'Salida']) ?></th>
	    		<th> <?= $this->Paginator->sort('sucursal', ['label' => 'Sucursal']) ?></th>
	    	</tr>
	  	</thead>
	  	<tbody>
	    	<?php $i =0; 
	    	foreach ($ingresos as $noti):
	    	 ?>	    				
			<tr>
			  <td><?= $noti->id ?></td>
			  <td><?= $noti->entrada ?></td>
			  <td><?= $noti->salida  ?></td>
			  <td><?= $noti->sucursal->name ?></td>
			</tr>
	    	<?php $i++; 
	    	endforeach; ?>
	  	</tbody>
	  </table>
	</div>
</div>
<?php else: ?>
	<h4>No hay resultados de la busqueda</h4>
<?php endif; ?>
<?php else: ?>
	<h4>Esperando por criterio de busqueda</h4>
<?php endif; ?>
</div>