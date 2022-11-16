<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomina</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Evaluación</h1>
    <br><br>
    <form  action= "insertar.php" method="POST">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <br>
        <div class="form-group">
            <label for="cedula">Cedula</label>
            <input type="number" class="form-control" id="cedula" name="cedula">
        </div>
        <br>
        <div class="form-group">
            <label for="salario">Salario </label>
            <input type="number" class="form-control" id="salario" name="salario">
        </div>
        <br>
        <div class="form-group">
            <label for="diurnas">horas extras diurnas </label>
            <input type="number" class="form-control" id="diurnas" name="diurnas">
        </div>
        <br>
        <div class="form-group">
            <label for="nocturnas">horas extras nocturnas</label>
            <input type="number" class="form-control" id="nocturnas" name="nocturnas">
        </div>
        <br>
        <div class="form-group">
            <label for="diurnasDominical">horas extras dominical diurnas </label>
            <input type="number" class="form-control" id="diurnasDominical" name="diurnasDominical">
        </div>
        <br>
        <div class="form-group">
            <label for="nocturnasDominical">horas extras dominical nocturnas</label>
            <input type="number" class="form-control" id="nocturnasDominical" name="nocturnasDominical">
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary">REGISTRAR</button>
      </form>
      <br>

      <a href="mostrar.php"><button class="btn btn-primary">VER</button></a>
      
        
</body>
    </html>