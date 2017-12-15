<center><h1>Pagina de agregar contacto.</h1></center>
<br />
<div class="container">
	<?php echo form_open(base_url() . 'Contacts/AgregarContacto'); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Nombre:</span>
				<input type="text" class="form-control" placeholder="Tu Nombre Aqui" name="nnombre" aria-describedby="basic-addon1">
			</div>
		</div>
	</div>

	<br />

	<div class="row">
		<div class="col-md-12">
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Direccion:</span>
				<input type="text" class="form-control" placeholder="Tu Direccion Aqui" name="ndireccion" aria-describedby="basic-addon1">
			</div>
		</div>
	</div>

	<br />

	<div class="row">
		<div class="col-md-12">
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Telefono:</span>
				<input type="text" class="form-control" placeholder="Tu Telefono Aqui" name="ntelefono" aria-describedby="basic-addon1">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<button type="submit" class="btn btn-success pull-right">Guardar</button>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<?php echo validation_errors(); ?>
		</div>
	</div>
	<?php echo form_close(); ?>
</div>