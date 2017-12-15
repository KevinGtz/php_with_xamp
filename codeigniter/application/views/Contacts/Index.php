<center><h1>Pagina principal del controlador contactos.</h1></center>
<br />
<div class="container">
	<div class="row">
		<div class="col-md-6">
		    <center>
					<?php
				foreach ($query as $row) {
				 echo $row->ID . "<br />";
				 echo $row->Nombre . "<br />";
				 echo $row->Direccion . "<br />";
				 echo $row->Telefono . "<br />";
				}
			?>
			</center>
		</div>
	</div>
</div>