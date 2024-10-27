<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacto</title>
    <link rel="stylesheet" href="estilos/contact.css" />
    <meta name="description" content="Contacta con la Fundación Archivo Gráfico y Museo Histórico de San Francisco para obtener más información sobre nuestras exposiciones, visitas escolares y actividades. Estamos aquí para atender tus consultas y proporcionarte la información que necesites.">
    <meta name="keywords" content="contacto, museo, Fundación Archivo Gráfico, San Francisco, exposiciones, visitas escolares, historia, cultura, arte, patrimonio, educación, consultas, información">
    <link rel="icon" type="image/png" href="imagenes/logoAGM.png">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
  </head>
  <body>
    <header class="header">
        <nav class="navbar">
            <div class="navbar-logo">
                <a href="index.php">
                    <img src="imagenes/logoAGM.png" alt="Logo AGM" />
                </a>
            </div>
            <div class="navbar-toggle" id="navbar-toggle">
                <i class="fa-solid fa-bars"></i>
            </div>
            <ul class="navbar-menu" id="navbar-menu">
                <li class="navbar-item"><a href="index.php">Inicio</a></li>
                <li class="navbar-item"><a href="museo.php">Nosotros</a></li>
                <li class="navbar-item"><a href="archivo.php">Archivo</a></li>
                <li class="navbar-item"><a href="visitas.php">Visitas</a></li>
                <li class="navbar-item"><a href="biografias.php">Biografias Locales</a></li>
                <li class="navbar-item"><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <div class="container-contact">
      <div class="contact-info">
        <p>
          Avenida de la Universidad 271<br />
          2400 San Francisco (Córdoba)<br />
          Tel. 00+54+3564-15608752<br />
          archivograficoymuseo@yahoo.com.ar<br />
          Facebook / Archivo Gráfico
        </p>
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.6840958183943!2d-62.11338832501176!3d-31.422828696561645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95cb281e814c8a97%3A0xa2b629078ae63aea!2sFundaci%C3%B3n%20Archivo%20Gr%C3%A1fico%20y%20Museo%20Hist%C3%B3rico!5e0!3m2!1ses!2sar!4v1727958033467!5m2!1ses!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="contact-form">
        <form action="#" method="post">
          <label for="name">Nombre *</label>
          <input type="text" id="name" name="name" required />

          <label for="email">Email *</label>
          <input type="email" id="email" name="email" required />

          <label for="subject">Asunto</label>
          <input type="text" id="subject" name="subject" />

          <label for="message">Texto</label>
          <textarea id="message" name="message"></textarea>

          <button type="submit">Enviar</button>
        </form>
      </div>
    </div>

<!-- Pie de página -->
    <footer class="footer">
      <div class="footer-container">
        <div class="footer-section">
          <h3>Contacto</h3>
          <p>Avenida de la Universidad 271, 2400 San Francisco (Córdoba)</p>
          <p>Teléfono: +54 3564-15608752</p>
          <p>Email: archivograficoymuseo@yahoo.com.ar</p>
        </div>
        <div class="footer-section">
          <h3>Redes Sociales</h3>
          <a href="https://www.facebook.com/proa" target="_blank"
            ><i class="fab fa-facebook"></i> Facebook</a
          ><br />
          <a href="https://www.twitter.com/proa" target="_blank"
            ><i class="fab fa-twitter"></i> Twitter</a
          ><br />
          <a href="https://www.instagram.com/proa" target="_blank"
            ><i class="fab fa-instagram"></i> Instagram</a
          >
        </div>
        <div class="footer-section">
          <h3>Enlaces Útiles</h3>
          <a href="">Nosotros</a><br />
          <a href="">Archivo</a><br />
          <a href="">Classroom</a><br />
          <a href="">Contacto</a><br />
        </div>
      </div>
      <div class="footer-container">
        <div class="footer-section">
          <h3>Nos apoyan:</h3>
          <p>
            Micron Fresar S.A. Akron, Axion; Compañía de Seguros El Norte;
            Macoser S.A.; Sindicato de Empleados de Comercio de San Francisco;
            Gobierno de la Provincia de Córdoba; Gobierno Municipal de la Ciudad
            de San Francisco; Centro de Estudios e Investigaciones Históricas
            Parque España (Cehipe) Rosario (Santa Fe); Fundación Bunge y Born
            (Buenos Aires).
          </p>
        </div>
        <div class="footer-section">
          <h3>Medios de comunicación que nos respaldan:</h3>
          <p>
            Diario La Voz de San Justo, AM 1050, RadioCanal, Canal 4 y FM
            Contacto; Radio Estación, El Periódico, El Tiempo, La Voz del
            Interior (Córdoba).
          </p>
        </div>
      </div>
      <p class="footer-copy">
        &copy; 2024 Proa Técnica. Todos los derechos reservados.
      </p>
    </footer>
    <script src="burguer.js"></script>

  </body>
</html>
