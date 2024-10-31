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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<?php include "nav.php"; ?>
    
<div class="content">
    <!-- Carrusel de categorías -->
    <div class="categories-carousel">
        <h2>Categorías</h2>
        <div class="carousel">
            <form action="archivo.php" method="GET" class="category-form">
                <select name="category_id" id="category-select">
                    <option value="0" <?php echo (isset($_GET['category_id']) && $_GET['category_id'] == 0) ? 'selected' : ''; ?>>Todo</option>
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
            // Obtener artículos filtrados por categoría
            $category_filter = isset($_GET['category_id']) ? intval($_GET['category_id']) : 0;
            $sql = "SELECT a.*, c.name AS category_name FROM articles a LEFT JOIN categories c ON a.category_id = c.id";
            if ($category_filter) {
                $sql .= " WHERE a.category_id = $category_filter";
            }
            $sql .= " ORDER BY a.created_at DESC";
            
            $articles = $conn->query($sql);

            while ($article = $articles->fetch_assoc()): ?>
                <article class="article-item">
                    <img src="<?php echo htmlspecialchars($article['image_url'] ?? 'default.jpg'); ?>" alt="Imagen del artículo" />
                    <h3>
                        <a href="articulo.php?id=<?php echo $article['id']; ?>">
                            <?php echo htmlspecialchars($article['title'] ?? 'Título no disponible'); ?>
                        </a>
                    </h3>
                    <p>
                        <?php echo htmlspecialchars($article['content'] ?? 'Contenido no disponible.'); ?>
                        <a href="articulo.php?id=<?php echo $article['id']; ?>" class="read-more">Leer más...</a>
                    </p>
                    <p class="article-category">Categoría: <?php echo htmlspecialchars($article['category_name'] ?? 'Sin categoría'); ?></p>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<!-- Pie de página -->
<?php include "footer.php"; ?>
<script src="burguer.js"></script>
</body>
</html>
