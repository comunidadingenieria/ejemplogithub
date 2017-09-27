<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title><?php echo 'Hola Mundo!'; ?></title>
    </head>
    <body>
        <header>
            <h1><?php echo 'Hola Mundo!'; ?></h1>
            <!-- <nav>El men&uacute; si procediese</nav> --> <!-- Etiqueta comentada al no tener men&uacute; -->
        </header>
        <section>
            <article>
                <h2><?php echo 'Nuestra primera p&aacute;gina PHP'; ?></h2>
                <?php echo 'Nuestra primera p&aacute;gina realizada en PHP con HTML5'; ?>
            </article>
        </section>
        <aside>
            <h3><?php echo 'Art&iacute;culos relacionados';?></h3>
            <ul>
                <li><a href="//rolandocaldas.com/php/primera-toma-de-contacto-php-paso-a-paso" target="_blank"><?php echo 'Primera toma de contacto'; ?></a></li>
                <li><a href="//rolandocaldas.com/php/html5-estructura-basica" target="_blank"><?php echo 'HTML5 estructura b&aacute;sica'; ?></a></li>
            </ul>
        </aside>
        <footer>
            <?php echo 'Creado por rolandocaldas.com'; ?>
        </footer>
    </body>
</html>