<?php 

$conexion=mysqli_connect('127.0.0.1','u889522149_indigenas','123Indigenas.','u889522149_indigenas');

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="imagenes/favicon.ico">
    <title>Listado de Usuarios</title>
    <link rel="stylesheet" type= "text/css" href ="../css/style3.css">
	
	
    
	
</head>
<body>
	

	<!--Prueba de tabla -->
	<main class="table">
        <section class="table__header">
            <h1>Usuarios</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="../img/icon-search.svg" alt="">
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                    <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                    <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                    <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Usuario <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Nombre <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Apellido paterno <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Apellido materno <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Email <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Telefono <span class="icon-arrow">&UpArrow;</span></th>
						<th> Nivel <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
               
                 
				<?php 
				$sql="SELECT *  from usuarios where admin = 0 ";
				$result=mysqli_query($conexion,$sql);

				while($mostrar=mysqli_fetch_array($result)){
				 ?>
				<tr>
						<td > <?php echo $mostrar ['usuario']; ?> </td>
                        <td><img src="../img/profile3.svg" alt=""> <?php echo $mostrar ['nombre']; ?> </td>
                        <td> <?php echo $mostrar ['a_paterno']; ?> </td>
                        <td> <?php echo $mostrar ['a_materno']; ?></td>
                        <td>
                            <p class="status pending "><?php echo $mostrar ['email']; ?></p>
                        </td>
                        <td> <strong><?php echo $mostrar ['num_tel']; ?></strong> </td>
						<td> <strong><?php echo $mostrar ['id_nivel']; ?></strong> </td>
		
		
				</tr>
					<?php 
					}
					 ?>
                
                </tbody>
            </table>
			
        </section>
	
    </main>

    <!--Aquí termina la prueba de tabla -->
	<section>
	<div class="btn ">
            <a href="index.php"  type="button"  >Regresar al inicio</a>
             
        </div>
	</section>

        
              
          



<script src="../scripts/script.js">	</script>
</body>
</html>