<div class="row">
	<div class="col-md-12">
	<a href="index.php?view=nuevoUsuario" class="btn btn-warning pull-right"><i class='glyphicon glyphicon-user'></i> Nuevo Usuario</a>
		<h1>Lista de Usuarios</h1>
<br>

		<?php

		$users = UserData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Nombre de usuario</th>
			<th>Email</th>
			<th>Activo</th>
			<th>Admin</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name; ?></td>
				<td><?php echo $user->lastname; ?></td>
				<td><?php echo $user->username; ?></td>
				<td><?php echo $user->email; ?></td>
				<td>
					<?php if($user->is_active):?>
						<i class="glyphicon glyphicon-ok"></i>
					<?php endif; ?>
				</td>
				<td>
					<?php if($user->is_admin):?>
						<i class="glyphicon glyphicon-ok"></i>
					<?php endif; ?>
				</td>
				<td style="width:30px;"><a href="index.php?view=editarUsuario&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-pencil"></i>   Editar</a></td>
				<td style="width:30px;"><a href="index.php?view=eliminaUsuario&id=<?php echo $user->id;?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>    Eliminar</a></td>
				</tr>
				<?php

			}
 echo "</table>";


		}else{
			// no hay usuarios
		}


		?>


	</div>
</div>