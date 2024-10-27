<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Biografías Locales</title>
    <link rel="stylesheet" href="estilos/biografias.css" />
    <meta name="description" content="Descubre las biografías de personajes locales destacados en la historia de San Francisco. Aprende sobre sus contribuciones, legado y su impacto en la comunidad.">
    <meta name="keywords" content="biografías, personajes locales, San Francisco, historia, cultura, legado, contribuciones, comunidad, personalidades, patrimonio">

    <link rel="icon" type="image/png" href="imagenes/logoAGM.png">
        <!-- Incluye Font Awesome para los iconos -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <?php
include 'db.php'; // Asegúrate de incluir tu conexión a la base de datos

// Consulta para obtener la imagen del héroe correspondiente a la zona "Inicio"
$inicio = $conn->query("SELECT image_url FROM hero_images WHERE zone = 'Biografías Locales' LIMIT 1")->fetch_assoc();
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

<div class="hero">
      <h1>Biografías Locales</h1>
    </div>
<div class="info">
    <div class="intro">
        <p>En la historia de San Francisco, muchas personas lograron destacarse por su función en la vida pública, ya sea institucional, como gubernamental, empresaria, deportiva, cultural o educativa.
    En este sitio destacamos brevemente los aportes que algunos de ellos han dejado para la posteridad en diferentes épocas de nuestra comunidad.
    Merece destacarse que para que muchos de ellos concreten sus propósitos altruistas, sin dudas han contado con el apoyo y la colaboración de muchos más que, desde anónimos puestos, han servido también a la sociedad y, va por ello, nuestro reconocimiento.
    Algunos de los textos son síntesis elaboradas sobre un trabajo realizado por el historiador local José Alberto Navarro titulado “Las calles de San Francisco” y otros, de entrevistas realizadas por el Archivo Gráfico y Museo Histórico de la Ciudad de San Francisco y la Región.
    </p>
    </div>
    <h3>Agodino, Mario Dante</h3>
    <p>Político sanfrancisqueño, abogado y docente, miembro de una de las familias fundadoras de la colonia. En 1941 instaló su estudio jurídico en San Francisco especializándose en derecho laboral. Abrazó la causa peronista en 1955, tras el golpe militar que derrocó al presidente Juan D. Perón, convirtiéndose en uno de los exponentes más reconocidos y respetados de ese movimiento a nivel local, departamental y provincial. En 1958, proscripto el peronismo, fue candidato a intendente por el Partido Laborista y fue vencido por solamente 45 votos (8.041 contra 8.086 por Guillermo Peretti (UCRI). En 1973 fue elegido diputado provincial. Por corto tiempo fue gobernador interino de Córdoba del 28 de febrero al 15 de marzo de 1974. Falleció el 13 de mayo de 1974 a los 58 años.</p>


    <h3>Amalvy, Enriqueta</h3>
    <p>Hija del matrimonio formado por Luis Amalvy, francés y Francisca Acastello, italiana, nació en San Francisco en un hogar con otros diez hermanos. Fue el alma inspiradora y virtual fundadora de la escuela Mitre, que en sus orígenes funcionó en un local de 1º de Mayo y López y Planes. Con una gran capacidad pedagógica y una gran dosis de amor y comprensión, permaneció toda su carrera docente. Falleció en Florida (Buenos Aires) el 25 de mayo de 1970 a los 77 años de edad. Por su voluntad sus restos fueron trasladados a San Francisco e inhumados en el panteón familiar. En la oportunidad, sus ex alumnos le tributaron un homenaje consistente en una placa de bronce que textualmente expresa: “Enriqueta Amalvy, 25-5-70. La simiente de saber y amor que sembraste con pasión de apostolado, ha fructificado en perenne flor de gratitud”.</p>

    <h2>Badersbach, Lothar J.</h2>
    <p>Ingeniero y economista industrial de nacionalidad alemana que a principios de 1971 fue designado por la Onud (Organización de Naciones Unidas Para el Desarrollo Industrial) como consejero principal del proyecto del Parque Industrial Piloto de San Francisco.
Nació en Alemania el 12 de julio de 1919; tras cursar sus estudios universitarios en ese país, cumplió su carrera profesional en importantes empresas multinacionales y en organismos de la ONU, desde 1937. En los años 1956 a 1960 trabajó en la Fundación Ford; fue consultor del Ministerio de Industria y Comercio del gobierno de la India (Nueva Delhi y Calcuta) para el desarrollo técnico - económico de pequeñas y medianas empresas y planeamiento de parques industriales. En el período 1963 - 1966 trabajó para las Naciones Unidas como experto en parques industriales de la India; su labor dentro de la ONU prosiguió en 1966 y 1967 como experto en el desarrollo de parques industriales y pequeñas industrias en Taipei y Taiwán (China). Desde 1969 hasta 1971 integró el equipo de Naciones Unidas como experto en el Inti (Instituto Nacional de Tecnología Industrial) de Buenos Aires. Tomó parte también en emprendimientos de su especialidad en Inglaterra, Francia, Italia, África y Tailandia. En nuestra ciudad permaneció por espacio de dos años, desde 1971 a 1972, período en el que cumplió una compleja y ardua labor técnica en colaboración con los integrantes de la Asociación Parque Industrial. Dictó cursos de capacitación y a la par de su trabajo específico cultivó una estrecha relación con empresarios y autoridades del medio.
Era una persona de sólida formación cultural, afable y comedida, lo que le permitió granjearse la estima y el respeto de la gente de San Francisco. A fines de 1972 se alejó del proyecto de nuestro Parque Industrial y pasó a ocupar otras funciones fuera del país, siempre como representante de las Naciones Unidas. Falleció en 1982, a los 62 años, en Addis Abeba, capital de Etiopía, donde se encontraba desarrollando tareas de su especialidad. Sus restos fueron inhumados en Munich (Alemania), lugar de residencia de su esposa e hijos.
</p>

<h3>Belén Cabrera, Amadeo</h3>
<p>Periodista sanfrancisqueño, de vasta y reconocida labor durante la primera mitad del siglo XIX. Nacido en Villa de María del Río Seco, se estableció en San Francisco en 1897. Fue, sin dudas, un pionero del periodismo de estas tierras. Su iniciación periodística se produjo en el periódico “Unión y Progreso”, tras lo cual, en 1901, se incorporó como redactor en “La Semana”, que era dirigida por su fundador Damián Martínez Mendivill. Trabajó desde sus páginas a favor de la Escuela Normal. Fue redactor y director interino de “La Voz de San Justo” y luego fundó su diario propio “El Progreso” y la imprenta “La Moderna”. Falleció el 25 de noviembre de 1951.</p>

<h3>Boero Romano, Carlos</h3>
<p>Industrial molinero y productor agropecuario, financista, hombre público y de negocios. Nació en Colonia San Agustín el 4 de octubre de 1872. Fue uno de los primeros pobladores que, con trabajo y esfuerzo, cimentaron la grandeza de la ciudad. Fue fundador en 1892, junto a su hermano Augusto y don Vicente Lanfranchi, del Molino Meteoro. Fue también propietario fundador de Grandes Almacenes Casa Boero y socio fundador del Centro Comercial, Industrial y de la Propiedad. Fue director del Banco Central y del banco de la Nación Argentina, dirigente de la Junta Nacional de Granos. Falleció el 31 de octubre de 1951, a los 79 años.</p>

<h3>Borello, Carlos</h3>
<p>Sacerdote católico, párroco de la iglesia San Francisco de Asís desde 1913 a 1960, año de su muerte. Nació en Cúneo, Italia, el 16 de diciembre de 1885. Comenzó sus estudios religiosos en Italia y los culminó en la Argentina. Rezó su primera misa en Villa Ascasubi, provincia de Córdoba. De 1910 a 1913, desarrolló su labor pastoral en Colonia Caroya, General Cabrera y Morteros. El 28 de agosto de 1913 asumió como párroco de la iglesia San Francisco de Asís, única en aquel momento en la población. Su larga permanencia en la ciudad fue de prédica evangelizadora y mucha dedicación a completar la iglesia con sus torres y refacciones. Falleció en la ciudad de Córdoba el 10 de septiembre de 1960, a los 75 años de edad.</p>

<h3>Borgarello, Miguel Pablo</h3>
<p>Nació en Angélica (Santa Fe) el 30 de junio de 1906. Luego de criarse y crecer en la zona rural de Pozo del Molle, donde comenzó a hablar castellano recién a los 15 años, a los 20 años se radicó en Córdoba donde comenzó a estudiar en la Academia de Bellas Artes. Fue premiado en salones nacionales y reconocido por sus méritos artísticos. Impulsó la creación de la Academia Municipal de Bellas Artes cuya dirección asumió en 1939. Es autor del monumento al fundador José B. Iturraspe y a la Madre, ambas obras en la plaza Vélez Sarsfield, también la del indio “Bamba” en Carlos Paz. Sus grabados y pinturas figuran en distintos museos del país y del extranjero. Casado con la artista plástica Elisa Daneri (Elisa Damar) en 1942. Falleció en Córdoba el 13 de febrero de 1995. Sus restos descansan al pie del monumento a J. B. Iturraspe, de su autoría, en San Francisco.</p>

<h3>Brook, Juan Carlos</h3>
<p>Nació en San Jorge (Santa Fe) el 27 de diciembre de 1914. Periodista y educador. Fue editorialista de “La Voz de San Justo” durante 50 años. A través de sus notas impulsó ideas y proyectos vitales para el progreso de la ciudad. Se le llamó “el fiscal de la ciudad” por su constante e inalterable prédica en defensa de los intereses públicos. Dueño de un bagaje cultural destacable fue autor de escritos en los que subrayó necesidades comunitarias y criticó con sentido constructivo proyectos e iniciativas que, a su entender, iban en detrimento del bienestar general. Falleció trágicamente junto a su esposa la docente Rosa Damia, el 2 de junio de 1997.</p>

<h3>Carra, Martín Antonio</h3>
<p>Nació en Villareggio (Piamonte-Italia). Fue un pionero industrial. Casado en nuestro país con la italiana Emilia Allasino, fue padre de siete hijos, cuatro de ellos nacidos en San Francisco. En 1890, instaló la Carpintería Industrial en calle Belgrano, entre Libertador (N) y Pueyrredón. A partir de 1908 inició su actividad como fabricante de zarandas de madera para máquinas trilladoras las que patentó como inventor con la marca zarandas “Vencedor”. Falleció en Córdoba el 19 de marzo de 1941.</p>

<h3>Carra, Martín Antonio</h3>
<p>Nació en Villareggio (Piamonte-Italia). Fue un pionero industrial. Casado en nuestro país con la italiana Emilia Allasino, fue padre de siete hijos, cuatro de ellos nacidos en San Francisco. En 1890, instaló la Carpintería Industrial en calle Belgrano, entre Libertador (N) y Pueyrredón. A partir de 1908 inició su actividad como fabricante de zarandas de madera para máquinas trilladoras las que patentó como inventor con la marca zarandas “Vencedor”. Falleció en Córdoba el 19 de marzo de 1941.</p>

<h3>Carrá, Enrique J.</h3>
<p>Nació en Gualeguaychú (Entre Ríos) el 22 de noviembre de 1873. Médico y filántropo, vecino prominente de San Francisco; dedicó su vida a aliviar el sufrimiento de los demás con inigualable altruismo. Llegó a San Francisco el 13 de diciembre de 1900 y desde el 28 de ese mes fue médico municipal. En 1901 debió hacer frente a una epidemia de peste bubónica. En 1910 impulsó la construcción del Hospital J. B. Iturraspe que se inauguró el 13 de febrero de 1916. Fue candidato a intendente municipal en 1925, perdiendo por sólo tres votos frente a Serafín Trigueros de Godoy. Falleció en San Francisco el 28 de noviembre de 1947, a los 74 años. El 23 de diciembre de 1950, se inauguró un monumento a su memoria.</p>

<h3>Cartier, Raimundo</h3>
<p>Ingeniero civil francés, nació en Burdeos en 1850 y fue presidente de la primera Comisión de Fomento de San Francisco el 1 de septiembre de 1893. Fue además miembro del Concejo Deliberante e intendente interino. Su contacto con San Francisco y su posterior radicación en este medio, se produjo al hacerse cargo de la dirección del trazado de la nueva línea de la Compañía Francesa de Ferrocarriles San Francisco – Villa María. Aquí se casó en segundas nupcias con Jacinta Mariana Curtino, hija de una familia fundadora. Fue el encargado de proyectar el trazado de las anchas calles del ejido urbano de San Francisco. Al fundarse la Colonia Prosperidad en 1891, Cartier era su propietario. Falleció en París en el año 1922.</p>

<h3>Casalis, José, Bartolomé, Jorge y Domingo</h3>
<p>Integraron el primer grupo familiar que se radicó en las tierras que hoy ocupa la ciudad de San Francisco, con anterioridad a la inauguración de la estación ferroviaria en 1888. Oriundos de Carmagnola, Torino, Italia, eran hijos de Antonio Casalis y Magdalena Tuninetti. Fueron pioneros calificados en la formación y colonización de San Francisco. El 1 de marzo de 1886 los Casalis tomaron posesión de su tierra. En 1887, José B. Iturraspe anuló una parte de la venta realizada a favor de los Casalis para posibilitar el paso del ferrocarril por lo que éstos decidieron iniciar un juicio por daños y perjuicios. El pleito que alcanzó resonancia nunca superada en estos lares se inició en 1890 y finalizó en 1915, cuando Carlos Iturraspe, hijo del fundador y a la sazón jefe político departamental, se avino a acatar el fallo de la justicia a favor de los hermanos Casalis. José Casalis falleció el 16 de abril de 1920; Bartolomé el 21 de julio de 1921; Domingo el 9 de agosto de 1921 y Jorge el 28 de agosto de 1921.</p>

<h3>Cornaglia, Juan Ricardo</h3>
<p>Nació en San Francisco en 1919. Político, empresario y poeta. Fue intendente municipal desde el 12 de diciembre de 1983 hasta el 12 de diciembre de 1987. Desarrolló desde joven una entusiasta labor vecinalista, impulsando y defendiendo iniciativas de bien común. Fue presidente del Centro Vecinal Barrio Iturraspe. Fue un poeta sensible y fecundo que alcanzó distinciones en concursos literarios. En 1986 fue premiado por la letra de la “Canción del Centenario” con la música de Adrián Verra. Una de sus primeras medidas como intendente fue crear la Secretaría de Salud Pública y Acción Social. Puso en marcha la planificación del Eje del Centenario, destinado a urbanizar los terrenos del ex ferrocarril y amplió la iluminación por vías blancas. Creó e inauguró el Camiri para la atención de niños con problemas de aprendizaje. Apoyó y promovió la actividad cultural. Le tocó organizar los actos del Centenario de San Francisco en 1986. Falleció en San Francisco el 24 de octubre de 1997 a los 78 años.</p>

<h3>Cullen de Iturraspe, Dominga</h3>
<p>Dama perteneciente a una de las familias más tradicionales y aristocráticas de Santa Fe del siglo XIX. Su abuelo, Domingo Cullen, fue aliado de Estanislao López y a la muerte de éste lo sucedió como gobernador. Su tío, José María Cullen, también ocupó la gobernación de Santa Fe en 1855 y su padre Patricio Cullen, fue gobernador desde 1862 a 1865. Se casó en dos oportunidades. Su primer esposo Emilio Cabal, murió en París el 4 de abril de 1886. Cuatro años después, el 4 de agosto de 1890, contrajo enlace con su primero hermano José Bernardo Iturraspe. No tuvo descendencia con ninguno de sus dos esposos. Trabajó fuerte para conseguir para San Francisco su Hospital, que lleva el nombre de su esposo y avanzar en la obra de la iglesia parroquial. Falleció en los primeros días de septiembre de 1921.</p>

<h3>Damar, Elisa</h3>
<p>Artista plástica de extensa y calificada trayectoria en San Francisco y distintos puntos del país. Nació en El Trébol, provincia de Santa Fe, el 28 de septiembre de 1906. Su verdadero apellido era Damiano. Fue esposa de Miguel Pablo Borgarello, su maestro y compañero de toda la vida. Durante largos años compartió con él la conducción de la Academia Municipal de Bellas Artes de San Francisco. Falleció en Córdoba el 22 de enero de 1989. Sus restos descansan en el cementerio de El Trébol.</p>

<h3>Dosanto, Raúl José</h3>
<p>Fue el segundo jefe del cuerpo activo de bomberos voluntarios entre el 1 de diciembre de 1982 y el 31 de diciembre de 1986; atleta distinguido a nivel continental. Nació el 28 de agosto de 1926. Ingresó en Bomberos el 10 de noviembre de 1950, cuando Juan María Baggio Ferrazzi era su jefe y permaneció en la institución durante 35 años. Fue un atleta relevante y campeón sudamericano en 1957 en la disciplina del decatlón. Tenía un claro y hondo sentido de la amistad que cultivaba con generosa simpatía y natural predisposición. Murió en San Francisco el 25 de enero de 1997, a los 70 años.</p>

<h3>Feraudo, Evelina Margarita</h3>
<p>Legisladora provincial de Córdoba, ex concejal, ex ministra de Educación de la Provincia 2001-2002. Docente primaria y secundaria, nació en Luxardo, Córdoba, el 12 de junio de 1930. Militante justicialista desde 1947, fue concejal de San Francisco desde 1993. Luego sucesivamente fue senadora provincial, ministra de Educación y legisladora en el período 2003 a 2011. Fue nominada cinco veces a mujer del año en San Francisco. Presidió en la Legislatura la Comisión de Educación y Cultura, Ciencia y Tecnología e Informática. Promovió las leyes de creación de las Escuelas Hospitalarias y del Consejo Provincial de la Mujer. Se desempeña en comisiones de la Región Centro (Córdoba, Santa Fe y Entre Ríos). Es titular de la ONG Atrapasueños e integra el consejo de Asociación Conciencia.</p>

<h3>Ferrero, César Augusto</h3>
<p>Ex intendente municipal de San Francisco. Nació en Colonia Luis A. Sauze el 3 de agosto de 1893. Asumió la intendencia el 1º de mayo de 1928 por la coalición Plus Valía. La obra de gobierno de Ferrero fue progresista, no obstante el corto tiempo de su gestión. Se realizó la apertura del Bv. 25 de Mayo, bregó por las comunicaciones telefónicas, organizó la pasteurización de leche, reorganizó la Asistencia Pública y la Banda Municipal de Música. Se hicieron gestiones para obtener agua corriente y cloacas a la vez que se replanteó el proyecto de adoquinado urbano. Finalizó su gestión como consecuencia del golpe de Estado del 6 de septiembre de 1930. En la faz empresarial fue precursor en la fundación de La Ganadera de San Francisco y se desempeñó como presidente del Centro Comercial, Industrial y de la Propiedad. También fue socio del Aero Club y del Rotary Club San Francisco. Falleció el 15 de abril de 1968, a los 72 años de edad.</p>

<h3>Finazzi, Pietro</h3>
<p>Empresario metalúrgico, cofundador de la fábrica de tornos Bofelli y Finazzi S.R.L., marca local que alcanzó gran prestigio en todo el país. Oriundo de Calcina, provincia de Bérgamo, Italia, se casó en 1921 con Tribbia Caterina, quien falleció en 1924, dejándole dos hijas: Lorenzina y María Clara. Llegó a la Argentina el 27 de mayo de 1927 y en 1931 se trasladó a la ciudad de Rafaela (Santa Fe), donde trabajó como encargado de una herrería. Allí se encontró con su coterráneo Emilio Bofelli, y juntos se trasladaron a San Francisco. En esta ciudad, Finazzi comenzó a trabajar en la firma Miretti y Cia. S.A. En forma paralela abrió un taller en calle Paraguay, siempre en sociedad con Bofelli, donde comenzaron a desarrollar el proyecto para la fabricación de un torno, cuya primera unidad lograron vender en 1942 a una firma de Buenos Aires. Poco después, ya bajo la denominación de Bofelli y Finazzi S.R.L., la fábrica se trasladó al inmueble de calle Mendoza 146. Con el correr de los años la empresa alcanzó gran importancia dentro de la estructura industrial de nuestra ciudad. Finazzi fue también cofundador de la firma Godeco S.A., productora de máquinas de coser y de Safco, una fábrica de relojes que funcionó en San Francisco durante varios años. Pietro Finazzi falleció en esta ciudad el 13 de junio de 1969 a los 70 años de edad. Sus restos fueron inhumados en el panteón familiar en el cementerio local.</p>

<h3>Gilli, Carlos</h3>
<p>Inmigrante piamontés. Creador de una de las familias pioneras del desarrollo inicial de San Francisco. Llegó al país en la mitad del siglo XIX como integrante de la corriente inmigratoria que tuvo en Esperanza (Santa Fe) su centro de acción más dinámico y representativo de la época. Alrededor de 1903, encontrándose en pleno apogeo la colonización de tierras cordobesas, Gilli compró importantes lotes en la parte aledaña al sur de San Francisco. Dos de sus hijos, Juan y Lorenzo, llegaron desde Pilar para hacerse cargo de esos campos y darles un destino comercial. Ellos dieron nombradía a la familia Gilli en esta región y proyectaron el apellido en emprendimientos comerciales en los que fueron auténticos pioneros, tal el caso de los remates ferias y la conformación de loteos urbanos. Carlos Gilli falleció en Pilar (Santa Fe) el 25 de enero de 1924 a los 75 años.</p>

<h3>Goirán, Alfredo</h3>
<p>Músico sanfrancisqueño. Los inicios de su aprendizaje se remontan a la época de la Academia Municipal de Música y se perfeccionó en Villa María y con destacados profesionales. Durante su juventud formó parte de diversos conjuntos de música popular como intérprete de clarinete y saxo. Integró un conjunto de animación musical de películas mudas. Integrante de la Banda Municipal de Música, desde 1953 ejerció la dirección del organismo. A su maestría y perseverancia le debe San Francisco la formación de gran cantidad de músicos que harían escuela en la ciudad y su zona de influencia. Falleció en San Francisco el 17 de marzo de 1983.</p>

<h3>Gontero, José Antonio</h3>
<p>Mecánico industrial. Nació en Carignano, Torino (Italia) el 19 de mayo de 1881 y llegó a la Argentina en 1891. En San Francisco trabajó en la fundición Schneider, ubicada en 9 de Julio y Mendoza. En 1912 comenzó a trabajar en forma independiente con un taller de tornería en Libertad y Liniers provisto con un torno a pedal que luego modernizó colocándole un motor de explosión. Fue sin dudas un pionero de la actividad metal mecánica y protagonista importante junto al grupo primigenio de industriales locales. Dedicado de lleno al trabajo y a la formación de sus hijos, encontró solaz en su afición al deporte motor y a la caza, actividades de las que fue entusiasta cultor. Falleció el 17 de mayo de 1947.</p>

<h3>González, Abel</h3>
<p>Empresario industrial, deportista, desarrolló una intensa y reconocida actividad en el ámbito de San Francisco. Nació en Las Varillas (Córdoba), el 14 de julio de 1920, y desde niño fue muy colaborador de su padre en tareas hortícolas y venta de sus productos. Ya adolescente instaló un taller de bicicletas en el que trabajó hasta los 20 años y posteriormente se trasladó a la ciudad de Córdoba para trabajar en la Fábrica Militar de Aviones. Con sus ahorros compró su primer torno. Casado con María Angélica Curutchet, tuvo 3 hijos. En 1948, tras su fugaz paso como socio con sus hermanos en un negocio de joyería, se volcó decididamente a la actividad tallerista. Su vocación por el trabajo y el espíritu tesonero le permitieron consolidar su posición económica y siempre mantuvo una visión progresista en lo referente al funcionamiento de su taller. Fue también un gran protagonista del deporte motor de los años cincuenta. Las carreras de Ford T acaparaban en aquellos tiempos la atención y el entusiasmo de los sanfrancisqueños y fueron muchos los triunfos que conquistó en esforzadas e inolvidables carreras, lo que lo hizo popular y muy querido por el público. Falleció el 26 de abril de 1997.</p>

<h3>Iturraspe, José Bernardo</h3>
<p>Nació el 30 de julio de 1847 en Santa Fe. Colonizador, político, empresario, gobernador de la provincia de Santa Fe. Fue fundador de San Francisco y de numerosos pueblos y colonias en las provincias de Santa Fe y Córdoba. El 9 de septiembre de 1886 presenta para su aprobación los planos de las colonias San Francisco, Freyre e Iturraspe. Fue gobernador de Santa Fe del 18 de febrero de 1898 al 18 de febrero de 1902. Falleció en Buenos Aires el 25 de abril de 1906 a los 58 años. Sus restos, que en 1910 fueron enterrados en la iglesia parroquial, fueron retirados de allí al demolerse el templo. Desde 1968 descansan al pie del monumento que honra su memoria en la plaza Vélez Sarsfield.</p>

<h3>Lamberghini, Antonio</h3>
<p>Abogado y empresario de San Francisco. Fue intendente municipal en tres oportunidades: en 1955, entre 1966 y 1970, y finalmente entre 1981 y 1983. Creó la Dirección Municipal de Cultura e impulsó la creación de diversos elencos artísticos como el Coro Polifónico y el Coro de Niños. Gestionó y logró la instalación del Conservatorio Provincial de Música Arturo Verutti y participó activamente en los trámites relacionados con la creación y funcionamiento de la Universidad Tecnológica Nacional. Obtuvo la creación e instalación de la escuela Provincial de Bellas Artes Raúl G. Villafañe. Fue presidente del Banco de Córdoba. Su nombre se impuso a la biblioteca de la Facultad San Francisco de la Universidad Tecnológica Nacional. Falleció en Buenos Aires el 18 de octubre de 1992.</p>

<h3>Magistrello, Carlos Juan</h3>
<p>Primer arquitecto nativo de San Francisco. Nació el 27 de febrero de 1928. En 1955 se recibió de arquitecto y comenzó a ejercer en su ciudad natal. Fue impulsor de la idea de concreción del Centro Cívico de San Francisco, realizado a partir de 1960 en la gestión del intendente Guillermo José Peretti. Diseñó uno de los primeros edificios construidos en ese predio: el correspondiente a la Compañía de Seguros El Norte. Es un apasionado por la cultura y, como integrante de la Asociación Amigos del Arte en las décadas de los 60 y 70, promovió actos culturales musicales y de cinematografía. Fue concejal de San Francisco de enero a diciembre de 1999 por el partido local Presencia Vecinal.</p>

<h3>Magnano, Bartolo</h3>
<p>Empresario de San Francisco de larga y fecunda actuación en el medio. Nació en Josefina (Santa Fe) el 6 de mayo de 1905. Desde muy joven desarrolló una intensa y notoria actividad fabril y comercial y fue impulsor de numerosos emprendimientos en esas áreas. En 1932 fundó la fábrica de sillas y en 1938 Metalúrgica Magnano, productora de cosechadoras. Fue titular también del Hotel Americano. Le cupo el mérito de ser el primer sanfrancisqueño que obtuvo el brevet de piloto en 1939. Casado con María Botta, fue padre de tres hijos. Falleció el 22 de mayo de 1983 a los 78 años de edad.</p>

<h3>Mallat, Gustavo</h3>
<p>Vecinalista de larga y fecunda trayectoria. Nació en Montevideo (Uruguay) en 1874. Hijo de padres franceses: Augusto Mallat y Francisca Fayon. En 1907 se casó con Emma Altamira, con quien fue padre de cuatro hijos. En 1922 se radicó en San Francisco, donde se desempeñó como mecánico dental. Pero su pasión fue el vecinalismo y durante muchos años se desempeñó en el Centro Vecinal barrio Iturraspe y en la Federación de Centros Vecinales. Fue corresponsal del diario La Prensa de Buenos Aires y hablaba con fluidez francés y piamontés. Falleció en San Francisco el 29 de abril de 1961. El 9 de septiembre de ese año, se impuso su nombre a una calle del barrio Iturraspe.</p>

<h3>Martínez, Joaquín Gregorio</h3>
<p>Abogado, doctor en leyes, docente, periodista, escritor e historiador de San Francisco, de extensa y meritoria actuación en cada una de esas actividades. Nació en San Francisco el 24 de diciembre de 1897. Se recibió de abogado en la Universidad Nacional de Córdoba en 1924. Casado con Elilia Paolasso, fue padre de cinco hijos. Fue uno de los impulsores y creadores del Colegio Nacional San Martín en 1930, al que prestó por años sus desinteresados servicios como docente y rector. Fue director del diario La Voz de San Justo. Escribió textos sobre historia local. Fue un fecundo y laureado escritor y ensayista. Sin embargo, es innegable que su figura pública giró en torno de su vocación primigenia: el derecho. A lo largo de su dilatada carrera como profesional del derecho, fue el mentor de muchas iniciativas y emprendimientos dentro del acontecer institucional de San Francisco. Falleció el 23 de agosto de 1985, a los 87 años de edad.</p>

<h3>Miretti, Luis Esteban</h3>
<p>Industrial, hombre de empresa, pionero de la industria mecánica. Fundador de Miretti y Cía. SA dedicada a la fabricación de maquinaria agrícola. Nació en Rosario el 18 de febrero de 1888. Llegó a San Francisco siendo niño e instaló en 1915, un modesto taller en Salta y Pellegrini. Ya en 1921 la pequeña empresa creció y se trasladó a su ubicación de Mendoza y Salta. Unió a su condición de industrial voluntarioso y emprendedor, su faceta de inventor original e inteligente y utilizó sus conocimientos técnicos en el desarrollo de importantes proyectos mecánicos en función de la explotación agraria. Tuvo una fundición y produjo además, máquinas para extracción de aceite y en 1944 un equipo para la producción mecanizada de ladrillos. En 1928 ocupó una banca en el Concejo Deliberante. Impulsó la fábrica de sillas Magnazo y desarrolló en las afueras de la ciudad dos granjas así como la instalación de una usina eléctrica. Falleció en Córdoba, el 30 de agosto de 1954 a los 66 años. Una plazoleta y una calle de San Francisco llevan su nombre.</p>

<h3>Marcilla, María Luisa</h3>
<p>Religiosa de la orden de la Inmaculada Concepción. Natural de Navarra (España), donde nació en 1922, fue durante 25 años servidora en el Hogar de Ancianos Enrique J. Carrá, los 15 últimos en carácter de directora. Más allá de los logros materiales, que fueron muchos e importantes, Madre María Luisa fue como una luz que iluminó y fortaleció el ánimo de los ancianos allí internados. Trabajó con voluntad de hierro, fe y mucha alegría. El aula magna del hospital J. B. Iturraspe y una calle en barrio La Milka, llevan su nombre. Falleció a los 68 años el 15 de abril de 1990, mientras participaba animadamente de la celebración de la Pascua con los ancianos.</p>

<h3>Nicolini, Marco Bautista</h3>
<p>Empresario de la industria del mármol. Nació en Rafaela el 9 de agosto de 1920; al año siguiente sus padres se radicaron en San Francisco. Casado con Nélida Esther Blasi, tuvo cuatro hijos. Nicolini puso de manifiesto su especial afición por los deportes: en 1938, junto a otros amigos, representó a nuestra ciudad en un torneo de box realizado en la ciudad de Córdoba; también fue un entusiasta cultor del motociclismo. En 1939, hizo el curso de piloto civil y en ese carácter ingresó en el servicio militar obligatorio. En 1946 regresó a San Francisco e instaló su marmolería. En el campo empresarial fue integrante también de la firma Inco. Nicolini fue un hombre hondamente preocupado por el desenvolvimiento institucional de nuestra ciudad. Fue miembro activo de diversos clubes y entidades: Club El Ceibo, Aero Club San Francisco, Centro Comercial, Cooperadora de la escuela J. B. Iturraspe (durante su presidencia se construyó el nuevo edificio), Cooperadora policial, Sport Automóvil Club, San Francisco Auto Club, Cicles Moto Club, Parque Industrial, Amigos del Arte, etc. De algunas de ellas fue socio fundador. Además, fue miembro activo de la Cámara del Mármol de las provincias de Córdoba y Santa Fe. Más allá de su reconocida condición de empresario, es probable que haya sido la aviación la actividad que con mayor nitidez marcó su existencia. Durante muchos años militó en la Unión Cívica Radical y se desempeñó como concejal de la municipal local en dos períodos: desde 1973 hasta 1976 (intendencia de Mariano J. Planells) y de 1983 a 1987, durante el gobierno de Juan Ricardo Cornaglia. Falleció en San Francisco, el 21 de octubre de 1989.</p>

<h3>Peretti, Guillermo José</h3>
<p>Dirigente político y hombre de empresa; fue intendente municipal de San Francisco durante tres períodos de gobierno. Nació en Plaza Luxardo (Córdoba), el 19 de junio de 1913. Se radicó en San Francisco a los 10 años. Fue presidente de la Liga Regional de Fútbol en el período 1969-73; cofundador de la Asociación de Bochas y de la Federación de Ajedrez. Ocupó la presidencia en la biblioteca de la Asociación El Ceibo y del Club Unión Social e integró cooperadoras escolares. Fue dirigente gremial municipal, concejal e intendente. Encaró obras muy importantes para el desarrollo de la ciudad, entre ellas el planeamiento y construcción del Centro Cívico. También se le debe la pavimentación de la calle hasta el cementerio y la construcción de su capilla; la plaza General Savio; la compra de la colonia de vacaciones de Unquillo; la pavimentación de 445 cuadras urbanas, etc. Falleció el 14 de junio de 1996.</p>

<h3>Puzzi, Santiago</h3>
<p>Industrial, pionero en la fabricación de maquinaria agrícola. Oriundo de María Juana (Santa Fe). En 1925 fabricó la primera máquina cortitrilla de arrastre. Luego se radicó en San Francisco e instaló su planta fabril en el barrio que hoy lleva su nombre, en la vecina ciudad de Frontera y dio comienzo a la producción de cosechadoras. En las instalaciones de su fábrica funcionó la primera estación meteorológica de la región. Fue socio fundador del Aero Club San Francisco. Era un hombre lleno de inquietudes, sumamente práctico y a su impulso y preocupación nacieron y se afianzaron importantes emprendimientos de bien común. Un barrio de Frontera lleva su nombre y también una calle en el Parque Industrial. Falleció el 2 de junio de 1967 a los 72 años de edad.</p>

<h3>Quaglia, Alfredo</h3>
<p>Profesor y vicedirector de la Escuela Normal Nicolás Avellaneda, cofundador del Colegio Nacional San Martín, del que también fue secretario. Oriundo de Colonia Cello, donde nació en 1898, estudió magisterio en la Escuela Normal de San Francisco, donde egresó en su cuarta promoción. En Córdoba recibió el título de profesor en matemática. Fue presidente del Centro Cultural y Biblioteca Popular; en 1928 ocupó una banca en el Concejo Deliberante. Casado con Adela Tranquili, fue padre de dos hijos. Falleció el 5 de junio de 1963, a los 65 años de edad.</p>

<h3>Sileoni, Fernando</h3>
<p>Concejal de la Unión Cívica Radical Intransigente (UCRI) en dos períodos desde el 1 de abril de 1958 al 10 de junio de 1960, como integrante del bloque mayoritario, durante la primera intendencia de Guillermo J. Peretti y desde el 1 de agosto de 1963 al 27 de junio de 1966, como miembro de la minoría, en la gestión del intendente Aldo Ferrero. Nacido en Italia en la ciudad de Gagliole, en la provincia de Macerata, el 25 de julio de 1906, a los tres años llegó a la Argentina junto a sus padres y su hermana menor. Casado con Emilia Mangeaud, fue padre de cuatro hijos. Nacionalizado argentino desde muy joven, puso de manifiesto su gran amor por este país, donde se crió. Su sincera convicción religiosa se puso de manifiesto en todos los actos de su vida. Profesó la fe cristiano-evangelista y en ese ámbito fue miembro de la primera Iglesia Evangélica Bautista de San Francisco. Falleció en esta ciudad el 23 de febrero de 1975.</p>

<h3>Suárez, Hilario Ramón</h3>
<p>Nació el 3 de noviembre de 1942 en San Francisco y es considerado uno de los referentes del boxeo local durante la década de los 50’s y 60’s, recordado por su temible pegada y el protagonista del combate que tuvo lugar en esta ciudad el 16 de agosto de 1968, nada menos que ante Nicolino Locche, el recordado púgil mendocino campeón mundial de la categoría welter junior. Precisamente Suárez, apodado “La Mona”, escribió una de las páginas tal vez más recordadas del pugilismo local al momento en que enfrentó al discípulo del legendario Francisco Paco Bermúdez en el mismo año que llega al auge de su carrera deportiva, cuando vence en Tokio (Japón) a Paul Fuji, coronándose campeón mundial. Boxeó en distintos escenarios del país y, de retorno a San Francisco, se desempeñó en gimnasios promoviendo la actividad pugilística.</p>

<h3>Tampieri, Ricardo</h3>
<p>Industrial, empresario, arquetipo del inmigrante creador. Impulsor del establecimiento fideero que, por décadas, se exhibió como el primero y más importante de América. Nació en Génova (Italia). Llegó a la Argentina a los 11 años de edad y se desempeñó en diversos oficios hasta alcanzar el cargo de oficial en una importante fábrica de pastas. Casado con Rosa Biava, tuvo cuatro hijos. En principio estuvo asociado con su suegro en la firma Tampieri, Biava & Cía, establecida en un modesto inmueble de la esquina de Salta y Sarmiento. En 1921, debido a la evolución de la empresa, se trasladó al monumental edificio de 9 de Julio e Hipólito Yrigoyen (antes Garibaldi sur). Ese mismo año, Tampieri quedó como único propietario de la fábrica, con un plantel de 150 operarios y una producción diaria de 25 mil kilos de pasta, parte de la cual era exportada a Bolivia, Paraguay, España e Italia. Al lado de la planta industrial hizo construir un palacio para vivienda familiar, reflejo fiel de su poderío económico (en 1966 el inmueble fue adquirido por la municipalidad para sede de su gobierno). Paralelamente a la atención de su empresa, en 1927, Tampieri creó y desarrolló una de las mayores granjas del país de esos tiempos, denominada La Milka, en homenaje a una de sus hijas. Este lugar, ubicado en el sector sureste de la ciudad (hoy barrio La Milka), fue centro de fomento y divulgación de la actividad frutihortícola, como así también de mejoramiento de cultivos, crianza de aves y conejos y de producción láctea. El invernadero La Milka era proveedor de plantas decorativas y se constituyó en la primera florería de la ciudad. El predio, hermosamente arbolado, era el lugar ideal para las reuniones sociales que organizaban las damas de beneficencia y otras instituciones similares. La figura de don Ricardo Tampieri alcanzó relieve internacional y fue en su tiempo, la más representativa en el país dentro de su actividad. Su fábrica, que en la década de los años setenta cesó en su funcionamiento y fue vendida, constituyó el pilar más importante del crecimiento inicial de nuestra economía. Centenares de familias sanfrancisqueñas cimentaron su futuro en ella y no fueron pocos los industriales que iniciaron su camino de la mano de don Ricardo Tampieri. En 1953 emprendió un viaje a Europa en compañía de su esposa, a fin de reparar su salud quebrantada por la diabetes. Allí murió, en la ciudad de Génova, su tierra natal, el 7 de junio de ese año. Sus restos arribaron a Buenos Aires el 10 de agosto a bordo del vapor Conte Grande, y fueron sepultados en el cementerio local, previa misa en la iglesia San Francisco de Asís. El velatorio de sus restos se realizó en su residencia (hoy Palacio Municipal), y se constituyó -al igual que el sepelio- en una impresionante manifestación de duelo colectivo. La conmoción que la muerte de don Ricardo Tampieri produjo en el ámbito de la ciudad repercutió también en todos los círculos sociales y económicos del país, e incluso del extranjero. Entre las ofrendas florales recibidas en la oportunidad, figuró la enviada por el entonces presidente de la Nación, general Juan Domingo Perón.</p>

<h3>Teobaldo, José</h3>
<p>Docente y profesional de destacada trayectoria en diversos ámbitos de la ciudad, especialmente en el cultural. Alternó sus cátedras de historia en la Escuela Normal y el Colegio Nacional San Martín, con las actividades propias de procurador nacional. Fue un pedagogo brillante. De origen modesto fue un conspicuo y entusiasta dirigente de las instituciones más representativas del medio, sociales y culturales. En su casa se fundó el Centro Cultural y Biblioteca Popular. Fue secretario del municipio entre 1928 y 1930 y del Club Sportivo Belgrano. Se lo recuerda por su honda formación intelectual, su afabilidad y su descollante oratoria. Falleció en San Francisco el 16 de enero de 1958.</p>

<h3>Torres, Juan José</h3>
<p>Industrial, especialista en tratamientos térmicos de materiales. Nació el 8 de febrero de 1932. Se inició laboralmente en la Fábrica Militar de Cartuchos "San Francisco", donde prestó servicios durante muchos años. Al renunciar como empleado de dicho establecimiento, se instaló por cuenta propia en un pequeño taller ubicado en calle Mendoza, al que anexó la comercialización de metales, especialmente de hierros y aceros. Su contracción al trabajo, sus profundos conocimientos técnicos y su reconocida responsabilidad, le permitieron en corto tiempo colocar a su empresa a la vanguardia de la actividad en San Francisco y su zona de influencia. Casado con Hebe Dolly Casas, una hija. La evolución de su empresa y su visión de futuro lo llevaron a trasladarse al sector del Parque Industrial, en cuya asociación civil participó de manera activa e integró su consejo directivo desde los primeros años de su constitución. Al margen de su actividad empresaria, Torres fue un entusiasta cultor del juego ciencia, a cuyo círculo perteneció de manera permanente. Falleció en esta ciudad el 1 de octubre de 1992 a la edad de 60 años. La Asociación Civil Parque Industrial, al producirse su fallecimiento publicó una nota en la que dijo sobre Torres: "Humilde y parco en actitudes, mesurado en las palabras, pasando tal vez desapercibido por propia voluntad, fue notable en su capacidad de reflexión, rápido en acertar en el concepto, brillante en producir la decisión e implacable y tenaz en lograr las metas".</p>

<h3>Trigueros de Godoy, Serafín</h3>
<p>Nació en Extremadura, España. Fue concejal e intendente municipal de San Francisco en cinco oportunidades. La primera vez fue desde el 6 de julio de 1921 al 1 de mayo de 1922. Luego fue elegido en 1922, en 1925, en 1932 y después como interventor entre octubre de 1948 y febrero de 1949. Creó la Oficina Municipal de Empleo, la Biblioteca Municipal, la Academia Municipal de Música. Impulsó el primer Mercado Municipal, realizó remodelaciones en la plaza General Paz, reconstruyó el corralón municipal y adquirió el edificio del Teatro Verdi y Cine Gloria y Avenida, amplió la forestación urbana y remodeló el matadero municipal. Fue impulsor de la obra de adoquinado en la ciudad. Falleció el 23 de junio de 1958 a los 69 años de edad.</p>

<h3>Venier, Juan</h3>
<p>Maestro de vasta y meritoria labor dentro de la educación técnica en nuestra ciudad; su trayectoria en este campo se extendió por espacio de 25 años. Fue jefe de un hogar en cuyo seno se formaron quienes, con el correr de los años, se constituirían en creadores de prestigio dentro de la producción de máquinas herramientas como titulares de la firma Venier Hnos. Venier nació en Colonia Caroya el 9 de noviembre de 1893. Fueron sus padres: Juan Baustista Venier y Magdalena Lauret. Durante siete años vivió en la ciudad de Córdoba, donde aprendió de su tío Luis, hermano del padre, el oficio de modelista. Contrajo matrimonio con Emilia Fabi, con quien tuvo cinco hijos. Paralelamente a su trabajo de modelista, integró una agencia de publicidad que giraba bajo el nombre de "De Rosa y Venier", y de la cual se desvinculó al aceptar un ofrecimiento de don Oreste Lanfranchi para trabajar en la planta elaboradora de agua mineral Saldán. Allí fue encargado de personal y hombre de confianza de la empresa. En 1920 fue trasladado a San Francisco para cumplir idénticas funciones en la curtiembre local, cuya gerencia ejercía don César Ferrero. En 1928 se retiró de dicha firma y asumió como Juez de Paz Lego de la sección Sur, cargo que desempeñó durante dos años, cuando renunció para hacerse cargo de la oficina de personal en la municipalidad local, que conducía don Serafín Trigueros de Godoy. Fundada la Escuela del Trabajo "Emilio F. Olmos", se incorporó a sus cuadros docentes como encargado del taller de modelaje; regresó así al oficio que había aprendido en su niñez. Durante un cuarto de siglo, el maestro Venier impartió clases de la especialidad, poniendo de relieve en ese cometido singulares condiciones docentes y técnicas, unánimemente reconocidas por profesores, alumnos y empresarios. Se jubiló en 1957. Su personalidad abierta y espíritu solidario lo llevaron a formar parte de la dirigencia de prestigiosas instituciones del medio, como Sportivo Belgrano, Sport Automóvil Club y Asociación Cooperadora de la Escuela Normal, donde se educaron todos sus hijos. Falleció en San Francisco el 27 de junio de 1979, a los 85 años de edad.</p>


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