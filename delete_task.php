<?php
include("db.php");


if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM task WHERE id = $id";
    $result = mysqli_query($conn,$query);

    if(!$result){
        die("Consulta Fallida");
    }

    $_SESSION['message'] = 'Registro No. '  .$id = $_GET['id'].  ' Eliminado Exitosamente';
    $_SESSION['message_type'] = 'danger';

    header("Location: index.php");

}

?>
