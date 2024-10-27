<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Museo</title>
    <meta name="description" content="Explora la historia de la Fundación Archivo Gráfico y Museo Histórico de San Francisco. Conoce su origen, misión y el impacto cultural que ha tenido en la preservación del patrimonio local.">
    <meta name="keywords" content="historia, Fundación Archivo Gráfico, San Francisco, patrimonio, cultura, conservación, archivo, museo, investigación, documentos históricos">

    <link rel="icon" type="image/png" href="imagenes/logoAGM.png">
    <link rel="stylesheet" href="estilos/museum.css" />
        <!-- Incluye Font Awesome para los iconos -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
        <?php
include 'db.php'; // Asegúrate de incluir tu conexión a la base de datos

// Consulta para obtener la imagen del héroe correspondiente a la zona "Inicio"
$inicio = $conn->query("SELECT image_url FROM hero_images WHERE zone = 'Nosotros' LIMIT 1")->fetch_assoc();
?>
    <style>
      
      /* HERO */
.hero {
          background-image: url("<?php echo htmlspecialchars($inicio['image_url']); ?>");
  background-position: center; /* Centra la imagen */
  background-size: cover; /* Escala la imagen para cubrir todo el contenedor */
  background-repeat: no-repeat; /* Evita que la imagen se repita */
  width: 100%;
  height: 75vh;
}

