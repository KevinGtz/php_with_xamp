<!DOCTYPE html>

<html lanf="es">
<head>
    <meta charset="utf-8">
	<title>Tabla con estilos</title>
    
    <style>
        
        table, th, td{
            border: 1px solid black;
            padding: 10px;
                
        }
        
        #t2,td{
            border-collapse: collapse;
        }
        
        #t2 th{
            background-color: black;
            color: snow;
            
        }
        
    </style>
    
</head>
<body>
    <h1>Ejemplo Tabla</h1>
    
    <!-- tabla -->
    <table id="t1">
        
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
        </tr>
        
       <tr>
            <td>Kevin</td>
            <td>Loyola</td>
            <td>24</td>
        </tr>
        
      <tr>
            <td>Melisa</td>
            <td>Loyola</td>
            <td>17</td>
        </tr>
        
    </table> 
    
    <br>
    
    <!-- tabla -->
    <table id="t2">
        
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
        </tr>
        
       <tr>
            <td>Kevin</td>
            <td>Loyola</td>
            <td>24</td>
        </tr>
        
      <tr>
            <td>Melisa</td>
            <td>Loyola</td>
            <td>17</td>
        </tr>
        
    </table>

    
</body>
</html>