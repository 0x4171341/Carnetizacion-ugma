<?php 
  class Crud
{
    public $insertInto;
    public $insertColumns;
    public $insertValues;
    public $mensaje;
    public $rows;
  
//////////////////////////////////////////// VIEW RESPECTIVOS //////////////////////////////////////////////////////////

  public function read()
  {
    $modelo = new Stock();
    $conexion = $modelo->conec();
    $sql = "SELECT * FROM estudiantes";

    $consulta = $conexion->prepare($sql);
    $consulta->execute();

    while ($filas = $consulta->fetch())
    {
      $this->rows[] = $filas;
    }
  }

   public function get_search($ce)
  {
    $modelo = new Stock();
    $conexion = $modelo->conec();
    $sql = "SELECT * FROM estudiantes a 
    INNER JOIN representantes b
    ON a.cir = b.cedula
    WHERE a.cir =".$ce."";

    $consulta = $conexion->prepare($sql);
    $consulta->execute();

    while ($filas = $consulta->fetch())
    {
      $this->rows[] = $filas;
    }
  }
//////////////////////////////////////// INSERT RESPECTIVOS //////////////////////////////////////////////////////////
  
  public function insert_desktop()
  {
    $model = new Stock();
    $conexion = $model->conec();
    $sql = "INSERT INTO estudiantes VALUES('".$_POST['nombres']."','".$_POST['apellidos']."','".$_POST['edad']."','".$_POST['fecha']."','".$_POST['direccion']."','".$_POST['telefono']."','".$_POST['matricula']."','".$_POST['grado']."','".$_POST['seccion']."','".$_POST['turno']."','".$_POST['cir']."')";
    $consulta = $conexion->prepare($sql);
    $consulta->execute();

  }

  public function insert_monitor()
  {
    $model = new Stock();
    $conexion = $model->conec();
    $sql = "INSERT INTO representantes VALUES('".$_POST['cir']."','".$_POST['nombres']."','".$_POST['apellidos']."','".$_POST['direccion']."','".$_POST['telefono']."','".$_POST['fecha']."','".$_POST['edad']."')";
    $consulta = $conexion->prepare($sql);
    $consulta->execute();
      
  }

//////////////////////////////////////// UPDATE RESPECTIVOS //////////////////////////////////////////////////////////
 
   public function update_user()
  {
    $model = new Stock();
    $conexion = $model->conec();
   
     $sql = "UPDATE estudiantes SET nombres= '".$_POST["nombres"]."', apellidos= '".$_POST["apellidos"]."', edad= '".$_POST["edad"]."',fecha= '".$_POST["fecha"]."',direccion= '".$_POST["direccion"]."',telefono= '".$_POST["telefono"]."',matricula= '".$_POST["matricula"]."',grado= '".$_POST["grado"]."',seccion= '".$_POST["seccion"]."',turno= '".$_POST["turno"]."' WHERE cir= '" . $_POST["cir"] . "'";
    $consulta = $conexion->prepare($sql);
    $consulta->execute();

     if ($sql==true or $sql==false) {
         $sqlc = "UPDATE representantes SET cedula= '".$_POST["cir"]."',rnombres= '".$_POST["rnombres"]."', rapellidos= '".$_POST["rapellidos"]."', redad= '".$_POST["redad"]."',rfecha= '".$_POST["rfecha"]."',direccion= '".$_POST["direccion"]."',rtelefono= '".$_POST["rtelefono"]."' WHERE cedula= '" . $_POST["cir"] . "'";
         $consulta = $conexion->prepare($sqlc);
         $consulta->execute();
      }
   
    while ($viewup = $consulta->fetch())
    {
      $this->rows[] = $viewup;
    }
  } 

//////////////////////////////////////// DELETE RESPECTIVOS //////////////////////////////////////////////////////////

   public function delete_user()
  {
    $model = new Stock();
    $conexion = $model->conec();
   
     $sql = "DELETE FROM estudiantes WHERE cir =".$_POST['cir']."";


     if ($sql==true) {
         $sqlc = "DELETE FROM representantes WHERE cedula =".$_POST['cir']."";
         $consulta = $conexion->prepare($sqlc);
         $consulta->execute();
      }
    $consulta = $conexion->prepare($sql);
    $consulta->execute();
    
    while ($viewup = $consulta->fetch())
    {
      $this->rows[] = $viewup;
    }
  }
}
?>