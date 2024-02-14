<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce - Contacto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/app.css">
</head>

<body>

    <header>
        <h1 class="nombre-sitio">Ecommerce <span>Design</span></h1>
    </header>

    <div class="contenedor-navegacion">
        <nav class="nav-principal contenedor">
            <a href="index.html">Inicio</a>
            <a href="nosotros.html">Nosotros</a>
            <a href="tienda.html">Tienda</a>
            <a href="blog.html">Blog</a>
            <a href="galeria.html">Galería</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </div>

    <main class="contenido-principal contenedor">
        <h2 class="text-center">Contacto</h2>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario">
            <fieldset>
                <legend>Tus datos</legend>

                <?php if(!empty($errores)): ?>
                    <div class="alert-error">
                        <?php echo $errores; ?>
                    </div>
                <?php elseif($enviado): ?>
                    <div class="alert-success">
                        <p>Formulario mandado correctamente!</p>
                    </div>
                <?php endif ?>

                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input name="nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>" id="nombre" type="text" placeholder="Tu nombre">
                </div>

                <div class="campo">
                    <label for="asunto">Asunto</label>
                    <input name="asunto" value="<?php if(!$enviado && isset($asunto)) echo $asunto ?>" id="asunto" type="text" placeholder="Tu asunto">
                </div>

                <div class="campo">
                    <label for="email">Email</label>
                    <input name="email" value="<?php if(!$enviado && isset($email)) echo $email ?>" id="email" type="email" placeholder="Tu email">
                </div>

                <div class="campo">
                    <label for="tel">Teléfono</label>
                    <input name="tel" value="<?php if(!$enviado && isset($tel)) echo $tel ?>" id="tel" type="tel" placeholder="Tu teléfono">
                </div>

                <div class="campo">
                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje" value="<?php if(!$enviado && isset($mensaje)) echo $mensaje ?>" id="mensaje"></textarea>
                </div>

            </fieldset>

            <!-- <fieldset>
                <legend>Pais</legend>

                <div class="campo">
                    <label for="pais">Pais</label>
                    <select name="pais" id="pais">
                        <option value="ES" disabled>Seleccione</option> 
                        <option value="ES">España</option>
                        <option value="MX">Mexico</option>
                        <option value="ARG">Argentina</option>
                        <option value="BR">Brasil</option>
                        <option value="CO">Colombia</option>
                    </select>
                </div>

            </fieldset> -->


           <!-- <fieldset>
                <legend>Información extra</legend>

                <div class="campo">
                    <label for="cliente">Cliente</label>
                    <input id="cliente" type="radio" name="tipo" value="cliente">
                </div>

                <div class="campo">
                    <label for="proveedor">Proveedor</label>
                    <input id="proveedor" type="radio" name="tipo" value="proveedor">
                </div>

                <div class="campo">
                    <label for="categoria">Interés</label>
                    <input list="categorias" name="categorias">
                    <datalist id="categorias">
                        <option value="Cocina"></option>
                        <option value="Deporte"></option>
                        <option value="Oficina"></option>
                        <option value="Descanso"></option>
                    </datalist>
                </div>

            </fieldset> -->



            <input class="btn" type="submit" name="submit" value="Enviar Formulario">

        </form>


    </main>

    <footer class="site-footer">
        <div class="grid-footer contenedor">
            <div>
                <h3>Categorías</h3>
                <nav class="footer-menu">
                    <a href="#">Cocina</a>
                    <a href="#">Oficina</a>
                    <a href="#">Jardín</a>
                    <a href="#">Garaje</a>
                    <a href="#">Dormitorio</a>
                </nav>
            </div>
            <div>
                <h3>Sobre Nostros</h3>
                <nav class="footer-menu">
                    <a href="#">Nuestra Historia</a>
                    <a href="#">Misión, Visión y Valores</a>
                    <a href="#">Carreras</a>
                    <a href="#">Política de Privacidad</a>
                    <a href="#">Términos de Servicio</a>
                </nav>
            </div>
            <div>
                <h3>Soporte</h3>
                <nav class="footer-menu">
                    <a href="#">Preguntas Frecuentes</a>
                    <a href="#">Ayuda</a>
                    <a href="#">Confianza y Seguridad</a>
                </nav>
            </div>
        </div>

        <p class="copyright">Todos los derechos reservados, eCommerce</p>

    </footer>

</body>

</html>