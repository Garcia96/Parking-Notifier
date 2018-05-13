<title>
	Parking Notifier - Admin - Reportes
</title>
<div class="row">
	<div class="col-sm-6 col-sm-offset-2">
		<div class="page-header">
	  		
	  		<h2>Reporte de Notificaciones</h2>
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
			    echo $this->Form->button('Enviar', ['class' => 'btn btn-danger']);
	  			echo $this->Form->end();
		  		 ?>
	</div>
</div>

<?php if (isset($notificacion)): ?>
<?php $a = null;
foreach ($notificacion as $noti) {
	$a+= count($noti->id);
} ?>
<?php if($a!=0): ?>
<div class="col-sm-5">
	<div class="table-responsive">
	  	<div>
	  		<?php echo $this->Form->postLink('Expor to PDF', ['action' => 'notificaciones', '_ext' => 'pdf'], ['class' => 'btn btn-danger pull-right', 'target' => '_blanck', 'data' => ['registered' => $fecha]]); ?>
	  	</div>
	  <table class="table table-hover table-bordered table-striped">
	  	<thead>
	    	<tr>
	    		<th> <?= $this->Paginator->sort('id',['label' => 'Id']) ?></th>
	    		<th> <?= $this->Paginator->sort('fecha',['label' => 'Fecha']) ?></th>
	    		<th> <?= $this->Paginator->sort('user_id_origen', ['label' => 'Usuario origen']) ?></th>
	    		<th> <?= $this->Paginator->sort('user_id_destino', ['label' => 'Usuario destino']) ?></th>
	    	</tr>
	  	</thead>
	  	<tbody>
	  		<?php 
	  		if(isset($user1)){
	  		foreach ($user1 as $holi) {
	  			$nombre1[]=$holi->name;
	  		}foreach ($user2 as $holi2) {
	  			$nombre2[]=$holi2->name;
	  		}
	  		}
	  		?>
	    	<?php $i =0; 
	    	foreach ($notificacion as $noti):
	    	 ?>	    				
			<tr>
			  <td><?= $noti->id ?></td>
			  <td><?= $noti->fecha ?></td>
			  <td><?= $nombre1[$i]  ?></td>
			  <td><?= $nombre2[$i] ?></td>
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