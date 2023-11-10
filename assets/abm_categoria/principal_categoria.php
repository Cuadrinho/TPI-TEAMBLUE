<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
    <script src="https://kit.fontawesome.com/d5d0dffee6.js" crossorigin="anonymous"></script>
   <style>
     body{
        margin: 0;
        padding: 0;
        position: relative;
        font-family: poppins;
     }
     
     h1{
        width: 200px;
        margin: 50px auto;
        height: 4px;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        position: relative;

     }
        .formuraio {
            margin: 150px auto;
            width: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
        }

       
        .table {
            border: 2px solid black;
            padding: 20px;
        }

        

       .table th, td{
            padding: 15px;
            background-color: #552531;
            border-bottom: solid 5px ##76373a;
            color: white;
        }

        i{
            margin: 5px ;
            width: -10px;
        }

    </style>
    <body>

    <h1>Tabla Mozo</h1>
    <div class="col-8 p-4 formuraio">
    <div class="container">
            <div class="col-sm-12"><div>
            <button type="button" class="btn btn-success" data-toggle="modalD" data-target="#user"><span class="glyphicon glyphicon-plus"></span> Añadir <i class="fa fa-user-plus"></i></button>
        </div><br>
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Acciones</th>
                </tr>
         </thead>
         
            <tbody>
            <?php
                include "../../conexion.php";
                
                $sql1 = "SELECT * FROM categoria WHERE id_categoria IS NOT NULL ORDER BY id_categoria ASC";
                $consulta1 = mysqli_query($conexion, $sql1);
                if ($consulta1) {
                    while ($datos = mysqli_fetch_array($consulta1)) {
                        $id = $datos["id_categoria"];
                        $nombre = $datos["Nombre"];
                        $descripcion = $datos["Descripcion"];
                        echo "<tr>";
                        echo "<td>".$id."</td>";
                        echo "<td>".$nombre."</td>";
                        echo "<td>".$descripcion."</td>";
                        echo "<td>";
                        echo '<i class="fa-regular fa-pen-to-square" style="color: #511f1f;"></i>';
                        echo '<i class="fa-solid fa-trash" style="color: #511f1f;" ></i>';
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "Error en la consulta: " . mysqli_error($conexion);
                }
            ?>
            </tbody>
    </table> 
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></div>
</div>

</body>
</html>