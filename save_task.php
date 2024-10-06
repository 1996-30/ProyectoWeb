<?php  
include("db.php");

if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $descripcion = $_POST['description'];
    echo "El titulo Ingresado es: " .$title.    "<br>";
    echo "La Descripcion Ingresada es:" .$descripcion;

    $query = "INSERT INTO task(title, descripcion) VALUES ('$title', '$descripcion')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Error en la consulta");

    }

    $_SESSION['message'] = 'Tarea registrada con exito';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}
    ?>