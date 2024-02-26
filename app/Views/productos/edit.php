<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="/producto/<?= $producto["id"]; ?>/edit" method="POST">
   nombre <input  name="nombre" value="<?= $producto["nombre"]; ?>" type="text" > <br>
   descripcion <input name="descripcion" value="<?= $producto["descripcion"]; ?>" type="text" > <br>
   imagen <input name="imagen"  value="<?= $producto["imagen"]; ?>" type="text" > <br>
   precio <input name="precio"  value="<?= $producto["precio"]; ?>" type="text" > <br>
   <button type="submit" >Guardar</button>
</form>


</body>
</html>

