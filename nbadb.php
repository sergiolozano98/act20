<?php
/**
 * Permitir la conexion contra la base de datos
 */
class db
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $db_name="nba";

  //Conector
  private $conexion;

  //Propiedades para controlar errores
  private $error=false;

  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno) {
        $this->error=true;
      }
  }

  //Funcion para saber si hay error en la conexion
  function hayError(){
    return $this->error;
  }

  //Funciones para la devolucion de resultados
  public function devolverEquipos($local,$visitante,$temporada){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT * FROM partidos WHERE equipo_local='".$local."' AND equipo_visitante='".$visitante."' AND temporada='".$temporada."' ");
      return $resultado;
    }else{
      return null;
    }
  }
  public function devolverTodos(){
    if($this->error==false){
      $todos = $this->conexion->query("SELECT distinct(Nombre) FROM equipos");
      return $todos;
    }else{
      return null;
    }
  }
  public function devolverTemp(){
    if($this->error==false){
      $temp = $this->conexion->query("SELECT distinct(temporada) FROM partidos");
      return $temp;
    }else{
      return null;
    }
  }


  public function devolverEquiposConf(){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT nombre,conferencia FROM equipos");
      return $resultado;
    }else{
      return null;
    }
  }
}


 ?>
