<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Blog de videojuegos</title>
</head>
<body>
    <header id="cabecera">
        <div id="logo">
            <a href="index.php">Blog de videojuegos</a>
        </div>

        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="index.php">Categoria 1</a>
                </li>
                <li>
                    <a href="index.php">Categoria 2</a>
                </li>
                <li>
                    <a href="index.php">Categoria 3</a>
                </li>
                <li>
                    <a href="index.php">Categoria 4</a>
                </li>
                <li>
                    <a href="index.php">Sobre mi</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>

    <div id="contenedor">
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>Identificate</h3>
                <form action="login.php" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email">

                    <label for="pass">Contraseña</label>
                    <input type="password" name="pass">

                    <input type="submit" value="Entrar">
                </form>
            </div>

            <div id="registro" class="bloque">
                <h3>Registrate</h3>
                <form action="registro.php" method="post">
                    <label for="name">Nombre</label>
                    <input type="text" name="name">

                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido">

                    <label for="email">Email</label>
                    <input type="email" name="email">

                    <label for="pass">Contraseña</label>
                    <input type="password" name="pass">

                    <input type="submit" value="Registrar">
                </form>
            </div>
        </aside>

        <div id="principal">
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac magna fringilla, lobortis quam sit amet, pretium ex. Vivamus in maximus justo. Fusce bibendum ut nibh ut tempor. Nunc et pharetra neque. Donec vitae suscipit nisi. Aenean in aliquam dui. Mauris quis risus ut eros rhoncus placerat. Mauris sollicitudin bibendum mauris. Phasellus quis ligula sed turpis sagittis accumsan. Donec vitae elit accumsan, euismod ligula et, sodales risus. Nulla facilisi. Sed ligula mauris, fermentum ut iaculis vitae, suscipit id sapien.
                </p>
            </article>

            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac magna fringilla, lobortis quam sit amet, pretium ex. Vivamus in maximus justo. Fusce bibendum ut nibh ut tempor. Nunc et pharetra neque. Donec vitae suscipit nisi. Aenean in aliquam dui. Mauris quis risus ut eros rhoncus placerat. Mauris sollicitudin bibendum mauris. Phasellus quis ligula sed turpis sagittis accumsan. Donec vitae elit accumsan, euismod ligula et, sodales risus. Nulla facilisi. Sed ligula mauris, fermentum ut iaculis vitae, suscipit id sapien.
                </p>
            </article>

            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac magna fringilla, lobortis quam sit amet, pretium ex. Vivamus in maximus justo. Fusce bibendum ut nibh ut tempor. Nunc et pharetra neque. Donec vitae suscipit nisi. Aenean in aliquam dui. Mauris quis risus ut eros rhoncus placerat. Mauris sollicitudin bibendum mauris. Phasellus quis ligula sed turpis sagittis accumsan. Donec vitae elit accumsan, euismod ligula et, sodales risus. Nulla facilisi. Sed ligula mauris, fermentum ut iaculis vitae, suscipit id sapien.
                </p>
            </article>

            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac magna fringilla, lobortis quam sit amet, pretium ex. Vivamus in maximus justo. Fusce bibendum ut nibh ut tempor. Nunc et pharetra neque. Donec vitae suscipit nisi. Aenean in aliquam dui. Mauris quis risus ut eros rhoncus placerat. Mauris sollicitudin bibendum mauris. Phasellus quis ligula sed turpis sagittis accumsan. Donec vitae elit accumsan, euismod ligula et, sodales risus. Nulla facilisi. Sed ligula mauris, fermentum ut iaculis vitae, suscipit id sapien.
                </p>
            </article>
        </div>
    </div>

    <footer id="pie">
        <p>
            Desarrollado por Jairo Bernal &copy; 2019
        </p>
    </footer>

</body>
</html>