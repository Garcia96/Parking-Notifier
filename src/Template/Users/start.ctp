<title>
	Parking Notifier
</title>
<div class="row">
	<div class="jumbotron">
		
	<div class="col-sm-12 "> 
		<div class="col-sm-5 col-sm-offset-1">
			<div class="page-header">
				<h1>Parking Notifier</h1>
			</div> 
			<div>
				<h3 align="justify" style="vertical-align: middle;">
				Con nuestro sistema de notificación podrás infomar a los usuarios del parqueadero de alguna eventualidad con el vehículo.<br><br> 
				También se llevara el registro de ingresos y salidas, permitiendo tener un control del acceso diario al establecimiento o institución.<br><br>
				Solamente teniendo un tarjeta de identificación y un código de barras para cada usuario ya estaría listo para esar Parking Notifier<br><br>
				Es un sistema bastante intuitivo, por lo que no habrá problemas con su uso
				</h3>
			</div>
		</div>
		<div class="col-sm-5" style="padding:0%; height:150%">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active" style="background-color: #777"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1" style="background-color: #777"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2" style="background-color: #777"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="3" style="background-color: #777"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active"  style="height:150%" >
			      <?php echo $this->Html->image("logoslide.PNG", ["alt" => "primera", 'class' => 'img-responsive']) ?>
			      <div class="carousel-caption">
			       
			      </div>
			    </div>
			    <div class="item" style="height:150%">
			      <?php echo $this->Html->image("primera.PNG", ["alt" => "primera"]) ?>
			      <div class="carousel-caption">
			        <a href="https://www.freepik.es/fotos-vectores-gratis/coche">Coche de vector creado por Freepik</a>
			      </div>
			    </div>
			    <div class="item" style="height:150%">
			      <?php echo $this->Html->image("segunda.PNG", ["alt" => "segunda"]) ?>
			      <div class="carousel-caption">
			        <a href='https://www.freepik.es/vector-gratis/mano-tenencia-identificacion-tarjeta_1355365.htm'>Designed by Freepik</a>
			      </div>
			    </div>
			  <div class="item" style="height:150%">
			      <?php echo $this->Html->image("tercera.PNG", ["alt" => "tercera"]) ?>
			      <div class="carousel-caption">
			        <a href='https://www.freepik.es/vector-gratis/fondo-con-notificacionde-mensaje_1307935.htm'>Designed by Freepik</a>
			      </div>
			    </div> 
				</div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" >
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" ></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>

		</div>
	</div>
	</div>
</div>
<br><br><br>
<div class="row">
	<div class="panel panel-default" style="height: 600px; margin-bottom: -100px;">
		<div class="panel-body">
			<div class="col-sm-4 col-sm-offset-4">
				<br><br>
				<div class="page-header">
					<h2 align="center">
					Contáctenos 
				</h2>
				</div>
				<br>
			</div>
			<div class="col-sm-4 col-sm-offset-2">	
				
				  <div class="form-group">
				   <?php echo $this->Form->input('Email', ['label' => 'Email','placeholder' => 'Email']);?>
				   </div>
				  <div class="form-group">
				     <?php echo $this->Form->input('Nombre', ['label' => 'Nombre','placeholder' => 'Nombre']);?>
				  </div>
			</div>
			<div class="col-sm-4">
				<label for="labeltextarea">Asunto</label>
			    <?php echo $this->Form->textarea('Asunto', ['placeholder' => 'Asunto','id'=>'labeltextarea', 'style' => 'resize: none; ']);?><br>
			</div>
			<div class="col-sm-4 col-sm-offset-4">
			  	<?= $this->Form->button('Enviar',['class' => 'btn btn-danger btn-block  center-block']) ?>
			</div>
		</div>
	</div>
</div>