.hero h1 {
  position: absolute;
  bottom: 20%;
  left: 10%;
  color: white;
  font-size: 68px;
  padding: 20px;
  max-width: 50%;
  filter: drop-shadow(5px 5px 2px #0008);
}
    </style>
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

        <!-- Menú de navegación -->
        <ul class="navbar-menu" id="navbar-menu">
          <li class="navbar-item"><a href="index.php">Inicio</a></li>
          <li class="navbar-item"><a href="museo.php">Nosotros</a></li>
          <li class="navbar-item"><a href="archivo.php">Archivo</a></li>
          <li class="navbar-item"><a href="visitas.php">Visitas</a></li>
          <li class="navbar-item">
            <a href="biografias.php">Biografias Locales</a>
          </li>
          <li class="navbar-item"><a href="contacto.php">Contacto</a></li>
        </ul>
      </nav>
    </header>
    <div class="hero">
      <h1>Nuestra Historia</h1>
    </div>
    <div class="info">
      <h3>Los comienzos en 1996</h3>
      <p>
        Todos los pueblos tienen derecho a conocer su pasado, por eso en San
        Francisco, Córdoba, República Argentina, la Fundación Archivo Gráfico y
        Museo Histórico trabaja desde el año 1996 con el propósito de rescatar,
        conservar, organizar y exhibir, estudiar y difundir los elementos que
        hicieron a la vida de nuestros ancestros. Por ello, desde entonces,
        quienes desean conocer y valorar el ayer para mejorar su formación,
        cuentan con él como un fuerte aliado a la hora de investigar la historia
        local y regional. Nuestro Estatuto establece que sus objetivos son:
        “constituir una entidad cultural y educativa organizada para reunir,
        conservar, custodiar y exhibir al público en forma adecuada, reliquias
        de valor histórico, en orden a la reconstrucción vívida y fidedigna del
        pasado de San Francisco y la región”. Esas pautas son las que se siguen
        manteniendo con el agregado de innovaciones en la forma de llegar a la
        difusión de la historia.
      </p>

      <h3>Documentación conservada para consultas de investigadores</h3>
      <p>
        El Archivo Gráfico y Museo Histórico de San Francisco y la Región cuenta
        con las secciones: Archivo Documental; Biblioteca de autores locales y
        regionales; Hemeroteca de diarios locales, regionales y nacionales;
        Videoteca; Discoteca y Pinacoteca de artistas plásticos locales. *-
        Archivo Documental: se compone por fotografías en papel y digitales,
        documentos en papel y digitalizados, folletos, planos y manuscritos
        desde el siglo XIX a la actualidad. *- Biblioteca de autores locales y
        regionales: alberga más de dos mil ejemplares de libros escritos por
        autores de San Francisco y localidades de su jurisdicción en una amplia
        variedad de géneros: poesía, historia, geografía, ensayos, etc. También
        se incluyen textos provinciales, nacionales o internacionales de temas
        referidos a la región o las provincias de Córdoba y Santa Fe que versan
        sobre: economía, ambiente, geografía, historia o contienen datos
        estadísticos. Lleva el nombre de “Dr. Joaquín Gregorio Martínez”,
        abogado, estudioso de la historia de San Francisco y albacea de la
        Fundación “José María Villar y Fernández”, entidad mecenas de nuestra
        Fundación. El Dr. Martínez falleció en agosto de 1985. *- Hemeroteca de
        diarios locales, regionales y nacionales: contiene colecciones
        incompletas de periódicos sanfrancisqueños de distintas épocas:
        “Democracia”, “El Progreso”, “Turin Abuggia”, “La Rebelión”, “La
        Opinión”, de la ciudad de Rafaela (provincia de Santa Fe) y “El
        Heraldo”, de la ciudad de Las Varillas (Provincia de Córdoba), entre
        otros. Las colecciones completas de la revista “Eureka” (1928-29) y el
        periódico “Tribuna” (1970-73). El diario “La Voz de San Justo” -que
        circula desde el 1 de enero de 1915-, completo desde el 2 de enero de
        1996 y en continua actualización, además de otros períodos con temas
        puntuales como la guerra por las islas Malvinas, peronismo y gobierno
        1976-1983. Se conservan también ejemplares de diarios nacionales “La
        Nación”, “La Prensa”, “Clarín”, “La Voz del Interior”, “Los Principios”
        y “Córdoba”, de determinados períodos. Se cuenta con un respaldo
        digitalizado de los diarios locales más antiguos y del periódico
        “Tribuna”. *- Videoteca: almacena en formato VHS y otros digitalizados,
        entrevistas realizadas por nuestra entidad a personas de la ciudad que
        tuvieron rol social o vecinos que comentaron sus actividades laborales.
        También están en formato digital más de cien temas incluidos en el
        programa televisivo “Huellas” de 30 minutos de duración que desde 2014
        produce nuestra Fundación y se emiten semanalmente en el Canal 4 de
        televisión por aire y cable. Otro archivo histórico en video es el
        donado por la empresa TV Cable que incluye filmaciones realizadas en los
        años 90 con entrevistas, actos oficiales, reportajes, etc. con vecinos y
        funcionarios de esa época. El mismo está disponible en formato
        digitalizado. *- Discoteca: está conformada por más de doce mil discos
        donados que van desde piezas de pasta de la década de 1920 a vinilos de
        los años 90. El contenido de los discos incluye música popular de todo
        el mundo, así como conciertos, cuentos infantiles, relatos de escritores
        o registros documentales de sucesos históricos. El objetivo de su
        conservación es el de mantener grabadas y en condiciones de ser
        reproducidas la música y las voces de artistas y protagonistas del siglo
        XX en su formato original. El resurgimiento de los discos de vinilo en
        los últimos años permitirá sumar nuevas piezas que se debaten entre ser
        objetos de museo o registros documentales de audio. *- Pinacoteca: es
        una sección actualmente no expuesta que reúne una colección de pinturas
        de artistas locales de distintas épocas las que fueron donadas para
        integrar esta pinacoteca que no tiene un propósito de galería de arte,
        sino más bien de contar con dichas obras dándole el valor de pieza
        histórica.
      </p>

      <h3>Paseo por la Historia recorriendo nuestras salas</h3>
      <p>
        Nuestras salas resumen la historia social y natural de San Francisco y
        la región, con objetos seleccionados expuestos y acompañados con textos
        en paneles con grandes reproducciones de fotografías. Cada sector
        corresponde a un tema de interés para los estudiantes y visitantes en
        general que recorren esos espacios. Las salas muestran bienes donados
        por la comunidad de San Francisco que pertenecieron a sus antecesores y
        cada uno de ellos tiene una historia particular pero, también se exhiben
        protegidos restos fósiles de animales de la fauna primitiva de nuestra
        región, la que se extinguió, se estima, hace entre 10 y 8 mil años y que
        fueron rescatados por nuestra Fundación desde el año 1997. Las salas
        permanentes de la exposición denominada “Huellas”, son las siguientes:
        Paleontología sanfrancisqueña; Ambiente del Espinal; Radicación de
        colonos a fines del siglo XIX; Influencia del ferrocarril; Oficios
        urbanos y rurales en el siglo XX; El rol del Comercio; Desarrollo de la
        Industria; La atención de la Salud; Radios y telefonía en el siglo XX y
        Juguetes antiguos. Las fotografías ilustran sobre algunos aspectos de
        estas salas.
      </p>

      <h3>El Monte Nativo Didáctico</h3>
      <p>
        La Fundación Archivo Gráfico y Museo Histórico de la Ciudad de San
        Francisco y la Región, tiene entre sus proyectos educativos el
        denominado Monte Nativo Didáctico que se instaló a la vera del edificio
        sobre una superficie de 900 metros y una plaza con árboles nativos,
        también de 900 metros cuadrados. El objetivo de este proyecto es
        implantar un pequeño monte de especies autóctonas con fines didácticos,
        recrear un ambiente natural similar al existente en tiempos pasados,
        rescatar especies vegetales nativas extinguidas en nuestra zona y
        preservarlas como un modo de contribuir a la custodia de nuestro
        patrimonio natural. La provincia de Córdoba se encuentra conformada por
        tres regiones fitogeográficas: Región Chaqueña, en el norte y oeste;
        Región Pampeana, de pastizales en el sureste y Región del Espinal, que
        es la que incluye a San Francisco y la región. Se denomina así debido a
        que la vegetación predominante es muy espinosa. El Espinal tiene tres
        distritos: del caldén; del algarrobo y del ñandubay. Nosotros
        pertenecemos al distrito del algarrobo, árbol que convive con el
        piquillín, el moradillo, el tala, quebracho y espinillo, entre otros.
      </p>

      <h3>El reino del Tigre Dientes de Sable</h3>
      <p>
        El Archivo Gráfico y Museo Histórico de la Ciudad de San Francisco y la
        Región, atesora una colección relevante que integra nuestro patrimonio
        natural. La Sección Paleontológica es la encargada del rescate,
        acondicionamiento y exposición de restos fósiles de la fauna (megafauna)
        pampeana de hace cien o más siglos en nuestra región. La megafauna
        pampeana vivió aquí hasta hace unos ocho mil años. Coincidió el período
        final de su existencia con la llegada de los primeros grupos humanos a
        la zona. Las posibles cacerías y/o cambios climáticos determinaron la
        desaparición de estas grandes especies. Entre ellos había herbívoros:
        gliptodontes y sclerocalyptus (armadillo gigante) hippidium (especie de
        caballo), macrauquenias (camélicos), milodontes (perezosos) tortugas y
        otros. Entre los carnívoros había cánidos y los temibles tigres Dientes
        de Sable, amos y señores de la comarca, por la fuerza de sus garras y el
        tamaño de sus afilados colmillos de hasta 20 centímetros de largo. En la
        Sala de Paleontología se exhiben restos fósiles que fueron estudiados
        por becarios del Conicet. Entre los restos se expone el 70 por ciento de
        un esqueleto de Tigre Dientes de Sable recuperado en un campo al oeste
        de San Francisco en 1998.
      </p>

      <h3>Concurrencia de educandos</h3>
      <p>
        Especialmente entre los meses de abril a noviembre, es intensa la
        actividad con las visitas de delegaciones de escolares, estudiantes de
        los niveles medio, superior y universitario que llegan al Archivo
        Gráfico y Museo Histórico para recabar informaciones o visitar sus salas
        para conocer objetos de antaño. Las visitas rara vez comprenden una
        recorrida por todo el Museo en razón de la extensión del tiempo que
        implicaría una observación detallada de cada espacio, es por ello que
        para cada caso se coordina previamente con el docente a cargo qué tema
        le interesa a su curso para desarrollar con más intensidad en una o dos
        salas y nada más. De todos modos un encuentro con los escolares con esta
        metodología insume entre una hora y cuarto con los más pequeños, a dos
        horas con los mayores. Las reservas se efectúan con debida antelación
        vía electrónica o telefónica, pero siempre es conveniente que el docente
        llegue días antes para conocer qué actividad se le ofrece y qué sugiere
        de acuerdo a lo que previsto y las expectativas de sus alumnos.
      </p>
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
