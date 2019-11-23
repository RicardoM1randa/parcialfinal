<?php
	// include Database connection file 
	include("database.php");
	// Especificamos el diseño de la tabla donde se cargaran los datos
     $data = '<table class="striped responsive-table centered">
        <thead>
            <tr>
                <th class="grey darken-4 white-text">Titulo</th>
                <th class="grey darken-4 white-text">Album</th>
                <th class="grey darken-4 white-text">Genero</th>
                <th class="grey darken-4 white-text">Duracion</th>
                <th class="grey darken-4 white-text">Artista</th>
                <th class="grey darken-4 white-text">Año</th>
                <th class="grey darken-4 white-text">Acciones</th>
            </tr>
        </thead>';

	$query = "SELECT * FROM cancion";
    $params = null;
	$result = Database::getRows($query, $params);
    // if query results contains rows then featch those rows 
    if($result != null)
    {
    	$number = 1;
    	foreach($result as $row)
    	{
    		$data .= '<tr>
                <td>'.$row['titulo'].'</td>
                <td>'.$row['album'].'</td>
                <td>'.$row['genero'].'</td>
                <td>'.$row['duracion'].'</td>
                <td>'.$row['artista'].'</td>
                <td>'.$row['año'].'</td>
				<td> 
				<a onclick="loadsong('.$row['id'].')" class="blue-text"><i class="material-icons">edit</i></a>
				<a href="#" onclick="deletesong('.$row['id'].')" class="red-text"><i class="material-icons">delete</i>
				</td>
    		</tr>';
    		$number++;
    	}        
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Datos no encontrados</td></tr>';
    }
    $data .= '</table>';
    echo $data;
?>