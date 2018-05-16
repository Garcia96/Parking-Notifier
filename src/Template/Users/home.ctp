<title>
	Parking Notifier - <?= $current_user['role'] ?> - home
</title>

<?php if (isset($current_user['role']) && $current_user['role'] === 'sa'): ?>
	<?php 
		$i=$e=$p=$u=$LO=$AS=$VE=$BA=0;
		foreach ($evento as $eve) {
		    if($eve->id == 1){
		    	$LO ++;
		    }elseif($eve->id == 2){
		    	$AS ++;
		    }elseif($eve->id == 3) {
		    	$VE ++;
		    }elseif($eve->id == 4){
		    	$BA ++;
		    }
		    $i++;
		}

		foreach ($cu as $c) {
			if($c->company_id == 1){
				$p ++;
			}elseif($c->company_id == 2){
				$u ++;
			}
			$e++;
		}


	 ?>
	<div style="display: none;">
		<?php 
		echo $this->Form->input($LO, ['id' => 'LO', 'value' => $LO]);
		echo $this->Form->input($AS, ['id' => 'AS', 'value' => $AS]);
		echo $this->Form->input($VE, ['id' => 'VE', 'value' => $VE]);
		echo $this->Form->input($BA, ['id' => 'BA', 'value' => $BA]);
		echo $this->Form->input($i, ['id' => 'count', 'value' => $i]);
		 ?>
	</div>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="page-header">
				<h1>Lo Más Notificado</h1>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3 col-sm-offset-2">
			<div class="panel panel-success">
			  <div class="panel-heading">
			    <h4>Llaves olvidadas</h4>
			  </div>
			  <div class="panel-heading">
			    <h4>Alarma Sonando</h4>
			  </div>
			  <div class="panel-heading">
			    <h4>Vehículo encendido</h4>
			  </div>
			  <div class="panel-heading">
			    <h4>Baúl abierto</h4>
			  </div>
			</div>
		</div>
		<div class="col-sm-2 ">
			<div class="panel panel-info">
			  <div class="panel-heading">
			    <h4><?php echo $LO ?></h4>
			  </div>
			  <div class="panel-heading">
			    <h4><?php echo $AS ?></h4>
			  </div>
			  <div class="panel-heading">
			    <h4><?php echo $VE ?></h4>
			  </div>
			  <div class="panel-heading">
			    <h4><?php echo $BA ?></h4>
			  </div>
			</div>
		</div>
		<div class="col-sm-5 col-sm-offset-2 ">
			<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h4>Total eventos notificados: <?php echo $i ?> hasta: <?php echo date('Y-m-d') ?></h4>
			  </div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="page-header">
				<h1>Usuarios por empresa</h1>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3 col-sm-offset-2">
			<div class="panel panel-success">
			  <div class="panel-heading">
			    <h4>Parking Notifier</h4>
			  </div>
			</div>
			<div class="panel panel-info">
			  <div class="panel-heading">
			    <h4>Universidad Distrital Franciso Jose de Caldas</h4>
			  </div>
			</div>
		</div>
		<div class="col-sm-2 ">
			<div class="panel panel-success">
			  <div class="panel-heading">
			    <h4><?php echo $p ?></h4>
			  </div>
			</div>
			<div class="panel panel-info">
			  <div class="panel-heading">
			    <h4><?php echo $u ?></h4>
			  </div>
			</div>
		</div>
		<div class="col-sm-5 col-sm-offset-2 ">
			<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h4>Total usuarios: <?php echo $e ?> hasta: <?php echo date('Y-m-d') ?></h4>
			  </div>
			</div>
		</div>
	</div>

<?php endif ?>

