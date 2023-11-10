<?php
include "../../conexion.php";

$id = $_REQUEST ["id_Impuesto"];

echo "El ID a borrar es: " .$id;

$borrar = "DELETE FROM Impuesto WHERE id_Impuesto = $id";

mysqli_query($conexion,$borrar);
?>
<script type="text/javascript">window.location.replace("principal_impuesto.php")</script>