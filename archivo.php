<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenidos</title>
    <meta name="description" content="Mantente al día con las últimas noticias y artículos de la Fundación Archivo Gráfico y Museo Histórico de San Francisco. Explora nuestro contenido sobre exposiciones, eventos, y temas culturales relevantes.">
    <meta name="keywords" content="noticias, artículos, Fundación Archivo Gráfico, San Francisco, exposiciones, eventos, cultura, historia, educación, patrimonio">

    <link rel="icon" type="image/png" href="imagenes/logoAGM.png">
    <link rel="stylesheet" href="estilos/archivo.css">
        <!-- Incluye Font Awesome para los iconos -->
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
    
    <div class="content">
        <!-- Carrusel de categorías -->
<div class="categories-carousel">
    <h2>Categorías</h2>
    <div class="carousel">
        <form action="archivo.php" method="GET" class="category-form">
            <select name="category_id" id="category-select">
                <option value="0" <?php echo (isset($_GET['category_id']) && $_GET['category_id'] == 0) ? 'selected' : ''; ?>>Todo</option> <!-- Opción Todo -->
                <?php
                include 'db.php'; // Conexión a la base de datos
                $categories = $conn->query("SELECT * FROM categories");
                while ($category = $categories->fetch_assoc()): ?>
                    <option value="<?php echo $category['id']; ?>" <?php echo (isset($_GET['category_id']) && $_GET['category_id'] == $category['id']) ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($category['name']); ?>
                    </option>
                <?php endwhile; ?>
            </select>
            <button type="submit">Filtrar</button>
        </form>
    </div>
</div>


        <!-- Sección de artículos -->
        <div class="articles-section">
            <h2>Artículos</h2>
            <div class="articles-grid">
                <?php
                // Obtener artículos filtrados por categoría si se proporciona
                $category_filter = isset($_GET['category_id']) ? intval($_GET['category_id']) : 0;
                $sql = "SELECT a.*, c.name AS category_name FROM articles a LEFT JOIN categories c ON a.category_id = c.id";
                if ($category_filter) {
                    $sql .= " WHERE a.category_id = $category_filter";
                }
                $sql .= " ORDER BY a.created_at DESC";
                
                $articles = $conn->query($sql);

                while ($article = $articles->fetch_assoc()): ?>
                    <article class="article-item">
                        <img src="<?php echo htmlspecialchars($article['image_url']); ?>" alt="Imagen del artículo" />
                        <h3>
                            <a href="articulo.php?id=<?php echo $article['id']; ?>">
                                <?php echo htmlspecialchars($article['title']); ?>
                            </a>
                        </h3>
                        <p>
                            <?php echo htmlspecialchars($article['content']); ?>
                            <a href="articulo.php?id=<?php echo $article['id']; ?>" class="read-more">Leer más...</a>
                        </p>
                        <p class="article-category">Categoría: <?php echo htmlspecialchars($article['category_name']); ?></p>
                    </article>
                <?php endwhile; ?>
            </div>
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
                <a href="https://www.facebook.com/proa" target="_blank"><i class="fab fa-facebook"></i> Facebook</a><br />
                <a href="https://www.twitter.com/proa" target="_blank"><i class="fab fa-twitter"></i> Twitter</a><br />
                <a href="https://www.instagram.com/proa" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
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
                    Micron Fresar S.A. Akron, Axion; Compañía de Seguros El Norte; Macoser S.A.; Sindicato de Empleados de Comercio de San Francisco; Gobierno de la Provincia de Córdoba; Gobierno Municipal de la Ciudad de San Francisco; Centro de Estudios e Investigaciones Históricas Parque España (Cehipe) Rosario (Santa Fe); Fundación Bunge y Born (Buenos Aires).
                </p>
            </div>
            <div class="footer-section">
                <h3>Medios de comunicación que nos respaldan:</h3>
                <p>
                    Diario La Voz de San Justo, AM 1050, RadioCanal, Canal 4 y FM Contacto; Radio Estación, El Periódico, El Tiempo, La Voz del Interior (Córdoba).
                </p>
            </div>
        </div>
        <p class="footer-copy">&copy; 2024 Proa Técnica. Todos los derechos reservados.</p>
    </footer>
    <script src="burguer.js"></script>
</body>
</html>
