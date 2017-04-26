<?php 
  class Crud
{
    public $insertInto;
    public $insertColumns;
    public $insertValues;
    public $mensaje;
    public $rows;

    public function cpu()
  {
    $modelo = new Stock();
    $conexion = $modelo->conec();
    $sql = "SELECT * FROM existencia A
                     INNER JOIN  capacidad B 
                     ON A.serial = B.serial";

    $consulta = $conexion->prepare($sql);
    $consulta->execute();

    while ($filas = $consulta->fetch())
    {
      $this->rows[] = $filas;
    }
  }

  public function printer()
  {
    $modelo = new Stock();
    $conexion = $modelo->conec();
    $sql = "SELECT * FROM existencia WHERE tipo='impresora'";

    $consulta = $conexion->prepare($sql);
    $consulta->execute();

    while ($filas = $consulta->fetch())
    {
      $this->rows[] = $filas;
    }
  }

}
?>