<?php if (isset($current_user['role']) && $current_user['role'] === 'admin'): ?>

	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div role="tabpanel">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#staff" aria-controls="usuarios" role="tab" data-toggle="tab">Staff</a></li>
					<li role="presentation"><a href="#usuarios" aria-controls="staff" role="tab" data-toggle="tab">Usuarios</a></li>
				</ul>

				<div class="tab-content">
				    <div role="tabpanel" class="tab-pane active" id="staff">
				    	<div class="table-responsive">
						  <table class="table table-hover table-bordered table-striped">
						  	<div class="page-header">
						  		<h3>Lista de usuarios staff</h3>
						  	</div>
						  	<thead>
						    	<tr>
						    		<th> <?= $this->Paginator->sort('codigo',['label' => 'Código']) ?></th>
						    		<th> <?= $this->Paginator->sort('name',['label' => 'Nombre']) ?></th>
						    		<th> <?= $this->Paginator->sort('lastName', ['label' => 'Apellidos']) ?></th>
						    		<th> <?= $this->Paginator->sort('email', ['label' => 'Correo']) ?></th>
						    	</tr>
						  	</thead>
						  	<tbody>
						    	<?php foreach ($staff as $user): ?>
								<tr>
								  <td><?= $user->codigo ?></td>
								  <td><?= $user->name ?></td>
								  <td><?= $user->lastName ?></td>
								  <td><?= $user->email ?></td>
								  <td class="actions">
								  	<?=  $this->Html->link(('Detalle'), array('controller' => 'Users', 'action' => 'view2', $user->id), ['class' => 'btn btn-primary']); ?>
								  </td>
								</tr>
						    	<?php endforeach; ?>
						  	</tbody>
						  </table>
						</div>
						<div class="pull-right">
							<?php echo $this->Html->link('Nuevo encargado de seguridad', array('controller' => 'Users', 'action' => 'add3'), ['class' => 'btn btn-danger']); ?>
						</div>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="usuarios">
				    	<div class="table-responsive">
						  <table class="table table-hover table-bordered table-striped">
						  	<div class="page-header">
						  		<h3>Lista de usuarios</h3>
						  	</div>
						  	<thead>
						    	<tr>
						    		<th> <?= $this->Paginator->sort('codigo',['label' => 'Código']) ?></th>
						    		<th> <?= $this->Paginator->sort('name',['label' => 'Nombre']) ?></th>
						    		<th> <?= $this->Paginator->sort('lastName', ['label' => 'Apellidos']) ?></th>
						    		<th> <?= $this->Paginator->sort('email', ['label' => 'Correo']) ?></th>
						    	</tr>
						  	</thead>
						  	<tbody>
						    	<?php foreach ($users as $user): ?>
								<tr>
								  <td><?= $user->codigo ?></td>
								  <td><?= $user->name ?></td>
								  <td><?= $user->lastName ?></td>
								  <td><?= $user->email ?></td>
								  <td class="actions">
								  	<?=  $this->Html->link(('Detalle'), array('controller' => 'Users', 'action' => 'view2', $user->id), ['class' => 'btn btn-primary']); ?>
								  </td>
								</tr>
						    	<?php endforeach; ?>
						  	</tbody>
						  </table>
						</div>
				    </div>
				 </div>	
			</div>
			
		</div>
	</div>
	
<?php endif ?>

<?php if (isset($current_user['role']) && $current_user['role'] === 'user'): ?>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="table-responsive">
			  <table class="table table-hover table-bordered table-striped">
			  	<div class="page-header">
			  		<h3>Tus notificaciones</h3>
			  	</div>
			  	<thead>
			    	<tr>
			    		<th> <?= $this->Paginator->sort('id',['label' => 'ID']) ?></th>
			    		<th> <?= $this->Paginator->sort('fecha',['label' => 'Fecha']) ?></th>
			    	</tr>
			  	</thead>
			  	<tbody>
			    	<?php foreach ($notify as $noti): ?>
			    		<?php foreach ($noti->notificacion as $key): ?>
					<tr>
					  <td><?= $key->id ?></td>
					  <td><?= $key->fecha ?></td>
					  <td class="actions">
					  	<?=  $this->Html->link(('Detalle'), array('controller' => 'notificacion', 'action' => 'view2', $key->id), ['class' => 'btn btn-primary']); ?>
					  </td>
					</tr>
			    		<?php endforeach ?>
			    	<?php endforeach; ?>
			  	</tbody>
			  </table>
			</div>
		</div>
	</div>
<?php endif ?>
