<?php

class Executor {
    
	public static function doit($db, $sql){
	//print_r($sql);
		if(mysqli_query($db, $sql)){
		 echo '<head>
				<meta charset="UTF-8">
				<title>Administrar libros</title>
				<link rel="stylesheet" href="plugin/css/bootstrap.css">
	
				</head>
				<body>
				<H3>Registros actualizados correctamente....</H3>
				</body>';
         
		
                     
		 
        } else{
		  echo '<head>
				<meta charset="UTF-8">
				<title>Administrar libros</title>
				<link rel="stylesheet" href="plugin/css/bootstrap.css">
	
				</head>
				<body>
				<H3>ERROR: No fue posible ejecutar la sentencia SQL...</H3>
				</body>';
        
        }
		 echo'<A class="btn btn-link"  href="../index.php" ="muestra" role="buttom">Retorno...</A>';
		 
		
	}
}
?>