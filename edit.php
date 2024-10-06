<?php include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM task WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)==1)
    {
        $row = mysqli_fetch_array($result);
        $title =$row['title'];
        $descripcion =$row['descripcion'];
        
          
      
    }
}

if(isset($_POST['update'])){
    $id = $_GET['id'];
    $title = $_POST['title'];
    $descripcion = $_POST['descripcion'];

    $query ="UPDATE task SET title = '$title', descripcion = '$descripcion' WHERE id= $id";
    mysqli_query($conn, $query);

    $_SESSION['message'] = 'Registro  Actualizado Exitosamente';
     $_SESSION['message_type'] = 'warning';
    
     header("Location: index.php");
       
}

?>


<?php include("includes/header.php")?>

<div class="container p-4 ">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <!-- AQUI VA EL CARD -->
            <div class="car card-body">
            <form action="edit.php?id=<?php echo $_GET['id'] ;  ?>" method="POST">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Actualizar Titulo" value="<?php echo $title ?>">
                </div>
                <br><!-- Este es un salto de linea -->
                <div class="form-group">
                    <textarea name="descripcion" rows="2" class="form-control" placeholder="Actualizacion de Descripcion"><?php echo $descripcion ?></textarea>
                </div>
                <br>
               <button class="btn btn-success" name="update">Actualizar</button>
            </form>

         </div>
        </div>
        </div>
    </div>


</div>