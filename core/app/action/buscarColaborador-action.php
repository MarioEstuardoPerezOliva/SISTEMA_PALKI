
<?php if(isset($_GET["person"]) && $_GET["person"]!=""):?>
	<?php
$user = PersonData::getLike($_GET["person"]);
if(count($user)>0){
	?>
<h3>Resultados de la Busqueda</h3>
<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre </th>
			<th>Apellido</th>
			<th>Direccion</th>
			<th>Email</th>
			<th>Telefono</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name;?></td>
				<td><?php echo $user->lastname; ?></td>
				<td><?php echo $user->address1; ?></td>
				<td><?php echo $user->email1; ?></td>
				<td><?php echo $user->phone1; ?></td>
				<td style="width:130px;">
				<a href="index.php?view=editarperson&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-pencil"></i>   Editar</a>
				<a href="index.php?view=eliminarperson&id=<?php echo $user->id;?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>   Eliminar</a>
				</td>
				</tr>
				<?php

			}
			echo "</table>";



		}else{
			echo "<p class='alert alert-danger'>No hay persones</p>";
		}


		?>

<hr><br>
<?php else:
?>
<?php endif; ?>