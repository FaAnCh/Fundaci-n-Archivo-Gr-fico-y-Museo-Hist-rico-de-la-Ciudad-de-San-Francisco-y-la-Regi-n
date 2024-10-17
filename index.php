<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacto - Archivo Gráfico</title>
    <link rel="stylesheet" href="styles2.css" />
    <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Great+Vibes&display=swap"
      rel="stylesheet"
    />
    <meta name="description" content="Descubre la Fundación Archivo Gráfico y Museo Histórico de San Francisco y la Región. Conoce nuestras exposiciones, programa de visitas escolares y cómo ponerte en contacto con nosotros para más información.">
    <meta name="keywords" content="museo, Fundación Archivo Gráfico, San Francisco, exposiciones, visitas escolares, historia, cultura, arte, patrimonio, educación, contacto">
    <link rel="icon" type="image/png" href="assets/fundacionAGM.png">

  </head>
  <body>
  <?php
    include "nav.php";
  ?>

<section class="section">
  <div class="header">
    <div class="carousel-container">
      <div class="carousel-slide">
        <div class="carousel-item">
          <img src="assets/archivo grafico.png" alt="Imagen 1" />
          <h2>
            Fundación Archivo Gráfico y Museo Histórico de la ciudad de San
            Francisco y la Región
          </h2>
        </div>
        <div class="carousel-item">
          <img src="assets/archivo grafico.png" alt="Imagen 2" />
          <h2>Título 2</h2>
        </div>
        <div class="carousel-item">
          <img src="assets/archivo grafico.png" alt="Imagen 3" />
          <h2>Título 3</h2>
        </div>
      </div>
      <div class="carousel-nav">
        <button id="prev">⟨</button>
        <button id="next">⟩</button>
      </div>
    </div>
  </div>
</section>
<div class="card-container">
      <div class="card">
        <div class="image-container">
          <img src="assets/AGM.jpg" alt="Imagen 9" />
          <div class="card-overlay">
            <p>Texto que aparece al pasar el mouse</p>
          </div>
        </div>
        <h2>Título 1</h2>
      </div>
      <div class="card">
        <div class="image-container">
          <img src="assets/AGM.jpg" alt="Imagen 9" />
          <div class="card-overlay">
            <p>Texto que aparece al pasar el mouse</p>
          </div>
        </div>
        <h2>Título 2</h2>
      </div>
      <div class="card">
        <div class="image-container">
          <img src="assets/AGM.jpg" alt="Imagen 9" />
          <div class="card-overlay">
            <p>Texto que aparece al pasar el mouse</p>
          </div>
        </div>
        <h2>Título 3</h2>
      </div>
      <div class="card">
        <div class="image-container">
          <img src="assets/AGM.jpg" alt="Imagen 9" />
          <div class="card-overlay">
            <p>Texto que aparece al pasar el mouse</p>
          </div>
        </div>
        <h2>Título 4</h2>
      </div>
      <div class="card">
        <div class="image-container">
          <img src="assets/AGM.jpg" alt="Imagen 9" />
          <div class="card-overlay">
            <p>Texto que aparece al pasar el mouse</p>
          </div>
        </div>
        <h2>Título 5</h2>
      </div>
      <div class="card">
        <div class="image-container">
          <img src="assets/AGM.jpg" alt="Imagen 9" />
          <div class="card-overlay">
            <p>Texto que aparece al pasar el mouse</p>
          </div>
        </div>
        <h2>Título 6</h2>
      </div>
      <div class="card">
        <div class="image-container">
          <img src="assets/AGM.jpg" alt="Imagen 9" />
          <div class="card-overlay">
            <p>Texto que aparece al pasar el mouse</p>
          </div>
        </div>
        <h2>Título 7</h2>
      </div>
      <div class="card">
        <div class="image-container">
          <img src="assets/AGM.jpg" alt="Imagen 9" />
          <div class="card-overlay">
            <p>Texto que aparece al pasar el mouse</p>
          </div>
        </div>
        <h2>Título 8</h2>
      </div>
    </div>

    <?php
      include "footer.php";
    ?>
    <script src="main.js"></script>
    <script src="burger.js"></script>
  </body>
</html>