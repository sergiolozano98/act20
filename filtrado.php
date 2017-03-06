<?php
  //echo $_POST["conferencia"];
  include 'nbadb.php';
  //!empty se usa para indicar que el campo $_POST["local"] no puede estar vacio
  if (isset($_POST["local"])&&!empty($_POST['local'])&&(isset($_POST["visitante"]))&&!empty($_POST['visitante'])&&(isset($_POST["temporada"]))&&(!empty($_POST['temporada']))) {
    $nba = new db();
    $equipo = $nba->devolverEquipos($_POST['local'],$_POST['visitante'],$_POST['temporada']);
    echo "<table border=1 px>";
    while ($fila = $equipo->fetch_assoc()){

      echo "<tr>";
      echo "<td>";
      echo $_POST['local'];
      echo "</td>";
      echo "<td>";
      echo $fila['puntos_local'];
      echo "</td>";
      echo "<td>";
      echo $_POST['visitante'];
      echo "</td>";
      echo "<td>";
      echo $fila['puntos_visitante'];
      echo "</td>";
      echo "<td>";
      echo $_POST['temporada'];
      echo "</td>";
      echo "</tr>";

    }
    echo "</table>";
  }else {
    ?>
    <a href="index.php"> No has enviado nada</a>
    <?php
  }



 ?>
