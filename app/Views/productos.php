<html lang="en">

<head>

    <style>
        html, body {
            margin:0;
            padding:0;
            background: #777;
        }
        .producto{
            width:300px;
            border-radius:5px;
            background:#fff;
            paddig:10px;
            margin:5px;
            font-family:"arial";
            float: left;
            height: 550px;
        }
        .producto img{ width:100% }
        .producto h1{ font-size:20px; color: #55a; }

</style>

</head>

<body>
    <?php foreach ($productos as $i => $producto) { ?>
    
    <section class="producto">
        <img src= "<?= $producto["imagen"]; ?>" >
        <h1> <?= $producto["nombre"]; ?> </h1>    
        <p> "<?= $producto["descripcion"]; ?>" </p>
        <p> "<?= $producto["precio"]; ?>" </p>
        <a href=""> Agregar al carrito </a>
    </section>
    
    <?php }?>

</body>
</html>
