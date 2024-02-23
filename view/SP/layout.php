<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Erika Martínez Pérez - DWES</title>
        <link rel="stylesheet" href="webroot/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" href="webroot/bootstrap-5.3.2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="webroot/css/style.css">
    </head>
    <body onload="startTime()">
        <header>
            <form method="post">
                <a class="titulo">APLICACION FINAL</a>
                <img width="25px" src="webroot/media/images/lupa.png" alt="LUPA"/>
                <button type="submit" name="login"><img width="45px" src="webroot/media/images/login.svg" alt="LOGIN"/></button>
            </form>
        </header>
        <script src="webroot/js/scrollBannerTitulo.js"></script>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <?php require_once $aView[$_COOKIE['idioma']][$_SESSION['paginaEnCurso']]; ?>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        <footer>
            <span class="footer-links">
                <form class="opcionesDelIdioma">
                    <button type="submit" value="SP" name="botonIdioma"><a href="#"><img src="webroot/media/images/es.png" href="#" alt="alt"/></a></button>
                    <button type="submit" value="UK" name="botonIdioma"><a href="#"><img src="webroot/media/images/uk.png" href="#" alt="alt"/></a></button>
                    <a href="doc/rss.xml"><img src="webroot/media/images/rss.png" href="#" alt="alt"/></a>
                    <a href="doc/index.html"><img src="webroot/media/images/php.png" href="#" alt="alt"/></a>
                    <a href="https://www.bershka.com/es/h-man.html"><img src="webroot/media/images/bershka.png" href="#" alt="alt"/></a>
                    <a href="https://github.com/kyrafenrir/202DWESAplicacionFinalErika2024"><img src="webroot/media/images/github_1.png" href="#" alt="alt"/></a>
                    <a href=".."><img src="webroot/media/images/atras.png" href="#" alt="alt"/></a>
                    <a class="derechos">2023-2024 © Erika Martínez Pérez</a>
                </form>
            </span>
        </footer>
        <script src="webroot/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>