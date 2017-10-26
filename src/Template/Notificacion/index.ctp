<title>
	Parking Notifier - Admin - notificaciones
</title>
<div class="col-sm-8 col-sm-offset-2">
	<div class="table-responsive">
	  <table class="table table-hover table-bordered table-striped">
	  	<div class="page-header">
	  		<h2>Notificaciones</h2>
	  	</div>
	  	<thead>
	    	<tr>
	    		<th> <?= $this->Paginator->sort('id',['label' => 'Id']) ?></th>
	    		<th> <?= $this->Paginator->sort('fecha',['label' => 'Fecha']) ?></th>
	    		<th> <?= $this->Paginator->sort('user_id_origen', ['label' => 'Usuario origen']) ?></th>
	    		<th> <?= $this->Paginator->sort('user_id_destino', ['label' => 'Usuario destino']) ?></th>
	    	</tr>
	  	</thead>
	  	<tbody>
	    	<?php foreach ($notificacion as $noti): ?>
			<tr>
			  <td><?= $noti->id ?></td>
			  <td><?= $noti->fecha ?></td>
			  <td><?= $noti->user_id_origen  ?></td>
			  <td><?= $noti->user_id_destino  ?></td>
			  <td class="actions">
			  	<?=  $this->Html->link(('Detalle'), array('controller' => 'Notificacion', 'action' => 'view', $noti->id), ['class' => 'btn btn-primary']); ?>
			  </td>
			</tr>
	    	<?php endforeach; ?>
	  	</tbody>
	  </table>
	  <div class="paginator">
	  	<ul class="pagination">
	  		<?= $this->Paginator->prev('< '. __('Anterior')) ?>
	  		<?= $this->Paginator->numbers() ?>
	  		<?= $this->Paginator->next(__('Siguiente') . ' >') ?>
	  	</ul>
	  	<p><?= $this->Paginator->counter('Página {{page}} de {{pages}}, mostrando {{current}} resultados de 
     {{count}} total(es)') ?></p>
	  </div>
	</div>
</div>