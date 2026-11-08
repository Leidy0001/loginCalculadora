<html>
<head>
<meta charset="UTF-8">
<title>Calculadora</title>
<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Sistema Cuarto A</h1>
    </header>
    <nav>
        <ul>
            <?php
            if (isset($_SESSION['nombre']))
                {
                echo ("<li><a href='index.php?accion=calculadora'>Calculadora</a></li>");
                echo ("<li><a href='models/salir.php'>Cerrar sesión</a></li>");
                }
            else
                {
                echo ("<li><a href='index.php?accion=login'>Login</a></li>");
                }
            ?>
        </ul>
    </nav>
    <section>
        <?php $this->enlacesPaginaController(); ?>
    </section>
    <footer>derechos reservados @cuartoa</footer>
</body>
</html>
