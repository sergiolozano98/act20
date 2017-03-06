<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
  </head>
  <body>
    <form class="" action="filtrado.php" method="post">
    Equipo local:
    <?php
   include 'nbadb.php';
   $nba2=new db();
   $nba3=$nba2->devolverTodos();
   echo "<select name='local'>";
   echo "<option>";
   echo "</option>";
   while ($fila = $nba3->fetch_assoc()){
   echo "<option value='".$fila['Nombre']."'>".$fila['Nombre']."</option>";
   }
   echo "</select>"; echo "<br>";
     ?>
     <?php
     $nba3=$nba2->devolverTodos();
     echo "Equipo Visitante";
        echo "<select name='visitante'>";
     while ($fila = $nba3->fetch_assoc()){
     echo "<option value='".$fila['Nombre']."'>".$fila['Nombre']."</option>";
     }
     echo "</select>";
     echo "<br>";

      ?>
      <?php
      $nbaTemp=new db();
      $temporada=$nbaTemp->devolverTemp();
      echo "Temporada";
         echo "<select name='temporada'>";
      while ($fila = $temporada->fetch_assoc()){
      echo "<option value='".$fila['temporada']."'>".$fila['temporada']."</option>";
      }
      echo "</select>";
      echo "<br>";

       ?>
      <input type="submit" name="" value="filtrar">
      <input type="reset" name="" value="borrar">
    </form>

  </body>
</html>
